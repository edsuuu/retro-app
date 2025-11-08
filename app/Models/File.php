<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'retrospective_id',
        'hash_file',
        'name',
        'path',
        'mime_type',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function retrospective()
    {
        return $this->belongsTo(Retrospective::class);
    }
}
