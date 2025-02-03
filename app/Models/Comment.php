<?php

namespace App\Models;

use App\Models\User;
use App\Observers\CommentObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','body','abuse','rating','best','commentable_id','commentable_type','approved_by','approved_at'];
    protected $appends = ['type'];
    public static function boot(){
        parent::boot();
        parent::observe(new CommentObserver);
    }

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getTypeAttribute(){
        switch($this->commentable_type){
            case 'App\Models\Post':
                return 'Post';
            case 'App\Models\Forum':
                return 'Forum';
            case 'App\Models\Event':
                return 'Event';
            case 'App\Models\Service':
                return 'Service';
            case 'App\Models\Project':
                return 'Project';
            case 'App\Models\User':
                return 'User';
            default:
                return 'Unknown';
        }
    }
}
