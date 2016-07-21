<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    /**
     * Users feedbacks table
     * 
     * @var string
     */
    protected $table = 'FeedbacksTable';
    
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
      'firstName',  
      'lastName',  
      'email', 
      'feedback'
    ];
}
