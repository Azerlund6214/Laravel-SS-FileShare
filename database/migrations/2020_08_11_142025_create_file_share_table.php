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

            $table->string('short_url')->comment('Ссылка для скачивания.');
            $table->string('file_name')->comment('123.jpg');

            $table->integer('file_size_bytes')->comment('');
            $table->integer('file_size_kb')->comment('')->nullable();
            $table->integer('file_size_mb')->comment('')->nullable();
            $table->string('file_ext')->comment('.jpg .rar и тд');
            $table->string('file_mime')->comment('Mime type');

            $table->integer('storage_time')->comment('Сколько дней хранить');
            $table->timestamp('date_load')->comment('Дата загрузки')->nullable();
            $table->timestamp('date_delete')->comment('Дата для удаления')->nullable();

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
