<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'voornaam',
        'naam',
        'adres',
        'postcode',
        'stad',
        'email',
        'telefoon',
        'actieradius',
        'ervaring',
        'interesses',
        'user_id',
    ];

    /**
     * Get the user that owns the volunteer profile.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the events that the volunteer is registered for.
     */
    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_volunteer');
    }
}
