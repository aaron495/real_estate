<?php
    include("includes/header.php");
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Formulaire de Connexion</title>
</head>
<body>

<br>
<br>
<br>

    <div class="row m-0 vh-100 justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Connexion</h5>
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Telephone</label>
                            <input type="text" class="form-control" id="username" placeholder="Entrez votre numero de telephone">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                        </div>
                        <button type="submit" class="btn btn-success">Conexion</button>
                        
                    </form>
                    <br>
                    <a href="">mot de passe oublier?</a>
                        <div class="text-center">
                        <p>pas encore inscrit ?</p>
                    <p>Creer un compte gratuitement</p>

                    <a href="inscription.php"><button type="submit" class="btn btn-success">je m'inscris</button></a>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
