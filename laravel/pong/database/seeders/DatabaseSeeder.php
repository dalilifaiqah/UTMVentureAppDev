<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();

         Listing::factory(6)->create();



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //    'title'=>'Laravel Senior Developer',
        //    'tags'=>'laravel, javascript',
        //    'company'=>'Azlina Entreprise',
        //    'location'=>'Batu Pahat, Johor',
        //    'email'=>'email@email.com',
        //      'website'=>'utmventure.com',
        //      'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut mi eu nibh dapibus dapibus ut sed arcu. Nulla sit amet purus sem. Fusce eleifend nisl quis posuere sodales. Proin aliquam malesuada erat, sed tincidunt nunc. Aliquam mollis lorem quam, et viverra elit dignissim laoreet. Ut in pretium quam. Morbi vitae volutpat lorem. Cras vel lectus tristique, interdum eros efficitur, bibendum purus. Sed dictum bibendum lobortis. Donec ac ex odio. Mauris pellentesque turpis sit amet nunc mattis, vitae pretium nunc fermentum. Nullam ut consequat justo. Quisque tempor odio urna, at porttitor felis rutrum in. Etiam pretium enim in tortor consequat, a ullamcorper risus convallis. Nam vel vulputate lacus, eu tincidunt turpis. Integer lacinia ullamcorper dolor ac tincidunt.'
        // ]);

        // Listing::create([
        //     'title'=>'Laravel Senior Developer',
        //      'tags'=>'laravel, javascript',
        //       'company'=>'Azlina Entreprise',
        //       'location'=>'Batu Pahat, Johor',
        //       'email'=>'email@email.com',
        //       'website'=>'utmventure.com',
        //       'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut mi eu nibh dapibus dapibus ut sed arcu. Nulla sit amet purus sem. Fusce eleifend nisl quis posuere sodales. Proin aliquam malesuada erat, sed tincidunt nunc. Aliquam mollis lorem quam, et viverra elit dignissim laoreet. Ut in pretium quam. Morbi vitae volutpat lorem. Cras vel lectus tristique, interdum eros efficitur, bibendum purus. Sed dictum bibendum lobortis. Donec ac ex odio. Mauris pellentesque turpis sit amet nunc mattis, vitae pretium nunc fermentum. Nullam ut consequat justo. Quisque tempor odio urna, at porttitor felis rutrum in. Etiam pretium enim in tortor consequat, a ullamcorper risus convallis. Nam vel vulputate lacus, eu tincidunt turpis. Integer lacinia ullamcorper dolor ac tincidunt.'
        //   ]);
    }
}
