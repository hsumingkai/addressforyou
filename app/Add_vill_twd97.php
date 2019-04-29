<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add_vill_twd97 extends Model
{
    //
    public function __construct() {
        $this->setConnection("mysql2");
        $this->setTable("add_vill_twd97");
    }
    
}
