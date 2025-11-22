<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
     use HasFactory;
    protected $fillable = ['title', 'is_completed', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
