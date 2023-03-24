<?php
    $filename = "../users.json";
    if(file_exists($filename)){
        
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $id_counter = 0;
            $old_data = json_decode(file_get_contents($filename), true);

            foreach($old_data as $data){ // Kollar vem som har störst ID och lägger den i $id_counter
                if($data["id"] > $id_counter){
                    $id_counter = $data["id"];
                }
            }
            
            $id_counter++; // Här får vi den uppdaterade ID:et som den nya användaren ska få

            $new_user_data = [
                "id" => $id_counter,
                "first_name" => $_POST["first_name"],
                "last_name" => $_POST["last_name"],
                "email" => $_POST["email"],
                "IP" =>  $_POST["ip_adress"],

            ];
            
            array_push($old_data, $new_user_data);
            $new_data = $old_data;
            file_put_contents($filename, json_encode($new_data), JSON_PRETTY_PRINT);
        }
        else{
            exit();
        }
    }
    else{
        file_put_contents($filename, null);
    }
?>