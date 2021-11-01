<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Whitelist extends Model
{
    
    protected $table = 'tbl_whitelist';
    protected $primaryKey = 'id';
    public $timestamps = true;

}
