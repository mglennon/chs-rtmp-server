    <?php
    $username = $_POST["name"];
    $password = $_POST["psk"];

    $valid_users = array("john" => "supersecret",
                        "winnie" => "thepooh",
                        "batman" => "nananananananana");

    if ($valid_users[$username] == $password)
    {
        http_response_code(201); # return 201 "Created"
    }
    else
    {
        http_response_code(404); # return 404 "Not Found"
    }
?>