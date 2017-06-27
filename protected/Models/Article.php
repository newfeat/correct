<?php

namespace App\Models;

use App\Db;
use App\Model;

/**
 * Class Article
 * @package App\Models
 */
class Article
    extends Model
{
    protected static $table = 'news';

    /**
     * @param $key
     * @return mixed
     */
    public function __get($key)
    {
        if ($key === 'author' && isset($this->author)) {
            return Author::findById($this->author_id);
        }

        return $this->data[$key];
    }

    /**
     * @param $key
     * @return bool
     */
    public function __isset($key)
    {
        if ($key === 'author') {
            return isset($this->author_id);
        }

        return isset($this->data[$key]);
    }
}