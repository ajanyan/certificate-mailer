<?php



      header('Content-type: image/jpeg');
      $jpg_image = imagecreatefromjpeg("images/cer.jpg");
      $colour = imagecolorallocate($jpg_image, 0, 0, 0);
      $font_path = 'font/OpenSans-Bold.TTF';
      $text1 = $_GET["name"];
      $text2 = $_GET["class"];
    //  $text3 = $_GET["event"];
      $text4 = "17-01-18";
      imagettftext($jpg_image, 70, 0, 1600, 1400, $colour, $font_path, $text1);
      imagettftext($jpg_image, 70, 0, 650, 1550, $colour, $font_path, $text2);
    //  imagettftext($jpg_image, 70, 0, 2100, 1550, $colour, $font_path, $text3);
      imagettftext($jpg_image, 70, 0, 600, 1700, $colour, $font_path, $text4);
      if(imagejpeg($jpg_image,"certificates/".$text1."_".$text2."_".$text3.".jpg"))
      {
            echo "Success";

      }


      //imagedestroy($jpg_image);
    ?>
