<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    
    use HasFactory;
    protected $with = ['votes'];
    protected $guarded = ['id'];

    protected $appends = ['contestant_vote'];

    public function election()
    {
        return $this->belongsTo(Election::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function getContestant($id){
        return self::find($id);
    }
    public function getContestantVoteAttribute(){
        // return 0;
        return $this->votes()->groupBy('contestant_id')->count();
    }
}


