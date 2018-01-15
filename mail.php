<?php 
    $text1 = $_GET["name"];
    $text2 = $_GET["sem"].$_GET["branch"];
    $text3 = $_GET["event"];
    $email = $_GET["email"];
   $to = $email;
            $subject = "Participation Certificate";
            $message = "Hi ".$text1.",<br/><br/>Please check the participation certificate attached along with the mail.<br><br>";

            $headers = "From: From-Name<from@gmail.com>";
// boundary
            $semi_rand = md5(time());
            $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

// headers for attachment
            $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

// multipart boundary
            $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=ISO-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";

                $message .= "--{$mime_boundary}\n";
              //////////////  $filepath = "certificates/".$text1." _".$text2."_".$text3.".jpg";


                $filepath = "certificates/".$text1."_".$text2."_".$text3.".jpg";
               // move_uploaded_file($_FILES['image']['tmp_name'], $filepath); //upload the file
               /////////////////////// $filename = $text1." _".$text2."_".$text3.".jpg";
                $filename = $text1."_".$text2."_".$text3.".jpg";
                $file = fopen($filepath, "rb");
                $data = fread($file, filesize($filepath));
                fclose($file);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$filename\"\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"$filename\"\n" .
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                $message .= "--{$mime_boundary}\n";

if(mail($to, $subject, $message, $headers))
{
    echo "Success";
}
else
    echo "Error";


 ?>
