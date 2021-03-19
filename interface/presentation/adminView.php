<?php
    function main_block(array $updates_list){ ?>
        <div id="updates_list_admin" class="col-11">
            <?php   $i=1;
                    foreach($updates_list as $update){ ?>

                    <div id="update<?=$i?>" class="update shadow p-3 mb-5 bg-white rounded">
                        <div class="row m-2">
                            
                        </div>
                        <div class="row m-2">
                            <div class="col-6 text-danger"><?=$update->getOldContent() ?></div>
                            <div class="col-6 text-success"><?=$update->getNewContent() ?></div>
                        </div>
                        <div class="row mt3 mb2">
                            <div class="d-inline-flex"><?=$update->getUpdatedDate() ?></div>
                            <div class="d-inline-flex justify-content-end">
                                <a type="sumbit" class="btn btn-light text-secondary" href="../_controller/adminViewController.php?edit=<?=$update->getId()?>">
                                    <small>Marqué comme vu</small>
                                </a>
                            </div>
                        </div>

                    </div>

            <?php } ?>
        </div>
    
<?php } ?>

<?php
    function sidebar(){ ?>

<?php } ?>

<?php function meanwhile($update){ ?>
    <!-- <div class="d-inline-flex">
    <?//$update->getFirstName()?>
    </div> -->
    <div class="d-inline-flex"> - <?=$update->getTitle()?></div>
<?php } ?>