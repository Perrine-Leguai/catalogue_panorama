<?php
    function sidebar($session=null, $student_list, $artwork_list){ 
        echo '<div class="col-2" style="height : 100%; min-height: 100vh;"> ';

            //show student and artwork lists if user profil is staff
            if(isset($session) && !empty($session) && $session['profil']=='is_staff'){ ?>
                <div class="container-fluid column mt-5">
                <!-- student List by alphabetic order -->
                    <label for="student_list"><h5>Liste des artistes</h5></label>
                    <div id="student_list">
                        <?php foreach($student_list as $student){
                            echo'<a href="#">'.$student['first_name']." ".$student['last_name'].'</a><br>';
                        }
                            ?>
                    </div>
                <!-- artwork List by alphabetic order -->
                    <label for="artwork_list"><h5>Liste des oeuvres</h5></label>
                    <div id="artwork_list">
                        <?php foreach($artwork_list as $artwork){
                            echo'<a href="#">'.$artwork['title'].'</a><br>';
                        }
                            ?>
                    </div>
                </div>
            <?php } ?>
        </div> 
<?php }?>