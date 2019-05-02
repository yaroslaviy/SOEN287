<?php
require("header.php");
?>
    <div style="background-color: #ccffdc">
    <form method="post" action="search.php" onmousemove
     ="SearchActivate()">
    <fieldset id="first">
        <legend id=l1>Reservation Information</legend>
        <label class="Label1">Number of rooms(max 5 people per room): <input type="text" name="NumOfRooms"> </label> <br/>
        <label class="Label1">Smoker? </label>
        <label><input type="radio" name="Smoker"> Yes </label>
        <label><input type="radio" name="Smoker"> No</label> <br>
        <label class="Label1">Check-in: <input type="date" name="in_date"></label><br>
        <label class="Label1">Check-out: <input type="date" name="out_date"></label>
    </fieldset>
    <fieldset id="second">
        <legend id="l2">Room Specifications</legend>
        <ul>
            <li>
                <label class="Label2">Number of single/double beds:</label><br>
                <label><input type="checkbox" name="beds"> 0/2</label>
                <label><input type="checkbox" name="beds"> 2/0</label>
                <label><input type="checkbox" name="beds"> 1/1</label>
                <label><input type="checkbox" name="beds"> 1/2</label>
                <label><input type="checkbox" name="beds"> 2/1</label>
            </li>
            <li>
                <label class="Label2">Do you have preferred locations for the hotel?</label><br>
                <label><input type="checkbox" name="location[]" value="Downtown">Downtown</label>
                <label><input type="checkbox" name="location[]" value="Montreal East">Montreal East</label>
                <label><input type="checkbox" name="location[]" value="Montreal West">Montreal West</label>
                <label><input type="checkbox" name="location[]" value="Close to the airport">Close to the airport</label>
                <label><input type="checkbox" name="location[]" value="Oldport">Oldport</label>
                <label><input type="checkbox" name="location[]" value="Don't care">Don't care</label>
            </li>
            <li>
                <label class="Label2">Price per night:</label><br>
                <select name="price">
                    <option value="Under 50$">&lt;50$</option>
                    <option value="50-100$">50-100$</option>
                    <option value="Above 100$">&GT;100$</option>
                </select>
            </li>
            <li>
                <label class="Label2">Number of Parking spots:</label><br>
                <label><input type="radio" name="Parking">0 </label><br>
                <label><input type="radio" name="Parking">1 </label><br>
                <label><input type="radio" name="Parking">2 </label><br>
                <label><input type="radio" name="Parking">3 </label><br>
                <label><input type="radio" name="Parking">4 </label><br>
            </li>
            <li>
                <label class="Label2">Special Facilities</label><br>
                <label><input type="checkbox" name="Special">Minibar</label>
                <label><input type="checkbox" name="Special">Balcony</label>
                <label><input type="checkbox" name="Special">Pool</label>
                <label><input type="checkbox" name="Special">Water Front</label>
                <label><input type="checkbox" name="Special">Garden Front</label>
            </li>
        </ul>
    </fieldset>
    <fieldset id="ExpSug">
        <legend>Expert Suggestion</legend>
    </fieldset>
    <p>Let's see what we cand find for you...</p>
    <input type="submit" value="Search" name="Search">
    <input type="reset" name="Start Over">
    </form>
</div>
<?php
require('footer.php');
?>