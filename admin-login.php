<?php 

$user_mail = ['elmir@mail.ru','rashad@mail.ru'];
$user_pass = ['123456','123456'];



$mail= trim(@$_POST['user_mail']);
$pass = trim(@$_POST['user_pass']);
$button = @$_POST['user_button'];

if($button AND @$_GET['token']='35621ru9834658923gh69873j54g672fj34dj'){
    if( in_array($mail,$user_mail) AND in_array($pass,$user_pass)){
        $info = array(
            "code" => 200, 
            "message" => "Giriş başarılı"
        ); 
        $info['user'][] = ["user_mail"=>$mail,"user_pass"=>$pass];

        echo $info = json_encode($info);       

        header('Location:');
    }
    else{
        $info = array(
            "code" => 700, 
            "message" => "Istifadəçi adı və ya şifrə yanlışdır."
        ); 
        echo $info = json_encode($info);   
          header('Location:');
    }
}else{
echo "Post metodu göndərilməyib";
}

?>
