<?php
include_once 'config.php';

if (!empty($_FILES['upload']['tmp_name']))
{

    $path = $_FILES['upload']['name'];
    if (copy($_FILES['upload']['tmp_name'], $path))
        $file = $path;
}
function read($path)
{
    if ($path) {
        $fp = fopen($path, "rb");
        if (!$fp) {
            print "Cannot open file";
            exit();
        }
        $file = fread($fp, filesize($path));

        fclose($fp);
        return $file;
    }
}
$post = $_POST;


if (!empty($post)) {
    $name = $post['name'];
    $email = $post['email'];
    $phone = (int)$post['phone'];
    $calendar = $post['calendar'];

    $html_message = '';


    $full_message = ' Name : ' . $name . ' Email : ' . $email . ' Phone number : ' . $phone . ' Meeting date : ' . $calendar . ' Attachment : ' .read($path) ;



    if (
    (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false)
    ) {
        $result = mail($config['email']['to'], $name, $full_message);

        if ($result) {

            echo $html_message = 'Сообщение отправлено ';
        } else

            echo $html_message = 'Сообщение не отправлено ';
    }


}