<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'publication_year'];

     /**
     * Relationship with books many to many
     *
     * @return void
     */
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
