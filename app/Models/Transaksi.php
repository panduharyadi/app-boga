<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

// Relasi ke User
public function user()
{
  return $this->belongsTo(User::class);
}

// Relasi ke Menu
public function menu()
{
  return $this->belongsTo(Menu::class);
}

public function alamat()
{
  return $this->belongsTo(Alamat::class);
}

public function promo()
{
  return $this->belongsTo(Promo::class);
}
}
