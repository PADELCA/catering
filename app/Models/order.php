<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'users_id',
        'order_date',
        'total_price',
        'status',
        'payment_status',
        'description',
    ];

    protected $casts = [
        'order_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Calculate total price from order items
     */
    public function calculateTotalPrice()
    {
        return $this->items->sum(function ($item) {
            return $item->quantity * $item->price;
        });
    }

    /**
     * Boot method to auto-calculate total price
     */
    protected static function boot()
    {
        parent::boot();

        static::saved(function ($order) {
            // Calculate total price after saving
            $totalPrice = $order->calculateTotalPrice();
            if ($order->total_price != $totalPrice) {
                $order->updateQuietly(['total_price' => $totalPrice]);
            }
        });
    }
}