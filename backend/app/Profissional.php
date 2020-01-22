<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = "profissionais"; 
    

    public function tecnologias(){
        return $this->hasMAny('App\Tecnologia', 'profissionais_tecnologias', 'profissionais_id','tecnologias_id');
       
    }
}
