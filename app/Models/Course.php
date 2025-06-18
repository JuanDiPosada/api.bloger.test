<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function apprentice()  {
        return $this->hasMany(Apprentice::class);
    }

    public function trainingCenter()  {
        return $this->belongsTo(TrainingCenter::class);
    }

    public function area() {
        return $this->belongsTo(Area::class);
    }

    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }

    protected $fillable=['course_number','day','area_id','trainingCenter_id'];
}
