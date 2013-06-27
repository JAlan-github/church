<?php

/**
 * @author 
 * @copyright 2009
 */
    
    $conn = mysql_connect( $dbhost, $dbuser, $dbpwd ) or die ( '<h3>Error connecting to database, please contact Application Admin (1-917-689-6943)</h3>' );
    mysql_query("SET NAMES 'utf8'");
    mysql_select_db( $dbname );
?>