

<form method="post">

    <br/><br/>
    <div><?php include "search.php";?></div>
    <br/><br/>


    <fieldset class="room_info_field">

        <legend class="room_info_legend">Reservation Information</legend>

        <label class="user_input1">Number of Rooms (max 5 people per room)</label>

            <input type="text" name="room_numberof"/>
            <br/>
            <br/>



        <label class="user_input1">Smoker?</label>

            <input type="radio" name="smoker_in" value="yes"/>
            <label>Yes</label>

            <input type="radio" name="smoker_in" value="no"/>
            <label>No</label>

        <br/><br/>

        <label class="user_input1">Check-in:</label>

            <input type="date" name="check_in_date"/>

        <br/><br/>

        <label class="user_input1">Check-out:</label>

            <input type="date" name="check_out_date"/>

        <br/><br/>

    </fieldset>

    <fieldset class="room_specs_field">

        <legend class="room_specs_legend">Room Specifications</legend>

        <ul>

            <li>

                <label class="user_input2">Number of single/double beds:</label>

                    <br/>

                    <input type="checkbox" name="r1"/> <label>0/2</label>
                    <input type="checkbox" name="r2"/> <label>2/0</label>
                    <input type="checkbox" name="r3"/> <label>1/1</label>
                    <input type="checkbox" name="r4"/> <label>2/1</label>
                    <input type="checkbox" name="r5"/> <label>1/2</label>

                <br/><br/>

            </li>

            <li>

                <label class="user_input2">Do you have preferred locations for the hotel?</label>

                    <input class="cb" type="checkbox" name="downtown" value="0"/> <label>Downtown</label>
                    <input class="cb" type="checkbox" name="montreal_east" value="1"/> <label>Montreal East</label>
                    <input class="cb" type="checkbox" name="montreal_west" value="2"/> <label>Montreal West</label>
                    <input class="cb" type="checkbox" name="near_airport" value="3"/> <label>Near to the airport</label>
                    <input class="cb" type="checkbox" name="oldport" value="4"/> <label>Oldport</label>
                    <input class="cb" type="checkbox" name="idc" value="-1"/> <label>Don't care</label>

                <br/><br/>

            </li>

            <li>

                <label class="user_input2">Price Range/per night:</label>

                    <select id="ddl1" name="price_per_night">

                        <option value="50">Under $50</option>
                        <option value="100">Under $100</option>
                        <option value="200">Under $200</option>
                        <option value="-1">No price limit</option>

                    </select>

                <br/><br/>

            </li>

            <li>

                <label class="user_input2">Number of Private Parking</label><br/>

                    <input type="radio" name="private_parking_radio" value="0"/><label>0</label><br/>
                    <input type="radio" name="private_parking_radio" value="1"/><label>1</label><br/>
                    <input type="radio" name="private_parking_radio" value="2"/><label>2</label><br/>
                    <input type="radio" name="private_parking_radio" value="3"/><label>3</label><br/>
                    <input type="radio" name="private_parking_radio" value="4"/><label>4</label><br/>




            </li>

            <li>

                <label class="user_input2">Special Facilities</label><br/>

                    <input type="checkbox" name="minibar" value="0"/><label>Minibar</label><br/>
                    <input type="checkbox" name="balcony" value="1"/><label>Balcony</label><br/>
                    <input type="checkbox" name="pool" value="2"/><label>Pool</label><br/>
                    <input type="checkbox" name="water_front" value="3"/><label>Water Front</label><br/>
                    <input type="checkbox" name="garden_front" value="4"/><label>Garden Front</label><br/>


            </li>

        </ul>


    </fieldset>

    <fieldset id="expertFieldset"><legend id="expertLegend"></legend></fieldset>



<br/>


<label class="user_input">Let's see what we can find ...</label>
<br/>
<br/>
<input type="submit" name="search" value="Search" onclick="askExpert()"/>
<input type="reset" name="star_over" value="Start Over"/>
<br/>

</form>

