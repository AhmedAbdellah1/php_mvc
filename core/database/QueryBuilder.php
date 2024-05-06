<?php

namespace core\database;

use PDO;
use PDOException;

class QueryBuilder
{
    public $pdo;

    public function __construct ( $pdo )
    {
        $this -> pdo = $pdo;
    }

    public function insert ( $table , $parameters )
    {
        $sql = sprintf ( 'INSERT INTO %s (%s) VALUES (%s)' , $table , implode ( ',' , array_keys ( $parameters ) ) , ':' . implode ( ',:' , array_keys ( $parameters ) ) );
        try {
            $statement = $this -> pdo -> prepare ( $sql );
            $statement -> execute ( $parameters );
        } catch ( PDOException $e ) {
            die( 'Connection failed for insert: ' . $e -> getMessage () );
        }
    }

    public function select ( $table , $parameters )
    {
        $sql = sprintf ( 'SELECT %s FROM %s' , $parameters , $table );
        try {
            $statement = $this -> pdo -> prepare ( $sql );
            $statement -> execute ();
            return $statement -> fetchAll ( PDO::FETCH_CLASS );
        } catch ( PDOException $e ) {
            die( 'Connection failed for select: ' . $e -> getMessage () );
        }
    }

    public function selectAll ( $table )
    {
        $sql = sprintf ( 'SELECT * FROM %s' , $table );
        try {
            $statement = $this -> pdo -> prepare ( $sql );
            $statement -> execute ();
            return $statement -> fetchAll ( PDO::FETCH_CLASS );
        } catch ( PDOException $e ) {
            die( 'Connection failed for selectAll: ' . $e -> getMessage () );
        }
    }

    public function find ( $table , $id )
    {
        $sql = sprintf ( 'SELECT * FROM %s WHERE id = :id' , $table );
        try {
            $statement = $this -> pdo -> prepare ( $sql );
            $statement -> execute ( [ 'id' => $id ] );
            return $statement -> fetch ( PDO::FETCH_OBJ);
        } catch ( PDOException $e ) {
            die( 'Connection failed for find: ' . $e -> getMessage () );
        }
    }

    public function update ( $table , $set , $where , $parameters )
    {
        $sql = sprintf ( 'UPDATE %s SET %s WHERE %s' , $table , $set , $where );
        try {
            $statement = $this -> pdo -> prepare ( $sql );
            $statement -> execute ( $parameters );
        } catch ( PDOException $e ) {
            die( 'Connection failed for update: ' . $e -> getMessage () );
        }
    }

    public function delete ( $table , $id )
    {
        $sql = sprintf ( 'DELETE FROM %s WHERE id = :id' , $table );
        try {
            $statement = $this -> pdo -> prepare ( $sql );
            $statement -> execute ( [ 'id' => $id ] );
        } catch ( PDOException $e ) {
            die( 'Connection failed for delete: ' . $e -> getMessage () );
        }
    }

}