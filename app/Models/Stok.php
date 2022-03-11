<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    protected $table = 'stoks';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = [
        'stock'
    ];

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    public function jenis()
    {
        return $this->belongsTo('App\Models\Jenis');
    }
}
