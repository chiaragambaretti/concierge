<?php

namespace App\Models;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageSubcategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'subcategory_id'];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
