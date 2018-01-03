<!DOCTYPE html>
<html>
    <head>
        <title>TP 3</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <?php
      $portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
      $portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
      $portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
      $portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
      function showDataArray($tableVar) {
          $name = $tableVar['name'];
          $firstName = $tableVar['firstname'];
          $portrait = '<img class="authors" style="height:100px;width:100px;" src="' . $tableVar['portrait'] . '" title="' . $name . ' ' . $firstName . '" alt="' . $name . ' ' . $firstName . '"/>';
          return $name . ' ' . $firstName . '<br>' . $portrait;
      }
      ?>
          <div><?php echo showDataArray($portrait1); ?></div>
          <div><?php echo showDataArray($portrait2); ?></div>
          <div><?php echo showDataArray($portrait3); ?></div>
          <div><?php echo showDataArray($portrait4); ?></div>
    </body>
</html>
