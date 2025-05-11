<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ["name", "skill", "bio"];

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    public function company() {
        return $this->belongsTo(Company::class);
    }
}
