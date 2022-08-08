<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asmcp_1003_usersecurity extends Model {
    //
    use HasFactory;

    protected $guarded = [];
    protected $table = 'asmcp_1003_usersecurity';
    //public $table = 'my101_user_login';
    protected $fillable = ["id_1003",
                            "id_1001",
                            "device1",
                            "device_type1",
                            "device_os1",
                            "device2",
                            "device_type2",
                            "device_os2",];

    public $timestamps = false;
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    public function asmcp1001() {
        // NamaModel::class, 'foreign_key', 'local_key'
        return $this->hasOne(asmcp_1001_userid::class, 'id_1001', 'id_1001');
    }
}
