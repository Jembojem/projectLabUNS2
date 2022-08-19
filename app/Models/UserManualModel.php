<?php

namespace App\Models;

use CodeIgniter\Model;

class UserManualModel extends Model
{
    protected $table            = 'users';
    protected $allowedFields    = ["name", 'telepon', 'avatar', 'username', 'email', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}
