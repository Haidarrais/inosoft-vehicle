<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model{
    protected $table = "motorcycles";

    protected $fillable = [
        'vehicle_id',
        'transmision_id',
        'suspension_type'
    ];

    // public $timestamps = false;
}