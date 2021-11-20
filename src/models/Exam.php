<?php

namespace src\models\Patient;

use core\Model;

class Exam extends Model
{

    public $table = "exames";

    public function __construct()
    {

        $this->_table = $this->table;
        
    }

    

}
