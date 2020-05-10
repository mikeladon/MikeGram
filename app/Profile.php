<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user() {
        return $this ->belongsTo(User::class);
    }

    public function profileImage() {
        $imagePath = ($this->image) ? $this->image : '/uploads/kpwb4ram1E68Krgw6snkZYQxkXCKMW1nWYP1lj1b.png';
        return '/storage/'. $imagePath;
    }

    public function followers() {
        return $this->belongsToMany(User::class);
    }
}
