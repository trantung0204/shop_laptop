<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table='product_details';
    protected $fillable=['product_code','color_id','size_id','cpu','ram','disk','vga','resolution'];

    // public static function del($code)
    // {
    // 	ProductDetail::where('product_id','=',$code)->get()->delete();
    // }
    public static function del($id)
    {
    	ProductDetail::find($id)->delete();
    }
    public static function storeData($data)
    {
        return ProductDetail::create($data);
    }
    public function product()
    {
        return $this->belongsTo('App\Product','product_code','code');
    }
    public function color()
    {
        return $this->belongsTo('App\Color','color_id','id');
    }
    public function size()
    {
        return $this->belongsTo('App\Size','size_id','id');
    }
}
