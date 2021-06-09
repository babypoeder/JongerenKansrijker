<?php 

session_start();

include_once("database.php");


//Medewerker login
if(isset($_POST['login']))
{
    $con = config::connect();
    $username = $_POST["username"];
    $password = $_POST["password"];


    if(checkLogin($con,$username,$password))
    {
        $_SESSION["username"] = $username;
        header("location: welcome.php");
    }else{
        header("location: index.php");  
        $error = "error";
    };
}

function checkLogin($con,$username,$password)
{
    $query = $con->prepare("
    
    SELECT * FROM medewerker WHERE username=:username AND password=:password
    
    ");

    $query->bindParam(":username",$username);
    $query->bindParam(":password",$password);

    $query->execute();

    if($query->rowCount() == 1)
    {
        return true;
    }else{
        return false;
    }
}

//Create Instituut

if(isset($_POST['addInstituut'])){
    createInstituut();
}

function createInstituut(){
    $message ='';

    if(isset($_POST['instituut']) && isset($_POST["telefoon"])){
        $instituut = $_POST['instituut'];
        $telefoon = $_POST["telefoon"];
        $sql = 'INSERT INTO instituut(instituut, instituuttelefoon) VALUES(:instituut, :telefoon)';
        $statement = config::connect()->prepare($sql);
        if($statement->execute([':instituut' => $instituut, ":telefoon" => $telefoon])){
            header("location: overzicht-instituut.php");
        }
    }
};

?>

?>