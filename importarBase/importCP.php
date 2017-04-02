<?php
//load the database configuration file
include '../bd/conexion.php';

if(isset($_POST['importSubmit'])){
    
    //validate whether uploaded file is a csv file
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            //skip first line
            fgetcsv($csvFile);
            
            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                //check whether member already exists in database with same email
                $prevQuery = "SELECT id_codigop FROM codigo_postal WHERE codigo_postal = '".$line[1]."'";
                $prevResult = $mysqli->query($prevQuery);
                if($prevResult->num_rows > 0){
                    //update member data
                    $mysqli->query("UPDATE codigo_postal SET id_codigop = '".$line[0]."', idColonia = '".$line[2]."' WHERE codigo_postal = '".$line[1]."'");
                }else{
                    //insert member data into database
                    $mysqli->query("INSERT INTO codigo_postal (id_codigop, codigo_postal, idColonia) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."')");
                    echo '<script>alert("Registro guardado")</script> ';
		
		echo "<script>location.href='importar.php'</script>";	
                }
            }
            
            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

