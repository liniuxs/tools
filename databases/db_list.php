# DB test

$dbname = 'name';
$dbuser = 'user';
$dbpass = 'pass';
$dbhost = 'localhost';

$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Neprisijungia prie db hosto '$dbhost'");
mysqli_select_db($connect, $dbname) or die("Negali atidaryti '$dbname'");

$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($connect, $test_query);

$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}

if (!$tblCnt) {
  echo "Duombazeje nera lenteliu<br />\n";
} else {
  echo "Duombazes lenteles $tblCnt tables<br />\n";
}
