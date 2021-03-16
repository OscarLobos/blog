<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Relation reverse one to many
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category ()
    {
        return $this->belongsTo(Category::class);
    }

     /**
      * Relations many to many
      */

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Polymorphic Relations
     */

     public function image()
     {
        return $this->morphOne(Image::class, 'imageable');
     }
    
}
