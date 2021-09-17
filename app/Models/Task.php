<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use NotificationChannels\WebPush\HasPushSubscriptions;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;
    use HasPushSubscriptions;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'image',
        'is_done'
    ];

    public $casts = [
        'reminder_date' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    # https://laravel.com/docs/8.x/eloquent-mutators#defining-an-accessor
//    public function getTitleAttribute() {
//        return $this->attributes['id'] . "# " . $this->attributes['title'];
//    }

    public function getCountTitleAttribute() {
        return strlen($this->attributes['title']);
    }

    public function getReadTimeAttribute() {
        return "10min";
    }

    public function routeNotificationForMail($notification)
    {
        return $this->user->email;
    }

    public function routeNotificationForSMS()
    {
        return $this->user->phone_number;
    }

    public function routeNotificationForTelegram($notification) {
        return $this->user->telegram_id;
    }
}
