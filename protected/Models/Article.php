<?php

require __DIR__ . '/../Model.php';

class Article
    extends Model
{
    protected static $table = 'news';

    public $title;
    public $lead;
    public $describtion;
    public $image;

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT 3';
        $db = new Db();
        return $db->query($sql, [], static::class);
    }

}