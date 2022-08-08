<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asmcp_1004_userfolders extends Model {
    //
    use HasFactory;

    protected $guarded = [];
    protected $table = 'asmcp_1004_userfolder';
    //public $table = 'my101_user_login';
    protected $fillable = ["id_1004",
                            "id_1001",
                            "foldername",
                            "ket",];

    public $timestamps = false;
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    public function asmcp1001() {
        // NamaModel::class, 'foreign_key', 'local_key'
        return $this->hasOne(asmcp_1001_userid::class, 'id_1001', 'id_1001');
    }
}
