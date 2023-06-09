<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Feature extends Model
{
    use HasFactory;

    protected $table = "features";

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

<<<<<<< HEAD
    public function permissionFeature()
    {
        return $this->belongsToMany(Permission::class,'permission_features');
=======
    public function features()
    {
        return $this->belongsToMany(Permission::class,'feature_id','id');
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
    }
}
