<?php

use App\Enums\BizStatus;
use App\Enums\RowStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->string('id', 200)->primary();
            $table->smallInteger('status')->default(BizStatus::ACTIVE->value);
            $table->smallInteger('biz_status')->default(RowStatus::NORMAL->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_types');
    }
};
