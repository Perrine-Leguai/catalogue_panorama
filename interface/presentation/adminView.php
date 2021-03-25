<?php
    function main_block(array $updates_list, array $update_list_artwork){ ?>
        <div id="updates_list_admin" class="col-11 mt-5">
            <?php   $i=1;
                    foreach($updates_list as $update){ ?>

                    <div id="update<?=$i?>" class="update shadow p-3 mb-5 bg-white rounded">
                        <div class="row m-2">
                            <label for="" class="col-3">Nom du champ modifié : </label>
                            <p class="col-6 inputname h6 text-capitalize"><u><?=$update->getInputName()?></u></p>
                        </div>
                        <div class="row m-2">
                            
                            <div class="col-6">
                                <label for="old_content">Ancien contenu : </label>
                                <div id="old_content" class="text-danger"><?=$update->getOldContent() ?></div>
                            </div>
                            <div class="col-6">
                                <label for="new_content">Nouveau contenu :</label>
                                <div id="new_content" class="text-success"><?=$update->getNewContent() ?></div>
                            </div>
                        </div>
                        <div class="row mt-3 m-2">
                            <div class="d-inline-flex col-6"><?=$update->getUpdatedDate() ?></div>
                            <div class="d-inline-flex col-6 justify-content-end">
                                <a id="turn_to_seen" type="sumbit" class="btn btn-outline-success text-secondary" href="../_controller/adminViewController.php?type=update&edit=<?=$update->getId()?>">
                                    <small>Marquer comme vu</small>
                                </a>
                            </div>
                        </div>

                    </div>

            <?php $i++; } ?>
        </div>
        <div id="artwork_list_admin" class="col-11 mt-5">
            <?php   $i=1;
                    foreach($update_list_artwork as $updated_artwork){ ?>

                    <div id="update_aw_<?=$i?>" class="update shadow p-3 mb-5 bg-white rounded">
                        <div class="row m-2">
                            
                        </div>
                        <div class="row m-2">
                            
                            <p class="inputname h6 text-capitalize"><u><?=$updated_artwork->getTitle()?></u></p>
                            <div class="col-8 "><?=$updated_artwork->getSubtitle() ?></div>
                            <div class="col-6 "><?=$updated_artwork->getDuration() ?></div>
                            <div class="col-6 "><?=$updated_artwork->getType() ?></div>
                        </div>
                        <div class="row mt-3 m-2">
                            <div class="d-inline-flex "><?=$updated_artwork->getSynopsisShort() ?></div>
                            <div class="d-inline-flex "><?=$updated_artwork->getSynopsisLong() ?></div>
                        </div>
                        <div class="row mt-3 m-2">
                            <div class="d-inline-flex "><?=$updated_artwork->getThanks() ?></div>
                            <div class="d-inline-flex "><?=$updated_artwork->getCreatedAt() ?></div>
                            <div class="d-inline-flex col-6 justify-content-end">
                                <a type="sumbit" class="btn btn-light text-secondary" href="../_controller/adminViewController.php?type=artwork&edit=<?=$updated_artwork->getId()?>">
                                    <small>Marqué comme vu</small>
                                </a>
                            </div>
                        </div>

                    </div>

            <?php $i++; } ?>
        </div>
    
<?php } ?>

