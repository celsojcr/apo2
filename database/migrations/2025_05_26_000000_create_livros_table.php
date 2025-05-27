
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->year('ano_publicacao');
            $table->string('editora')->nullable();
            $table->string('genero')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('livros');
    }
};
