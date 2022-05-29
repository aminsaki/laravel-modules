<?php

namespace Tests\Feature\Controller\Company;

use App\Models\User;
use App\Modules\Company\Models\Company;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CompanyControllerTest extends TestCase
{

    use RefreshDatabase;


    /** @test */
    public function method_Ccompany_create_validation_and_save_to_database()
    {
        Session::start();

//        $this->withoutMiddleware();
//        $this->withExceptionHandling();
        $company = Company::factory()->create();
        $user = User::factory()->create();
        $credentials = [
            'user_id' => $company->id,
            'email' => $user->email,
            "first_name" => $company->first_name,
            "last_name" => $company->last_name,
            "address" => $company->address,
            "description" => $company->description,
            'organization_name' => $company->organization_name,
            'mobile' => $company->mobile,
            'national_number' => $company->national_number,
            'gender' => $company->gender,
            "address_city" => $company->address_city,
            "address_country" => $company->address_country,
            "address_state" => $company->address_state,
            "address_postal_code" => $company->address_postal_code,
            'company_credit' => Carbon::now()->addDays(30),
            'identification_code' => Str::random(32),
            "_token" => csrf_token()
        ];
        $response = $this
            ->actingAs($user)
            ->post(route('Company.store'), $credentials);
        $response->assertStatus(302);

    }

    /** @test */
    public function method_Companys_create_validtion_failed()
    {
        Session::start();

        $user = User::factory()->create();
        $credentials = [
            'id' => $user->id,
            "_token" => csrf_token()
        ];
        $response = $this
            ->actingAs($user)
            ->post(route('Company.store'), $credentials);

        $response->assertStatus(302);

    }

    /** @test */
    public function method_Companys_delete_id()
    {
        $company = Company::factory()->create();
        $user = User::factory()->create();
        $response = $this
            ->actingAs($user)
        ->get(url('companys/delete',$company->id));
        $response->assertStatus(302);

    }
    /** @test */
    public function method_Companys_edit_id()
    {
        $company = Company::factory()->create();
        $user = User::factory()->create();
        $response = $this
            ->actingAs($user)
            ->get(url('companys/edit',$company->id));
        $response->assertStatus(200);

    }

}
