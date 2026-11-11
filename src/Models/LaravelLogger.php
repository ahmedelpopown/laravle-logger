<?php
namespace Ahmedelpopown\LaravelLogger\Models;


class LaravelLogger extends \Illuminate\Database\Eloquent\Model{

protected $table="laravel_Logger";
public $timestamps = false;

protected $fillable = ['name','description'];
}