<?php


namespace Tests\Feature\Controller\Company;


use App\Models\User;
use App\Modules\Company\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LicenseControllerTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function method_company_credit_license_token()
    {
        $company = Company::factory()->create();
        $user = User::factory()->create();
        $credentials = [
            'token' => $company->identification_code,
        ];
        $response = $this
            ->actingAs($user, 'api')
            ->postJson('api/companys/license', $credentials);

        $response->assertStatus(200);

    }
    /** @test */
    public function method_company_Not_credit_license_token()
    {
        $company = Company::factory()->create();
        $user = User::factory()->create();
        $credentials = [
            'token' => '',
        ];
        $response = $this
            ->actingAs($user, 'api')
            ->postJson('api/companys/license', $credentials);

        $response->assertStatus(422);

    }
}
