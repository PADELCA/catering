<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orderitem extends Model
{
    //
      protected $table = 'orderitems';

    protected $fillable = [
        'order_id',
        'menu_id',
        'quantity',
        'price',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function item()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::saved(function ($orderItem) {
            // Update order total price when item is saved
            if ($orderItem->order) {
                $totalPrice = $orderItem->order->calculateTotalPrice();
                $orderItem->order->updateQuietly(['total_price' => $totalPrice]);
            }
        });

        static::deleted(function ($orderItem) {
            // Update order total price when item is deleted
            if ($orderItem->order) {
                $totalPrice = $orderItem->order->calculateTotalPrice();
                $orderItem->order->updateQuietly(['total_price' => $totalPrice]);
            }
        });
    }

    
}
