<?php

/**
 * Database connection. It contains various basic 
 * methods to HANDLE DB CONNECTIONS and OPERATIONS.
 * 
 * @param: $host        -> Host name for connection.
 * @param: $user        -> Username for connection.
 * @param: $pass        -> Password for connection.
 * @param: $datb        -> Database name.
 * @param: $conn        -> Stored connection.
 * @param: $statement   -> Stores SQL statements to run  
 *                         some methods of this class.
 * @param: $conn_error  -> Stores connection errors generated  
 *                         by methods of this class.
 * @param: $query_error -> Stores query errors generated 
 *                         by methods of this class.
 * 
 * @method: __construct()                        -> Line 45 
 * @method: get_connection()                     -> Line 68 
 * @method: query( $query )                      -> Line 74 
 * @method: bind( $param, $value, $type = NULL ) -> Line 80  
 * @method: exectute()                           -> Line 110 
 * @method: fetch_all()                          -> Line 122 
 * @method: fetch_one()                          -> Line 129 
 * @method: count_rows()                         -> Line 136 
 * @method: last_insert_id()                     -> Line 142 
 * @method: begin_transactions()                 -> Line 147 
 * @method: cancel_transactions()                -> Line 165 
 * @method: end_transactions()                   -> Line 175
 * 
 */
class database
{
    private $host;
    private $user;
    private $pass;
    private $datb;
    private $conn;
    private $statement;
    private $conn_error;
    private $query_error;

    /** __construct sets a PDO CONNECTION and saves it as an attribute. */
    public function __construct()
    {
        $this->host = DBHOST;
        $this->user = DBUSER;
        $this->pass = DBPASS;
        $this->datb = DBNAME;
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->datb;

        /** Connection options. */
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
        );
        try {
            /** Creating the PDO connection. */
            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            /** Message, in case of error. */
            $this->conn_error = $e->getMessage();
            trigger_error($this->conn_error);
        }
    }

    public function get_connection()
    {
        /** Returning the PDO CONNECTION, for EXTERNAL use in other classes/functions. */
        return $this->conn;
    }

    public function query($query)
    {
        /** PREPARING QUERY and saving it as an attribute. */
        $this->statement = $this->conn->prepare($query);
    }

    public function bind($param, $value, $type = NULL)
    {
        /**
         * Adding PARAMETERS to the query. It sets the 
         * type of parameter that will be placed 
         * inside the query AUTOMATICALLY.
         * 
         * Text query: $sql = "SELECT ... WHERE name = :name ";
         * Binding replacement: ...bindValue(':name', $var, PDO::PARAM_-var_type_here-)
         * In this method ...bind(':name', $value )
         * 
         */
        if (is_null($type)) {
            switch (TRUE) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->statement->bindValue($param, $value, $type);
    }

    public function execute()
    {
        try {
            /** Executing the QUERY. */
            return $this->statement->execute();
        } catch (PDOException $e) {
            $this->query_error = $e->getMessage();
            trigger_error($this->query_error);
        }
    }

    /** It EXTRACTS all DATA ROWS as an associative ARRAY. */
    public function fetch_all()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /** It EXTRACTS ONE ROW of the DB (associative array). */
    public function fetch_one()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    /** It COUNTS the AFFECTED ROWS in the last SQL query */
    public function count_rows()
    {
        return $this->statement->rowCount();
    }

    /** It SHOWS the LAST ID inserted. In case of error, It retrurns FALSE */
    public function last_insert_id()
    {
        return $this->conn->lastInsertId();
    }

    public function begin_transactions()
    {
        /**
         * It deactivates 'AUTOCOMMIT'. It allows multiple
         * queries one after another, until they are finally commited.
         * 
         * -> 1. Connection (in __construct)
         * -> 2. Declare begin_transactions (this method)
         * -> 3. Prepare query-1 (query method)
         * -> 4. Execute
         * -> 5. Prepare query-2 (query method)
         * -> 6. Execute
         * -> 7. Commit (end_transactions method).
         * 
         */
        return $this->conn->beginTransaction();
    }

    public function cancel_transactions()
    {
        /**
         * It REVERTS CHANGES made in transactions. 
         * Note: Some actions with Mysqli cannot be undone.
         * 
         */
        return $this->conn->rollBack();
    }

    public function end_transactions()
    {
        /** It COMMITS the started transactions. */
        return $this->conn->commit();
    }
}

