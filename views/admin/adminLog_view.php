<!DOCTYPE html>
<html lang="fr">
<html>
<head>

    <?php include_once 'includes/head.php'?>

    <title><?= ucfirst($page) ?></title>
</head>

<body id="connect">

    <?php include_once 'includes/header.php'?>

    <h1>Connexion Espace Admin</h1>
    
    <form action="" method="post" class="container">
      <fieldset class="row"> Me Connecter
        <input type="text" name="log" id="log" required>
        <input type="password" name="pass" id="pass" required>
        <button type="submit" name="submit" value="submit">Se Connecter</button>
        <?php if (!empty($error)) { echo "<h2>$error</h2>";} ?>
      </fieldset>
    </form>
    <?php include_once 'includes/footer.php'?>

</body>
</html>