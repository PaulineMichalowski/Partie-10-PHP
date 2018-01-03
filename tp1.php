<!DOCTYPE html>
<html>
    <head>
        <title>TP 1</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <a class="exChoice" href="index.php">Retour au choix des exercices</a><br/>
        <form method="POST">
            <div class="lastname">
                <label for="lastname">Prénom : </label><input type="text" name="surname" required/>
                <p>
                    <?php
                    if(isset($_POST['lastname'])) {
                        $_POST['lastname'] = htmlspecialchars($_POST['surname']);
                        if (preg_match("#^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+[-']?[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+$#i", $_POST['lastname'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['lastname'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="firstname">
                <label for="firstname">Nom : </label><input type="text" name="firstname" required/>
                <p>
                    <?php
                    if(isset($_POST['firstname'])) {
                        $_POST['firstname'] = htmlspecialchars($_POST['firstname']);
                        if (preg_match("#^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+[-']?[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+$#i", $_POST['firstname'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['firstname'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="birthDate">
                <label for="birthDate">Date de naissance : </label><input type="text" name="birthDate" required/>
                <p>
                    <?php
                    if(isset($_POST['birthDate'])){
                        $_POST['birthDate'] = htmlspecialchars($_POST['birthDate']);
                        if (preg_match("#^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$#", $_POST['birthDate'])) {
                            if (preg_match("#^[3][0-1][\/\-][0][2]#", $_POST['birthDate']) == TRUE) {
                                echo 'Le ' . $_POST['birthDate'] . ' n\'est pas valide, recommencez !';
                            } else {
                                echo 'Ok';
                            }
                        } else {
                            echo 'Le ' . $_POST['birthDate'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="birthCountry">
                <label for="from">Pays de naissance : </label><input typr="text" name="birthCountry" required/>
                <p>
                    <?php
                    if (isset($_POST['birthCountry'])){
                        $_POST['from'] = htmlspecialchars($_POST['birthCountry']);
                        if (preg_match("#^([a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]|\s)*$#", $_POST['birthCountry'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['birthCountry'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="nationality">
                <label for="nationality">Nationalité : </label><input type="text" name="nationality" required/>
                <p>
                    <?php
                    if(isset($_POST['nationality'])){
                        $_POST['nationality'] = htmlspecialchars($_POST['nationality']);
                        if (preg_match("#^([a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]|\s)*$#", $_POST['nationality'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['nationality'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div  class="adress">
                <label for="adress">Adresse : </label><input type="texte" name="adress" class="inputadresse" required/>
                <p>
                    <?php
                    if(isset($_POST['adress'])){
                        $_POST['adress'] = htmlspecialchars($_POST['adress']);
                        if (preg_match("#^.*$#", $_POST['adress'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['adress'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="tel"> 
                <label for="tel">Numéro de télephone : </label><input type="texte" name="tel" required/>
                <p>
                    <?php
                    if(isset($_POST['tel'])){
                        $_POST['tel'] = htmlspecialchars($_POST['tel']);
                        if (preg_match("#^0[1-9]((-[0-9]{2}){4}|(([0-9]{2})){4}|(\/[0-9]{2}){4}|(\\[0-9]{2}){4}|(_[0-9]{2}){4}|(\s[0-9]{2}){4})$#", $_POST['tel'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['tel'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="mail">
                <label for="mail">Adresse mail : </label><input type="texte" name="mail" required/>
                <p>
                    <?php
                    if(isset($_POST['mail'])){
                        $_POST['mail'] = htmlspecialchars($_POST['mail']);
                        if (preg_match("#^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+[\.-]?[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+@{1}[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+\.{1}[a-z]{2,4}$#i", $_POST['mail'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="diploma">
                <label for="diploma">Diplôme : </label><input type="texte" placeholder="sans, Bac, Bac+2, Bac+3 ou supérieur" name="diploma" required/>
                <p>
                    <?php
                    if(isset($_POST['diploma'])){
                        $_POST['diplome'] = htmlspecialchars($_POST['diploma']);
                        if (preg_match("#^(sans|bac|bac\+2|bac\+3|supérieur)$#i", $_POST['diploma'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['diploma'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="poleEmploiID">
                <label for="poleEmploiID">Numéro pôle emploi : </label><input type="texte" name="poleEmploiID" required/>
                <p>
                    <?php
                    if (isset($_POST['poleEmploiID'])){
                        $_POST['poleEmploiID'] = htmlspecialchars($_POST['poleEmploiID']);
                        if (preg_match("#^[0-9A-Z]{8}$#", $_POST['poleEmploiID'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['poleEmploiID'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="badgeNumbers">
                <label for="badgeNumbers">Nombre de badges : </label><input type="texte" name="badgeNumbers" required/>
                <p>
                    <?php
                    if (isset($_POST['badgeNumbers'])){
                        $_POST['badgeNumbers'] = htmlspecialchars($_POST['badgeNumbers']);
                        if (preg_match("#^[0-9]+$#", $_POST['badgeNumbers'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['badgeNumbers'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="codeCademyLink">
                <label for="codeCademyLink">Lien codecademy : </label><input type="texte" name="codeCademyLink" required/>
                <p>
                    <?php
                    if (isset($_POST['codeCademyLink'])){
                        $_POST['codeCademyLink'] = htmlspecialchars($_POST['codeCademyLink']);
                        if (preg_match("#^https?:\/\/www\.codecademy\.com\/.*$#", $_POST['codeCademyLink'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['codeCademyLink'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="hero">
                <p><label for="hero">Si vous étiez un super héros / une super héroïne, qui seriez-vous et pourquoi ? </label></p>
                <textarea type="texte" rows="9" cols="95" name="hero" required></textarea>
                <p>
                    <?php
                    if(isset($_POST['hero'])){
                        $_POST['hero'] = htmlspecialchars($_POST['hero']);
                        if (preg_match("#^.*$#", $_POST['hero'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['hero'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="hack">
                <p><label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) : </label></p>
                <textarea type="texte" rows="9" cols="95" name="hack" required></textarea>
                <p>
                    <?php
                    if(isset($_POST['hack'])){
                        $_POST['hack'] = htmlspecialchars($_POST['hack']);
                        if (preg_match("#^.*$#", $_POST['hack'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['hack'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="exp">
                <p><label for="exp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? </label></p>
                <textarea type="texte" rows="9" cols="95" name="exp" required></textarea>
                <p>
                    <?php
                    if(isset($_POST['exp'])){
                        $_POST['exp'] = htmlspecialchars($_POST['exp']);
                        if (preg_match("#^.*$#", $_POST['exp'])) {
                            echo 'Ok';
                        } else {
                            echo 'Le ' . $_POST['exp'] . ' n\'est pas valide, recommencez !';
                        }
                    }
                    ?>
                </p>
            </div>  
            <input type="submit" value="Valider" />
        </form>
        <br/>
    </body>
</html>


