<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Vocabulary extends Model
{
    use HasFactory, Sortable;
    
 

    public function title()
    {
        return $this->belongsTo(Title::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
