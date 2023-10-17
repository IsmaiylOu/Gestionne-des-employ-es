<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach (range(1, 10) as $index) {
            User::create([
                'username' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('secret'),
                'lastname' => null,
                'firstname' => null,
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
?>

    ];
});