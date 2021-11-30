<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDettail extends Model
{
    protected $table = 'bill_detail';
    public function products(){
        return $this->belongsTo('App\Product','id_product','id'); 
    }
    public function bills(){
        return $this->belongsTo('App\Bill','id_bill','id'); 
    }
    use HasFactory;
}
