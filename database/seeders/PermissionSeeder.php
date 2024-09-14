<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
   public function run(): void
   {
      Permission::create(['name' => 'posts.create']);
      Permission::create(['name' => 'posts.update']);
      Permission::create(['name' => 'posts.delete']);
   }
}