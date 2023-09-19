<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\month;
use App\Models\Program;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
            'posision' => 'pimpinan'
        ]);

        $months = [
            ['name' => 'januari', 'month' => 1],
            ['name' => 'februari', 'month' => 2],
            ['name' => 'maret', 'month' => 3],
            ['name' => 'april', 'month' => 4],
            ['name' => 'mei', 'month' => 5],
            ['name' => 'juni', 'month' => 6],
            ['name' => 'juli', 'month' => 7],
            ['name' => 'agustus', 'month' => 8],
            ['name' => 'september', 'month' => 9],
            ['name' => 'oktober', 'month' => 10],
            ['name' => 'november', 'month' => 11],
            ['name' => 'desember', 'month' => 12],
        ];

        foreach ($months as $month) {
            Month::create($month);
        }

        $programs = [
            ['name' => 'spm'],
            ['name' => 'gizi'],
            ['name' => 'kesling'],
            ['name' => 'kia'],
            ['name' => 'p2p'],
            ['name' => 'perkesmas'],
            ['name' => 'promkes'],
            ['name' => 'kesjiwa'],
            ['name' => 'pkpr']
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}
