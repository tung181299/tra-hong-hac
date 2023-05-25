<?php
if(isset($_POST['submit'])) {
    $file = "data.json";
    $arr = array(
        'name'     => $_POST['name'],
        'email'    => $_POST['email'],
        'phone'    => $_POST['cell'],
        'birthday' => $_POST['dob'],
        'years'    => $_POST['study']
    );
    $json_string = json_encode($arr);
    file_put_contents($file, $json_string);
    echo $json_string;
}
?>