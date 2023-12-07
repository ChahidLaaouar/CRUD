<?php
include 'style/style.php';
include 'conn.php';

?>
<style>
    .verwijder {
        font-size: x-large;
        width: 188px;
        height: 72px;
    }

    .bewerk {
        font-size: x-large;
        width: 188px;
        height: 72px;
    }
</style>

<body>
    <main style="width: 900px; margin: 20px auto;">
        <h2>Weet je zeker?</h2>

        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <div class="row">
            <form class="form" method="post" action="">
                <input type="hidden" name="student" value='<?php echo $_POST['ida'] ?>'>
                <input type="submit" class="verwijder" name="ja" value="Ja">
            </form>

            <form class="form" method="post" action="index.php">
                <input type="submit" class="bewerk" name="nee" value="Nee">
            </form>


        </div>
        <?php
        if (isset($_POST['ja'])) {
            $del = "DELETE FROM student WHERE id = " . $_POST['student'];
            mysqli_query($conn, $del);
            header('location: index.php');
        }

        ?>

</body>