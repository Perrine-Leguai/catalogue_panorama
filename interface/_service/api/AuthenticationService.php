<?php

    require_once(__DIR__.'/../../config.php');
    
    class AuthenticationService{
            
        function login(string $email, string $password){

            global $auth_login_url;

            // transform email & password in array
            $data = array("username" => $email, "password" => $password);
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
            // close connection
            curl_close($curl);
            // json transform to php vars
			$response =  json_decode($response_json);
            // set status for report error
			$response->status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            // set vars
            $token = $respons->token;
            $user = $response->user;
			
            return $response;

        }   
    }
?>