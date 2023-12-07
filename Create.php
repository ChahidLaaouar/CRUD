<?php

include 'conn.php';
include 'style/style2.php';

?>

<body>
    <main style="width: 600px; margin: 20px auto;">
        <h2>Nieuwe melding late student</h2>

        <form method="post">
            <div class="form-group">
                <h4>Naam</h4>
                <input type="text" class="form-control" name="naam" maxlength="30">
            </div>
            <br><br>
            <div class="form-group">
                <h4>Klas</h4>
                <input type="text" class="form-control" name="klas">
            </div>
            <br><br>
            <div class="form-group">
                <h4>Minuten te laat</h4>
                <input type="number" min="0" class="form-control" name="min">
            </div>
            <br><br>
            <div class="form-group">
                <h4>Reden voor laatkoming</h4>
                <textarea class="form-control" name="reden"></textarea>
            </div>

            <input type="submit" class="btn opslaan" name="submit" value="opslaan">
            <?php


            if (isset($_POST['submit'])) {

                $a = $_POST['naam'];
                $b = $_POST['klas'];
                $c = $_POST['min'];
                $d = $_POST['reden'];

                $create = "INSERT INTO student VALUES (NULL, '$a', '$b', '$c', '$d')";
                mysqli_query($conn, $create);
                echo "<p>Opgeslagen!</p>";
            }
            ?>

        </form>

        <br><br><br><br>
        <form method="post" action="index.php">
            <input type="submit" class="terugknop" value="<- terug">
        </form>

    </main>
</body>