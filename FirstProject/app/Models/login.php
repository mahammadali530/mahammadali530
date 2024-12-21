<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class login extends Model
{
    protected $table='register';
    public $timestamps=false;
    use HasFactory;
}
