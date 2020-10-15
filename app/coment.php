<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coment extends Model
{
   protected $table= "coments";

   public function products()
   {
       return $this->belongsTo('App\products');
   }
}
