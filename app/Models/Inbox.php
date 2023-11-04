<?php

namespace App\Models;

use Database\Factories\InboxFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'subject', 'message', 'is_read'];

    protected static function newFactory(): Factory
    {
        return InboxFactory::new();
    }
}
