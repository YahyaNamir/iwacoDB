<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $primaryKey = 'idManager';
    protected $fillable = ['phone', 'email'];

    public function projects()
    {
        return $this->hasMany(Project::class, 'projectManager', 'idManager');
    }
}
