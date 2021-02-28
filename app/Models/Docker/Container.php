<?php

namespace App\Models\Docker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    protected $fillable = ["name", "type", "containers"];

    public function getContainersAttribute($value) {
        $containers = $value;
        if(is_string($containers) && $containers !== "") {
            return json_decode($value, true);
        } else {
            return [];
        }
    }

    public function setContainersAttribute($value) {
        $this->attributes['containers'] = json_encode($value);
    }

}
