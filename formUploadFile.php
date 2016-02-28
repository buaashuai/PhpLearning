<?php
setcookie("user", "Alex Porter", time()+3600);

session_start();
// store session data
if(isset($_SESSION['views']))
    $_SESSION['views']=$_SESSION['views']+1;

else
    $_SESSION['views']=1;
echo "Views=". $_SESSION['views'];

?>
<html>
<body>


<form action="upload_file.php" method="post"
      enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file" />
    <br />
    <input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>

<?php
$inat = 123;

if(!filter_var($inat, FILTER_VALIDATE_INT))
{
    echo("Integer is not valid");
}
else
{
    echo("Integer is valid");
}

$con = mysql_connect("localhost","user","password");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
mysql_close($con);
?>