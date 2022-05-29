<?php


namespace App\Modules\Company\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Company\Http\Requests\CompanyRequest;
use App\Modules\Company\Models\Company;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|
     * \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('Company::createCompany');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
    public function show()
    {
        return view('Company::company',
            [
                'result' => Company::with('user')->orderBy('updated_at', 'desc')->get(),
                'count' => Company::count()
            ]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CompanyRequest $request)
    {

        $result = Company::create(
            [
                'user_id' => Auth::user()->id,
                'national_id', $request->national_id,
                'organization_name' => $request->organization_name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'national_number' => $request->national_number,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'company_credit' => Carbon::now()->addDays(30),
                'address' => $request->address,
                'address_city' => $request->address_city,
                'address_state' => $request->address_state,
                'address_country' => $request->address_country,
                'address_postal_code' => $request->address_postal_code,
                'description' => $request->description,
                'identification_code' => Str::random(32)
            ]

        );

        if ($result) {
            return redirect('companys/show')->with(['success' => trans('Company::validation.des_save')]);
        }

        return redirect()->back()->with(['errors' => trans('Company::validation.des_error')]);


    }

    public function update(CompanyRequest $request)
    {
        $result = Company::find($request->id)->update([
                'user_id' => Auth::user()->id,
                'national_id', $request->national_id,
                'organization_name' => $request->organization_name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'national_number' => $request->national_number,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'address' => $request->address,
                'address_city' => $request->address_city,
                'address_state' => $request->address_state,
                'address_country' => $request->address_country,
                'address_postal_code' => $request->address_postal_code,
                'description' => $request->description,
            ]);

        if ($result) {
            return redirect('companys/show')->with(['success' => trans('Company::validation.des_save')]);
        }

        return redirect()->back()->with(['errors' => trans('Company::validation.des_error')]);



    }


    /**
     * @param Company $company
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Company $company)
    {
        $result = $company->delete();
        if ($result) {
            return redirect()->back()->with(['success' => trans('Company::validation.des_delete')]);
        }
        return redirect()->back()->with(['error' => trans('Company::validation.des_error')]);

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|
     * \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        return view('Company::editCompany',[
            'result' => Company::with('user')->find($id),
        ]);
    }


}
