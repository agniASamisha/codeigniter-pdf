<?php

namespace App\Models;
use CodeIgniter\Model;
class ProductModel extends Model
{
    protected $table            = 'product';
    protected $primaryKey       = 'product_id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['admin_id','name','description','catogary_id','price', 'quantity','image','status','createdAt','modified_date'];

    public function insertRecord($data)
    {
        return $this->insert($data);
    }
    // Fetch all records
    public function getAllRecords()
    {
        return $this->findAll();
    }
    public function getProductById($id)
    {
        return $this->where('product_id', $id)->first();
    }

    public function getProductGallery($id)
    {
        //return $this->where('product_id', $id)->findAll();
        return $this->db->table('gallery')
            ->where('product_id', $id)
            ->get()
            ->getResultArray();
    }
   
}
?>