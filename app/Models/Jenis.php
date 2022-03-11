<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    protected $table = 'jenis';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = [
        'nama'
    ];
    
    public function brand()
    {
    	return $this->hasMany('App\Models\Brand','id');
    }

    public function stok()
    {
        return $this->hasOne('App\Models\Stok','id');
    }
}
