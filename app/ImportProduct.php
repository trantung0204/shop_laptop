<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportProduct extends Model
{
    protected $table='import_products';
    protected $fillable=['import_code','product_code','product_details_id','import_price','origin_price','sale_price','user_id','quantity'];
    public function receipt()
    {
        return $this->belongsTo('App\ImportReceipt','code','import_code');
    }
}
