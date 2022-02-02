<?php
$array = [
    ['Stéphan',  'Razafia', 'https://razafiasimanana.needemand.com/'],
    ['Yen Nhi',  'Ho Tong Minh', 'https://hotongminh.needemand.com/'],
    ['Baudino',  'Pierre-Olivier', 'https://pierre-olivierb.github.io'],
    ['Kim',  'Young Hee', 'https://kim.needemand.com/'],
    ['Cochonneau',  'Laurent', 'https://cochonneau.needemand.com/'],
    ['Hernandez',  'Raul', 'https://hernandez.needemand.com/'],
    ['Patrick',  'Arnaud', 'https://arnaud.needemand.com/'],
    ['Jean-Bernard',  'Briois', 'https://briois.needemand.com/'],
    ['Sylvie',  'Linxe', 'https://linxe.needemand.com/'],
    ['Mourichon',  'Thibault', 'https://mourichon.needemand.com/'],
    ['Julien',  'Grossi', 'https://grossi.needemand.com/'],
];
?>



<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Come On In</span>
                        <span class="section-heading-lower">We're Open</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <!-- la bucle se fait sur la li complète afin de la reproduire avec la mise en forme -->
                        <!-- pour chaque tour de boucle ajoute une nouvelle valeur -->
                        <?php foreach ($array as $value) : ?>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                <!-- nom, prénom -->
                                <?php echo $value[0] . ' ' . $value[1]  ?>
                                <!-- = remplace echo que quand il n'y a une seule value -->
                                <a href="<?= $value[2] ?>" class="ms-auto">Portfolio</a>
                            </li>
                            <!-- toujours mettre en fin de boucle  -->
                        <?php endforeach ?>
                    </ul>

                    <p class="address mb-5">
                        <em>
                            <strong>Promo 2021-2022</strong>
                            <br />
                            Concepteur & développeurs d'application
                        </em>
                    </p>
                    <p class="mb-0">
                        <small><em>Needdemand</em></small>
                        <br />
                        contact@needdemand.com
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/pc.jpg" alt="..." />
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Projet fil rouge</span>
                            <span class="section-heading-lower">Contexte</span>
                        </h2>
                        <p>Projet réalisé dans le cadre d'une formation. En partie en groupe et en partie inviduellement, ce projet est le résultat d'un apprentissage lors d'une formation.</p>
                        <p>Temps de réalisation du projet <em>5 mois</em> environ.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>