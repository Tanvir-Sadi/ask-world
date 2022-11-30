<?php

namespace Luminous\Model;

use Luminous\DB\Database;

class Model extends Database
{
    /**
     * @param $attributes
     * @return Model
     */
    public function create($attributes){
        $keyString =  implode(",", array_keys($attributes));
        $keyStringValues =  ":".implode(",:", array_keys($attributes));
        $tableName = $this->getTableNameFromClass();

        $sql = 'INSERT INTO '. $tableName.' ('.$keyString.') VALUES('.$keyStringValues.')';
        $stmt = $this->prepare($sql);
        $stmt->execute($attributes);
        return $this->find($this->lastInsertId());
    }

    public function destroy(){
        $tableName = $this->getTableNameFromClass();
        $sql = 'DELETE FROM '.$tableName.' WHERE id = :id';
        echo json_encode($sql);
        $stmt = $this->prepare($sql);
        $result=$stmt->execute(['id'=>$this->id]);
    }

    public function update(){
        echo json_encode($this);
    }

    public function attach($class){
        $tableName = $this->getTableNameFromClass();
        $foreignTableName = $class->getTableNameFromClass();
        $sql = "SET foreign_key_checks = 0;UPDATE ".$tableName." SET ".$foreignTableName."_id=".$class->id." WHERE id=".$this->id.";SET foreign_key_checks = 1;";
    }

    public function updateOrCreate($attributes, $values){
        $keyString =  implode("=? AND", array_keys($attributes));
        $valueString =  implode(",", array_values($attributes));
        $tableName = $this->getTableNameFromClass();

        $sql = 'SELECT * FROM '. $tableName. " WHERE ".$keyString;
        $stmt = $this->prepare($sql);
        $stmt->execute($valueString);

        $model = $stmt->fetch();

        if ($model){

        }

    }

    public function all(){
        $tableName = $this->getTableNameFromClass();

        $sql = 'SELECT * FROM '. $tableName;
        $stmt = $this->query($sql);
        return $stmt->fetchAll(self::FETCH_CLASS, get_class($this));
    }

    public function find($id){

        $tableName = $this->getTableNameFromClass();

        $sql = 'SELECT * FROM '. $tableName. " WHERE id=:id";
        $stmt = $this->prepare($sql);
        $stmt->execute(['id'=>$id]);
        return $stmt->fetchObject(get_class($this));
    }


    public function isUnique($attribute, $value){
        $tableName = $this->getTableNameFromClass();
        $sql = 'SELECT COUNT(*) as c from '.$tableName.' WHERE '.$attribute. ' = "'.$value.'"';
        $stmt = $this->query($sql);
        $result= $stmt->fetch();
        return $result->c;
    }

    private function getTableNameFromClass(){
        $className = get_class($this);
        $className = explode("\\",$className);
        return strtolower(end($className));
    }
}