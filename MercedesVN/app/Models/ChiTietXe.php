<?php

namespace App\Models;

use App\Models\Xe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietXe extends Model
{
    protected $table = 'ChiTietXe';
    use HasFactory;
    // public function xe()
    // {
    //     return $this->hasMany(Xe::class, 'MaXe', 'MaXe');
    // }
}
