<?php

namespace App\Models;

use App\Model;

/**
 * Class Author
 * @package App\Models
 */
class Author extends Model
{
    /**
     * @var string
     */
    protected static $table = 'authors';
    /**
     * @var
     */
    public $author;

}
