<?php
    function main_block(array $updates_list, array $update_list_artwork){ ?>
        <div id="updates_list_admin" class="col-11 mt-5">
            <?php   $i=1;
                    foreach($updates_list as $update){ ?>

                    <div id="update<?=$i?>" class="update shadow p-3 mb-5 bg-white rounded">
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

            <?php } ?>
        </div>
        <div id="artwork_list_admin" class="col-11 mt-5">
            <?php   $i=1;
                    foreach($update_list_artwork as $updated_artwork){ ?>

                    <div id="update_aw_<?=$i?>" class="update shadow p-3 mb-5 bg-white rounded">
                        <div class="row m-2">
                            
                        </div>
                        <div class="row m-2">
                            <p class="inputname h6 text-capitalize"><u><?=$updated_artwork->getTitle()?></u></p>
                            <div class="col-8 text-danger"><?=$updated_artwork->getSubtitle() ?></div>
                            <div class="col-6 text-success"><?=$updated_artwork->getDuration() ?></div>
                            <div class="col-6 text-success"><?=$updated_artwork->getType() ?></div>
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

            <?php } ?>
        </div>
    
<?php } ?>

<?php function meanwhile($update){ ?>
    <!-- <div class="d-inline-flex">
    <?//$update->getFirstName()?>
    </div> -->
    <div class="d-inline-flex"> - <?=$update->getTitle()?></div>
<?php } ?>