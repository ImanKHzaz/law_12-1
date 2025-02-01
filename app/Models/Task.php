<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // السماح بتعبئة هذه الحقول بشكل مباشر
    protected $fillable = [
        'lawsuit_id',
        'user_id',
        'task_name',
        'description',
        'is_completed',
    ];

    // تعريف العلاقات
    public function lawsuit()
    {
        return $this->belongsTo(Lawsuit::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
