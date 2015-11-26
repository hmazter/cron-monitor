<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Integration
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $type
 * @property string $name
 * @property string $settings
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Integration whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Integration whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Integration whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Integration whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Integration whereSettings($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Integration whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Integration whereUpdatedAt($value)
 */
class Integration extends Model
{
    protected $fillable = [
        'name', 'type', 'settings'
    ];

    public function getSettingsAttribute($settings)
    {
        return json_decode($settings);
    }

    public function setSettingsAttribute($settings)
    {
        $this->attributes['settings'] = json_encode($settings);
    }
}
