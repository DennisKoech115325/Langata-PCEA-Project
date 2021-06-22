<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'student_id';
    protected $table = 'students';
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function grades(){
        return $this->hasMany('App\Models\Grade');
    }
    public function attendaces(){
        return $this->hasMany('App\Models\Attendace');
    }
}
