<?php
require "header.php";
echo "<div><table id='results'><th colspan='4' style='color: #000000'>Results of your search:</th>";
echo "<tr style='outline: solid'><td> Address</td><td>Location</td><td>Price</td><td>Rooms avialable</td></tr>";
$data = fopen("database.txt", "r");

while(!feof($data)){
    $hotel = array("add"=>"", "location" => "", "price" => "", "rooms" => "");
    $line = fgets($data);
    if(trim($line) == "@HOTEL"){
        $line = fgets($data);
        if($_POST['NumOfRooms'] == '')
            $rooms = 1;
        else
            $rooms = $_POST['NumOfRooms'];
    if(trim($line) >= $rooms){
        $hotel['rooms'] = $line;
        $line = fgets($data);
        $hotel['add'] = $line;
        $line = fgets($data);
        if(trim($line) == $_POST['price']){
            $hotel['price'] = $line;
            $line = fgets($data);
        $location_list = $_POST['location'];
        if(is_array($location_list)){
            if(in_array("Don't care", $location_list)){
                $hotel['location'] = $line;
                    $line = fgets($data);
                    echo "<tr>";
                    if(isset($_SESSION['username']))
                        echo "<td>",$hotel['add'],"</td>";
                    else
                        echo "<td><form action='login.php'><button type='submit'>Login to see the address </button> </form></td>";
                    echo "<td>",$hotel['location'],"</td><td>",$hotel['price'],"</td><td>",$hotel['rooms'],"</td>","</tr>";
            } else {

            foreach($location_list as $i){
                if(trim($line) == $i){

                    $hotel['location'] = $line;
                    $line = fgets($data);
                    echo "<tr>";
                    if(isset($_SESSION['username']))
                        echo "<td>",$hotel['add'],"</td>";
                    else
                        echo "<td><form action='login.php'><button type='submit'>Login to see the address </button> </form></td>";
                    echo"<td>",$hotel['location'],"</td><td>",$hotel['price'],"</td><td>",$hotel['rooms'],"</td>","</tr>";
                }
            }
            }
        }

        }
    }
    }
}
echo "</table><br><a href='home.php' style='text-align: center'>Search again</a>","</div>";
require "footer.php";
?>
