<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projects extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function galleries()
{
    return $this->hasMany(Gallery::class, 'project_id');
}

}
