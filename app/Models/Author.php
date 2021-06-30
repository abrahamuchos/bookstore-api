<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['name'];

        
    /**
     * Relationship with books many to many
     *
     * @return void
     */
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    
}
