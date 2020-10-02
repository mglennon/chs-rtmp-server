    <?php
    $username = $_POST["name"];
    $psk = $_POST["psk"];

    $valid_users = array("john",
                        "winnie",
                        "batman");

    fwrite(STDOUT, "Authenicating Connection from `" + $username +"` key=`" + $psk + "`");
    if (in_array($psk,$valid_users))
    {
        fwrite(STDOUT, "Connection Accepted.");
        http_response_code(201); # return 201 "Created"
    }
    else
    {
        fwrite(STDOUT, "Connection Declined.");
        http_response_code(404); # return 404 "Not Found"
    }
?>