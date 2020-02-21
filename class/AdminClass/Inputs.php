<?php
class inputs
{
    private $c = null;
    public function get($type, $id)
    {
        // all return;
        $q = "SELECT * FROM `web_info` WHERE `tag`='$type'";

        $r = mysqli_query($this->c, $q);

        $r = mysqli_fetch_array($r);

        $r = json_decode($r['info'], JSON_UNESCAPED_UNICODE);

        if ($id != "*") {
            for ($o = 0; $o < sizeof($r); $o++) {
                // index 3 is id
                if ($r[$o][3] == $id) {
                    return $r[$o];
                }
            }
            return null;
        }   // else return all in $r


        return $r;
    }
    public function add($type, $data)
    {
        $id = '_id_' . rand(255, 2000000);

        $data[3] = $id;

        $SQLdata = $this->get($type, "*");

        array_push($SQLdata, $data);

        $this->update($type, $SQLdata);
    }
    public function remove($type, $id)
    {

        $data = $this->get($type, "*");
        for ($o = 0; $o < sizeof($data); $o++) {
            // index 3 is id
            if ($data[$o][3] == $id) {
                echo var_dump($data) . ' :::: ' . $o;
                $index = $o;
                $countAfter = $o == 0 ? 1 : $o;
                array_splice($data, $index, $countAfter);
                echo var_dump($data);
            }
        }
        $this->update($type, $data);
    }
    public function update($type, $data)
    {
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);

        $q  = "UPDATE `web_info` SET `info`='$data' WHERE `tag`='$type'";

        $r = mysqli_query($this->c, $q);
    }
    public function edit($type, $newInputData)

    {

        $data = $this->get($type, "*");
        for ($o = 0; $o < sizeof($data); $o++) {
            // index 3 is id
            if ($data[$o][3] == $newInputData[3]) {
                $data[$o] = $newInputData;
            }
        }
        $this->update($type, $data);
    }


    public function __construct($c)
    {
        $this->c = $c;
    }
}
