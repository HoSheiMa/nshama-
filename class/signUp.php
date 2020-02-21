<?php
class signUp
{

    private $c = null;
    private function reqs($type)
    {
        // ? requires info from admins for sign up, this requires are dynamic => admin can change any time
        $q = "SELECT * FROM `web_info` WHERE `tag`='$type'";


        $r = mysqli_query($this->c, $q);
        $r = mysqli_fetch_array($r, MYSQLI_ASSOC)['info'];
        $r = json_decode($r, true);

        $reqs = $r;

        return $reqs;
    }
    public function reqsInputs($type, $datafill = null)
    {

        // datafill using in user,team,etc for fill data for this specail inputs
        $UserReqs = $this->reqs('reqsFor' . $type); // user, team, etc
        if (sizeof($UserReqs) == 0) return '';

        $html = '<hr>
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">
        معلومات اخري </h5>';

        for ($o = 0; $o < sizeof($UserReqs); $o++) {
            // 0 type
            // 1 title
            // 2 extra if type is select
            // text | number | select
            // String title
            // for `select-type-only` is array [select-1, select-2, select-3]
            $_type = $UserReqs[$o][0];
            $_title = $UserReqs[$o][1];
            $style = '';
            if ($datafill != null) {
                $style = 'style="display: inline; 
                 width: auto; margin-left:6px"';
            }
            if ($_type != 'select') {

                $oldValue = '';
                if ($datafill != null && isset($datafill[$o])) {

                    $oldValue =   $datafill[$o];
                }
                $html = $html . '<input ' . $style . ' name="reqsInfo[]" value="' . $oldValue . '" placeholder="' . $_title . '" id="reqsInfo" class="form-control mt-2" type="' . $_type . '" required="">';
            } else {
                $_extra_info = $UserReqs[$o][2];
                $html = $html . '<div class=row style="height:10px"></div>';
                $html = $html . '<select ' . $style . ' name="reqsInfo[]" required="required" class="form-control" style="display: inline-block;">';
                $defaultOption = "<option value='$_extra_info[0]'>$_title</option>"; // option title by default use a first value
                $html = $html . $defaultOption;
                for ($oo = 0; $oo < sizeof($_extra_info); $oo++) {

                    $option = $_extra_info[$oo];
                    $selected = '';
                    if ($datafill != null && isset($datafill[$o]) && $datafill[$o] == $option) {
                        $selected = 'selected ';
                    }
                    $option = "<option {$selected} value='$option'>$option</option>";

                    $html = $html . $option;
                }
                $html = $html . '</select>';
            }
        }

        return $html;
    }

    public function __construct($c)
    {
        $this->c = $c;
    }
}


// $dbhost = '127.0.0.1';
// $dbuser = 'myuser'; // 'kshafa';
// $dbpass = 'mypassword'; // 'Gdvf#e-b64(HTJ([=U';
// $dbname = 'kshafa_tw';
// $tables = '*';
// $c = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// mysqli_set_charset($c, "utf8");


// $signUpData = new signUp($c);

// echo $signUpData->reqsInputs('User');
