<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAdminUserSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{

    $user = User::create([
        'name' => 'abobaker',
        'email' => 'admin@admin.com',
        'password' => bcrypt('12345678'),
        'active' =>1,
        'type'=>"admin",
        ]);
    }
}
