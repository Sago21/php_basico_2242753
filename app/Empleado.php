<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table ="employee";
    protected $primaryKey ="employeeId";
    public $timestamps = false;
}
