<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['fname','lname','email'];
    use HasFactory;
}