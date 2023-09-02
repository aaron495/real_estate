<?php
// Include Header
include("includes/header.php");
?>
    <div class="homepage-image">
        <img src="assets/images/image5.png" alt="Image d'accueil">
    </div>

    <div id="appartements" class="location d-flex justify-content-center align-items-center mt-3">
        <h5 class="local">Appartement en location</h5>
    </div>

    <?php
    // Include Appartments grids
    include('src/appartements/grids.php')
    ?>

<?php
// Include footer
include("includes/footer.php")
?>