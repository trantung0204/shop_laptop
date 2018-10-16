<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = [
        'name', 'slug','parent_id',
    ];
    public static function updateData($id, $data){
        $category = Category::find($id);
        $category->update($data);

        return true;
    }
}
