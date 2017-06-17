<?php
function msg(){
    $msg = parse_ini_file(FCPATH.'/static/ini/msg_kr.ini');

    return $msg;
}
?>
