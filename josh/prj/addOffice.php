<!DOCTYPE html>
<html>

    <head>
        <title>Add a New Office Property</title>
        <link rel="stylesheet" href="styles.css">   <!--This links all the css styles-->
    </head>

    <body>

        <?php include 'header.php';?>



        <div class="textbox">
            <h1 align="center ">New Office Properties</h1>
        </div>

        <div class="textbox2">
            <h1 align="center ">Form</h1>
            <form class = "scroll">
                <h2>Add Office Property Form</h2>
                <div class="inputbox">  <!--    First name input box    -->
                    <label for="Officenumber">Office Number</label>
                    <input type="number" name="officenumber" id="Officenumber" autofocus required title = ""> <br>
                </div>
            
                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="Address">Address</label>
                    <input type="text" name="address" id="Address" required title="Please enter the address">
                </div>

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="Location">Location</label>
                    <input type="text" name="location" id="Location" required title="Please enter the location">
                </div>

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="Area">Area</label>
                    <input type="text" name="area" id="Area" required title="Please enter the area">
                </div>

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="Layout">Layout</label>
                    <input type="text" name="layout" id="Layout" required title="Please enter the layout">
                </div> <br>

                <div class="checkbox1"> <!--    4 Check boxes for courses    -->
                Internet Access? <input type="checkbox" name="internet" id="Internet" value="Internet">
                </div> <br>

                <div class="checkbox1"> <!--    4 Check boxes for courses    -->
                Telephone System? <input type="checkbox" name="internet" id="Internet" value="Internet">
                </div> <br>

                <div class="checkbox1"> <!--    4 Check boxes for courses    -->
                Reception Facilities? <input type="checkbox" name="internet" id="Internet" value="Internet">
                </div> <br>

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="Security">Type of Security</label>
                    <input type="text" name="security" id="Security" required title="Please enter the type of security">
                </div> 

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="Details">Residence Details</label>
                    <input type="text" name="details" id="Details" required title="Please enter the layout">
                </div>

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="Facilities">Canteen Facilities</label>
                    <input type="text" name="facilities" id="Facilities" required title="Please enter the canteen facilities">
                </div>

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="Ownership">Type of Ownership</label>
                    <input type="text" name="ownership" id="Ownership" required title="Please enter the type of ownership">
                </div> 

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="Price">Asking Price</label>
                    <input type="text" name="price" id="Price" required title="Please enter the asking price">
                </div> 

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="Times">Viewing Times</label>
                    <input type="text" name="times" id="Times" required title="Please enter the viewing times">
                </div> 

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="SellerID">Seller ID</label>
                    <input type="text" name="sellerID" id="SellerID" required title="Please enter the Seller ID">
                </div> <br>

                <div class="myButton">  <!---   Buttons for submit and clear    -->
                    <input type="submit" value="Send Form" name="submit">
                    <input type="reset" value="Clear Form" name="reset">
                </div>

            </form>
        </div>



        <footer>
            <?php include 'footer.php';?>
        </footer>
    </body>    

</html>