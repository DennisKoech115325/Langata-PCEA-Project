<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $primaryKey = 'entry_number';
    protected $table = 'grades';
    protected $value = 'True';
    public function student(){
        return $this->belongsTo('App\Models\Student');
    }
}
