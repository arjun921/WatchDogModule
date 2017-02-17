<style media="screen">
td,th {
 border: 1px solid black;
}

</style>


<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
      <!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
      <!--Import materialize.css-->
      <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->

      <!--Let browser know website is optimized for mobile-->
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->
    <title>Inputs</title>

  </head>
  <body>
      <table >
        <tr><th style="width=100%">Input to be kept or not?</th></tr>
        <?php
        echo "<tr><th>Checkbox</th><th>Input Executed</th></tr>";
        if ($file = fopen("inputs.txt", "r")) {

            while(!feof($file)) {
                $line = fgets($file);

                echo "<tr>";
                echo "<td>";
                echo "<input type='Checkbox' name='' value=''>";
                echo "</td>";
                echo "<td>";
                echo $line;
                echo "</td>";
                echo "</tr>";
            }
            fclose($file);
        }
         ?>
      </table>
    </body>
</html>
