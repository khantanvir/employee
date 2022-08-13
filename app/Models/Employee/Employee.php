<?php

namespace App\Models\Employee;

use App\Models\Company\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";

    public function Company(){
        return $this->belongsTo(Company::class);
    }
}
