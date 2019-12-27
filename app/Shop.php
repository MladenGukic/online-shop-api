<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Manager;
use App\Article;

class Shop extends Model
{
    protected $guarded = ['id'];

    public function manager() {
        return $this->belongsTo(Manager::class);
    }

    public function articles() {
        return $this->hasMany(Article::class);
    }

    public static function search($searchTerm)
    {
        return Shop::where('name','LIKE', "%{$searchTerm}%")
                        ->with('manager')
                        ->orderBy('name')
                        ->paginate(10);
                        // ->get();
    }
}
