<html>
    <head>
        <title>
            To Split 1 File to 2 Output Files
        </title>
    </head>
    <body bgcolor="swkyblue">
        <h2 style="color:midnightblue">File Split Program</h2>
        <?php
        $file1=$_POST['file1'];
        $file2=$_POST['file2'];
        $file3=$_POST['file3'];
        $fp1=fopen($file1,"r");
        $fp1=fopen($file2,"w");
        $fp1=fopen($file3,"w");
        $f_size=filesize($file1);
        $n1=(int)($f_size/2);
                for($i= 1;$i<$f_size;$i++){
                    $ch=fgetc( $fp1);
                    if($i<=$n1)
                    fwrite($fp2,$ch);
                    else
                    fwrite($fp3,$ch);   
                }
        echo "File Split is over"."<br/>";
        echo "Size of ".$file1."=".$f_size."<br/>";
        echo "Size of ".$file2."=".$n1."<br/>";
        echo "Size of ".$file3."=".($f_size-$n1)."<br/>";
        fclose($fp1);
        fclose($fp2);
        ?>
        <pre>
            <a href="fsplit.html">Press Here to loD HTML FILE</a>
        
    </body>
</html>