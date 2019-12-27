<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shop;

class Manager extends Model
{
    protected $guarded = ['id'];

    public function user() {
        return $this->hasOne(User::class);
    }

    public function shop() {
        return $this->hasOne(Shop::class);
    }

    public static function search($searchTerm)
    {
        return Manager::where('first_name','LIKE', "%{$searchTerm}%")
                        ->orderBy('first_name')
                        // ->paginate(5);
                        ->get();
    }
}
