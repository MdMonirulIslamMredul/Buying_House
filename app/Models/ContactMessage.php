<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    public const STATUS_UNREAD = 0;
    public const STATUS_READ = 1;

    protected $fillable = [
        'name',
        'number',
        'email',
        'subject',
        'message',
        'status',
        'read_at',
    ];

    public function markAsRead()
    {
        $this->status = self::STATUS_READ;
        $this->read_at = now();
        $this->save();
    }

    public function markAsUnread()
    {
        $this->status = self::STATUS_UNREAD;
        $this->read_at = null;
        $this->save();
    }
}
