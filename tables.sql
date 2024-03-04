
CREATE TABLE IF NOT EXISTS `generateid` (
    id int(100) NOT NULL AUTO_INCREMENT,
    name varchar (200) NOT NULL,
    email varchar (200) NOT NULL,
    phone varchar (100) NOT NULL,
    address varchar (1000) NOT NULL,
    location varchar (1000) NOT NULL,
    city varchar (100) NOT NULL,
    item varchar (100) NOT NULL,
    itemweight int (100) NOT NULL,
    trackid varchar (100) NOT NULL, 
    dateofreg varchar (100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COMMENT='record of generateid.' AUTO_INCREMENT=1 ;


// to connect to database 

 <?php
$serverName = "localhost";
$username = "root";
$password = "";
$database = "clara";

// Create connection
    
$conn = mysqli_connect($serverName, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?> 



$date = new DateTime('now', new DateTimeZone('Africa/Lagos'));
        $dateOfReg = $date->format('d-m-Y H:i:s a');
        


$trackid=idate("U");

//for protection 
$regfee = mysqli_real_escape_string($conn, $_POST['regfee']);


// to exit from the processing page:
header("Location: ../registerNew.php?error=$error&acctype=$acctype"); 
     exit();


$type=2;

header("Location: ../contact.php?success=$type"); 
     exit();

// to redirect to success page 
$sucess = $_REQUEST['sucess'];





// to remove php error messages
erro_reporting(0);





CREATE TABLE IF NOT EXISTS `location` (
    id int(100) NOT NULL AUTO_INCREMENT,
    trackid varchar (200) NOT NULL,
    location varchar (200) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COMMENT='record of location.' AUTO_INCREMENT=1 ;



