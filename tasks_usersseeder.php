<?php

namespace Database\Seeders;
use App\Models\muser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tasks_usersseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        muser::factory()->count(200)->hastask(1)->create();
    }
}
