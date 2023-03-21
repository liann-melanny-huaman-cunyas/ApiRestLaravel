<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /*public fuction getElnombredetuprocesoquedebeirenminusculaenindexAttribute */
    public function getExcerptAttribute(){
        return substr($this->content,0,20);
    }

    public function getCreatedAtAtAttribute(){
        /*return $this->created_at->format('d/m/Y');*/
        return $this->created_at->diffForHumans();
    }

    public function User(){
        return $this ->belongsTo(User::class);
    }
}
