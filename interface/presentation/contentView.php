<?php
    function displayArtistContent($artist, $updates){ ?>
        
        <div class="container-fluid">
            <div id="artist_identity" class="row">
                <div><?=$artist['first_name']." ".$artist['last_name']." - "?></div>
                <div><?=$artist['nickname']?></div>
            </div>
            <div id="bios">
                <div><?$artist['bio_long_fr'] ?> </div>
                <div><?$artist['bio_short_fr'] ?> </div>
            </div>
            <div id="networks">
                <div><?$artist['facebook'] ?> </div>
                <div><?$artist['twitter'] ?> </div>
                <div><?$artist['website'] ?> </div>
                <div><?$artist['mail'] ?> </div>
            </div>
            <div></div>
        </div>

<?php } ?>