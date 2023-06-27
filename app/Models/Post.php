<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function categories()
    {
        /*$rez = [];
        $post_categories = PostCategory::where('post_id', $this->id)->get();
        foreach($post_categories as $pc) {
            $rez[] = Category::where('id', $pc->category_id);
        }
        return $rez;*/
        return $this->belongsToMany('App\Models\Category', 'post_categories');
    }
}