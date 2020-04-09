<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utilisateurs')->insert(['id_utilisateur'=> 0,
            'nom'=> 'Pelap',
            'email'=>'stephanieclaudepelap@gmail.com',
            'mdp'=>md5('phany123'),
            'etat'=>0
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
