<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $primaryKey = 'idState';
    protected $fillable = ['state'];

    public function projects()
    {
        return $this->hasMany(Project::class, 'projectState', 'idState');
    }
}
