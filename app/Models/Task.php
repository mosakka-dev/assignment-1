<?php

// app/Models/Task.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'completed',
        'due_date',
    ];

    protected $casts = [
        'completed' => 'boolean',
        'due_date' => 'date',
    ];
}
