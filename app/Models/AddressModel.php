<?php

namespace App\Models;

use CodeIgniter\Model;

class AddressModel extends Model
{
    protected $table = 'address';
    protected $primaryKey = 'id';
    protected $allowedFields = ['u_id', 'phone', 'address', 'city', 'nationality', 'state', 'location', 'status'];
}
