<H1>Apache Docker Web Page - Server 1</H1>
<?php
echo "Server Name: ", $_SERVER['SERVER_NAME'], " <P>";
echo "Server Addr: ", $_SERVER['SERVER_ADDR'], " <P>";
echo "Server Port: ", $_SERVER['SERVER_PORT'], " <P>";
echo "Hostname: ", exec('hostname'), " <P>";
echo '<P>';

#echo '<P>';
#phpinfo();

?>
