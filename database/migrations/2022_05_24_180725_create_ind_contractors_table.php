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

            // Устанавливаем кодировку

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';

            // Добавление Auto Increment столбца

            $table->id();

            // BIGINT[(M)] [UNSIGNED] [ZEROFILL] Большое целое число. Диапазон без знака от 0 до 18446744073709551615.
            // Использование целых чисел для хранения больших беззнаковых величин в столбце с типом BIGINT.

            $table->unsignedBigInteger('user_id');

            // Индексируем по user_id и присваиваем имя: "'Таблица в ед. числе'_'поле'_'на конце 'x'".

            $table->index('user_id', 'ind_contractor_user_idx');

            // Добавляем внешний ключ на (ON) таблицу users по ключу (REFERENCES) id.

            $table->foreign('user_id', 'ind_contractor_user_fk')->on('users')->references('id');

            // Обязательные(идентифицирующие) данные физ. лица

            // string() - Метод string создает эквивалент столбца VARCHAR указанной длины.
            // Ограничиваем строки разумной длиной

            $table->string('surname', 100);

            // Необязательные(идентифицирующие) данные физ. лица
            // Функция "->NULLABLE()" позволяет указать базе данных,
            // что поле может быть пустым

            $table->string('name', 100)->nullable();
            $table->string('patronymic', 100)->nullable();

            // Данные свидетельства о рождении (отсутствующие в паспорте)

            $table->string('birth_certificate_series', 10)->nullable();
            $table->unsignedDecimal('birth_certificate_number', $precision = 10)->nullable();
            $table->date('birth_certificate_date_of_issue')->nullable();
            $table->string('birth_sertificate_marriage_registry', 300)->nullable();

            // Данные паспорта

            $table->string('passport_series', 10)->nullable();
            $table->unsignedDecimal('passport_number', $precision = 6)->nullable();

            $table->string('passport_migration_department', 100)->nullable();
            $table->date('passport_date_of_issue')->nullable();
            $table->string('passport_division_code', 7)->nullable();

            $table->date('birth_date')->nullable();
            $table->string('birth_place', 300)->nullable();

            $table->enum('gender', ['Женский', 'Мужской'])->nullable();

            // Контактные данные

            $table->string('contractor_email', 100)->nullable();
            $table->string('contractor_tel', 11)->nullable();

            //  Данные международного паспорта

            $table->string('int_passport_series', 10)->nullable();
            $table->string('int_passport_number', 10)->nullable();
            $table->date('int_passport_date_of_issue')->nullable();
            $table->string('int_passport_migration_department', 300)->nullable();

            // Цифровые идентификаторы

            $table->unsignedDecimal('inn', $precision = 10)->nullable();
            $table->string('snils', 15)->nullable();

            // Опциональные значения принадлежности к той или иной категории

            $table->boolean('is_bancruptcy_commissioner')->default(false);
            $table->boolean('is_lawyer')->default(false);

            // Создаем штампы времени created_at и updated_at

            $table->timestamps();

            // Используем SoftDeletes для мягкого удаления данных из базы

            $table->softDeletes();

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
