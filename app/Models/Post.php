<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Rejection;
use App\Observers\PostObserver;
use Illuminate\Database\Eloquent\Model;
use Mpociot\Versionable\VersionableTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory,SoftDeletes;

    protected $keepOldVersions = 10;
    protected $fillable = ['title','slug','user_id','summary','photo','body','category_id','tags','published_at','status','meta_description','main_keyphrase','related_keyphrases','mtbc','approved_at','approved_by'];  
    protected $casts = ['published_at'=> 'datetime'];

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'title',
                'separator' => '_'
            ]
        ];
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function getImageAttribute(){
        return $this->photo ? config('app.backend_url')."/storage/$this->photo": null;   
    }


    

}
