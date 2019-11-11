<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    //
    public $timestamps=false;
    public $table = "debt";
    protected $primaryKey = 'codeDebt';
    protected $fillable = ['codeDebt','numMonthsDebt','PriceMonthDebt','totalDebt'];
    //function lessor(){
    //    return $this->hasOne(Lessor::class , 'codeLessor'  );
    //}
}
