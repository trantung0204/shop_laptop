<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = "brands";
    protected $fillable = [
        'name', 'slug'
    ];
    public static function updateData($id, $data){
        $brand = Brand::find($id);
        $brand->update($data);

        return true;
    }
}
