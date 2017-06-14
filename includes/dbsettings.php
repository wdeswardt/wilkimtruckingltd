<?php

    /*This file can be saved in a seperate libray folder
     * because this file can be reused in all further web applications that requiers a MySql database
     * connection.
     * The database class file that lives in the classes folder will be depended on this file and the
     * information in this file.  This file and the database class file will work in conjuction with
     * each other.  For this reason this file will be included within the database class file.
    */
     
    /*Define the host on which the database lives.  In this case it's localhost but when useing in
     * another application the value of 'localhost' need to change to the correct host.
    */
    define('DB_HOST', 'localhost');
    
    /*Defining the database name.  In this case the value is test and this value will for sure change
     * to the new database.
    */
    define('DB_NAME', 'wilkimtrucking');
    
    /*Defining the user that the application will make use of to connect to the database.
     * Note that this user will have full access to the database.  This value might also change depending
     * which user the application will make use of to connect to the database.
    */
    define('DB_USER', 'wdeswardt');
    
    /*Defining the password that the user will use to connect to the database.  In this case it is blank.
     *This value WILL HAVE to change to a very strong and secure password on a production server that is
     * available to everyone on the web.
    */
    define('DB_PASS', 'Mw50M@n0FPgwsl!');
    
    /*Defining the connection string that will be requiered by the PDO connection that will make the
     * connection to the database.  Noting in this line will ever have to chance as long as the
     * connection is to a mysql database.
    */
    define('DSN', 'mysql:host='. DB_HOST . ';dbname=' . DB_NAME);

?>