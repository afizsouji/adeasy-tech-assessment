<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => Role::ADMIN,
                'name' => 'admin',
                'created_at' => '2021-12-04 16:00:00',
                'updated_at' => '2021-12-04 16:00:00',
            ],
            [
                'id' => Role::MEDIA_OWNER,
                'name' => 'media owner',
                'created_at' => '2021-12-04 16:00:00',
                'updated_at' => '2021-12-04 16:00:00',
            ],
            [
                'id' => Role::ADVERTISER,
                'name' => 'advertiser',
                'created_at' => '2021-12-04 16:00:00',
                'updated_at' => '2021-12-04 16:00:00',
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}
