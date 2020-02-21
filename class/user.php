<?php

class user
{
    private $c = null;
    public function updateProfileData($data)
    { }
    public function getProfileData($email)
    {
        $q = "SELECT * FROM `users` WHERE `email`='$email'";

        $r = mysqli_query($this->c, $q);

        $r = mysqli_fetch_array($r, TRUE);

        return $r;
    }

    public function __construct($c)
    {
        $this->c = $c;
    }

    public function printInfo()
    { }
    public function updateImage($email, $img, $column)
    {


        $dm = null;

        if (isset($img) && $img['size'] > 0) {

            $types = ['jpg', 'png', 'jpeg'];

            $imgtype = explode('.', $img['name']);

            $imgtype = strtolower(end($imgtype));
            if (in_array($imgtype, $types)) {
                if ($img['error'] == 0) {
                    if ($img['size'] <= 10000000) {
                        $new_name = uniqid('', true) . "." . $imgtype;

                        $d = "../assets/$new_name";
                        $dm = "assets/$new_name";

                        move_uploaded_file($img['tmp_name'], $d);

                        $q = "UPDATE `users` SET `$column`='$dm' WHERE `email`='$email'";

                        mysqli_query($this->c, $q);
                    }
                }
            }
        };

        return $dm; // return link


    }
}
