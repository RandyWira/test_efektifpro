<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brand';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = [
        'nama'
    ];

    public function jenis()
    {
        return $this->belongsTo('App\Models\Jenis');
    }

    public function stok()
    {
        return $this->hasOne('App\Models\Stok', 'id');
    }
}
