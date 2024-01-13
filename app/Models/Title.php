<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vocabularies()
    {
        return $this->hasMany(Vocabulary::class);
    }

}
