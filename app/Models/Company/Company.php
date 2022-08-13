<?php

namespace App\Models\Company;

use App\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = "companies";

    public function Employees(){
        return $this->hasMany(Employee::class);
    }
}
