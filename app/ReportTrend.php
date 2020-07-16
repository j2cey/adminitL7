<?php

namespace App;

/**
 * Class ReportTrend
 * @package App
 *
 * @property integer $id
 *
 * @property string $uuid
 * @property bool $is_default
 * @property string|null $tags
 * @property integer|null $status_id
 *
 * @property string $code
 * @property string $name
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class ReportTrend extends BaseModel
{
    protected $guarded = [];
}
