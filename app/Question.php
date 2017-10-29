<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = ['content','question_type','options'];

    protected $casts = [ 
      'options' => 'array'
    ];

   public function questionnaire(){
       return $this->belongsTo(Questionnaire::class);
   }

   public function answers(){
       return $this->hasMany(Answer::class);
   }
}
