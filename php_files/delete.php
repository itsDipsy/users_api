
<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Methods: *");

    $filename = "../users.json";
    
    
    if(file_exists($filename)){
        $users_json = file_get_contents($filename);
        $data_for_json = [];
        if($_SERVER["REQUEST_METHOD"] == "DELETE" && $_SERVER["REQUEST_URI"] != ""){

            $request_uri_num = intval($_SERVER["REQUEST_URI"]);
            $users_in_php = json_decode($users_json, true);
            for($index = 0; $index < count($users_in_php); $index++){
                if($users_in_php["id"] == $index){
                    $new_users_after_delete = array_splice($users_in_php, $index, 1);
                    $json_new_users = json_encode($new_users_after_delete);
                    
                    file_put_contents($filename, $json_new_users);
                    exit();
                    
                }
            }
        }
        else{
            echo "You need an id!";
            exit();
        }
    }
?>



