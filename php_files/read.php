<?php
    $filename = "../users.json";
    if(file_exists($filename)){ 
        $users_json = file_get_contents($filename);
        if($_SERVER["REQUEST_METHOD"] == "GET" && $_GET["id"] == ""){
            header("Content-Type: application/json");
            echo json_encode($users_json);
            exit();
        }

        if($_SERVER["REQUEST_METHOD"] == "GET" && $_GET["id"] != ""){
            $data_for_json = [];
            $user_in_php = json_decode($users_json, true);
            for ($i=0; $i < count($user_in_php) ; $i++) { 
                if($user_in_php[$i]["id"] == $_GET["id"]){
                    $data_for_json = $user_in_php[$i];
                }
            }
            $data_json = json_encode($data_for_json, true);
            header("Content-Type: application/json");
            echo $data_json;
            exit();
        }
    }
?>




