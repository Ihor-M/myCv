<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    protected $table = 'FeedbacksTable';
    
    protected $fillable = [
      'firstName',  
      'lastName',  
      'email', 
      'feedback'
    ];
}
