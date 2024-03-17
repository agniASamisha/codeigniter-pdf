<?php
namespace App\Models;

use CodeIgniter\Model;

class WishlistModel extends Model
{
    protected $table            = 'wishlist';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['product_id','user_id', 'status'];

    // Fetch all records
    public function getAllRecords()
    {
        return $this->findAll();
    }

    // Insert new record
    public function insertRecord($data)
    {
        return $this->insert($data);
    }
    public function getProductId($id)
    {
        //return $this->where('product_id', $id)->findAll();
        return $this->db->table('product')
            ->where('product_id', $id)
            ->get()
            ->getResultArray();
    }

    public function getWishlistData($userId)
    {
        return $this->where('user_id', $userId)->join('product', 'wishlist.product_id = product.product_id')->findAll();
    }

    // Delete record
    public function deleteRecord($id)
    {
        return $this->delete($id);
    }
}
