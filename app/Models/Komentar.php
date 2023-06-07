<?php

namespace App\Models;

use App\Models\User;
use App\Models\Berita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komentar extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function berita(){
        return $this->belongsTo(Berita::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
