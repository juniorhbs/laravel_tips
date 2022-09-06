<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('author');
            $table->string('title');
            $table->string('slug');
            $table->string('subtitle');
            $table->text('content');
            $table->timestamps();

            $table->foreign('author')->references('id')->on('users')->onDelete('CASCADE');
            //foreign = chave estrangeira
            //references = indica a coluna que fará o relacionamento e devem ser do mesmo tipo
            //on = indica qual tabela deseja se relacionar
            // onDelete('CASCADE') = Indica uma ação cascada, caso um item seja deletado, todos ítens relacionados serão deletados.

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
