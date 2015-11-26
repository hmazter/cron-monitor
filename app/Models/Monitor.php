<?php

namespace App\Models;

use App\Integrations\IntegrationInterface;
use Carbon\Carbon;
use Exceptions\IntegrationTypeException;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Monitor
 *
 * @property integer $id
 * @property string $uuid
 * @property integer $user_id
 * @property string $name
 * @property integer $allowed_runtime
 * @property integer $state
 * @property \Carbon\Carbon $pinged_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read User $user
 * @property-read mixed $state_text
 * @property-read \Illuminate\Database\Eloquent\Collection|Warning[] $warnings
 * @property-read \Illuminate\Database\Eloquent\Collection|Integration[] $integrations
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Monitor whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Monitor whereIdentifier($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Monitor whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Monitor whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Monitor whereAllowedRuntime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Monitor whereState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Monitor wherePingedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Monitor whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Monitor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Monitor whereUuid($value)
 */
class Monitor extends Model
{
    const STATE_NEW = 0;
    const STATE_RUNNING = 1;
    const STATE_COMPLETED = 2;
    const STATE_LATE = 8;
    const STATE_FAIL = 9;

    protected $fillable = ['name'];

    protected $dates = ['pinged_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function warnings()
    {
        return $this->hasMany(Warning::class);
    }

    public function integrations()
    {
        return $this->belongsToMany(Integration::class);
    }

    public function getStateTextAttribute()
    {
        switch ($this->state) {
            case static::STATE_NEW:
                return 'New';

            case static::STATE_RUNNING:
                return 'Running';

            case static::STATE_COMPLETED:
                return 'Completed';

            case static::STATE_LATE:
                return 'Late';

            case static::STATE_FAIL:
                return 'Fail';
        }

        return 'Unknown';
    }

    public function updateState($state)
    {
        $this->state = $state;
        $this->pinged_at = new Carbon();
        $this->save();
    }

    /**
     * Notify through all connected integrations
     *
     * @param Warning $warning
     * @throws IntegrationTypeException
     */
    public function notify($warning)
    {
        // integrations connected to each monitor
        // $integrations = $this->integrations;

        // all integrations connected directly to user
        $integrations = $this->user->integrations;

        /** @var Integration $customerIntegration */
        foreach ($integrations as $customerIntegration) {
            $class = "\\App\\Integrations\\" . ucfirst($customerIntegration->type) . "Integration";
            if (!class_exists($class)) {
                throw new IntegrationTypeException();
            }

            /** @var IntegrationInterface $integration */
            $integration = new $class($customerIntegration->settings);
            $integration->notify($warning);
        }
    }
}
