<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
	protected $table = "sizes";
	protected $fillable = [
		'size'
	];
	public static function updateData($id, $data){
        $size = Size::find($id);
        $size->update($data);

        return true;
    }
}
