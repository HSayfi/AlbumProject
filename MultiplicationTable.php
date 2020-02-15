<html>

<body>

    <form action="GenerateMultiplication.php" action="POST">
        <label>Number: </label>
        <input type="text" name="number" id="number" />
        <br /><br />
        <label>Up to: </label>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="upto" id="upto" />
        <br /><br />
        <!-- <input type="submit" value="Submit" style="background-color: red"/> -->

        <br />
        <br />
        <br />
        <table border="1">
            <?php
                for ($i=1; $i < 10; $i++) { 
                    echo "<tr>";
                    for ($j=1; $j < 10; $j++) { 
                        if ($i == $j)
                            echo "<td style=\"background-color: blue\">".$i*$j."</td>";
                        else
                        echo "<td>".$i*$j."</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </form>
</body>

</html>