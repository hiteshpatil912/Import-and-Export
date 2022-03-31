<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oversea extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'series_Refreance','period','data_Value','status','units','magntude','subject','group','series_Title_1','series_Title_2','series_Title_3','series_Title_4','series_Title_5'
    ];
}
