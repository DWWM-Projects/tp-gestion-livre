<?php

namespace Tp\Books;

use TP\Books\DB;

class Model
{
    private $attributes = [];

    public function __set($attribute, $value)
    {
        $this->attributes[$attribute] = $value;
    }

    public function __get($attribute)
    {
        return $this->attribute;
    }

    public function save()
    {
        $table = self::getTable();

        $columns = implode(', ', array_keys($this->attributes));
        $values = implode(', ', array_map(function () {
            return '?';
        }, $this->attribute));

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        return DB::insert($sql, array_values($this->attributes));
    }

    public static function all()
    {
        $table = self::getTable();

        $sql = "SELECT * FROM $table";

        return DB::select($sql, [], static::class);
    }

    private static function getTable()
    {
        return strtolower(substr(strrchr(get_called_class(), '\\'), 1)). 's';
    }

    public static function find($id)
    {
        $table = self::getTable();

        $sql = "SELECT * FROM $table WHERE id = :id";

        return DB::selectOne($sql, ['id' => $id], static::class);
    }
}