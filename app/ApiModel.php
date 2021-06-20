<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiModel extends Model
{
    protected $table = 'barang';

    protected $fillable = ['nama', 'jenis', 'harga', 'created_at', 'updated_at'];
}
