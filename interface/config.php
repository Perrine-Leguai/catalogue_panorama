<?php
    /***
     * 
     * MYSQL CONFIG
     * 
     */

    $mysql_host = "localhost";
    $mysql_database = "panorama";
    $mysql_user = "root";
    $mysql_user_password = "";

    /***
     * 
     * API CONFIGURATION
     * 
     */
    // default path
    $api_url = "http://127.0.0.1:8000";
    // $api_url = "https://api.lefresnoy.net";
    
    // auth url
    $auth_login_url = $api_url."/v2/rest-auth/login/";
    $auth_logout_url = $api_url."/v2/rest-auth/logout/";
    // user urls
    $user_url = $api_url."/v2/people/user";
    $user_search_url = $user_url."?search=";
    // artist url
    $artist_url = $api_url."/v2/people/artist";
    $artist_search_by_user_url = $artist_url."?search=";

?>