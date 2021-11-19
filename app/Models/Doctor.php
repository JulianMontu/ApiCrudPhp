<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table="doctors";
    protected $filable=[
        'id',
        'names',
        'surnames',
        'years'
    ];
    protected $hidden=[
        'created_at',
        'updated_at'
    ];




}
