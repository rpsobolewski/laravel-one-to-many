<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Type extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'slug'];
    /**
     * Get all of the projects for the Type
     *
     *
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
