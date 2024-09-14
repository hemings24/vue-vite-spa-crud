<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class PostFactory extends Factory
{
   public function definition(): array
   {
      $categories = Category::pluck('id');

      return[
         'title'       => $this->faker->word(),
         'content'     => $this->faker->paragraphs(asText:true),
         'category_id' => $categories->random()
      ];
   }
}