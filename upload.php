<?php
    include_once("function.php");
    $file= $_FILES['files'];
    //echo"<pre>",print_r($file),"</pre>";
    $fileName= $file['name'];
    $fileType= $file['type'];
    $fileTmpname= $file['tmp_name'];
    $fileSize= $file['size'];
    $dir = "uploads/";

    foreach($fileName as $index => $name){
        if(tanawonAngFileType($fileType[$index])){
           if(tanawonAngSize($fileSize[$index])){
            $targetDir = $dir.basename($fileName[$index]);
                if(TanawonKungNaaNaBaNaNgaFile($targetDir)){
                    if(ibalhinSaDirectory($fileTmpname[$index],$targetDir)){
                        echo "na upload na ang ",$fileName[$index],"<br>";
                        echo '
                        <div class="col-md-3">
                        <img src="'.$dir . '/' . $fileName[$index].'" alt="..." style="width:250px; height:auto;">
                    </div>';
                    }
                }else{
                    echo "wa man na upload bay ky naana naman ";
                }

           }else{
                echo "dako ra sad kaayu na uy";
           }
        }else{
            echo "di mao inyung file";
        }
    }

    

    /* //scan "uploads" folder and display them accordingly
    $folder = "uploads";
    $results = scandir('uploads');
    foreach ($results as $result) {
        if ($result === '.' or $result === '..') continue;

        if (is_file($folder . '/' . $result)) {
            echo '
                <div class="col-md-3">
                    <img src="'.$folder . '/' . $result.'" alt="..." style="width:250px; height:auto;">
                </div>';
        }
    }
 */
?>