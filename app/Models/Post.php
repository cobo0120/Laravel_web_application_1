<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $table = "posts";//fillableの設定をちゃんと行う
   

    public function scopeSearch($query,$search)
    {
    if($search !== null){
        $search_split = mb_convert_kana($search, 's');//全角スペースを半角
        $search_split2 = preg_split('/[\s]+/',$search_split);//空白で区切る
        foreach($search_split2 as $value) {
        $query->where('purchase','like','%'.$value.'%'); }
    }
    return $query;
    }

    //子→親へのリレーション 
    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    // 子対親のリレーション
    public function item(){
        return $this->belongsTo(Item::class);
    }

    

}
