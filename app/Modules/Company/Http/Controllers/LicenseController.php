<?php


namespace App\Modules\Company\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Company\Models\Company;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function statusLicense(Request $request)
    {
        $result = Company::where(['identification_code' => $request->token])->first();
        if (!$result)
            return response()->json(['status' => 'false', 'description' => trans('Company::validation.license_error')], 422);

        $credit = new Verta($result->company_credit);
        if (time() < $result->company_credit) {
            return response()->json([
                'status' => 'true',
                'description' => "اعتبار این شرکت تا" . $credit->formatDate() . "می باشد",
            ], 200);
        }

        return response()->json([
            'status' => 'false',
            'des_errors' => trans('Company::validation.license_error')
        ], 200);

    }
}
