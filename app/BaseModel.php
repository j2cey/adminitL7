<?php

namespace App;

use App\Traits\BaseTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class BaseModel extends Model
{
    use BaseTrait, LogsActivity;

    /**
     * @var string[] LogsActivity purpose
     */
    protected static $logAttributes = ['*'];

    public function scopeDefault($query, $exclude = []) {
        return $query
            ->where('is_default', true)->whereNotIn('id', $exclude);
    }

    public function status() {
        return $this->belongsTo('App\Status');
    }
}
