<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;

/**
 * App\Orders
 * @property int $id
 * @property int $contact_id
 * @property string $product
 * @property float $price
 */

class Orders extends Model
{
    use Notifiable;

    protected $guarded = [
        'id'
    ];

    protected $table = 'orders';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'product',
        'price',
        'contact_id'
    ];

    /**
     * @var
     */
    public $created_at;

    /**
     * @return hasOne
     */
    public function Contact(): hasOne
    {
        return $this->hasOne(Contact::class, 'id', 'contact_id');
    }
}
