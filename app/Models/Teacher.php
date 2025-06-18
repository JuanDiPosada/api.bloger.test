<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function courses() {
        return $this->belongsToMany(course::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function trainingCenter(){
        return $this->belongsTo(TrainingCenter::class);
    }

    protected $fillable=['name','email','area_id','trainingCenter_id'];
}
