<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = "college";

    function testFunc(){
        return "Test Function";
    }
}
