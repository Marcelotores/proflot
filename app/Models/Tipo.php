<?php

namespace Proflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Tipo extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['description'];

    public function user(){
         return $this->hasMany(user::class);
          
    }

}
