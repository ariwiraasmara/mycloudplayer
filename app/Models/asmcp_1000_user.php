<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asmcp_1000_user extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'asmcp_1000_user';
    //public $table = 'my101_user_login';
    protected $fillable = ["id",
                            "username",
                            "email",
                            "password",
                            "tlp",
                            "pin",];

    public $timestamps = false;
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    public function user() {
        // NamaModel::class, 'foreign_key', 'local_key'
        return $this->hasOne(User::class, 'id', 'id');
    }
}
