<?php

namespace App\Modules\Company\Models;

use App\Models\User;
use Database\Factories\CompanyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = "companys";

    protected $fillable = [
        'id',  'organization_name', 'user_id',
        'email', 'mobile', 'national_number',
        'first_name', 'last_name', 'gender',
        'company_credit', 'created_at', 'updated_at',
        'address', 'address_city', 'address_state',
        'address_country', 'address_postal_code', 'description', 'identification_code'
    ];

    protected $casts = [
        'company_credit' => 'timestamp'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return mixed
     */
    protected static function newFactory()
    {
        return  CompanyFactory::new();
    }
}
