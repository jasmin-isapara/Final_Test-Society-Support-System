<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Complain extends Model
{
    use HasFactory;

    protected $table = 'complains';

    protected $fillable = [
        'category_id','name','slug','description','date','status','created_by'
    ];

    // protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id'); //give the foreign key & primary commmand
    }

    public function user()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'complain_id','id');
    }
}
