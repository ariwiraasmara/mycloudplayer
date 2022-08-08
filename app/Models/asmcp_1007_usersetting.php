<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asmcp_1007_usersetting extends Model {
    //
    use HasFactory;

    protected $guarded = [];
    protected $table = 'asmcp_1007_usersetting';
    //public $table = 'my101_user_login';
    protected $fillable = ["id_1007",
                            "id_1001",
                            "theme",
                            "text",
                            "bar",
                            "wall_img",
                            "wall_heigth",
                            "wall_width",
                            "wall_size",
                            "wall_position",
                            "wall_repeat",
                            "wall_attachment",];


    public $timestamps = false;
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    public function asmcp1001() {
        // NamaModel::class, 'foreign_key', 'local_key'
        return $this->hasOne(asmcp_1001_userid::class, 'id_1001', 'id_1001');
    }
}
