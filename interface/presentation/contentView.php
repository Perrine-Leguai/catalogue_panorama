<?php
    function displayArtistContent($artist, $updates){?> 
        
        <div class="container shadow p-3 mb-5 bg-white rounded col-11">
            <div id="artist_identity" class="row m-2">
                <div class="w-auto"><h4><?=$artist['first_name']." ".$artist['last_name']." - "?></h4></div>
                <div class="w-auto"><h4><?=$artist['nickname']?></h4></div>
            </div>
            <div id="bios" class="m-2">
                <div>
                    <label for="bio_fr">Bio : </label>
                    <div id="bio_fr"><?=$artist['bio_fr'] ?></div>
                </div>
                <div>
                    <label for="bio_fr">Bio (version courte): </label>
                    <div id="bio_fr"><?=$artist['bio_short_fr'] ?></div>
                </div>
            </div>
            <div id="networks" class="m-2">
                <div>
                    <label for="facebook">Facebook : </label>
                    <div id="facebook"><?=$artist['facebook'] ?></div>
                </div>
                <div>
                    <label for="twitter">Twitter : </label>
                    <div id="twitter"><?=$artist['twitter'] ?></div>
                </div>
                <div>
                    <label for="website">Website : </label>
                    <div id="website"><?=$artist['website'] ?></div>
                </div>
                <div>
                    <label for="email">Email : </label>
                    <div id="email"><?=$artist['email'] ?></div>
                </div>
            </div>
            <div class="m-2 mt-5">
                <h5>Information sur l'oeuvre</h5>
                <div>
                    <label for="title">Titre : </label>
                    <h4 id="title"><?=$artist['title'] ?></h4>
                </div>
                <div>
                    <label for="subtitle">Sous-titre : </label>
                    <div id="subtitle"><?=$artist['subtitle'] ?></div>
                </div>
                <div>
                    <label for="type">Type : </label>
                    <div id="type"><?=$artist['type'] ?></div>
                </div>
                <div>
                    <label for="duration">Durée : </label>
                    <div id="duration"><?=$artist['duration'] ?></div>
                </div>
                <div>
                    <label for="synopsis_long">Synopsis (complet) : </label>
                    <div id="synopsis_long"><?=$artist['synopsis_long'] ?></div>
                </div>
                <div>
                    <label for="synopsis_short">Synopsis (version courte) : </label>
                    <div id="synopsis_short"><?=$artist['synopsis_short'] ?></div>
                </div>
                <div>
                    <label for="thanks">Remerciements : </label>
                    <div id="thanks"><?=$artist['thanks'] ?></div>
                </div>
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