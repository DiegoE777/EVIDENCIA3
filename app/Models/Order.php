<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = ['invoice_number', 'customer_name', 'customer_number', 'fiscal_data', 'delivery_address', 'notes', 'status_id'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
