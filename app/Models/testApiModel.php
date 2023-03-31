<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testApiModel extends Model
{
    protected $table = "test_api";
    protected  $datadb = ["id", "name", "title"];
}
