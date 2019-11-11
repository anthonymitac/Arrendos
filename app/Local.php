<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lessor;


class Local extends Model
{
    //
    public $timestamps=false;
    public $table = "local";
    protected $primaryKey = 'local_id';
    protected $fillable = ['local_id','lessor_id','debt_id','nameLocal'];

    public function lessors(){
        return $this->belongsTo('App\Lessor');
    }
    
    

}
