<?php

namespace Database\Factories;

use App\Models\User;
use App\Modules\Profile\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContactFactory extends Factory
{

    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create();
        return [
            "first_name" => $this->faker->firstName(),
            "last_name" => $this->faker->lastName(),
            "address_street" => $this->faker->address(),
            "address_city" => $this->faker->city(),
            "address_country" => $this->faker->country(),
            "address_state" => $this->faker->name(),
            "address_postal_code" => $this->faker->address(),
            "instagram" => $this->faker->name(),
            "web_site" => $this->faker->name(),
            "description" => $this->faker->title(),
            'user_id' =>$user->id,
             'national_code'=> $this->faker->name,
            'phone_number' => $this->faker->phoneNumber(),
        ];
    }


}
