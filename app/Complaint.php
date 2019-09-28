<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{    
    protected $fillable = [
        'name', 'email', 'fakultas', 'file', 'masukan', 'tipe_masukan', 'created_at', 'update_at'
    ];
}
