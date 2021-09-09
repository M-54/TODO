<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'is_done'
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
    public function getTitleAttribute() {
        return $this->attributes['id'] . "# " . $this->attributes['title'];
    }

    public function getCountTitleAttribute() {
        return strlen($this->attributes['title']);
    }

    public function getReadTimeAttribute() {
        return "10min";
    }
}
