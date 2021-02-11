<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Address
 *

 * @property int $id
 * @property int $contact_id
 * @property string $address

 */
class Address extends Model
{
    protected $guarded = [
        'id'
    ];

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Contact(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Address::class);
    }

}
