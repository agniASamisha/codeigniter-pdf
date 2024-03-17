<?php

namespace App\Models;
use CodeIgniter\Model;
class AdminModel extends Model
{
    protected $table            = 'admin_login';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id','Name','Email','UserName','Phone','Password','image','varify_code','CreatedAt','last_updated'];
    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    //read data
    public function getAllRecords()
    {
        return $this->findAll();
    }
    // Insert new record
    public function insertRecord($data)
    {
        return $this->insert($data);
    }
    
    // Fetch single record by ID
    public function getRecordByID($id)
    {
        return $this->find($id);
    }

    // Update record
    public function updateRecord($id, $data)
    {
        return $this->update($id, $data);
    }

    
    // Delete record
    public function deleteRecord($id)
    {
        return $this->delete($id);
    }

    // //update password
    // public function updatePassword($id, $newPassword)
    // {
    //     $data = ['Password' => $newPassword ];
    //     return $this->where('id', $id)->set($data)->update();
    // }
}