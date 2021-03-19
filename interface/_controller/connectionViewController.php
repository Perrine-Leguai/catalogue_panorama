<?php
    require_once(__DIR__.'/../config.php');
    
    require_once(__DIR__.'/../_class/User.php');
    require_once(__DIR__.'/../_class/Student.php');

    require_once(__DIR__.'/../_service/api/AuthenticationService.php');
    require_once(__DIR__.'/../_service/api/UserInfo.php');
    require_once(__DIR__.'/../_service/UserService.php');
    require_once(__DIR__.'/../_service/StaffService.php');
    require_once(__DIR__.'/../_service/StudentService.php');

    require_once(__DIR__.'/../exception/ServiceException.php');


    require_once(__DIR__.'/../presentation/connection.php');

    session_start();

    $error = [];
    $error_message = "";

    if(!empty($_POST)){

        //get vars from POST
        $username_or_email = $_POST["username_or_email"];
        $password = $_POST["password"];

        // try to get the username
        $userInfoService = new UserInfo();
        $api_data_user = $userInfoService->getUserInfo("$username_or_email");
        
        // if found user with this username or email
        if(!empty($api_data_user)) {
            
            $username = $api_data_user[0]->username;
            
            
            // try to log in
            $authService = new AuthenticationService();
            $auth = $authService->login($username, $password);
            if($auth->status == 200){

                
                // try to get current base User
                $userService = new UserService();
                $user = $userService->searchByEmail($auth->user->email);


                // if empty, create it 
                if(empty($user)){

                    // get more user infos with token (in session)
                    $api_data_user = $userInfoService->getUserInfo($auth->user->email)[0];

                    // 
                    $profile_str = $api_data_user->is_staff?"is_staff":"is_student";      
                    
                    
                    $user = new User();
                    $user->setKartUrl($api_data_user->url)
                         ->setFirstName($api_data_user->first_name)
                         ->setLastName($api_data_user->last_name)
                         ->setEmail($api_data_user->email)
                         ->setProfil($profile_str);

                    // CREATE User
                    try{
                           $success=UserService::create($user);
        
                        }catch(ServiceException $serviceException){
                            echo $ServiceException->getCode();
                            die("User creattion Error");
                        }
                    
                    // get user id
                    $user = $userService->searchByEmail($auth->user->email);

                    var_dump($auth->user->email);
                    var_dump($user);
                    die();

                    // Create staff
                    if($api_data_user->is_staff){
                        
                        // CREATE Staff
                        try{
                            $success=StaffService::create($user->getId());
        
                        }catch(ServiceException $serviceException){
                            echo $ServiceException->getCode();
                            die("Staff creattion Error");
                        }

                    } // end create staff

                    // try to get current base Student
                    if($api_data_user->is_student){

                        // get infos from api
                        $api_data_artist = $userInfoService->getArtistInfo($auth->user->username);

                        // create obj student
                        $student  = new Student();
                        $student->setIdUser($user->getId())
                                ->setNickname($api_data_artist->nickname)
                                ->setBioShortFr($api_data_artist->bio_short_fr)
                                ->setBioShortEn($api_data_artist->bio_short_en)
                                ->setBioFr($api_data_artist->bio_fr)
                                ->setBioEn($api_data_artist->bio_en)
                                ->setFacebook($api_data_artist->facebook_profile)
                                ->setTwitter($api_data_artist->twitter_account)
                                ->setWebsite(); // empty for the moment

                        try{
                            $success=StudentService::create($student);
        
                        }catch(ServiceException $serviceException){
                            echo $ServiceException->getCode();
                            die("Student creattion Error");
                        }

                        

                    } // end of student creeation 

                } // end of user creation

                // user exist
                $studentService = new StudentService();
                $student = $studentService->searchByUser($user->getId());
                $_SESSION['idStudent'] = $student->getId();

                echo "Success ! ";
                var_dump($student);
                
            } //  end auth success
            else {
                $error_message = "Error Auth";
                echo "Error Auth ! ";
            }

        } // end user get Data from api
        else{
            echo "API don't know this : $username_or_email ! ";
        }


    } // en POST not empty
    else {
        echo "Error Post Empty ! ";
    }
    
    html();
?>