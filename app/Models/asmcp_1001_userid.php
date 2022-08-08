<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asmcp_1001_userid extends Model {
    //
    use HasFactory;

    protected $guarded = [];
    protected $table = 'asmcp_1001_userid';
    //public $table = 'my101_user_login';
    protected $fillable = ["id_1001",
                            "id",
                            "nama",
                            "tgl_lahir",
                            "tlp",
                            "pin",
                            "photo",];

    public $timestamps = false;
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    public function user() {
        // NamaModel::class, 'foreign_key', 'local_key'
        return $this->hasOne(User::class, 'id', 'id');
    }
}
