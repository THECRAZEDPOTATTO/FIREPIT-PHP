<?php
$filename =  'firepit.php';
  function getBetween($content,$start,$end){
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
  }
//end
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
$file_contents = str_replace('@@', '$', $file_contents);
file_put_contents($path_to_file, $file_contents);
$errorhandle = '
if ($conn->connect_error) {
  die("Error")
}
';
$path_to_file = $filename;
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace('handle[connect.error]', "$errorhandle", $file_contents);
file_put_contents($path_to_file, $file_contents);
//SQL RUNNER
