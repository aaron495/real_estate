<?php
include("../../includes/header.php");
?>
    <br>
    <br>
    <br>
    <div class="row m-0">
        <div class="col-md-6 offset-md-3 p-4">
            <form>
                <h2 class="mb-4">Inscription</h2>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="motdepasse" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="motdepasse" name="motdepasse">
                </div>
                <button type="submit" class="btn btn-success">S'inscrire</button>
            </form>
        </div>
    </div>

    <?php
    include("../../includes/footer.php");
    ?>