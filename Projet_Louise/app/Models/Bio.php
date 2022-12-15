<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Bio extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($bio) {
            $bio->author()->associate(auth()->user()->id);
        });
        self::updating(function ($bio) {
            $bio->author()->associate(auth()->user()->id);
        });
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
