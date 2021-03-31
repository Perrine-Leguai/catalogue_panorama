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
    
    //reload page if logout is the url
    if(isset($_GET) && !empty($_GET) && isset($_GET['logout'])){
        
        //Destroys all data registered to a session
        $authService = new AuthenticationService();
        $authService->logout();
        header('location: ../_controller/connectionViewController.php');
    }


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
                    
                    // get profil user
                    $profile_str = $api_data_user->is_superuser?"is_staff":"is_student";      
                    
                    
                    $user = new User();
                    $user->setKartUrl($api_data_user->url)
                         ->setFirstName($api_data_user->first_name)
                         ->setLastName($api_data_user->last_name)
                         ->setEmail($auth->user->email)
                         ->setProfil($profile_str);
                    

                    // CREATE User
                    try{
                           $success=UserService::create($user);
        
                        }catch(ServiceException $serviceException){
                            echo $ServiceException->getCode();
                            die("User creation Error");
                        }
                    
                    // get user id
                    $user = $userService->searchByEmail($auth->user->email);

                    // if staff create it 
                    if($api_data_user->is_superuser){
                        
                        // CREATE Staff
                        try{
                            $success=StaffService::create($user['id']);
                            echo 'staff created';
        
                        }catch(ServiceException $serviceException){
                            echo $ServiceException->getCode();
                            die("Staff creattion Error");
                        }

                    } // end create staff
                    
                    // try to get current base Student
                    if($profile_str=='is_student'){
                        
                        // get infos from api
                        $api_data_artist = $userInfoService->getArtistInfo($auth->user->username);
                        $api_data_artist= $api_data_artist[0];

                        // create obj student
                        $student  = new Student();
                        $student->setIdUser($user['id'])
                                ->setNickname($api_data_artist->nickname)
                                ->setBio($api_data_artist->bio)
                                ->setFacebook($api_data_artist->facebook_profile)
                                ->setTwitter($api_data_artist->twitter_account)
                                ->setWebsite(null); // empty for the moment 
                        

                        try{
                            $success=StudentService::create($student);
        
                        }catch(ServiceException $serviceException){
                            echo $ServiceException->getCode();
                            die("Student creattion Error");
                        }

                        // user exist
                        $studentService = new StudentService();
                        $student = $studentService->searchByUser($user['id']);
                        $_SESSION['idStudent'] = $student['id'];

                        

                    } // end of student creation 

                } // end of user creation

                //initialize $_SESSION['ful_name]
                $_SESSION['username']=strval($user['username']);
                

                if($user['profil'] == "is_student"){

                    // user exist
                    $studentService = new StudentService();
                    $student = $studentService->searchByUser($user['id']);
                    $_SESSION['idStudent'] = $student['id'];
                    $_SESSION['profil'] = "is_student";

                }elseif($user['profil'] == "is_staff"){
                    $_SESSION['profil'] = "is_staff";
                }
                
                //relocation if authentification is successfull
                
                if ($_SESSION['profil']=='is_student' ) {
                    
                    header('location: ../_controller/studentViewController.php');
                }
                elseif($_SESSION['profil']=="is_staff"){
                    
                    header('location: ../_controller/adminViewController.php');
                }
            } // end auth success
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
    
    html('Connexion');
?>