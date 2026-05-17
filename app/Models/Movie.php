<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function starVote(){
        $vote = $this->vote;
        $fullStars = floor($vote);
        $halfStars = ceil(($vote / $fullStars)-1);
        $emptyStars = 10-$halfStars-$fullStars;
        return [$fullStars,$halfStars,$emptyStars];
    }
}
