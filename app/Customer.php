<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Fillable Example ( Allow for Mass Assingment)
    protected $fillable = ['name', 'email', 'status', 'company_id'];

    // Guarded Example (Not Allow for Mass Asignment)
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
        ];
    }
}
