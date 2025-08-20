<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
 protected $fillabl=[
    'name'
 ];
  


    
    public function posts(){
        return $this->hasMany(Post::class, "category_id");
    }
    
    
    public function users(){
        return $this->hasMany(User::class, "category_id");
    }
}
