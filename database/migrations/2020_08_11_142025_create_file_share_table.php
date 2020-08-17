<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileShareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_share', function (Blueprint $table)
        {
            $table->increments('id');

            $table->string('file_name')->comment('123.jpg');
            $table->string('short_url')->comment('Ссылка для скачивания.');


            $table->integer('file_size_kb')->comment('');
            $table->integer('file_size_mb')->comment('');
            $table->string('file_type')->comment('.jpg .rar и тд');
            $table->integer('storage_time')->comment('Сколько дней хранить');

            $table->datetime('date_load')->comment('Дата загрузки');
            $table->datetime('date_delete')->comment('Дата для удаления');

            $table->string('comment')->nullable();


			$table->timestamps();
            #$table->timestamp('created_at')->useCurrent();
            #$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_share');
    }
}
