<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'titel',
        'type',
        'datum',
        'start_tijd',
        'eind_tijd',
        'locatie',
        'max_deelnemers',
        'beschrijving',
        'contact_naam',
        'contact_email',
        'contact_telefoon',
        'status',
        'created_by',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'datum' => 'date',
    ];

    /**
     * Get the user that created the event.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the volunteers registered for this event.
     */
    public function volunteers()
    {
        return $this->belongsToMany(Volunteer::class, 'event_volunteer');
    }

    /**
     * Scope a query to only include approved events.
     */
    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    /**
     * Scope a query to only include pending events.
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Scope a query to only include upcoming events.
     */
    public function scopeUpcoming($query)
    {
        return $query->where('datum', '>=', now())->orderBy('datum', 'asc');
    }

    /**
     * Scope a query to only include past events.
     */
    public function scopePast($query)
    {
        return $query->where('datum', '<', now())->orderBy('datum', 'desc');
    }
}
