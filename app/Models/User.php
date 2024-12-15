<?php

namespace App\Models;
use App\Models\Backend\Employee;
use App\Models\Backend\Staff;
use App\Models\Backend\Student;
// use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Teacher;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role',
        'unique_id',
        'name',
        'email',
        'mobile',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function teacher(){
        return $this->hasOne(Teacher::class);
    }


    public function student(){
        return $this->hasOne(Student::class);
    }


    public function employee(){
        return $this->hasOne(Employee::class);
    }
}
