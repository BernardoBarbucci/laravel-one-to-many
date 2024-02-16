<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            [
                'name' => 'Gruppo 1',
                'quantity' => 10,
                'color' => '#FF0000'
            ],
            [
                'name' => 'Gruppo 2',
                'quantity' => 5,
                'color' => '#00FF00'
            ],
            [
                'name' => 'Gruppo 3',
                'quantity' => 8,
                'color' => '#0000FF'
            ],
            [
                'name' => 'Gruppo 4',
                'quantity' => 12,
                'color' => '#FFFF00'
            ],
            [
                'name' => 'Gruppo 5',
                'quantity' => 6,
                'color' => '#FF00FF'
            ],
            [
                'name' => 'Gruppo 6',
                'quantity' => 15,
                'color' => '#00FFFF'
            ],
            [
                'name' => 'Gruppo 7',
                'quantity' => 3,
                'color' => '#000000'
            ],
            [
                'name' => 'Gruppo 8',
                'quantity' => 9,
                'color' => '#FFFFFF'
            ],
            [
                'name' => 'Gruppo 9',
                'quantity' => 7,
                'color' => '#336699'
            ],
            [
                'name' => 'Gruppo 10',
                'quantity' => 11,
                'color' => '#663399'
            ],
        ];

        foreach ($groups as $groupData) {
            Group::create($groupData);
        }
    }
}
