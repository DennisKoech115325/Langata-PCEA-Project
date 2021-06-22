<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table = 'attendances';
    protected $value = 'True';
    public function student(){
        return $this->belongsTo('App\Models\Student');
    }
}
