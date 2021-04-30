<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Image;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = ['title'];


    public function images()
    {
        return $this->hasMany(Image::class, 'project_id', 'id');
    }

    public function deleteRelated(){

        $this->images()->delete();

        $this->delete();

    }
}
