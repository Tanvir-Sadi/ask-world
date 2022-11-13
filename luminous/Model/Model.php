<?php

namespace Luminous\Model;

use Luminous\DB\Database;

class Model extends Database
{
    public function create($attributes){
        $keyString =  implode(",", array_keys($attributes));
        $keyStringValues =  ":".implode(",:", array_keys($attributes));
        $tableName = $this->getTableNameFromClass();

        $sql = 'INSERT INTO '. $tableName.' ('.$keyString.') VALUES('.$keyStringValues.')';
        $stmt = $this->prepare($sql);
        return $stmt->execute($attributes);
    }

    public function isUnique($attribute, $value){
        $tableName = $this->getTableNameFromClass();
        $sql = 'SELECT COUNT(*) as c from '.$tableName.' WHERE '.$attribute. ' = "'.$value.'"';
        $stmt = $this->query($sql);
        return $stmt->fetch();
    }

    private function getTableNameFromClass(){
        $className = get_class($this);
        $className = explode("\\",$className);
        return strtolower(end($className));
    }
}