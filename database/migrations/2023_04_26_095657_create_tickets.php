<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->string('ticket_name');
            $table->string('category');
            $table->string('priority');
            $table->string('subject');
            $table->longText('description');
            $table->string('ticket_status');
            $table->string('image_name');
            $table->string('assign_developer_ids');
            $table->integer('scheduled');
            $table->string('status');
            $table->integer('read_unread');
            $table->integer('admin_read');
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
        Schema::dropIfExists('tickets');
    }
}
