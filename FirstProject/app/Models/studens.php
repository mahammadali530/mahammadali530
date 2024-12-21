<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;

class studens extends Model
{
    protected $table='students';
    public $timestamps=false;
    use HasFactory;
}

