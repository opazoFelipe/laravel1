<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   //Relaciona este modelo con la tabla 'tasks'
   protected $table = 'tasks'; 

   //Campos que el usuario tiene permitido asignar
   protected $fillable = ['name', 'description', 'user_id'];

   public function user(){
       $this->belongsTo('App\User');
   }

   //Especificar clave primaria
   protected $primaryKey = 'id';
}
