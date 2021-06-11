<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = array(
        'content' => 'required | max:20'
    );

    public function getData() {
        return $this->id.':'.$this->created_at.':'.$this->content;
    }
}
