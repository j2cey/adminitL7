<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportField
 * @package App
 *
 * @property integer $id
 *
 * @property string $uuid
 * @property bool $is_default
 * @property string|null $tags
 * @property integer|null $status_id
 *
 * @property string $name
 * @property integer $num_ord
 * @property integer $report_id
 * @property integer $report_value_type_id
 * @property integer $offset
 * @property integer $max_length
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class ReportField extends Model
{
    //
}
