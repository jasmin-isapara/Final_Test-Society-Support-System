<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class UserComplain extends Model
{

    use HasFactory;

    protected $table = 'user_complains';

    protected $fillable = [
        'category_id','description','user_id','image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
