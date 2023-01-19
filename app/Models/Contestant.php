<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    protected $guarded = ['id'];
    use HasFactory;


    public function election()
    {
        return $this->belongsTo(Election::class);
    }

    public function votes()
    {
        return $this->hasMany(Votes::class);
    }

    public function getContestant($id){
        return self::find($id);
    }
}


