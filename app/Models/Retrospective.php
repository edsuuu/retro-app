<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retrospective extends Model
{

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'youtube_url',
        'spotify_url',
        'date_expired',
    ];

    protected $casts = [
        'date_expired' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
