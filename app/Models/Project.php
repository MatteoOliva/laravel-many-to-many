<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    public function getAbstract($n_chars = 30 ) {
        return (strlen($this->content) > $n_chars) ? subStr($this->content, 0, $n_chars) . '...' : $this->content;
    }
}
