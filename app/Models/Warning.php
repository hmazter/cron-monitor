<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Warning
 *
 * @property integer $id
 * @property integer $monitor_id
 * @property integer $type
 * @property \Carbon\Carbon $sent_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read Monitor $monitor
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Warning whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Warning whereMonitorId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Warning whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Warning whereSentAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Warning whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Warning whereUpdatedAt($value)
 */
class Warning extends Model
{
    protected $fillable = [
        'monitor_id', 'type', 'sent_at'
    ];

    protected $dates = ['sent_at'];


    public function monitor()
    {
        return $this->belongsTo(Monitor::class);
    }

    public static function getUnsent()
    {
        return static::with('monitor', 'monitor.user')
            ->whereNull('sent_at')->get();
    }
}
