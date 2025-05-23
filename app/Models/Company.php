<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ["title", "location", "description"];
    
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    public function users() {
        return $this->hasMany(Company::class);
    }
}
