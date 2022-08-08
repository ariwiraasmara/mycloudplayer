<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asmcp_1008_levelingsystem extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'asmcp_1008_levelingsystem';

    //public $table = 'my101_user_login';
    protected $fillable = ["id",
                            "level",
                            "memory",
                            "monthly_pay_usd",
                            "yearly_pay_usd",
                            "lifetime_pay_usd",];


    public $timestamps = false;
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
}
