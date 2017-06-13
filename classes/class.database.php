<?php

    /*This file can be save in a seperate library folder because this file can be
     * reused in all further web applications that need a MySql database connection.
    */
    
    /*Need to include the database settings file to get the settings that enable database connection.
     * If the directory structure of the web application where these files are used is the same then
     * nothing on this file will ever have to chance.
     * 
     * NOTE: The __DIR__ informs the system this it is in the folder where the database class
     * lives in, in this case it's the classes folder.  The next section then tell the system
     * to go back from the current directory to the root folder and from there up to the 
     * incluses foldere '/../includes/...'
     * A very importand thing to note here is the period (.) after the __DIR__.  Don't leave that out
    */
    require_once (__DIR__.'/../includes/dbsettings.php');
    
    /*Creates the database class that will have the two method living in it.
     * This will will have two functions, called methods.
     * The first method would be the function to crypt data that need to be secure
     * like user passwords and later on information to be stored in session variable and
     * cookies.
     */
    class database{
        
        //Creates a method that will crypt the password and data entered by the user.
        function blowfishCrypt($password,$length){
            $chars = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqursuvwxyz0123456789';
            $salt = sprintf('$2a$%02d$',$length);
            
            for ($i = 0;$i < 22;$i++){
                $salt .= $chars[rand(0,63)];
            }
            
            return crypt($password,$salt);
        }
        
        /*Creates the method that will do the actual connection to the database.
         * This is the method that wants to make use of the varaibles defined in the
         * dbsettings file and is the reason why the file needs to be included into this file.
         */
        
        public function databaseConnect(){
            /*Creates a new instance of the PDO called $db.
             * NOTE: the use of DSN, DB_USER and so on.  These variable live in the dbsettings file.
            */
            $db = new PDO(DSN,DB_USER,DB_PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        }
    }

?>