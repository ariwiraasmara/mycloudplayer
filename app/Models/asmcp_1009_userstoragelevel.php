<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asmcp_1009_userstoragelevel extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'asmcp_1009_userstoragelevel';

    //public $table = 'my101_user_login';
    protected $fillable = ["id_1009",
                            "id_1001",
                            "level",
                            "upgraded_lvl2_at",
                            "upgraded_lvl3_at",
                            "upgraded_lvl4_at",
                            "upgraded_lvl5_at",
                            "upgraded_lvl6_at",
                            "upgraded_lvl7_at",
                            "upgraded_lvl8_at",
                            "upgraded_lvl9_at",];

    public $timestamps = false;
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    public function asmcp1001() {
        // NamaModel::class, 'foreign_key', 'local_key'
        return $this->hasOne(asmcp_1001_userid::class, 'id_1001', 'id_1001');
    }

    public function level() {
        // NamaModel::class, 'foreign_key', 'local_key'
        return $this->hasOne(asmcp_1008_levelingsystem::class, 'level', 'id_1008');
    }
}
