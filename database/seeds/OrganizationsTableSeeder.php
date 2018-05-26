<?php

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizations')->insert(
            [
                'id' => '1',
                'org_name' => 'elektrons',
                'description' => 'the best org in the world',
                'is_public' => true,
            ]
        );

         DB::table('organizations')->insert(
            [
                'id' => '2',
                'org_name' => 'redbolts',
                'description' => 'pula nga linti',
                'is_public' => true,
            ]
        );

          DB::table('organizations')->insert(
            [
                'id' => '3',
                'org_name' => 'clovers',
                'description' => 'clovers go go go',
                'is_public' => true,
            ]
        );

           DB::table('organizations')->insert(
            [
                'id' => '4',
                'org_name' => 'skimmers',
                'description' => 'mga agi, agi agi agi',
                'is_public' => true,
            ]
        );
    }
}
