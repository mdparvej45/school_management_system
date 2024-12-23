<?php

namespace App\Models\Backend;

use App\Models\User;
use App\Traits\HasImages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory, HasImages;

    protected $guarded = [ ];

    public function user()
{
    return $this->belongsTo(User::class);
}
}
