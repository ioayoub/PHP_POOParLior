<?php

require_once('libraries/database.php');
require_once('libraries/models/Model.php');

class Article extends Model
{
    protected $table = "articles";
}
