<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shop;
use App\User;
class Comment extends Model
{
    protected $fillable = ['text', 'user_id', 'shop_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    // public static function search($id)
    // {
    //     return Manager::where('user_id','LIKE', "%{$searchTerm}%")
    //                     ->with('manager')
    //                     ->orderBy('first_name')
    //                     ->get();
    // }
}
