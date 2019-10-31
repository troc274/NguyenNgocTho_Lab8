<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class emp extends Model 
    {
        protected $primarykey='id';
        protected $table='employess';
        protected $filltable=array('name','email','contact_number');
    }

?>