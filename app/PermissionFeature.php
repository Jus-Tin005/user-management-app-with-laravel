<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionFeature extends Model
{
    use HasFactory;
    protected $fillable = ['feature_id','permission_id'];
}
