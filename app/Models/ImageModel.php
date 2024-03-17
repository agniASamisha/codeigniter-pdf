<?php

namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['image'];
}
