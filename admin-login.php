<?php 


	header('Access-Control-Allow-Origin: *');
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$user_mail = ['elmir@mail.ru','rashad@mail.ru'];
$user_pass = ['123456'];

$content = trim(file_get_contents("php://input"));
$decoded = json_decode($content, true);


$mail= trim($decoded['email']);
$pass = trim($decoded['password']);


if(@$_GET['token']='35621ru9834658923gh69873j54g672fj34dj'){
    if( in_array($mail,$user_mail) AND in_array($pass,$user_pass)){
        $info = array(
            "code" => 200, 
            "message" => "Giriş başarılı"
        ); 
        $info['user'][] = ["email"=>$mail,"password"=>$pass];

        echo $info = json_encode($info);       

//         header('Location:');
    }
    else{
        $info = array(
            "code" => 700, 
            "message" => "Istifadəçi adı və ya şifrə yanlışdır."
        ); 
        echo $info = json_encode($info);   
//           header('Location:');
    }
}

?>
