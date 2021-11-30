<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['categories_id'];

    // relasi database dengan menghubungkan foreign key pada tabel dan relasinya
    public function detail() {
        return $this->hasMany(Viewdata::class);
    }
}
