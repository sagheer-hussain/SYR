<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customers;
class Cars extends Model
{
    protected $table = "cars";
    protected $fillable = [
    
        'car_name',
        'car_model',
        'car_no',
        'car_rent',
        'customer_id',
        
    
    ];

    public function customers()
    {
        return $this->hasOne(Customers);
    }

}
