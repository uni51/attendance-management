<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; 

class Attendance extends Model
{
    // id, created_at 以外のカラムを更新可能とする
    protected $fillable = [
        'name',
        'email',
        'body',
        'flagged_at',
        'updated_at',
      ];
 
    /**
     * [QueryScope] 通報済みユーザの除外
     * ignoreFlagged()というクエリースコープを用意することで、SQLのwhere句として
     * `flagged_at` IS NULLという条件の役割を持たせることが可能になります
     * 
     * @param $query
     * @return mixed
     */
    public function scopeIgnoreFlagged($query)
    {
        return $query->where('flagged_at', null);
    }
    
    /**
     * 通報処理（flagged_at の更新）
     * 
     * @return bool
     */
    public function flag()
    {
        return $this->update( [ 'flagged_at' => now() ] );
    }
    

    /**
     * Gravatarからアバター画像を取得するメソッドをModel側に追加しておきます。
     * 
     * get[プロパティ名]Attribute()という命名規則でメソッド定義しておくことで、
     * スキーマには存在しないような独自の値を返却することも可能になります。
     */    
    public function getAvatarAttribute()
    {
        return sprintf( 'https://www.gravatar.com/avatar/%s?s=100', md5( strtolower( trim( $this->email ) ) ) );
    }    
}
