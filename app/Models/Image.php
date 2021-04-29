<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Project;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        "image_url",
        "project_id",
        "image_info"
    ];
    

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
