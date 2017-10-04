<?php
    //7.1 Create File

    //fopen()
    //Used to open files, can also create new if it does not exist
    //We need to things in ( ): 1) name of the file, 2) action we want to do (read, write, etc.

    $our_file_name="test_file.txt";
    $our_file_handle=fopen($our_file_name, 'w');
    ordie("can'topenfile");
    flose($our_file_handle);

    //7.2 Opening a File

    //Read 'r'
    //Open file for read only use. The file pointer begins at the front of the file.

    //Write 'w'
    //Open a file for write only use. In addition,
    //the data in the file is erased and you will begin writing data at the beginning of the file.
    //This is also called truncating a file.
    // The file pointer begins at the start of the file

    //Append 'a'
    //Open a file for write only use.
    //The data in the file is preserved and you will begin writing data at the end of the file.
    //The file pointer begins at the end of the file.

    //7.3 File Write

    $file_name="data.txt";
    $fp = @fopen($file_name, 'w');
    if(is_resource($fp)) //file open ok?
    {
        fwrite($fp,$Course."\n");
        fwrite($fp,$Number."\n");
        for($i=0;$i<$Number;$i++)
        {
            fwrite($fp, $Names[$i]."\n");
            fwrite($fp, $Groups[$i]."\n");
            fwrite($fp, $Points[$i]."\n");
            fwrite($fp, $Grades[$i]."\n");
            fwrite($fp, $GradeDesc[$i]."\n");
        }
        fclose($fp);
    }
    else
    {
        echo "Problems";
    }

    //7.4 File Reading
    //Note that the maximum length of one line can be 4096 characters.

    $fileName="data_two.txt";
    $fp = @fopen($fileName, "r");
    if(is_resource($fp))
    {
        $Course=fgets($fp, 4096);
        $Number=fgets($fp, 4096);
        $i=0;
        while(!feof($fp))
        {
            $Names[$i]=fgets($fp, 4096); //4096 is NOT NEEDED!
            $Groups[$i]=fgets($fp); // OK!
            $Points[$i]=fgets($fp);
            $Grades[$i]=fgets($fp);
            $GradeDesc[$i]=fgets($fp);
            $i++;
        }
        fclose($fp);
    }
    else
        {
        echo 'Problems';
    }

    //7.5 Deleting a File

    $ourFileName= "testFile.txt";
    $ourFileHandle= fopen($ourFileName, 'w');
    ordie("can't open file");
    fclose($ourFileHandle);   // We make sure that the file is closed
    unlink($myFile); // we delete the file

    //7.8 Appending a File

    //Appending a file means adding on to existing data.
    //In order to append to a file we need to open it in append mode.

    $ourFileName= "testFile.txt";
    $ourFileHandle= fopen($ourFileName, 'w');
    ordie("can't open file");
    $text = " Add text 1";
    fwrite($ourFileName,$text) ;
    $text = " Add text 2";
    fwrite($ourFileName,$text);
    fclose($ourFileHandle);
?>