<?php

namespace App\Modules\Profile\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Modules\Profile\Http\Requests\ProfileRequest;
use App\Modules\Profile\Models\Contact;
use App\Modules\Profile\Models\EntityPhoneNumber;
use App\Modules\Profile\Models\PhoneNumber;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class  ProfileController extends Controller
{

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        return view('Profile::Profile', [
            'result' => User::with('contacts')->find(Auth::user()->id),
        ]);
    }

    /**
     * @param ProfileRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(ProfileRequest $req)
    {
        $user_id = Auth::user()->id;
        $this->setUser($req, $user_id);
        $this->setContent($req, $user_id);

        return view('Profile::Profile', [
            'result' => User::with('contacts')->find(Auth::user()->id),
            'success' => trans('Profile::validation.des_save')
        ]);

    }

    /**
     * @param ProfileRequest $req
     * @return mixed
     */
    private function setContent(ProfileRequest $req, $user_id)
    {
        $date = [
            "first_name" => $req->first_name,
            "last_name" => $req->last_name,
            "address_street" => $req->address,
            "address_city" => $req->city,
            "address_country" => $req->addressCountry,
            "address_state" => $req->state,
            "national_code" => $req->nationalCode,
            "address_postal_code" => $req->postalCode,
            "instagram" => $req->instagram,
            "web_site" => $req->webSite,
            "description" => $req->description,
            'user_id' => $user_id,
            'phone_number' => $req->phoneNumber,
        ];
        $content = Contact::where(['user_id' => $user_id])->first();
        $result = ($content) ? $content->update($date) : Contact::create($date);


        return $result;
    }


    /**
     * @param ProfileRequest $req
     */
    private function setUser(ProfileRequest $req, $user_id)
    {
        $user = User::where(['id' => $user_id])->update([
            'email' => $req->email,
            'name' => $req->first_name . '' . $req->last_name
        ]);


    }

}
