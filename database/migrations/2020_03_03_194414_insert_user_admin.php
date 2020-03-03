<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InsertUserAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $email = env('ADMIN_EMAIL', 'admin@laraveldeveloper.com.br');
        $password = bcrypt(env('ADMIN_PASSWORD', 'admin'));
        DB::table('users')->insert([
            'name' => 'Admnistrador',
            'email' => $email,
            'password' => $password,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $email = env('ADMIN_EMAIL', 'admin@laraveldeveloper.com.br');
        DB::delete('DELETE from users WHERE email = ?', [$email]);
    }
}
