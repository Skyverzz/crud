<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'tb_team';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nama',
        'posisi',
        'departemen',
        'email',
        'no_hp'
    ];
}
