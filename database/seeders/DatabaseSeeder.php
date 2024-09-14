<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   public function run(): void
   {
      $this->call([
         CategorySeeder::class,
         PostSeeder::class,
         PermissionSeeder::class,
         RoleSeeder::class,
         UserSeeder::class
      ]);
   }
}