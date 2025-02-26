<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    protected $fillable=['title', 'description', 'priority', 'deadline', 'notes', 'user_id', 'status'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
