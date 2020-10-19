<!DOCTYPE html>
<html lang="fr">

<head>

    <?php include_once '../includes/head.php';?>

    <title><?= ucfirst($admin) ?></title>
</head>

<body>


    <?php include_once 'includes/header.php';?>
    <h1>Administration</h1>
  
    <main>

        <section class="content">
            <h2>Gestions des Admins</h2>
            <ul>
                <?php foreach($allAdmins as $admin) : ?>

                <li>
                    <?= $admin['id'] . ' : ' . $admin['firstname'] ?> <?= $admin['lastname'] ?>

                    <?php if($admin['confirmer'] == 0){ ?>

                    <a href="indexAdmin.php?confirmer=<?= $admin['id']?>"> - <button type="submit"
                            name="confirmer">Confirmer</button></a>

                    <?php } ?>

                    <a href="indexAdmin.php?supprimer=<?= $admin['id']?>">- <button type="submit"
                            name="confirmer">Supprimer</button></a>

                </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="content">
            <h2>Upload d'Images</h2>

            <?php if(isset($success)):?>

            <div class="success"><?php echo $success;?></div>

            <?php endif;?>

            <?php if(isset($erreur)):?>

            <div class="error"><?php echo $erreur;?></div>

            <?php endif;?>

            <form action="indexAdmin.php?admin=admin" enctype="multipart/form-data" method="post">

                <label for="avatar">Charger une photo :</label>

                <input type="file" name="avatar" id="avatar"/>



                <select name="categorie">

                    <?php foreach($allCategories as $allCategories =>$category) : ?>
                    <option value="idCategory"><?= $category['id']. ' : ' . $category['nom']?></option>
                    <?php endforeach;?>

                </select>

                <select name="shop">
                    <?php foreach($allShop as $allShop =>$shop) : ?>
                    <option value="idShop"><?= $shop['id'] . ' : ' . $shop['nom']?></option>
                    <?php endforeach;?>

                </select>

                <select name="admin">

                    <?php foreach($allAdmins as $allAdmins =>$admin) : ?>

                    <option value="idAdmin"><?= $admin['id'] .' : ' . $admin['firstname']?></option>

                    <?php endforeach;?>
                </select>

                <input type="submit" class="submit" value="Charger" />

            </form>


            <div id="gallerie">

                <?php
            global $db;
			$req = $db->prepare('SELECT * FROM `images` ORDER BY `id` DESC');
            $req->execute();
            //PDO::FETCH_OBJ -recupere les données sous forme d'objet
			while($data = $req->fetch(PDO::FETCH_OBJ)):?>

                <aside class="img">

                    <a href="./assets/images/fullsize/<?php echo $data->image;?>">
                        <?php echo $data->id;?>
                        <img class="img-resp" src="./assets/images/min/<?php echo $data->image;?>" />
                    </a>

                </aside>

                <?php endwhile;?>

            </div>


        </section>


    </main>

    <?php include_once 'includes/footer.php'; ?>
</body>

</html>