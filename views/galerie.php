<!DOCTYPE html>
<html lang="fr">

<head>

    <?php include_once 'Views/includes/head.php'?>
    <link rel="stylesheet" href="<?= PATH?>assets/css/galerie.css">
    <title><?= ucfirst($page) ?> - Bleuets Rose</title>

</head>

<body>

    <?php include_once 'Views/includes/header.php'?>

    <p class="ariane">
        <a href="index.php?page=home">Accueil > </a> Galerie
    </p>
    <h1>Galerie</h1>
    <main>

        <div class=" filtre">

            <button class="btn active" onclick="filterSelection('all')">Toutes les catégories</button>
            <button class="btn" onclick="filterSelection('mariage')">Mariage</button>
            <button class="btn" onclick="filterSelection('deces')">Décès</button>
            <button class="btn" onclick="filterSelection('St_valentin')">St Valentin</button>

        </div>

        <div class="photos">

            <article class="mariage">

                <figure class="item">
                    <img class="item__image" src="assets/images/slider/14480565_1439396382742705_7265724445211225810_o.jpg" alt="bouquet fleure rose">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 1</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>

                <figure class="item">
                    <img class="item__image" src="assets/images/slider/14480565_1439396382742705_7265724445211225810_o.jpg" alt="bouquet fleure rose">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 2</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>

                <figure class="item">
                    <img class="item__image" src="assets/images/slider/14480565_1439396382742705_7265724445211225810_o.jpg" alt="bouquet fleure rose">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 3</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>

                <figure class="item">
                    <img class="item__image" src="assets/images/slider/14480565_1439396382742705_7265724445211225810_o.jpg" alt="bouquet fleure rose">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>

            </article>

            <article class=" deces">

                <figure class="item">
                    <img class="item__image" src="assets/images/slider/13923533_1387945637887780_3845945640515613113_o.jpg" alt="bouquet fleure rouge">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                <figure class="item">
                    <img class="item__image" src="assets/images/slider/13923533_1387945637887780_3845945640515613113_o.jpg" alt="bouquet fleure rouge">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 5</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                <figure class="item">
                    <img class="item__image" src="assets/images/slider/13923533_1387945637887780_3845945640515613113_o.jpg" alt="bouquet fleure rouge">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 6</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                <figure class="item">
                    <img class="item__image" src="assets/images/slider/13923533_1387945637887780_3845945640515613113_o.jpg" alt="bouquet fleure rouge">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                
            </article>

            <article class=" St_valentin">

                <figure class="item">
                    <img class="item__image" src="assets/images/slider/14425334_1439408939408116_8310405651433871130_o.jpg" alt="composition floral">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                <figure class="item">
                    <img class="item__image" src="assets/images/slider/14425334_1439408939408116_8310405651433871130_o.jpg" alt="composition floral">
                    <figcaption class="item__body ">
                        <h3 class="img-resp item__title">Titre 5</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                <figure class="item">
                    <img class="item__image" src="assets/images/slider/14425334_1439408939408116_8310405651433871130_o.jpg" alt="composition floral">
                    <figcaption class="item__body ">
                        <h3 class="img-resp item__title">Titre 6</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                <figure class="item">
                    <img class="item__image" src="assets/images/slider/14425334_1439408939408116_8310405651433871130_o.jpg" alt="composition floral"> 
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
               
            </article>

        </div>
        
    </main>
    
    <?php include_once 'Views/includes/footer.php'?>

    <script src="<?= PATH?>assets/js/galerie.min.js" defer></script>
    
</body>

</html>
