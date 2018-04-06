<?php
/**
 * Created by PhpStorm.
 * User: Jakim
 * Date: 08.11.2017
 * Time: 3:37
 */
function mailToFiles($to,$from, $subject_text,$message,$files){
$EOL = "\r\n"; // ограничитель строк, некоторые почтовые сервера требуют \n - подобрать опытным путём
$boundary     = "--".md5(uniqid(time()));  // любая строка, которой не будет ниже в потоке данных.
$subject= '=?utf-8?B?' . base64_encode($subject_text) . '?=';
$headers    = "MIME-Version: 1.0;" . $EOL . "";
$headers   .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"" . $EOL . "";
$headers   .= "From: mail@".$from."\nReply-To: ".$from."\n";

$multipart  = "--" . $boundary . $EOL;
$multipart .= "Content-Type: text/html; charset=utf-8" . $EOL . "";
$multipart .= "Content-Transfer-Encoding: base64" . $EOL . "";
$multipart .= $EOL; // раздел между заголовками и телом html-части
$multipart .= chunk_split(base64_encode($message));

#начало вставки файлов
foreach( $files as $key => $value){
    $filename = $key;
    $file = fopen($filename, "rb");
    $data = fread($file,  filesize( $filename ) );
    fclose($file);
    $NameFile = $key; // в этой переменной надо сформировать имя файла (без всякого пути);
    $File = $data;
    $multipart .=  "" . $EOL . "--" . $boundary . $EOL . "";
    $multipart .= "Content-Type: application/octet-stream; name=\"" . $NameFile . "\"" . $EOL . "";
    $multipart .= "Content-Transfer-Encoding: base64" . $EOL . "";
    $multipart .= "Content-Disposition: attachment; filename=\"" . $NameFile . "\"" . $EOL . "";
    $multipart .= $EOL; // раздел между заголовками и телом прикрепленного файла
    $multipart .= chunk_split(base64_encode($File));

}

#>>конец вставки файлов

$multipart .= "" . $EOL . "--" . $boundary . "--" . $EOL . "";

if(!mail($to, $subject, $multipart, $headers)){
    echo 'Письмо не отправлено';
} 
else{
    echo 'Письмо отправлено';
}
} 
 $files = array('6.jpg' => file_get_contents('6.jpg'));

?>