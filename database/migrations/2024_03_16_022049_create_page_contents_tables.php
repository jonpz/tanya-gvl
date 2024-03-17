<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('page_contents', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();

            // this will create the required columns to support nesting for this module
            $table->nestedSet();
        });

        Schema::create('page_content_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'page_content');
            $table->string('title', 200)->nullable();
            $table->string('meta_title', 100)->nullable();
            $table->text('meta_description')->nullable();
        });

        Schema::create('page_content_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'page_content');
        });

        Schema::create('page_content_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'page_content');
        });
    }

    public function down()
    {
        Schema::dropIfExists('page_content_revisions');
        Schema::dropIfExists('page_content_translations');
        Schema::dropIfExists('page_content_slugs');
        Schema::dropIfExists('page_contents');
    }
};
