<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class counts extends Model
{
    use HasFactory;
    protected $fillable = [ 'team_work','experience' ,'clients' , 'award_won' ];
}
