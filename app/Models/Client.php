<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Client extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable=[
        'name', 'link', 'photo',
    ];

    protected static $logName = 'client';

    protected static $logAttributes = ['name', 'link', 'photo'];
    
    public function getDescriptionForEvent(string $eventName): string
    {
        return "This client has been {$eventName}";
    }

    protected static $logOnlyDirty = true;

    protected static $submitEmptyLogs = false;
    // protected static $ignoreChangedAttributes = ['profile_photo_url', 'updated_at'];
}
