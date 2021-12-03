<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commoners extends Model
{
    use HasFactory;
    protected $table = 'commoners';
    public $timestamps = false;
    protected $primaryKey = 'idCommoners';
}
