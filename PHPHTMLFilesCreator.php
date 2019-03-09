<html>
<head>
</head>
<body>

<?php
    $filename = 'phpfiles/autogen'; //. $filenumber . $extension;
    $filenumber = 0;
    $extension = '.php';       


    $myfile = fopen(newFile($filename, $filenumber, $extension), "w");

    //fwrite($myfile, writeToFile());

    $text = "";
        $text .= "<html>";
        $text .= "<head>";
        $text .= "<title>TITLE IS OK: ".$globname."</title>";
        $text .= "<body>";
        $text .= "HTML Successfull";
        $text .= "</body>";
        $text .= "</html>"; 
        //echo $text;

    fwrite($myfile, $text);

    function newFile($filnamn, $filnummer, $ext){  

        $newfilename = $filnamn . $filnummer . $ext;

        while(file_exists($filnamn . $filnummer . $ext)) {
        $filnummer++;
        $newfilename = $filnamn . $filnummer . $ext;
    }

    if($newfilename)
    {
        echo "Succes! " . $newfilename . " created!";
        //returnTitle($filnummer);
        global $globname;
        $globname = $newfilename;
    }   

    return $newfilename;
    
    }

               
    echo "TEST <br />";
    echo "TEST <br />";
    echo $globname;
?>

</body>
</html>