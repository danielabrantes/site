<?php

class DbSite {

    // Hold an instance of the class
    private $dbhost = "";
    private $dbusername = "";
    private $dbpassword = "";
    private $dbname = "";
    private $connection = FALSE;
    private $count = 0;
    private static $_instance;

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    // Do not allow an explicit call of the constructor: $v = new Singleton();
    final private function __construct() {
        
    }

    // Do not allow the clone operation: $x = clone $v;
    final private function __clone() {
        
    }

    function connect($dbhost, $dbusername, $dbpassword, $dbname) {
        $this->dbhost = $dbhost;
        $this->dbusername = $dbusername;
        $this->dbpassword = $dbpassword;
        $this->dbname = $dbname;

        $this->connection = mysql_pconnect($this->dbhost, $this->dbusername, $this->dbpassword, MYSQL_CLIENT_COMPRESS);
        if ($this->connection != FALSE) {
            if (mysql_select_db($this->dbname, $this->connection) != FALSE) {
                mysql_query('SET NAMES utf8');
                return TRUE;
            }
        } else {
            return FALSE;
        }
    }

    public function getall($sql) {

        $result = mysql_query($sql, $this->connection);
        if (!$result) {
            die('Invalid query: ' . mysql_error());
        }
        $this->count = mysql_num_rows($result);

        $resultado = array();
        while ($row = mysql_fetch_object($result)) {
            array_push($resultado, $row);
        }
        mysql_free_result($result);
        return $resultado;
    }

    public function query($sql) {
        /*
          For SELECT, SHOW, DESCRIBE, EXPLAIN and other statements returning resultset, mysql_query() returns a resource on success, or FALSE on error.
          For other type of SQL statements, INSERT, UPDATE, DELETE, DROP, etc, mysql_query() returns TRUE on success or FALSE on error.
         */
        return mysql_query($sql, $this->connection);
    }

    function __destruct() {

        //mysql_close();
        if (!is_null($this->connection)) {
            @mysql_close($this->connection);
        }
    }

    // To protect MySQL injection
    public function quote($value) {
        // Check if magic_quotes_runtime is active
        if (get_magic_quotes_runtime()) {
            // Deactivate
            set_magic_quotes_runtime(false);
        }
        // Quote if not a number
        if (!is_numeric($value)) {
            $value = "'" . mysql_real_escape_string($value) . "'";
        }
        return trim($value);
    }

    public function getcount() {
        return $this->count;
    }

    public function begin() {
        mysql_query("BEGIN");
    }

    public function commit() {
        mysql_query("COMMIT");
    }

    public function rollback() {
        mysql_query("ROLLBACK");
    }

}