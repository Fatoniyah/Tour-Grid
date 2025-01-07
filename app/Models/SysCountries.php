<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SysCountries extends Model
{
    use HasFactory;

    protected $table = 'sys_countries';
    protected $primaryKey = 'sys_countries_id';
    public $timestamps = false;
}
