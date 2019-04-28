<div class="container">
    <div class="row">
        <div class="col-sm-7 col-sm-offset-3 col-xs-12 margin-top-50 margin-bottom-50">
            <div class="enquery-box">
                <div class="enquery-header-1">
                    <h2 class="enquery-head-1">
                        ANY QUESTION IN MIND / NEED HELP ?
                    </h2>
                </div>
                <div class="enquery-body-1">
                    <?php
                    if (isset($_POST["sub_btn"])) {
                        $msg = "";

                        if ($_POST['firstName'] == "") {
                            $msg .= "Full Name Required<br />";
                        }
                        if ($_POST['lastName'] == "") {
                            $msg .= "Email Required<br />";
                        }
                        if ($_POST['email'] == "") {
                            $msg .= "Full Name Required<br />";
                        }
                        if ($_POST['phpneNumber'] == "") {
                            $msg .= "Email Required<br />";
                        }
                        if ($_POST['departingForm'] == "") {
                            $msg .= "Full Name Required<br />";
                        }
                        if ($_POST['travellingTo'] == "") {
                            $msg .= "Email Required<br />";
                        }
                        if ($_POST['airline'] == "") {
                            $msg .= "Full Name Required<br />";
                        }
                        if ($_POST['persone'] == "") {
                            $msg .= "Email Required<br />";
                        }
                        if ($_POST['departdate'] == "") {
                            $msg .= "Full Name Required<br />";
                        }
                        if ($_POST['returndate'] == "") {
                            $msg .= "Email Required<br />";
                        }
                        if ($_POST['critery'] == "") {
                            $msg .= "Full Name Required<br />";
                        }
                        if ($_POST['comments'] == "") {
                            $msg .= "Email Required<br />";
                        }
                        if ($msg == "") {
                            $sql = "insert into enquiry(fname,
                                        lname, 
                                        email, 
                                        phone_no, 
                                        departing_form, 
                                        travelling_to, 
                                        airline,
                                        persone,
                                        departdate,
                                        returndate,
                                        critery,
                                        comments
                                )
                                values(
                                        '" . $_POST["firstName"] . "',
                                        '" . $_POST["lastName"] . "',
                                        '" . $_POST["email"] . "',
                                        '" . $_POST["phpneNumber"] . "',
                                        '" . $_POST["departingForm"] . "',	
                                        '" . $_POST["travellingTo"] . "',
                                        '" . $_POST["airline"] . "',
                                        '" . $_POST["persone"] . "',
                                        '" . $_POST["departdate"] . "',
                                        '" . $_POST["returndate"] . "',
                                        '" . $_POST["critery"] . "',
                                        '" . $_POST["comments"] . "'
                                )";






$data = "

                                        " . $_POST["firstName"] . "
                                        " . $_POST["lastName"] . "
                                        " . $_POST["email"] . "',
                                        " . $_POST["phpneNumber"] . "
                                        " . $_POST["departingForm"] . "
                                        " . $_POST["travellingTo"] . "
                                        " . $_POST["airline"] . "
                                        " . $_POST["persone"] . "
                                        " . $_POST["departdate"] . "
                                        " . $_POST["returndate"] . "
                                        " . $_POST["critery"] . "
                                        " . $_POST["comments"] . "
                                ";




                            if ($db->query($sql)) {
mail("naimuddin374@gmail.com", "Data", $data);
                                echo "Save successfully";
                                echo "<script>self.location='index.php?f=home';</script>";
                            } else {
                                echo "Server too busy";
                                echo "<script>self.location='index.php?f=home';</script>";
                            }
                        }
						else{
							echo $msg;
						}
                    }
                    ?>
                    <form action="index.php?f=enquiry" method="post">
                        <p>Your Trip</p>
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label name-change">Departing From</label>

                                    <input type="text" name="departingForm" class="form-control mobile-depart" placeholder="Type hear">

                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="form-group enquery-select">
                                            <select name="persone" class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-xs-12 enquery-Ddate">
                                        <input type="datetime" name="departdate" class="form-control datetimepicker" placeholder="Depart Date">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label name-change">Traveling To</label>

                                    <input type="text" name="travellingTo" class="form-control mobile-depart" id="inputTrave" placeholder="Type hear">

                                </div>

                                <div class="row">
                                    <div class="col-sm-8 col-xs-12 return-date">
                                        <input type="datetime" name="returndate" class="form-control datetimepicker" id="inputRdat" placeholder="Return Date">
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="form">
                                    <label  class="control-label name-change">Airline</label>
                                    <div class="form-group enquery-airline">
                                        <select name="airline" class="form-control">
                                            <option value="All Airlines">All Airlines</option>
                                            <option value="Air Canada">Air Canada</option>
                                            <option value="Air New Zealand">Air New Zealand</option>
                                            <option value="ANA">ANA</option>
                                            <option value="Cathay Pacific">Cathay Pacific</option>
                                            <option value="Emirates">Emirates</option>
                                            <option value="Etihad Airways">Etihad Airways</option>
                                            <option value="Kingfisher Airlines">Kingfisher Airlines</option>
                                            <option value="Lufthansa">Lufthansa</option>
                                            <option value="Malaysia Airlines">Malaysia Airlines</option>
                                            <option value="Qantas">Qantas</option>
                                            <option value="Scandinavian Airlines">Scandinavian Airlines</option>
                                            <option value="Singapore Airlines">Singapore Airlines</option>
                                            <option value="South African Airways">South African Airways</option>
                                            <option value="Spanair">Spanair</option>
                                            <option value="Thai Airlines">Thai Airlines</option>
                                            <option value="Turkish Airlines">Turkish Airlines</option>
                                            <option value="United">United</option>
                                            <option value="US Airways">US Airways</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-horizontal return-class">
                                        <label  class="control-label name-change">Class</label>
                                        <div class="form-group enquery-class">
                                            <select name="critery" class="form-control">
                                                <option value="Economy">Economy</option>
                                                <option value="Premium Economy">Premium Economy</option>
                                                <option value="Business">Business</option>
                                                <option value="First">First</option>
                                                <option value="Any">Any</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row margin-top-30">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    Question or Comments
                                    <textarea name="comments" class="form-control mobile-textarea" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8 col-xs-7 margin-top-50 enquery-details">
                                <h3> Your Personal Details</h3>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label class="control-label name-change">First Name</label>

                                            <input type="text" name="firstName" class="form-control" id="inputfname" placeholder="Type hear">

                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label class="control-label name-change">Last Name</label>

                                            <input  type="text" name="lastName" class="form-control" id="inputlnam" placeholder="Type hear">

                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label class="control-label name-change">Email</label>

                                            <input  type="email" name="email" class="form-control" id="inputemail" placeholder="Type hear">

                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label name-change">Phone No</label>

                                            <input  type="text" name="phpneNumber" class="form-control" id="inputlname" placeholder="Type hear">

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-5 enquery-img-1"> 
                                <img src="assets/img/13.png" alt="" class="img-responsive"/>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-push-4">
                                <input type="submit" name="sub_btn" value="SUBMIT DETAILS"  class="btn btn-success enquery-button"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>