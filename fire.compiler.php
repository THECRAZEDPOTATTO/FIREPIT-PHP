<?php
$config = file_get_contents("fire.config.json");//get json options
$option = json_decode($config);
$indexfile = $option->{'index.file'};
$filename =  $indexfile;
  function getBetween($content,$start,$end){
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
  }
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('[?fr', "<?php", $file_contents);
file_put_contents($path_to_file, $file_contents);
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('?]', "?>", $file_contents);
file_put_contents($path_to_file, $file_contents);
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('print', "echo", $file_contents);
file_put_contents($path_to_file, $file_contents);
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('exc', "eval", $file_contents);
file_put_contents($path_to_file, $file_contents);
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('grabc', "file_get_contents", $file_contents);
file_put_contents($path_to_file, $file_contents);
//database
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('@pass', '$pass', $file_contents);
file_put_contents($path_to_file, $file_contents);
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('#add compiler', 'include fire.compiler.php', $file_contents);
file_put_contents($path_to_file, $file_contents);
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('#add', 'include', $file_contents);
file_put_contents($path_to_file, $file_contents);
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('@user', '$user', $file_contents);
file_put_contents($path_to_file, $file_contents);
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('@host', '$host', $file_contents);
file_put_contents($path_to_file, $file_contents);
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('@database', '$database', $file_contents);
file_put_contents($path_to_file, $file_contents);
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('[@connect.data@]', '@@conn = new mysqli($host, $user, $pass, $database);', $file_contents);
file_put_contents($path_to_file, $file_contents);
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('[@connect.core@]', '@@conn = new mysqli($host, $user, $pass);', $file_contents);
file_put_contents($path_to_file, $file_contents);
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('[connect.run]', '@@conn', $file_contents);
file_put_contents($path_to_file, $file_contents);
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('@@', '$', $file_contents);
file_put_contents($path_to_file, $file_contents);
$errorhandle = '
if ($conn->connect_error) {
   errormessage($error)
}
';
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('handle[connect.error]', "$errorhandle", $file_contents);
file_put_contents($path_to_file, $file_contents);
function errormessage($error) {
   die("$error");
};
function DBMAKE($dbname){
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  errormessage($error) . $conn->error;
}}
//javascript
function pagealert($alertmessage){
  echo '<script>alert(',"$alertmessage",')</script>';
}
function consolelog($consolemessage){
  echo'<script>console.log(',"$consolemessage",')</script>';
}
?> 
