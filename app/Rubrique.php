<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubrique extends Model
{
    protected $guarded = [];
    
    public function Article(){
        return $this->belongsTo(Article::class);
    }
}
