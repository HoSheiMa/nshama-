<?php


// include AdminClass/Inputs.php


class admin
{
    private $inputs = null;

    public function __construct($c)
    {
        $this->inputs = new inputs($c);
    }

    public function isAdmin()
    {
        return isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true;
    }
    public function inputsFunction($order, $type, $data)
    {
        if ($order == "remove") {
            $id = $data;
            return $this->inputs->remove($type, $id);
        }
        if ($order == "add") {
            return $this->inputs->add($type, $data);
        }
        if ($order == "get") {
            $id = $data;
            return $this->inputs->get($type, $id);
        }
        if ($order == "edit") {
            return $this->inputs->edit($type, $data);
        }
    }
}
