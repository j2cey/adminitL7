<?php

    use App\User;
    use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'rootdev',
            'email' => 'rootdev@adminit.com',
            'password' => bcrypt('rootdevP@ssw0rd')
        ]);
    }
}
