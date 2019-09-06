<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //Modelクラスから継承されることでDBへの操作を行えるようにする
    //どのDBへの接続を行うかは.envファイルに記述されている
    protected $fillable = [
        'title',
        'user_id'
    ];

    public function getByUserId($id)
    {
        return $this->where('user_id', $id)->get();
    }
}
