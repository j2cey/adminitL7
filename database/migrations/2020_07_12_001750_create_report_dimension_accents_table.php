<?php

use App\Traits\BaseMigrationTrait;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportDimensionAccentsTable extends Migration
{
    use BaseMigrationTrait;

    public $table_name = 'report_dimension_accents';
    public $table_comment = 'Visibility accentuation for a Report Dimension';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->id();

            $table->foreignId('report_dimension_id')->nullable()
                ->comment('report dimension reference')
                ->constrained()->onDelete('set null');

            $table->baseFields();
        });
        $this->setTableComment($this->table_name,$this->table_comment);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->table_name, function (Blueprint $table) {
            $table->dropBaseForeigns();
            $table->dropForeign(['report_dimension_id']);
        });
        Schema::dropIfExists($this->table_name);
    }
}
