<?php
    require_once(__DIR__.'/structure/sidebar.php');

    function html(string $title, $session=null, $students=null, $artworks=null){ ?>
        <html lang="fr">
            <head>
                <title><?php echo $title  ?></title>
                <meta charset="utf-8">
                <!-- BOOTSTRAP -->
                <!-- <link rel="shortcut icon" type="image/png" href="../img/favicon-32x32.png"/> -->
                
                <link 
                    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
                    rel="stylesheet" 
                    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
                    crossorigin="anonymous">
        
                <!-- CSS -->
                <link 
                    rel="stylesheet" 
                    type="text/css" 
                    href="../css/mainStyle.css">
                
            </head>
            <body>
            <div class="container-fluid m-2">
        
                <div class="row">
                    <?php sidebar($session, $students, $artworks) ?>
                    <div class="col-10">
                        <?php include 'structure/header.php' ?>
                        <div id="changingInside">                      
<?php } ?>

<?php 
    function scripts(string $jsFileName){?>
                        </div>
                                        
                        </div>
                    </div>
                </div>
                <?php include 'structure/scripts.php'; ?>
                <script 
                    type="text/javascript" 
                    src=<?php echo "../assets/" . $jsFileName . "js" ?>>
                </script>
            </body>
        </html>
<?php } ?>

