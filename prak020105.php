<html>
 	<head>Headings</head>
 	<body>
 	<?php
        $i=1;
        do{
            if($i % 2 == 0){
                echo "<h$i style ='color: pink;'>Heading $i</h$i>";
            } 
            else{
                echo "<h".$i.">Heading ".$i."</h".$i.">";
             }
             $i = $i + 1;
        }  
        while ($i <= 6);
 	?>
 	</body>
</html>
