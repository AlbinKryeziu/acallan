<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    

    protected $table = "doctors";

    public function user(){
        return $this->belongsTo(User::class ,'user_id' ,'id');
    }

    public function specialty(){
        return $this->belongsTo(Specialty::class);
    }
}
