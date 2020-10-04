<!DOCTYPE html>
<html lang="fr">

<head>

    <?php include_once './Views/includes/head.php'?>
    <link rel="stylesheet" href="<?= PATH?>assets/css/contact.css">
    <title><?= ucfirst($page) ?> - Bleuets Rose</title>
</head>

<body>
    
    <?php include_once './Views/includes/header.php'?>
    <p class="ariane">
        <a href="index.php?page=home">Accueil > </a><a href="index.php?page=galerie">Galerie > </a> Contact
    </p>

    <main>       

        <section class="contact">
            <h1 >Bleuets Rose</h1>
  
            <form action="index.php?page=contact" method="post">
                <?php if (!empty($envoi)) { echo "<h2>$envoi</h2>";} ?>
                <?php if (!empty($error)) { echo "<h2>$error</h2>";} ?>

                <fieldset >
                    <legend >
                        Contactez Nous !
                    </legend>
                    <label  for="nom">Nom</label>
                    <input  type="text" name="nom" id="nom" required>

                    <label  for="prenom">Prénom</label>
                    <input  type="text" name="prenom" id="prenom"
                        required>

                    <label  for="cp">Code Postal</label>
                    <input  type="text" name="cp" id="cp">

                    <label  for="ville">Ville</label>
                    <input  type="text" name="ville" id="ville" required>

                    <label  for="adresse">Adresse</label>
                    <input  type="text" name="adresse" id="adresse">

                    <label  for="tel">Téléphone</label>
                    <input  type="tel" name="tel" id="tel" required>

                    <label  for="email">E-mail</label>
                    <input  type="text" name="email" id="email" required>

                    <label  for="objet">Objet</label>
                    <textarea  name="objet" id="objet"></textarea>

                    <label  for="msg">Message</label>
                    <textarea  name="msg" id="msg"></textarea>

                    <span  id="feedback"></span>

                    <div class=" btn">
                        <button  name='contactSend' id="click" type="submit">Envoie</button>
                        <button  name='contactAnnule' type="reset" id="reset">Annuler</button>
                    </div>

                </fieldset>
     
            </form>

            <article>

                <aside>

                    <address >
                        2 Rue de buléon<br>
                        56660 Saint-Jean-Brevelay<br>
                        <a href="0297604165" class="tel">Tel : 02.97.60.41.65</a>
                    </address>

                    <table >
                        <tbody>
                            <tr>
                                <td class="day">Lundi Mardi Jeudi Vendredi Samedi</td>
                                <td>9H30 - 12H</td>
                                <td>15H - 19H15</td>
                            </tr>
                            <tr>
                                <td class="day">Mercredi</td>
                                <td>Fermé</td>
                            </tr>
                            <tr>
                                <td class="day">Dimanche & Férié</td>
                                <td>9H30 - 12H30</td>
                            </tr>
                        </tbody>
                    </table>

                </aside>

                <aside>

                    <address >
                        1 route de vannes<br>
                        56390 Grand-Champ<br>
                        <a href="0952461614" class="tel"> Tel : 09.52.46.16.14</a>
                    </address>

                    <table >
                        <tbody>
                            <tr>
                                <td class="day">Lundi</td>
                                <td>Fermé</td>
                            </tr>
                            <tr>
                                <td class="day">Mardi Mercredi Jeudi Vendredi</td>
                                <td>9H - 12H </td>
                                <td>15H - 19H15</td>
                            </tr>
                            <tr>
                                <td class="day">Samedi</td>
                                <td>9H - 12H30</td>
                                <td>15H - 19H15</td>
                            </tr>
                            <tr>
                                <td class="day">Dimanche & Férié</td>
                                <td>9H - 12H30</td>
                            </tr>
                        </tbody>
                    </table>
                </aside>

            </article>

        </section>

        <div >
            <div id="map" class="map"></div>
        </div>
    </main>
    
    <?php include_once './Views/includes/footer.php'?>

 <!-- ****************jQuery et jQuery UI pour mettre en place l’autocomplétion*************** -->
 <script src="https://code.jquery.com/jquery-3.1.1.min.js" defer></script>
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous" defer></script>
           <!--****** JS Leaflet********-->
       <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
           integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
           crossorigin="" defer></script>

   
    <script src="<?= PATH?>assets/js/auto.min.js" defer></script>
    <script src="<?= PATH?>assets/js/openstreetmap.min.js" defer ></script>
    <script src="<?= PATH?>assets/js/contact.min.js" defer></script>
    
   
</body>

</html>