
<?php

class Model
{

    function __construct(protected $connection = null)
    {
        try {
            $this->connection = new mysqli("localhost", "root", "", "project_oes");
        } catch (\Exception $e) {
            // $ErrorMsg = $e->getMessage();
            $ErrorMsg = PHP_EOL . "Error Date Time >>> " . date('d-m-Y h:i:s A') . PHP_EOL . "Error Msg >>> " . $e->getMessage() . PHP_EOL;
            // echo $ErrorMsg;
            if (!file_exists('log')) {
                mkdir("log");
            }
            $FileName = date('d_m_Y');
            file_put_contents("log/" . $FileName . "_log.txt", $ErrorMsg, FILE_APPEND);
        }
    }
    //Insert Function Start
    function Insert($tbl, $data)
    {
        $clm = implode(",", array_keys($data));
        $val = implode("','", $data);
        $SQL = " INSERT INTO $tbl ($clm) VALUES ('$val') ";

        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            $Responce['Code'] = "1";
            $Responce['Msg'] = "Msg";
            $Responce['Data'] = "1";
        } else {
            $Responce['Code'] = "0";
            $Responce['Msg'] = "Try Again";
            $Responce['Data'] = "0";
        }
        return $Responce;
    }
    //Insert Function End

    //Select Function Start
    function Select($tbl, $where = null)
    {
        $SQL = " SELECT * FROM $tbl";

        if ($where != null || $where != "") {
            $SQL .= " WHERE";
            foreach ($where as $key => $value) {
                $SQL .= " $key = '$value' AND";
            }
            $SQL = rtrim($SQL, "AND");
        }

        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx->num_rows > 0) {
            while ($data = $SQLEx->fetch_object()) {
                $FetchData[] = $data;
            }
            $Responce['Code'] = "1";
            $Responce['Msg'] = "Msg";
            $Responce['Data'] = $FetchData;
        } else {
            $Responce['Code'] = "0";
            $Responce['Msg'] = "Try Again";
            $Responce['Data'] = "0";
        }
        return $Responce;
    }
    //Select Function End

    //Update Function Start
    function Update($tbl, $data, $where)
    {
        $SQL = "UPDATE $tbl SET ";

        foreach ($data as $key => $value) {
            $SQL .= " $key = '$value' ,";
        }
        $SQL = rtrim($SQL, ",");
        $SQL .= "WHERE";

        foreach ($where as $key => $value) {
            $SQL .= " $key = '$value' AND";
        }
        $SQL = rtrim($SQL, "AND");

        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
           
            $Responce['Code'] = "1";
            $Responce['Msg'] = "Msg";
            $Responce['Data'] = "1";
        } else {
            $Responce['Code'] = "0";
            $Responce['Msg'] = "Try Again";
            $Responce['Data'] = "0";
        }
        return $Responce;
    }

    //Update Function End
}

?>