<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'sender_id',
        'receive_id',
        'message',
        'is_read',
        'is_edited',
        'is_deleted',
        'delete_from_sender',
        'delete_from_receiver',
    ];
}
