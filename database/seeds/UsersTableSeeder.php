<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Article;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
        	'email' => 'bausanomichal@gmail.com',
        ])->each(function (User $user) {
            $user->articles()->saveMany(
                factory(Article::class, 8)->make()
            );
        });
    }
}
