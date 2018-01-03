<?php $val1=0;$val2=0;$val3=0;$val4=0;$val5=0; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exo2</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <a class="Link" href="index.php">Retour au choix des exercices</a><br/>
        <form method="POST">
            <div class="civility">
                <label for="civility" >Civilité : </label>
                <select name="civility" required="required">
                    <option value="Mme">Madame</option>
                    <option value="M.">Monsieur</option>
                </select>
                <p>
                    <?php
                    if(isset($_POST['civility'])){ 
                        $valcivi = htmlspecialchars($_POST['civility']);
                        if (preg_match("#^(Mme|M\.|[s]?){1}$#i", $_POST['civility'])){
                            echo 'Ok';
                            $val5=1;
                        }else{
                            echo 'Le ' . $_POST['civility'] . ' n\'est pas valide, recommencez !';   
                        }        
                    }
                    ?>
                </p>
            </div>
            <div class="nom">
                <label for="surname">Prénom : </label><input type="text" name="surname" required/>
                    <p>
                    <?php
                    if(isset($_POST['surname'])){ 
                        $_POST['surname'] = htmlspecialchars($_POST['surname']);
                        if (preg_match("#^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+[-']?[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+$#i", $_POST['surname'])){
                            echo 'Ok';
                            $val1=1;
                        }else{
                            echo 'Le ' . $_POST['surname'] . ' n\'est pas valide, recommencez !';   
                        }        
                    }
                    ?>
                    </p>
            </div>
            <div class="prenom">
                <label for="name">Nom : </label><input type="text" name="name" required/>
                <p>
                    <?php
                    if(isset($_POST['name'])){ 
                        $_POST['name'] = htmlspecialchars($_POST['name']);
                        if (preg_match("#^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+[-']?[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+$#i", $_POST['name'])){
                            echo 'Ok';
                            $val2=1;
                        }else{
                            echo 'Le ' . $_POST['name'] . ' n\'est pas valide, recommencez !';   
                        }        
                    }
                    ?>
                </p>
            </div>
            <div class="age">
                <label for="age" >Âge : </label><input type="text" name="age" required/>
                <p>
                    <?php
                    if(isset($_POST['age'])){ 
                        $_POST['age'] = htmlspecialchars($_POST['age']);
                        if (preg_match("#^[0-9]*$#", $_POST['age'])){
                            echo 'Ok';
                            $val3=1;
                        }else{
                            echo 'Le ' . $_POST['age'] . ' n\'est pas valide, recommencez !';   
                        }        
                    }
                    ?>
                </p>
            </div>
            <div class="society">
                <label for="society" >Société : </label><input type="text" name="society" required/>
                <p>
                    <?php
                    if(isset($_POST['society'])){ 
                        $_POST['society'] = htmlspecialchars($_POST['society']);
                        if (preg_match("#^.*$#", $_POST['society'])){
                            echo 'Ok';
                            $val4=1;
                        }else{
                            echo 'Le ' . $_POST['society'] . ' n\'est pas valide, recommencez !';   
                        }        
                    }
                    ?>
                </p>
            </div>
            <input type="submit" value="Valider" /> 
        </form>
        <?php 
            if($val1 == 1 && $val2 == 1 && $val3 == 1 && $val4 == 1 && $val5 == 1){
        ?>
        <p>Civilité : <?php echo $_POST['civility']; ?></p>
        <p>Nom : <?php echo $_POST['name']; ?></p>
        <p>Prenom : <?php echo $_POST['surname']; ?></p>
        <p>Âge : <?php echo $_POST['age']; ?></p>
        <p>socété : <?php echo $_POST['society']; ?></p>
        <?php
        }        
        ?>
    </body>
</html>