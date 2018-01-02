<?php
/**
 * User: joematte
 * Date: 11/3/17
 * Time: 8:30 AM
 */

class Constf
{
    // --- db login ---//
    //will be different for different computers until on server
    const host = "localhost";
    const username = "root";
    const password = "root";
    const dbName = "quizweb";

    /**
     * Slim down the form input so that there is no extra characters
     *
     * @param $d the data that is going to be slimmed down
     * @return the slim down verson of the string given in the form
     */
    public static function slimDown($d) {
        $d = trim($d);
        $d = stripslashes($d);
        $d = htmlspecialchars($d);
        return $d;
    }
}