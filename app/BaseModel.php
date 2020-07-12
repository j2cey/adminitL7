<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\BaseTrait;

class BaseModel extends Model
{
    use BaseTrait;

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
