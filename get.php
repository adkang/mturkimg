if ( isset( $_GET["submit"] ) ) { 
  $image1 = $_GET["numberofpeople1"]; 
  $image2 = $_GET["numberofpeople2"];
  $image3 = $_GET["numberofpeople3"];
  $image4 = $_GET["numberofpeople4"];
  $image5 = $_GET["numberofpeople5"];
  $image6 = $_GET["numberofpeople6"];
  $image7 = $_GET["numberofpeople7"];
  echo '1.)' . $image1 . ' 2.)' . $image2 . ' 3.)' . $image3 . ' 4.)' . $image4 . ' 5.)' . $image5 . ' 6.)' . $image6 . ' 7.)' . $image7;
  exit;
}
