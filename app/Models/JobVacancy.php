<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    use HasFactory;
    protected $fillable = [
        'potition',
        'name',
        'address',
        'salary',
        'description',
        'email',
        'telephone',
        'file'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
