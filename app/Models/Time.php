<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $primaryKey = 'idTime';
    protected $fillable = ['startDate', 'finishDate'];

    public function projects()
    {
        return $this->hasMany(Project::class, 'projectTimeLine', 'idTime');
    }

    public function plannings()
    {
        return $this->hasMany(Planning::class, 'taskTimeLine', 'idTime');
    }
}
