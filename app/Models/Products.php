<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'type_id',
        'name',
        'price',
        'material',
        'brand_id',
        'image',
        'sale_id'
    ];
    public function brand(): BelongsTo{
        return $this->belongsTo(Brands::class, 'brand_id', 'brand_id');
    }
    public function images(): HasMany{
        return $this->hasMany(Images::class, 'product_id');
    }
    public function carts(): HasMany{
        return $this->hasMany(Carts::class, 'product_id');
    }
    public function orderDetails(): HasMany{
        return $this->hasMany(OrderDetails::class, 'product_id');
    }
    public function productType(): BelongsTo {
        return $this->belongsTo(ProductTypes::class, 'type_id', 'type_id');
    }
    public function sale(): BelongsTo{
        return $this->belongsTo(Sales::class, 'sale_id', 'sale_id');
    }
    public $timestamps = false;

}
