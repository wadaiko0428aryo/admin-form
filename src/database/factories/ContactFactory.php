<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Contact::class;


    public function definition()
    {
        // return [
        // 'first_name' => $this->faker->first_name,
        // 'last_name' => $this->faker->last_name,
        // 'gender' => $this->faker->gender,
        // 'email' => $this->faker->email,
        // 'tel_1' => $this->faker->tel_1,
        // 'tel_2' => $this->faker->tel_2,
        // 'tel_3' => $this->faker->tel_3,
        // 'address' => $this->faker->address,
        // 'building' => $this->faker->building,
        // 'categories' => $this->faker->categories,
        // 'content' => $this->faker->content
        // ];
    }
}
