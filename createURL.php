<?php
    $email=$_POST['email'];
    $longURL=$_POST['longURL'];
    $shortCode=$_POST['shortCode'];
    if (!empty($email) && !empty($longURL)) {
        $folder_name = $shortCode;
        $output_dir = '/';
        /* Check folder exists or not */
        if (!file_exists($output_dir . $folder_name)) {
            @mkdir($output_dir . $folder_name, 0777);/* Create folder by using mkdir function */
            
            $myfile = fopen($output_dir . $folder_name . "index.html", "w") or die("Unable to open file!");
            $txt = "<html><head>\n";
            $txt += "<meta http-equiv=\"refresh\" content="0; url=\"" . $longURL . "\"></head><body>";
            $txt += "</body></html>";
            fwrite($myfile, $txt);
            fclose($myfile);
        } else {
            echo 'Something went wrong!';
        }
    }
?>