<?php 


session_start();

$mysqli = new mysqli('localhost', 'root', '', 'bulldog') or die(mysqli_error($mysqli));

//login
$senha='';
$email='';
$login='';


if (isset($_POST['entrar'])){
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$query="select * from clientes where email='".$email."' and senha='".$senha."'";
	
	$result=mysqli_query($mysqli,$query);
    if(mysqli_num_rows($result)>0){
        
        $nomepass = "SELECT nome FROM clientes WHERE email='$email'";
        $nomeselecao = mysqli_query($mysqli, $nomepass) or die (mysqli_error($mysqli));

        $rownomepass = mysqli_fetch_assoc($nomeselecao);
		$nome = $rownomepass['nome'];

        $_SESSION['nome']= $nome;
        $_SESSION['message']= "Login efetuado!";
        $_SESSION['msg_type']= "success";

        header("location: site.php");
        
    }
    else{
        $_SESSION['message']="Credenciais inválidas! Tente novamente.";
        $_SESSION['msg_type']="danger";

        header("location: index.php");
    }
    

}
//fim login


//cadastro
$nome ='';
$senhacad='';
$emailcad='';

if (isset($_POST['cadastro'])){
	$senhacad = $_POST['senhacad'];
	$emailcad = $_POST['emailcad'];
	$nome = $_POST['nome'];

	$mysqli->query("INSERT INTO clientes (nome, email, senha) VALUES('$nome', '$emailcad', '$senhacad')") or die($mysqli->error);

	$_SESSION['message'] = "Cadastro efetuado! Faça login para continuar!";
	$_SESSION['msg_type'] = "success";
	header("location: index.php");
	
}//fim cadastro



$deagle = false;
$tommygun = false;
$rpg = false;
$magnum = false;
$minigun = false;
$flintlock = false;

if (isset($_POST['deagle'])){
$deagle = $_POST['deagle'];
$tommygun = false;
$rpg = false;
$magnum = false;
$minigun = false;
$flintlock = false;

}

if (isset($_POST['rpg'])){
$deagle = false;
$tommygun = false;
$rpg = true;
$magnum = false;
$minigun = false;
$flintlock = false;


}

if (isset($_POST['tommygun'])){
$deagle = false;
$tommygun = true;
$rpg = false;
$magnum = false;
$minigun = false;
$flintlock = false;


}

if (isset($_POST['magnum'])){
$deagle = false;
$tommygun = false;
$rpg = false;
$magnum = true;
$minigun = false;
$flintlock = false;


}

if (isset($_POST['minigun'])){
$deagle = false;
$tommygun = False;
$rpg = false;
$magnum = false;
$minigun = true;
$flintlock = false;


}

if (isset($_POST['flintlock'])){
$deagle = false;
$tommygun = false;
$rpg = false;
$magnum = false;
$minigun = false;
$flintlock = true;


}
?>