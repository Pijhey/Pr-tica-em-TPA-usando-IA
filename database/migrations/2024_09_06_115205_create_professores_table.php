<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_professores_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessoresTable extends Migration
{
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('especialidade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('professores');
    }
};
