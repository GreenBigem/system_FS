<?php

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
        Schema::create('ind_contractors', function (Blueprint $table) {

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';

            $table->id();
            $table->integer('user_id');

            $table->index('user_id');

            $table->string('surname', 100);
            $table->string('name', 100);
            $table->string('patronymic', 100)->nullable();

            $table->enum('gender', ['Женский', 'Мужской'])->nullable();

            $table->date('birth_date')->nullable();
            $table->string('birth_place', 100)->nullable();

            $table->string('passport_series', 100)->nullable();
            $table->integer('passport_number')->nullable();

            $table->string('passport_migration_department', 100)->nullable();
            $table->date('passport_date_of_issue')->nullable();

            $table->string('passport_division_code', 7)->nullable();

            $table->string('contractor_email', 7)->nullable();
            $table->string('contractor_tel', 11)->nullable();

            $table->boolean('is_bancruptcy_commissioner')->default(false);

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
        Schema::dropIfExists('ind_contractors');
    }
};
