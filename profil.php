<!DOCTYPE html>
<html>
        <head>
            <title>TP 1</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css"/>
        </head>
    <body>
        <p class="profile"><?php echo ('Vous vous appelez ' . $_POST['lastname'] . ' ' . $_POST['firstname']) ?>                
        </p>
        <p class="profile"><?php echo ('Vous êtes né(e) le ' . $_POST['birthdate'] . ', en ' . $_POST['birthCountry']); ?>                
        </p>
        <p class="profile"><?php echo ('Vous êtes ' . $_POST['nationality'] . ' et domicilié(e) au ' . $_POST['adress']); ?>                
        </p>
        <p class="profile"><?php echo ('Votre email est : ' . $_POST['mail'] . '. Votre numéro de téléphone est le : ' . $_POST['phone']); ?>                
        </p>
        <p class="profile"><?php echo ('Vous êtes au niveau : ' . $_POST['diploma'] . '. Votre numéro pôle emploi est : ' . $_POST['numéroPoleEmploi']); ?>                
        </p>
        <p class="profile"><?php echo ('Votre avez obtenu ' . $_POST['badges'] . ' badges sur votre profil :  <a href="' . $_POST['codecademyLink'] . '">Codecademy</a>'); ?>                
        </p>
        <p class="profile"><?php echo ('Si vous êtiez un super héros vous seriez : '); ?><br>
                           <?php echo ($_POST['superhero'] ); ?>                
        </p>
        <p class="profile"><?php echo ('Votre hacks préféré est : '); ?><br>
        <?php echo ($_POST['hack'] ); ?>                
        </p>
        <p class="profile"><?php echo ('Votre expérience : '); ?><br>
            <?php echo ($_POST['experience'] ); ?>                
        </p>
        <p class="profile"><a href="tp1.php">Retour au formulaire</a></p>
         </body>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>