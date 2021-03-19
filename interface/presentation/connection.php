<?php function html(){ ?>
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Connection</title>
            <link 
                    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
                    rel="stylesheet" 
                    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
                    crossorigin="anonymous">
            <link 
                    rel="stylesheet" 
                    type="text/css" 
                    href="../css/connection.css">
        </head>
        
        <body>
            
        

            <div class=" p-3 m-5">
                <h1 class="mt-0 pt-0 mb-5">
                    <span class="fr">Connexion</span>
                    <!-- <span class="en">Log in</span> -->
                </h1>

                <div="!isAlert" class="alert alert-danger" role="alert">
                    <span >Votre mot de passe est incorrect ou ne correspond pas à cet identifiant</span>
                </div>

                <form  id="formConnexion"  >
                    <div >

                        <input id="username" type="text" class="form-control" placeholder="Ex : Ninja55" name="username" >
                        <div class="row">
                        <div id="usernameko" class="col-6" [hidden]="isUsernameOk">Ce pseudo n'existe pas</div>
                        <div id="usernameok" class="col-6" [hidden]="!isUsernameOk">Bienvue à bord !</div>
                        <label for="username" class="form-label col-6">Identifiant</label>
                        </div>
                    </div>

                    <div >
                        <!-- 7 caractères, 1 miuscule, 1 majuscule, 1 caractère spécial -->
                        <input id="password" type="password" class="form-control" placeholder="*******" name="password"
                        ngModel required>
                        <label for="password" class="form-label">Mot de passe</label>
                    </div>

                    <div class=" d-flex justify-content-center mt-5">
                        <button type="submit" class="btn btn-primary pull-right" [disabled]="formContent.invalid"> Se connecter</button>
                    </div>
                </form>
            </div>

        </body>
        </html>

<?php } ?>