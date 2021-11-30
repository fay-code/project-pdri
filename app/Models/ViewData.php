<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewData extends Model
{
    use HasFactory;

    protected $guarded = ['viewdata_id'];
    // protected $with = ['user', 'category'];

    // public function scopeFilter($query, array $filters)
    // {
    //     // penggunaan operator ternary dan isset parameter
    //     // if (isset($filters['search']) ? $filters['search'] : false) {
    //     //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
    //     //                 ->orwhere('body', 'like', '%' . $filters['search'] . '%');
    //     // }

    //     // penggunaan operator null coalescing pada PHP 7 dan method when serta query scope pada laravel
    //     $query->when($filters['search'] ?? false, function($query, $search) {
    //         return $query->where('title', 'like', '%' . $search . '%')
    //                         ->orwhere('body', 'like', '%' . $search . '%');
    //     });

    //     $query->when($filters['category'] ?? false, function($query, $category) {
    //         return $query->whereHas('category', function($query) use ($category) {
    //             $query->where('slug', $category);
    //         });
    //     });

    //     $query->when($filters['user'] ?? false, fn($query, $user) =>
    //         $query->whereHas('user', fn($query) =>
    //             $query->where('username', $user)
    //         )
    //     );
    // }

    // relasi database dengan menghubungkan foreign key pada tabel dan relasinya
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
