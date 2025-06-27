<?php

/**
 * Class Database
 * 
 * Implements the Singleton design pattern to ensure that only one instance of the database connection is created throughout the application.
 */

class Database {
    // Holds the single instance of the Database class
    private static $instance = null;

    /**
     * Make the default constructor private, to prevent other objects from using the 'new' operator with the Singleton class.
     * 
     * Typically, the database connection would be initialized here.
     */
    private function __construct() {
        // Example: Here you could place mysqli_connect or new PDO(...)
    }

    /**
     * Returns the single instance of the Database class.
     * Creates the instance if it doesn't exist yet.
     * 
     * @return Database The single instance of this class.
     */
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    /**
     * Executes a SQL query.
     * In a real application, this method would send the query to the database.
     * 
     * @param string $sql The SQL query string to be executed.
     */
    public function query($sql) {
        // This is just a mock example. Replace with actual database query logic.
        echo "Executing \"{$sql}\" ...<br/>";
    }
}


// Get the single instance of the Database insteaad of creating a new instance.
$db = Database::getInstance();


$db->query("SELECT * FROM users");

?>
