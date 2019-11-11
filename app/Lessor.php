<?php

namespace App;
use App\Local;

use Illuminate\Database\Eloquent\Model;

class Lessor extends Model
{
    //
    public $timestamps=false;
    public $table = "lessor";
    protected $primaryKey = 'id';
    protected $fillable = ['id','nameLessor','dniLessor','surnamesLessor','genderLessor'];



    public function locals(){
        return $this->hasMany(Local::class);
    }


    

}
