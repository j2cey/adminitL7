<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Uuidable;

/**
 * Class Status
 * @package App
 *
 * @property integer $id
 *
 * @property string $uuid
 * @property bool $is_default
 * @property string|null $tags
 *
 * @property string $code
 * @property string $name
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class Status extends Model
{
    use Uuidable;

    /**
     * @var string[] LogsActivity purpose
     */
    protected static $logAttributes = ['*'];
    protected $guarded = [];
    protected $table = "statuses";

    public function scopeDefault($query, $exclude = []) {
        return $query
            ->where('is_default', true)->whereNotIn('id', $exclude);
    }

    public function scopeActive($query) {
        return $query
            ->where('code', 'active');
    }

    public function scopeInactive($query) {
        return $query
            ->where('code', 'inactive');
    }
}
