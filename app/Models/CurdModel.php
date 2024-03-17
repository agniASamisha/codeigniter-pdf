<?php
namespace App\Models;

use CodeIgniter\Model;

class CurdModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['Name','Email','UserName','Phone','Password','image'];


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
}
