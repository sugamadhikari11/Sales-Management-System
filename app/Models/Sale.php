<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['date', 'customer_id', 'product_id', 'quantity', 'rate', 'amount', 'VAT', 'total_amount', 'remarks', 'payment', 'MOU'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
