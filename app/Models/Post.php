<?php

namespace App\Models;
use App\Models\Rating;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content','image','user_id'];


    public function rating($post_id){

       return Rating::where('post_id',$post_id)->avg('rating');

    }

    public function author(){

        return $this->belongsTo(User::class,'user_id', 'id');

    }
}
