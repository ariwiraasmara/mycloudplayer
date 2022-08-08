<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asmcp_1006_userfiles extends Model {
    //
    use HasFactory;

    protected $guarded = [];
    protected $table = 'asmcp_1006_userfile';
    //public $table = 'my101_user_login';
    protected $fillable = ["id_1006",
                            "id_1001",
                            "filename",
                            "genre",
                            "artist",
                            "album",
                            "composer",
                            "publisher",
                            "ket",
                            "favorited",
                            "folder",
                            "playlist",];

    public $timestamps = false;
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    public function asmcp1001() {
        // NamaModel::class, 'foreign_key', 'local_key'
        return $this->hasOne(asmcp_1001_userid::class, 'id_1001', 'id_1001');
    }

    public function folder() {
        // NamaModel::class, 'foreign_key', 'local_key'
        return $this->hasOne(asmcp_1004_userfolders::class, 'id_1004', 'folder');
    }

    public function playlist() {
        // NamaModel::class, 'foreign_key', 'local_key'
        return $this->hasOne(asmcp_1005_userplaylists::class, 'id_1005', 'playlist');
    }
}
