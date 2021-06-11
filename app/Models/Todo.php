<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todo_table';
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = array(
        'content' => 'required | max:20'
    );

    public function getData() {
        return $this->created_at.':'.$this->content;
    }
}
