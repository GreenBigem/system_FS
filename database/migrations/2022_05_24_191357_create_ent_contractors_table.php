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
        Schema::create('ent_contractors', function (Blueprint $table) {

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';

            $table->id();
            $table->integer('user_id');
            $table->index('user_id');

            $table->string('full_name', 100)->nullable();
            $table->string('short_name', 100);
            $table->string('full_legal_form', 100)->nullable();
            $table->string('short_legal_form', 100)->nullable();

            $table->string('ogrn', 100)->nullable();
            $table->date('ogrn_date')->nullable();
            $table->string('inn', 100)->nullable();
            $table->string('kpp', 100)->nullable();

            $table->string('leg_adr_postal_code', 6)->nullable();
            $table->string('leg_adr_region', 100)->nullable();
            $table->string('leg_adr_disctrict', 100)->nullable();
            $table->string('leg_adr_city', 100)->nullable();
            $table->string('leg_adr_street', 100)->nullable();
            $table->string('leg_adr_house', 100)->nullable();
            $table->string('leg_adr_structure', 100)->nullable();
            $table->string('leg_adr_office', 100)->nullable();

            $table->string('postal_adr_postal_code', 6)->nullable();
            $table->string('postal_adr_region', 100)->nullable();
            $table->string('postal_adr_disctrict', 100)->nullable();
            $table->string('postal_adr_city', 100)->nullable();
            $table->string('postal_adr_street', 100)->nullable();
            $table->string('postal_adr_house', 100)->nullable();
            $table->string('postal_adr_structure', 100)->nullable();
            $table->string('postal_adr_office', 100)->nullable();

            $table->string('ceo_post', 100)->nullable();
            $table->string('ceo_surname', 100)->nullable();
            $table->string('ceo_name', 100)->nullable();
            $table->string('ceo_patronymic', 100)->nullable();

            $table->string('contact_post', 100)->nullable();
            $table->string('contact_surname', 100)->nullable();
            $table->string('contact_name', 100)->nullable();
            $table->string('contact_patronymic', 100)->nullable();
            $table->string('contact_email', 100)->nullable();
            $table->string('contact_tel', 11)->nullable();

//            $table->enum('gender', ['Женский', 'Мужской'])->nullable();

//            $table->boolean('is_bancruptcy_commissioner')->default(false);

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
        Schema::dropIfExists('ent__contractors');
    }
};
