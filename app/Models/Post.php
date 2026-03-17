<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * * These match the columns: title, content, user_id, and created_at 
     * identified in your SQL dump.
     */
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'created_at',
    ];

    /**
     * Disable Laravel's default 'updated_at' if your Symfony schema 
     * doesn't use it, or keep it true if you want Laravel to manage it.
     */
    public $timestamps = true;

    /**
     * Relationship: A post belongs to a user.
     * * This maps the 'user_id' foreign key from your SQL
     * to the User model.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
