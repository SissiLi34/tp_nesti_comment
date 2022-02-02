<!-- cette fonction permet de vérifier que la clé "loc" existe bien dans le tableau $_get et qu'elle n'est pas vide -->
<!-- input_get précise qu'il faut aller chercher dans le $_get -->
<!-- FILTER_SANITIZE_STRING est une option pour préciser le type d'attente -->

<?php $loc = filter_input(INPUT_GET, 'loc');  ?>

<!DOCTYPE html>
<html lang="en">


<?php include('common/head.php'); ?>


<body>

    <?php
    include('common/header.php');

    include('common/nav.php');

    //  renvoie null si la variable loc n'est pas définie au lieu de renvoyer une erreur, si elle est définie renvoie à la page 'home'
    if ($loc == null) {
        $loc = "home";
    }
    switch ($loc) {
        case 'home':
            include("content/index_content.php");
            break;
        case 'about':
            include("content/about_content.php");
            break;
        case 'products':
            include("content/product_content.php");
            break;
        case 'store':
            include("content/store_content.php");
            break;
        default:
            include("content/404.php");
            break;
    }

    include('common/footer.php');
    ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</body>

</html>