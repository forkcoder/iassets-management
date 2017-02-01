<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIworkstationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iworkstations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('iworkstation_id')->unique();
            $table->string('net_switch_id');
            $table->string('net_switch_port');
            $table->string('net_dhcp_ip');
            $table->string('net_mac_id');
            $table->string('net_login_status');
            $table->string('os_detail_info');
            $table->string('net_faceplate_id');
            $table->string('lnk_printer_id');
            $table->string('sys_product_id');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::create('iworkstation_user', function (Blueprint $table) {
            $table->integer('iworkstation_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('iworkstation_id')
                ->references('id')
                ->on('iworkstations')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('iworkstation_user');
        Schema::drop('iworkstations');
    }
}