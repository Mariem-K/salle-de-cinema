<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Rodia - Haut-Cloques</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <?php require "header.php"; ?>
  <main>
    <section id="tarifs">
      <h2>Tarifs</h2>
        <div class="flex">
            <?php
                // Étape 5 : Listes des tarifs et des abonnements dynamiques
                // On utilise désormais des tableaux associatifs
                // On ne peut boucler sur un tableau qu'avec un foreach
                $tarifsTickets = [
                    'Tarif Plein' => 8.3,
                    'Tarif Réduit' => 6.8,
                    'Tarif Enfant' => 4.5,
                    'Supplément 3D' => 1,
                ];
                $abonnements = [
                    'Abonnement 5 places' => '-10%',
                    'Abonnement 5 places -25ans' => '-20%',
                    'Abonnement temporaire qui reste pas' => '-100%'
                ];
            ?>
            <ul>
                <?php
                    foreach ($tarifsTickets as $tarifsType => $tarifsPrice) {
                        echo '<li>' . $tarifsType . ' : ' . number_format($tarifsPrice, 2, ',', ' ') . ' &euro;</li>';
                    }
                ?>
            </ul>
            <ul>
                <?php
                    foreach ($abonnements as $abonnementsType => $abonnementsReduction) {
                        echo '<li>' . $abonnementsType . ' : ' . $abonnementsReduction . '</li>';
                    }
                ?>
            </ul>
        </div>
        <p>
          Tarif Réduit pour les personnes de + de 60 ans et de moins de 16 ans<br>
          Tarif Enfant pour les - de 14 ans
        </p>
      
      <h2>Selon votre âge</h2>
      <p>
        <?php
            for ($age = 1; $age < 100; $age++) {
                echo $age . ' ans : ';

                if ($age < 14) {
                    $tarif = 4.50;
                } elseif ($age < 16 || $age > 60) {
                    $tarif = 6.80;
                } else {
                    $tarif = 8.30;
                }

                if ($age < 25) {
                    $tarif = $tarif * 0.8;
                } else {
                    $tarif = $tarif * 0.9;
                }

                echo number_format($tarif, 2, ',', ' ') . '&euro;</br>';
            }
        ?>
      </p>
    </section>
  </main>
  <?php require "footer.php"; ?>
</body>
</html>