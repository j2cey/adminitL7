<?php

    use App\ReportValueType;
    use Illuminate\Database\Seeder;

class ReportValueTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $report_value_types = [
            [ 'valuetype' => "STRING" ],
            [ 'valuetype' => "INTEGER" ],
            [ 'valuetype' => "BLOB" ],
            [ 'valuetype' => "BOOLEAN" ],
            [ 'valuetype' => "DATETIME" ],
            [ 'valuetype' => "IP address" ],
            [ 'valuetype' => "JSON" ]
        ];
        foreach ($report_value_types as $report_value_type) {
            ReportValueType::create($report_value_type);
        }
    }
}
