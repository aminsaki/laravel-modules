<?php

namespace Database\Factories;

use App\Models\User;
use App\Modules\Company\Models\Company;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyFactory extends Factory
{

    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create();

        return [
            'user_id'=> $user->id,
            'organization_name' => $this->faker->name,
            'email' => $this->faker->name() . '@gmail.com',
            'mobile' => $this->faker->phoneNumber,
            'national_number' => $this->faker->name,
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'gender' => 'man',
            "address" => $this->faker->address(),
            "address_city" => $this->faker->city(),
            "address_country" => $this->faker->country(),
            "address_state" => $this->faker->name(),
            "address_postal_code" => $this->faker->address(),
            "description" => $this->faker->text(),
            'company_credit' => Carbon::now()->addDays(10),
            'identification_code' => Str::random(32)

        ];

    }
}
