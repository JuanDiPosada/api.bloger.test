<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{
    //
    public function courses()  {
        return $this->hasMany(Course::class);
    }
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
    protected $fillable=['name','location'];
}
