<html>
<body>
<?php
 srand( microtime() * 1000000 );
 $num = rand( 1, 4 );
   
 switch( $num )
 {
 case 1: $image_file = "iamge/all/1.png";
     break;
 case 2: $image_file = "iamge/all/1.png";
     break;
 case 3: $image_file = "iamge/all/1.png";
     break;
 case 4: $image_file = "iamge/all/1.png";
     break;
 }
 echo "Random Image : <img src=$image_file />";
?>
</body>
</html>