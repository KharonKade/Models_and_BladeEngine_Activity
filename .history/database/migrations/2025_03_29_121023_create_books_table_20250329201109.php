<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Automatically creates an auto-incrementing id column
            $table->string('isbn')->unique(); // ISBN field, unique value
            $table->string('title'); // Book title
            $table->string('author'); // Author name
            $table->text('description'); // Book description
            $table->date('date_published'); // Date when the book was published
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
};

