<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'admin_login';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    //protected $returnType       = 'array';
    //protected $useSoftDeletes   = false;
    //protected $protectFields    = true;
    protected $allowedFields    = ['id','Name','Email','UserName','Phone','Password','image','CreatedAt','last_updated'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllRecords()
    {
        return $this->findAll();
    }

    public function updatePassword($id, $newPassword)
    {
        $data = [
            'Password' => $newPassword
        ];
        
        return $this->where('id', $id)->set($data)->update();
    }

    //pagination
    

//    // Fetch single record by ID
//     public function getRecordByID($id)
//     {
//         return $this->find($id);
//     }

//     // Update record
//     public function updateRecord($id, $data)
//     {
//         return $this->update($id, $data);
//     }

    
//     // Delete record
//     public function deleteRecord($id)
//     {
//         return $this->delete($id);
//     }
}