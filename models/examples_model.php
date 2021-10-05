<?php

/**
 * Example model to operate a CRUD system.
 * It uses the database class to create an object
 * and connect via PDO to the database.
 * 
 * @param: $conn -> Connection to DB.
 * 
 * @method: __construct() -> Line 21 
 * @method: create( $title, $description ) -> Line 35
 * @method: read() -> Line 50 
 * @method: upload( $id, $title, $description ) -> Line 68
 * @method: delete( $id ) -> Line 84  
 * 
 */
class examples_model
{
    private $conn;

    public function __construct()
    {
        $this->conn = new database();
    }

    /** 
     * It INSERTS data in the database. It calls
     * the query(), binds the given parameters
     * and executes the action.
     * 
     * @param: $title -> Input title.
     * @param: $description -> Input description.
     *
     */
    public function create( $title, $description )
    {
    	$sql = "INSERT INTO crud VALUES( NULL, :title, :description )";
        $this->conn->query( $sql );
        $this->conn->bind( ':title', $title );
        $this->conn->bind( ':description', $description );
        $this->conn->execute();
    }

    /** 
     * A simple SELECT operation using the 
     * $conn attribute. It returns a set of 
     * rows with the DB data.
     *
     */
    public function read()
    {
        $sql = "SELECT * FROM crud";
        $this->conn->query( $sql );
        $rows = $this->conn->fetch_all();
        return $rows;
    }

    /** 
     * It UPDATES data from the database. It calls
     * the query(), binds the given parameters
     * and executes the action.
     * 
     * @param: $id -> Pointer to select the record.
     * @param: $title -> The new title.
     * @param: $description -> The new description.
     *
     */
    public function update( $id, $title, $description )
    {
    	$sql = "UPDATE crud SET title = :title, description = :description WHERE id = :id";
        $this->conn->query( $sql );
        $this->conn->bind( ':id', $id );
        $this->conn->bind( ':title', $title );
        $this->conn->bind( ':description', $description );
        $this->conn->execute();
    }

    /** 
     * It DELETES data from the database. 
     * 
     * @param: $id -> Pointer to select the record.
     *
     */
    public function delete( $id )
    {
        $sql = "DELETE FROM crud WHERE id = :id";
        $this->conn->query( $sql );
        $this->conn->bind( ':id', $id );
        $this->conn->execute();
    }

    /**
     * Example model. Models are meant to 
     * deal mainly with database operations
     * or complex logic.
     * 
     */
    public function page()
    {
    	$hello = 'Hi from the model !!!';
        return $hello;
    }
}

?>