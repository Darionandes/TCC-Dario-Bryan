<?php
include_once "./session.php";
$host= 'localhost';
$user= 'root';
$pass= '';
$dbname= 'relatorio';
$port= 3306;
//conexao com porta
$conn = new PDO("mysql:host=$host;port=$port;dbname=".$dbname,$user,$pass);

//function salvardados(){
//    $nome = $_SESSION['getnome'];
//    $query="INSERT INTO resultados (nome) VALUES ('".$_SESSION['getnome']."')";
//    $statement = $conn->prepare($query);
//    $statement->execute();
//}

if(isset($_POST["nome"])){  
    $_SESSION['getnome'] = $_POST['nome'];    
    
    //FUNCIONADO NAO APAGA
    //$query="INSERT INTO resultados (nome) VALUES (:nome)";
    //$statement = $conn->prepare($query);
    //$statement->execute(
    //    array(
     //       'nome'=>$_POST['nome']
     //   )
    //);
     //echo 'inserido';   
}

if(isset($_POST["q1"])){
    $_SESSION['getq1']=$_POST['q1'];
}

if(isset($_POST["q2"])){
    $_SESSION['getq2']=$_POST['q2'];
}

if(isset($_POST["q3"])){
    $_SESSION['getq3']=$_POST['q3'];
}

if(isset($_POST["q4"])){
    $_SESSION['getq4']=$_POST['q4'];    
}
if(isset($_POST["q5"])){
    $_SESSION['getq5']=$_POST['q5'];    
}
if(isset($_POST["q6"])){
    $_SESSION['getq6']=$_POST['q6'];    
}
if(isset($_POST["q7"])){
    $_SESSION['getq7']=$_POST['q7'];    
}
if(isset($_POST["q8"])){
    $_SESSION['getq8']=$_POST['q8'];    
}
if(isset($_POST["q9"])){
    $_SESSION['getq9']=$_POST['q9'];    
}
if(isset($_POST["q10"])){
    $_SESSION['getq10']=$_POST['q10'];

    $nome = $_SESSION['getnome'];

    $query="INSERT INTO resultados (nome,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) 
    VALUES ('".$_SESSION['getnome']."', '".$_SESSION['getq1']."', '".$_SESSION['getq2']."', '".$_SESSION['getq3']."', '".$_SESSION['getq4']."', '".$_SESSION['getq5']."', '".$_SESSION['getq6']."', '".$_SESSION['getq7']."', '".$_SESSION['getq8']."', '".$_SESSION['getq9']."', '".$_SESSION['getq10']."')";
    $statement = $conn->prepare($query);
    $statement->execute();
    print_r($_SESSION);
}
?>