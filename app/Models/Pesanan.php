<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $guarded = ['pesanan_id'];
    protected $primaryKey = 'pesanan_id';
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'user_id');
    }

    public function pesanan_detail()
    {
        return $this->hasMany('App\Models\PesananDetail', 'pesanan_id', 'pesanan_id');
    }
}
