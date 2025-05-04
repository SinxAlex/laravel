<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Миграция для создания таблицы 'post_vacancy' - публикации
     * Связанные таблицы:
     *  - users - many-to-one
     */
    public function up(): void
    {
        Schema::create('post_vacancy', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date("start_at")->comment('дата когда должен выйти на смену исполнтель');
            $table->integer("title")->comment('название вакансии');
            $table->integer("hours_work")->comment('Часы работы');
            $table->float("price")->comment('сумма, которую получит заказчик');
            $table->integer("id_user")->comment('id пользователя опубликавший  вакансию');
            $table->boolean("view")->comment('скрытая вакансия или открытая')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_vacancy');
    }
};
