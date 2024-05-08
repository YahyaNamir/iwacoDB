<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    protected $primaryKey = 'idTask';
    protected $fillable = ['task', 'taskTimeLine'];

    public function timeline()
    {
        return $this->belongsTo(Time::class, 'taskTimeLine', 'idTime');
    }
}
