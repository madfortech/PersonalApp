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
    
        Schema::drop('permission_role', function (Blueprint $table) {
            $table->dropForeign('role_id','permission_id');
        });
        Schema::drop('role_user', function (Blueprint $table) {
            $table->dropForeign('user_id','role_id');
        });
       
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('permissions');
        Schema::drop('roles');
        Schema::drop('media');
        //Schema::drop('posts');
    }
};
