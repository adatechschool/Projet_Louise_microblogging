<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($post) {
            $post->author()->associate(auth()->user()->id);
            $post->category()->associate(request()->category);
        });

        self::updating(function ($post) {
            $post->category()->associate(request()->category);
        });
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getTitleATtribute($attribute)
    {
        return Str::title($attribute);
    }
    // protected $fillable = [
    //     'description',
    //     'img_url',
    //     'user_id',
    // ];
}
