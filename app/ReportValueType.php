<?php

namespace App;

/**
 * Class ReportValueType
 * @package App
 *
 * @property integer $id
 *
 * @property string $uuid
 * @property bool $is_default
 * @property string|null $tags
 * @property integer|null $status_id
 *
 * @property string $valuetype
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class ReportValueType extends BaseModel
{
    protected $guarded = [];

    public function fields() {
        return $this->hasMany('App\ReportField');
    }
}
