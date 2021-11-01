<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blacklist extends Model
{

    protected $table = 'tbl_blacklist';
    protected $primaryKey = 'id';
    public $timestamps = true;

}
