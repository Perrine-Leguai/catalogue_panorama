<?php 
    function formCreateArtwork(object $artwork=null){ ?>
        <form action="../_controller/studentViewController.php?action=<?php if($artwork==null || empty($artwork)){echo "create";}else{echo "edit";} ?>" 
            method="POST" enctype="multipart/form-data" class='col-11 shadow p-3 mb-5 bg-white rounded'>
            <div class="form-group col-11 m-2">
                <label for="title_Input">Titre</label>
                <input type="text" class="form-control" id="title_Input" placeholder="Qui a tué Pamela Rose?" name="title" 
                    value="<?php if(!empty($artwork) || $artwork != null){ echo $artwork->getTitle();}?>">
            </div>
            <div class="form-group col-11 m-2">
                <label for="subtitle_Input">Sous-titre</label>
                <input type="text" class="form-control" id="subtitle_Input" placeholder="Deuxième volet" name="subtitle" 
                    value="<?php if(!empty($artwork) || $artwork != null){ echo $artwork->getSubtitle() ;}?>">
            </div>
            <div class="form-group col-11 m-2">
                <label for="type_input">Type</label>
                <select class="form-control" id="type_input" name="type">
                <option selected="selected" 
                    value="<?php if(!empty($artwork) || $artwork != null){ echo $artwork->getType();} ?>"><?php if(!empty($artwork) || $artwork != null){ echo $artwork->getType();} ?> </option>
                <option value="film">Film</option>
                <option value="installation">Installation</option>
                <option value="performance">Performance</option>
                </select>
            </div>
            <div class="form-group col-11 m-2">
                <label for="duration_Input">Durée</label>
                <input type="text" class="form-control" id="duration_Input" placeholder="01:59:59" name="duration" 
                    value="<?php if(!empty($artwork) || $artwork != null){ echo $artwork->getDuration();} ?>">
            </div>
            <div class="form-group col-11 m-2">
                <label for="synopsis_short">Synopsis court</label>
                <textarea class="form-control" id="synopsis_short" rows="3" name="synopsis_short" ><?php
                    if(!empty($artwork) || $artwork != null){ echo $artwork->getSynopsisShort() ;}?></textarea>
            </div>
            <div class="form-group col-11 m-2">
                <label for="synopsis_long">Synopsis long</label>
                <textarea class="form-control" id="synopsis_long" rows="5" name="synopsis_long" ><?php 
                    if(!empty($artwork) || $artwork != null){ echo $artwork->getSynopsisLong() ;} ?></textarea>
            </div>
            <div class="form-group col-11 m-2">
                <label for="thanks">Remerciements</label>
                <textarea class="form-control" id="thanks" rows="3" name="thanks" ><?php 
                    if(!empty($artwork) || $artwork != null){ echo $artwork->getThanks() ;} ?></textarea>
            </div>
            <div class="form-group col-11 m-2">
                <label for="media_input">Example file input</label>
                <input type="file" class="form-control-file" id="media_input"  name="media">
            </div>
            <input type="submit" class="btn btn-outline-secondary mt-4" 
                value="<?php if(!empty($artwork) || $artwork != null){ echo 'Modifier ';}else{echo 'Ajouter ';};?>">
            </input>
        </form>
<?php   } ?>

<?php
    function updatesList($updates_list){ ?>
        <div id="updates_list"  class='col-11 shadow p-3 mb-5 bg-white rounded'>
            <?php   $i=0;
                    foreach($updates_list as $update){ ?>
                    
                    <div id='update<?=$i?>' class="col-11 m-2">
                        <div id="change_date"><?= $update->getUpdatedDate() ;?></div>
                        <div id="input_name"><?= $update->getInputName()?></div>
                        <div class="row">
                            <div id="old_content" style="color: red;" class="col-6"><?= $update->getOldContent() ;?></div>
                            <div id="new_content" style="color: green;" class="col-6"><?= $update->getNewContent() ;?></div>
                        </div>
                        <div id="seen" class="d-flex justify-content-end font-weight-light font-italic" style="color:grey; font-size: 0,7em; ">
                            <?php if($update->getIsSeen()== 0){ echo "non vue" ;}else{echo "vue" ;}?>
                        </div>
                        
                    
                    </div>

            <?php   $i++ ;
                    }?>
        </div>
<?php } ?>