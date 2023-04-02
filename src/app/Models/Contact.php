<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
