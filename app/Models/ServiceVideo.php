<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'title',
        'youtube_url',
        'thumb',
        'sort_order',
        'status'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
