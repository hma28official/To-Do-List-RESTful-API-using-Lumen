<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
   protected $table = 'todolist'; //nama table yang kita buat lewat migration adalah todo
}