<?php
    function displayArtistContent($artist, $updates){?> 
        
        <div class="container shadow p-3 mb-5 bg-white rounded col-11">
            <div id="artist_identity" class="row m-2">
                <div class="w-auto"><h4><?=$artist['first_name']." ".$artist['last_name']." - "?></h4></div>
                <div class="w-auto"><h4><?=$artist['nickname']?></h4></div>
            </div>
            <div id="bios" class="m-2">
                <div><?=$artist['bio_fr'] ?> </div>
                <div><?=$artist['bio_short_fr'] ?> </div>
            </div>
            <div id="networks" class="m-2">
                <div><?=$artist['facebook'] ?> </div>
                <div><?=$artist['twitter'] ?> </div>
                <div><?=$artist['website'] ?> </div>
                <div><?=$artist['email'] ?> </div>
            </div>
            <div class="m-2 mt-5">
                <h4 ><?=$artist['title'] ?></h4>
                <div><?=$artist['subtitle'] ?></div>
                <div><?=$artist['type'] ?></div>
                <div><?=$artist['duration'] ?></div>
                <div><?=$artist['synopsis_long'] ?></div>
                <div><?=$artist['synopsis_short'] ?></div>
                <div><?=$artist['thanks'] ?></div>
            </div>
        </div>
        <?php if(!empty($updates) && $updates!=null){ 
            $i=1;
            foreach($updates as $update){ ?>

                <div id="update<?=$i?>" class="container shadow p-3 mb-5 bg-white rounded col-11">
                    <div class="row m-2">
                        
                    </div>
                    <div class="row m-2">
                        <p class="inputname h6 text-capitalize"><u><?=$update->getInputName()?></u></p>
                        <div class="col-6 text-danger"><?=$update->getOldContent() ?></div>
                        <div class="col-6 text-success"><?=$update->getNewContent() ?></div>
                    </div>
                    <div class="row mt-3 m-2">
                        <div class="d-inline-flex col-6"><?=$update->getUpdatedDate() ?></div>
                        <div class="d-inline-flex col-6 justify-content-end">
                            <a type="sumbit" class="btn btn-light text-secondary" href="../_controller/adminViewController.php?type=update&edit=<?=$update->getId()?>">
                                <small>Marqué comme vu</small>
                            </a>
                        </div>
                    </div>

                </div>

    <?php $i++; }
         ;}
    } ?>