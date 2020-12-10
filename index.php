<html>
    <head>
        <style>
            body{text-align:center;background-color:gray;}
            article{text-align:left;width:80%;border:1px solid black;padding:15px;border-radius:20px;margin:20px auto;box-shadow:5px 5px 5px black;background-color:lightgray}
            p{border-bottom:1px solid gray;}
        </style>
    </head>
    <body>
        <?php
            $exos=[
                "tva.php",
                "positif.php",
                "42.php",
                "heure.php",
                "pyramide.php",
                "capitales.php",
                "13.php",
                "password.php",
                "incrementation.php",
                "pays.php",
                "leet.php"
            ];

            foreach($exos as $exo){
                echo "<article>";
                include("exos/".$exo);
                echo "</article>";
            }
        ?>
    </body>
</html>