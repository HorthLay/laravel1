<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homemodel extends Model
{
    protected $table = "home";
    protected $primaryKey = "id";
    protected $fillable = ['title', 'body'];
}
