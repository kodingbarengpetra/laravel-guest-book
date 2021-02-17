<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestBookPost extends Model
{
    protected $table = 'GuestBookPosts';
    protected $fillable = ['name', 'email', 'comment'];
    protected $guarded = [];
    
    const CREATED_AT = 'createdTime';
    const UPDATED_AT = 'updatedTime';
}
