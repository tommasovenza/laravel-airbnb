<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = [
            [
                'name' => 'Tommaso',
                'surname' => 'Venza',
                'date_of_birth' => '22-08-1983',
                'email' => 'tommasovenza@gmail.com',
                'telephone' => '3335901703',
                'password' => 'ciaone_bimbi'
            ],
            [
                'name' => 'Monica',
                'surname' => 'Poggianti',
                'date_of_birth' => '06-05-1972',
                'email' => 'monichina@gmail.com',
                'telephone' => '3478967431',
                'password' => 'boiade_so_cazzi'
            ],
            [
                'name' => 'Ilaria',
                'surname' => 'Santi',
                'date_of_birth' => '08-03-1997',
                'email' => 'ilariasantina@gmail.com',
                'telephone' => '3391166789',
                'password' => 'trombiamo_tanto'
            ],
        ];
        // registro alcuni utenti fittizzi per avere dati
        foreach ($users as $user) {
            $new_user = new User();

            $new_user->name = $user['name'];
            $new_user->surname = $user['surname'];
            $new_user->date_of_birth = $user['date_of_birth'];
            $new_user->email = $user['email'];
            $new_user->telephone = $user['telephone'];
            $new_user->password = Hash::make($user['password']);
            $new_user->save();
        }


    }
}
