<?php

include 'conn.php';
include 'style/style.php';
?>

<body>
  <main style="width: 900px; margin: 20px auto;">

    <h2>Te laat meldingoverzicht</h2>
    <table class="table">

      <tr class="first">
        <th>Naam</th>
        <th>Klas</th>
        <th>Minuten te laat</th>
        <th>Reden</th>
        <th>Bewerken</th>
        <th>Verwijderen</th>
      </tr>
      <?php

      foreach ($result->fetch_all(MYSQLI_ASSOC) as $a) {

        echo "<tr>";
        echo "<th>" . $a["naam"] . "</th>";
        echo "<th>" . $a["klas"] . "</th>";
        echo "<th>" . $a["min"] . "</th>";
        echo "<th>" . $a["reden"] . "</th>";

        echo "<form method='post' action='Update.php'>";
        echo "<input type='hidden' name='id' value=" . $a['id'] . ">";
        echo "<th><input type='submit' class='bewerk' value='bewerken'></th>";
        echo "</form>";

        echo "<form method='post' action='Delete.php'>";
        echo "<input type='hidden' name='ida' value=" . $a['id'] . ">";
        echo "<th><input type='submit' class='verwijder' value='verwijderen' name='delete'></th>";
        echo "</form>";

        echo "</tr>";
      }

      ?>
    </table>

    <h4>Laatmelding toevoegen</h4>

    <form method="post" action="Create.php">

      <button class="knop">Toevoegen</button>

    </form>
  </main>
</body>

</html>