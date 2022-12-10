<?php

namespace Database\Factories;
use App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
     protected $model = Customer::class;
    public function definition()
    {
        $type = $this->faker->randomElement(['X','Y']);
        $name = $type=='X' ? $this->faker->name() : $this ->faker->company();
        return [
            'name'=>$name,
            'type'=>$type,
            'email'=>$this->faker->email(),
            'address'=>$this->faker->streetAddress(),
            'city'=> $this->faker->city(),
            'state'=>$this->faker->state(),
            'post_code'=>$this->faker->postCode()
            //
        ];
    }
}
