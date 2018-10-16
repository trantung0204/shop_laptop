<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ImportReceipt;

class ImportReceipt extends Model
{
    protected $table='import_receipts';
    protected $fillable=['code','admin_id','sum'];

    public function creator()
    {
        return $this->belongsTo('App\Admin','id','admin_id');
    }
    public function genCode()
    {
        $code='';
        do{
            $code='PN'.str_pad(rand(1,9999), 4, '0', STR_PAD_LEFT);
        }while(ImportReceipt::where('code',$code)->get()->count()>0);
        return $code;
    }
}
