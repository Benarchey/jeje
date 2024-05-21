<?php
session_start();
include ("config.php");

//inout failed validation
function validate($inputData)
{
    global $is_connect;
    $validateData = mysqli_real_escape_string($is_connect, $inputData);
    return trim($validateData);
}

// redirect page

function redirect($url, $status)
{
    $_SESSION['status'] = $status;
    header('Location: ' . $url);
    exit(0);
}

//status jika ada proses yang terjadi

function alertMassage()
{
    if (isset($_SESSION['status'])) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <h6>'.$_SESSION['status'].'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        unset($_SESSION['status']);
    }
}

function insert($tableName, $data){
    global $is_connect;

    $table = validate($tableName);

    $columns = array_keys($data);
    $values = array_values($data);

    $finalColumn = implode(',', $columns); 
    $finalValues = "'".implode("', '", $values)."'";

    $query = "insert into $table ($finalColumn) values ($finalValues)";
    $result = mysqli_query($is_connect, $query);
    return $result;
}

function update($tableName, $id, $data){
    global $is_connect;

    $table = validate($tableName);
    $id = validate($id);

    $updateDataString = ""; 

    foreach($data as $columns => $values){
        $updateDataString .= $columns.'='."'$values',";

    }
    $finalUpdateData = substr(trim($updateDataString), 0,-1);

    $query = "update $table set $finalUpdateData where id = '$id'";
    $result = mysqli_query($is_connect, $query);
    if ($result) {
        return true;
    } else {
        return false;
    }
}



function getAll($tableName, $status = 0 ){
global $is_connect;

$table = validate($tableName);
$status = validate($status);

if($status == 'status'){
    $query = "select * from $table where $status ='0'";
} else {
    $query = " select * from $table";

}
return mysqli_query($is_connect, $query);   

}

function getById($tableName, $id){
    global $is_connect;

    $table = validate($tableName);
    $id = validate($id);

    $query = "select * from $table where id = '$id' limit 1";
    $result = mysqli_query($is_connect, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

        
           $row = mysqli_fetch_assoc($result);
           $response = [
            'status' => 200,
            'data' => $row,
            'massage' => 'Record Found'           
        ];
        return $response;

        } else {    

            $response = [
                'status' => 404,
                'massage' => 'Data Not Found'           
            ];
            return $response;
        }
    }else{
        $response = [
            'status' => 500,
            'massage' => 'something went wrong'           
        ];
        return $response;
    }
 }

 //delete data
 function ilhamD($tableName, $id){
    global $is_connect;

    $table = validate($tableName);
    $id = validate($id);

    $query = "delete from $table where id = '$id' limit 1";
    $result = mysqli_query($is_connect, $query);
    return $result;
 }

 function checkParamId($type){
    if(isset($_GET[$type])){
        if($_GET[$type] != 0){
            return $_GET[$type];
        }else{
            return '<h5>No Id Found<h5>';
        }
    }else{
        return '<h5>No Id Given<h5>';
    }
 }

 function logOut(){
    unset($_SESSION['is_login']);
    unset($_SESSION['loggedInUser']);
 }