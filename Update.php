<?php

include 'conn.php';
include 'style/style2.php';
$id = $_POST['id'];
$sqli = "SELECT * FROM student WHERE id='$id'";
$query = mysqli_query($conn, $sqli);
$results = mysqli_fetch_assoc($query);




?>

<body>
    <main style="width: 600px; margin: 20px auto;">
        <h2>Update melding late student</h2>

        <form method="post" action="">
            <input type="hidden" name="id" value='<?php echo $results['id'] ?>'>
            <div class="form-group">
                <h4>Naam</h4>
                <input type="text" class="form-control" name="naam" maxlength="30" value='<?php echo $results['naam'] ?>'>
            </div>
            <br><br>
            <div class="form-group">
                <h4>Klas</h4>
                <input type="text" class="form-control" name="klas" value='<?php echo $results['klas'] ?>'>
            </div>
            <br><br>
            <div class="form-group">
                <h4>Minuten te laat</h4>
                <input type="number" min="0" class="form-control" name="min" value='<?php echo $results['min'] ?>'>
            </div>
            <br><br>
            <div class="form-group">
                <h4>Reden voor laatkoming</h4>
                <input type="text" class="form-control" name="reden" value='<?php echo $results['reden'] ?>'>
            </div>

            <input type="submit" class="btn opslaan" name="submit" value="opslaan">

            <?php
            if (isset($_POST['submit'])) {
                $naam = $_POST['naam'];
                $klas = $_POST['klas'];
                $minuten = $_POST['min'];
                $reden = $_POST['reden'];
                $student = $_POST['id'];

                $update = "UPDATE student SET naam = '$naam', klas = '$klas', min = '$minuten', reden = '$reden' WHERE id = $student";
                mysqli_query($conn, $update);
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