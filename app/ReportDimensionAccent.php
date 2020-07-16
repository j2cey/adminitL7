<?php

namespace App;

/**
 * Class ReportDimensionAccent
 * @package App
 *
 * @property integer $id
 *
 * @property string $uuid
 * @property bool $is_default
 * @property string|null $tags
 * @property integer|null $status_id
 *
 * @property integer|null $report_dimension_id
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class ReportDimensionAccent extends BaseModel
{
    public function report_dimension() {
        return $this->belongsTo('App\ReportDimension');
    }
}
