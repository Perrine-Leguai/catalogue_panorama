<?php
    require_once(__DIR__.'/../../config.php');

    class UserInfo{
        function getUserInfo(string $email){

            global $user_search_url;

            // set headers GET
            $headers = array('Content-Type: application/json');

            // add token if not empty (to have full user infos)
            if ($_SESSION['token'])
				array_push($headers, "Authorization: JWT ".$_SESSION['token']);
    
            // init curl
            $curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $user_search_url.$email);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
            // put headers
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            // execute curl
			$response_json = curl_exec($curl);
            // set status for report error
			$response->status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            // close connection
            curl_close($curl);
            // json transform to php vars
			$response =  json_decode($response_json);
            // set vars
			
            return $response;


            
        }


        function getArtistInfo($username){

            global $artist_search_by_user_url;
            
            // set headers GET
            $headers = array('Content-Type: application/json');

            // add token if not empty (to have full user infos)
            if ($_SESSION['token'])
				array_push($headers, "Authorization: JWT ".$_SESSION['token']);
    
            // init curl
            $curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $artist_search_by_user_url.$username);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
            // put headers
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            // execute curl
			$response_json = curl_exec($curl);
            // set status for report error
			$response->status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            // close connection
            curl_close($curl);
            // json transform to php vars
			$response =  json_decode($response_json);
            // set vars
			
            return $response;


        }
    }

?>