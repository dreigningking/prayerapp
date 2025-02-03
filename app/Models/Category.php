<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name','slug','description','parent_id','photo','posts','forums','occasions','tools','status'];
    protected $appends = ['has_subcategories'];
    

    public function getImageAttribute(){
        return $this->photo ? config('app.url')."/storage/$this->photo": null;   
    }

    public function parent(){
        return $this->belongsTo(Self::class,'parent_id')->withDefault(['name'=> 'No Parent']);
    }
    public function subcategories(){
        return $this->hasMany(Self::class,'parent_id');
    }
    public function getHasSubcategoriesAttribute(){
        return $this->subcategories->count() ? true:false;
    }
    
}
