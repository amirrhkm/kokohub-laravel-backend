<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koko extends Model
{
    protected $table = 'kokos';
    use HasFactory;

    protected $fillable = [
        'koko_id', 'name', 'student_capacity', 'teacher_capacity',
    ];
    
    public function enrolls()
    {
        return $this->hasMany(Enroll::class, 'koko_id', 'koko_id');
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class, 'koko_id');
    }

    public function broadcasts()
    {
        return $this->hasMany(Broadcast::class, 'koko_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'koko_id');
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'koko_id');
    }
}
