<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    protected $primaryKey = 'idRisk';
    protected $fillable = ['riskDesc', 'riskProject'];

    public function project()
    {
        return $this->belongsTo(Project::class, 'riskProject', 'idProject');
    }
}
