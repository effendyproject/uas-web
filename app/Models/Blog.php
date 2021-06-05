<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['date','title','sub_title','slug','content','is_active'];
    protected $appends = ['truncate_content'];

    public function getTruncateContentAttribute() {
        return Str::limit($this->content);
    }
}
