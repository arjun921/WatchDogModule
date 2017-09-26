<style media="screen">
td,th {
 border-top: 0px solid black;
 box-shadow:0 5px 15px rgba(70,70,70,0.2);
}

td{
  font-family: 'Hind Madurai', sans-serif;
}
th{
  font-family: 'Lora', serif;
}
body {
    margin: 0;
    color: #ccc;
}

th{
  font-family: 'Lora', serif;
}

</style>
<!DOCTYPE html>
<html>
  <head>
 <link href="https://fonts.googleapis.com/css?family=Hind+Madurai:300|Lora|Montserrat" rel="stylesheet">
    <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Inputs</title>

  </head>
  <body style="background-color: #222;">
  <div style="background-color: #000; color: #ccc; vertical-align: center; font-family: 'Montserrat', sans-serif; height: 3em;
font-size: 2em; padding: 2em"><h1>Input to be kept or not?</h1></div>
  <div style="background-color: #222;">
    <table>
        <tr><th  style='padding:1em; '>Checkbox</th><th>Input Executed</th></tr>
        <?php
        // echo "<tr><th  style='padding:1em;'>Checkbox</th><th>Input Executed</th></tr>";
        if ($file = fopen("Processed.txt", "r")) {

            while(!feof($file)) {
                $line = fgets($file);

                echo "<tr>";
                echo "<td style='padding: 1em;'>";
                echo "<input type='Checkbox' name='' value=''>";
                echo "</td>";
                echo "<td style='padding:1em;'>";
                echo $line;
                echo "</td>";
                echo "</tr>";
            }
            fclose($file);
        }
         ?>
      </table>

  </div>
      
    </body>
</html>
