<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert(
            [
                'id' => '1',
                'position' => 'Governor',
                'is_execom' => true,
            ]
        );
        DB::table('positions')->insert(
            [
                'id' => '2',
                'position' => 'President',
                'is_execom' => true,
            ]
        );
        DB::table('positions')->insert(
            [
                'id' => '3',
                'position' => 'VP Internal',
                'is_execom' => true,
            ]
        );
        DB::table('positions')->insert(
            [
                'id' => '4',
                'position' => 'VP External',
                'is_execom' => true,
            ]
        );
        DB::table('positions')->insert(
            [
                'id' => '5',
                'position' => 'Secretary',
                'is_execom' => true,
            ]
        );
        DB::table('positions')->insert(
            [
                'id' => '6',
                'position' => 'Assistant Secretary',
                'is_execom' => true,
            ]
        );
        DB::table('positions')->insert(
            [
                'id' => '7',
                'position' => 'Treasurer',
                'is_execom' => true,
            ]
        );
        DB::table('positions')->insert(
            [
                'id' => '8',
                'position' => 'P.R.O.',
                'is_execom' => true,
            ]
        );
        DB::table('positions')->insert(
            [
                'id' => '9',
                'position' => 'Execom',
                'is_execom' => true,
            ]
        );
        DB::table('positions')->insert(
            [
                'id' => '10',
                'position' => 'Member',
                'is_execom' => false,
            ]
        );
        DB::table('positions')->insert(
            [
                'id' => '11',
                'position' => 'Adviser',
                'is_execom' => true,
            ]
        );
        DB::table('positions')->insert(
            [
                'id' => '12',
                'position' => 'Co-Adviser',
                'is_execom' => true,
            ]
        );
    }
}
