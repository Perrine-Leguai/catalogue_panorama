<?php

require_once(__DIR__.'/../../config.php');
    
class AuthenticationService{
        
    function login(string $username, string $password){

        global $auth_login_url;

        // transform email & password in array
        $data = array("username" => $username, "password" => $password);
        // set headers
        $headers = array('Content-Type:multipart/form-data');
        
        // init curl
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $auth_login_url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        // put data
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        // put headers
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        // execute curl
        $response_json = curl_exec($curl);
        // json transform to php vars
        $response =  json_decode($response_json);
        // set status for report error
        $response->status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        // close connection
        curl_close($curl);
        // set vars
        $token = $response->token;
        $user = $response->user;
        
        $_SESSION['token'] = $token;
        
        return $response;

    }
    
    function logout(){

        global $auth_logout_url;

        $headers = array('Content-Type:multipart/form-data');
        array_push($headers, "Authorization: JWT ".$_SESSION['token']);


        // init curl
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $auth_logout_url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        // put headers
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        // execute curl
        $response_json = curl_exec($curl);
        // json transform to php vars
        $response =  json_decode($response_json);
        // set status for report error
        $response->status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        // close connection
        curl_close($curl);
        
        // clear session token
        $_SESSION['token'] = "";
        
        return $response;
    }   
}
?>