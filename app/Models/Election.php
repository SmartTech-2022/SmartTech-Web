<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function contestants()
    {
        return $this->hasMany(Contestant::class);
    }


}
