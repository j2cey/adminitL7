<?php

namespace App;

/**
 * Class Report
 * @package App
 *
 * @property integer $id
 *
 * @property string $uuid
 * @property bool $is_default
 * @property string|null $tags
 * @property integer|null $status_id
 *
 * @property string $title
 * @property integer|null $report_type_id
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class Report extends BaseModel
{
    protected $guarded = [];

    public function type() {
        return $this->belongsTo('App\ReportType');
    }

    public function fields() {
        return $this->hasMany('App\ReportField');
    }
}
