
<?php

class Model
{

    function __construct(protected $connection = null)
    {
        try {
            $this->connection = new mysqli("localhost", "root", "", "project_oes");
        } catch (\Exception $e) {
            // $ErrorMsg = $e->getMessage();
            $ErrorMsg = PHP_EOL."Error Date Time >>> ".date('d-m-Y h:i:s A').PHP_EOL."Error Msg >>> ".$e->getMessage().PHP_EOL;
            // echo $ErrorMsg;
            if(!file_exists('log')){
                mkdir("log");
            }
            $FileName = date('d_m_Y');
            file_put_contents("log/".$FileName."_log.txt",$ErrorMsg, FILE_APPEND);
        }
    }
}

?>