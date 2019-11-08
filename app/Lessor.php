<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lessor extends Model
{
    //
    public $timestamps=false;
    public $table = "lessor";
    protected $primaryKey = 'codeLessor';
    protected $fillable = ['codeLessor','nameLessor','dniLessor','surnamesLessor','genderLessor'];

}
