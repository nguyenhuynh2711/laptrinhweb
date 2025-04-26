<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'price',
        'quantity',
        'description',
    ];

    /**
     * Lấy các chi tiết đơn hàng liên quan đến sản phẩm
     */
    public function orderDetails(): HasMany
    {
        return $this->hasMany(OrderDetail::class);
    }

    /**
     * Accessor để định dạng giá tiền
     */
    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 0, ',', '.') . ' đ';
    }

    /**
     * Kiểm tra còn hàng hay không
     */
    public function isInStock()
    {
        return $this->quantity > 0;
    }
}
