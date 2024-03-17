<?php

namespace App\Models;
use CodeIgniter\Model;
class GalleryModel extends Model
{
    protected $table            = 'gallery';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['admin_id','product_id','image','createdAt'];

    public function insertRecord($data)
    {
        return $this->insert($data);
    }
    //read_gallery by admin_id
    public function getGalleryByAdminId($adminId)
    {
        return $this->where('admin_id', $adminId)->findAll();
    }
    //read_gallery with product id
    public function getGalleryByProductId($productId)
    {
        return $this->where('product_id', $productId)->findAll();
    }
    
    public function deleteRecord($id)
    {
        return $this->delete($id);
    }
}

?>