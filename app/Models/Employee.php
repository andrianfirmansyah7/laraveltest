<?php

namespace App\Models;

use App\Casts\EncryptCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  use HasFactory;
  protected $table = "employees";
  protected $casts = ['salary' => EncryptCast::class];
}
