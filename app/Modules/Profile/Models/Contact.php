<?php


namespace App\Modules\Profile\Models;


use App\Models\User;
use Database\Factories\ContactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = "contacts";

    protected $fillable = [
        'id', 'user_id', 'first_name', 'last_name', 'description',
        'address_street', 'address_city', 'address_state', 'address_country',
        'address_postal_code', 'national_code', 'web_site', 'instagram', 'created_at','phone_number',
        'updated_at'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return ContactFactory
     */
    protected static function newFactory()
    {
        return ContactFactory::new();
    }

}
