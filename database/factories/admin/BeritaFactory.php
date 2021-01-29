<?php

namespace Database\Factories\admin;

use App\Models\admin\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Berita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        return [
            'user_id' => rand(1, 7),
            'title' => $title = $this->faker->sentence(2),
            'slug' => \Str::slug($title),
            'image' => $this->faker->sentence(3),
            'content' => $content = $this->faker->sentence(30),
            'summary' => \Str::limit($content, 99, '.'),
        ];
    }
}
