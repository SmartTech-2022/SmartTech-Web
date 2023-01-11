<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    use HasFactory;

    public function election()
    {
        return $this->belongsTo(Election::class);
    }

    public function contestant()
    {
        return $this->belongsTo(Contestant::class);
    }

    public function getContestant($id){
        return self::find($id);
    }
}


