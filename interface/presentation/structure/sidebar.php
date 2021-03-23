<?php
    function sidebar($session=null, $student_list=null, $artwork_list=null){ 
        echo '<div class="col-2" style="height : 100%; min-height: 100vh;"> ';
        
            //show student and artwork lists if user profil is staff
            if(isset($session) && !empty($session) && $session=='is_staff'){ ?>
                <div class="container-fluid column mt-5">
                <!-- student List by alphabetic order -->
                    <label for="student_list"><h5>Liste des artistes</h5></label>
                    <div id="student_list" class="mb-4">
                        <?php foreach($student_list as $student){
                            
                            $href= "contentViewController.php?artist=".$student['id'];
                            echo'<a href='.$href.'>'.$student['first_name']." ".$student['last_name'].'</a><br>';
                        }
                            ?>
                    </div>
                <!-- artwork List by alphabetic order -->
                    <label for="artwork_list"><h5>Liste des oeuvres</h5></label>
                    <div id="artwork_list" class="mb-4">
                        <?php foreach($artwork_list as $artwork){
                            $href="contentViewController.php?artwork=".$artwork['id'];
                            echo'<a href='.$href.'>'.$artwork['title'].'</a><br>';
                        }
                            ?>
                    </div>
                </div>
            <?php } ?>
        </div> 
<?php }?>