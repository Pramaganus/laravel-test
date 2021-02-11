<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Orders
 * @property int $id
 * @property int $contact_id
 * @property string $product
 * @property float $price

 */
class Orders extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $table = 'orders';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'product',
        'price',
        'contact_id'
    ];

    /**
     * @return hasOne
     */
    public function Contact(): hasOne
    {
        return $this->hasOne(Contact::class, 'id', 'contact_id');
    }
}
