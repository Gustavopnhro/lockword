<?php

namespace App\Models;

use CodeIgniter\Model;

class KeyModel extends Model
{
    protected $table = 'keys';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'login', 'password', 'user_id'];
}