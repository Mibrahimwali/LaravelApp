<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagepath = ($this->image) ? $this->image : 'uploads/images.png';
        return '/storage/'. $imagepath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
}
