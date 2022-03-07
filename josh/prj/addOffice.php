<!DOCTYPE html>
<html>

    <head>
        <title>Add a New Office Property</title>
        <link rel="stylesheet" href="styles.css">   <!--This links all the css styles-->
    </head>

    <body>

        <?php include 'header.php';?>

        <div class="textbox">
            <h1 align="center ">New/Existing Office Properties</h1>
            <form class = "scroll2" action="" method = "Post">
                <h2>Existing Offices</h2>
                <?php include "listbox.php";?>
            </form>
        </div>

        <div class="textbox2">
            <h1 align="center ">Form</h1>
            <form class = "scroll" action = "insertOffice.php" method = "Post">
                <h2>Add Office Property Form</h2>
            
                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" required title="Please enter the address">
                </div>

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" required title="Please enter the location">
                </div>

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="area">Area</label>
                    <input type="text" name="area" id="area" required title="Please enter the area">
                </div>

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="layout">Layout</label>
                    <input type="text" name="layout" id="layout" required title="Please enter the layout">
                </div> <br>

                <div class="checkbox1"> <!--    4 Check boxes for courses    -->
                Internet Access? <input type="checkbox" name="internet" id="internet" value="internet">
                </div> <br>

                <div class="checkbox1"> <!--    4 Check boxes for courses    -->
                Telephone System? <input type="checkbox" name="telephone" id="telephone" value="telephone">
                </div> <br>

                <div class="checkbox1"> <!--    4 Check boxes for courses    -->
                Reception Facilities? <input type="checkbox" name="reception" id="reception" value="reception">
                </div> <br>

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="security">Type of Security</label>
                    <input type="text" name="security" id="security" required title="Please enter the type of security">
                </div> 

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="residence">Residence Details</label>
                    <input type="text" name="residence" id="residence" required title="Please enter the residence details">
                </div>

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="facilities">Canteen Facilities</label>
                    <input type="text" name="facilities" id="facilities" required title="Please enter the canteen facilities">
                </div>

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="ownership">Type of Ownership</label>
                    <input type="text" name="ownership" id="ownership" required title="Please enter the type of ownership">
                </div> 

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="price">Asking Price</label>
                    <input type="text" name="price" id="price" required title="Please enter the asking price">
                </div> 

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="times">Viewing Times</label>
                    <input type="text" name="times" id="times" required title="Please enter the viewing times">
                </div> 

                <div class="inputbox">  <!--    Surname input box    -->
                    <label for="sellerID">Seller ID</label>
                    <input type="text" name="sellerID" id="sellerID" required title="Please enter the Seller ID">
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