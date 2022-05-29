<?php

namespace Tests\Feature\Controller\Profile;

use App\Models\User;
use App\Modules\Profile\Models\Contact;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function method_Profile_update_validation()
    {
        Session::start();

//        $this->withExceptionHandling();
        $contact = Contact::factory()->create();
        $user = User::factory()->create();
        $credentials = [
            'id' => $user->id,
            'email' => $user->email,
            "first_name" => $contact->first_name,
            "last_name" => $contact->last_name,
            "address" => $contact->address_street,
            "city" => $contact->address_city,
            "addressCountry" => $contact->address_country,
            "state" => $contact->address_state,
            "nationalCode" => $contact->national_code,
            "postalCode" => $contact->address_postal_code,
            "instagram" => $contact->instagram,
            "webSite" => $contact->web_site,
            "description" => $contact->description,
            'user_id' => $user->id,
            'phoneNumber' => $contact->phone_number,
            "_token" => csrf_token()

        ];
        $response = $this
            ->actingAs($user)
            ->post('profiles', $credentials);
        $response->assertStatus(302);

    }

    /** @test */
    public function method_Profile_update_validtion_failed()
    {
        Session::start();



        $contact = Contact::factory()->create();
        $user = User::factory()->create();
        $credentials = [
            'id' => $user->id,
            "_token" => csrf_token()
        ];
        $response = $this
        ->actingAs($user)
        ->post('profiles', $credentials);

        $response->assertStatus(302);

    }


}
