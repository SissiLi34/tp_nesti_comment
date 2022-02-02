<!-- cette fonction permet de vérifier que la clé "loc" existe bien dans le tableau $_get et qu'elle n'est pas vide -->
<!-- input_get précise qu'il faut aller chercher dans le $_get -->
<!-- FILTER_SANITIZE_STRING est une option pour préciser le type d'attente -->

<?php $loc = filter_input(INPUT_GET, 'loc');  ?>

<!DOCTYPE html>
<html lang="en">


<?php include('../vue/common/head.php'); ?>


<body>

    <?php
    include('../vue/common/header.php');

    include('../vue/common//nav.php');

    //  renvoie null si la variable loc n'est pas définie au lieu de renvoyer une erreur, si elle est définie renvoie à la page 'home'
    if ($loc == null) {
        $loc = "home";
    }
    switch ($loc) {
        case 'home':
            include("../vue/content/index_content.php");
            break;
        case 'about':
            include("../vue/content/about_content.php");
            break;
        case 'products':
            include("../vue/content/product_content.php");
            break;
        case 'store':
            include("../vue/content/store_content.php");
            break;
        default:
            include("../vue/content/404.php");
            break;
    }

    include('../vue/common/footer.php');
    ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</body>

</html>