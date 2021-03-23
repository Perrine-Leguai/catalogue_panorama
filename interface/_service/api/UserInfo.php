<?php
    require_once(__DIR__.'/../../config.php');

    class UserInfo{
        function getUserInfo(string $email){

            global $user_search_url;

            // set headers GET
            $headers = 'Content-Type: application/json';

            // add token if not empty (to have full user infos)
            if ($_SESSION['token']){
            
            $authorization = "Authorization: JWT ".$_SESSION['token'];
    
            // init curl
            $curl = curl_init();
            // put headers
            curl_setopt($curl, CURLOPT_HTTPHEADER, array($headers, $authorization));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($curl, CURLOPT_URL, $user_search_url.$email);
            
            // execute curl
			$response_json = curl_exec($curl);
            
            // json transform to php vars
            $response =  json_decode($response_json);
            
            // set status for report error
			$response[0]->status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            // close connection
            curl_close($curl);
            // json transform to php vars
			$response =  json_decode($response_json);
            // set vars
			
            return $response;

            }
            
        }


        function getArtistInfo($username){

            global $artist_search_by_user_url;
            
            // set headers GET
            $headers = 'Content-Type: application/json';

            // add token if not empty (to have full user infos)
            if ($_SESSION['token'])
				$authorization = "Authorization: JWT ".$_SESSION['token'];
    
            // init curl
            $curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $artist_search_by_user_url.$username);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
            // put headers
            curl_setopt($curl, CURLOPT_HTTPHEADER, array($headers, $authorization));
            // execute curl
			$response_json = curl_exec($curl);
            // json transform to php vars
            $response =  json_decode($response_json);
            // set status for report error
			$response[0]->status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            // close connection
            curl_close($curl);
            // json transform to php vars
			$response =  json_decode($response_json);
            // set vars
			
            return $response;


        }
    }

?>