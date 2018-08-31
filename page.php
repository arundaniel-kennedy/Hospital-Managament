<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hospital</title>
    <link rel="stylesheet" href="main.css" />

  </head>
  <body onpageshow="patientdetails()">

    <header class="header">
      ABC Hospital
    </header>

    <div class="container">

        <ul>
          <li>
            <a onclick="patientdetails()" href="#patientdetails" >patient details</a>
          </li>
          <li>
            <a onclick="doctordetails()" href="#doctordetails">doctor details</a>
          </li>
          <li>
            <a onclick="rooms()" href="#rooms">Rooms</a>
          </li>
          <li>
            <a onclick="billing()" href="#billing">billing</a>
          </li>
        </ul>

      <br />



      <div id="patientdetails">
        <form action="addpatient.php" method="post">

          <div>
            <label>Name of patient:</label><br />
            <input name="name" type="text" placeholder="Name" required />
          </div><br />
          <div>
            <label>Age:</label><br />
            <input name="age" id="age" type="date" placeholder="Date" autocomplete="bday" required />
          </div><br />
          <div>
            <label>Gender:</label><br />
            <input name="gender" type="radio" value="male" required/>Male
            <input name="gender" type="radio" value="female" required/>Female
            <input name="gender" type="radio" value="tg" required/>TG
          </div><br />
          <div>
            <label>Address:</label><br />
            <textarea name="address" rows="5" required></textarea>
          </div><br />
          <div>
            <label>Phone number:</label><br />
            <input name="tel" type="number" pattern="[6-9]{1}[0-9]{9}" placeholder="Phone number" required />
          </div><br />
          <div>
            <label>Symptoms:</label><br />
            <textarea name="symptoms" rows="5" required></textarea>
          </div><br />
          <div>
            <label>Admitted date:</label><br />
            <input name="admitdate" id="admitdate" type="date" placeholder="admitdate" required />
          </div><br />
          <div>
            <input type="submit" value="submit"/>
            <input type="reset" value="reset"/>
          </div>

        </form>
      </div>

      <div id="doctordetails">
        <form action="checkdoctor.php" method="post">

          <div>
            <label>Doctor name:</label><br />
            <input type="text" name="doctorname" placeholder="Doctor name" required>
          </div><br />
          <div>
            <label>Doctor Id:</label><br />
            <input type="text" name="doctorid" placeholder="Doctor Id">
          </div><br />
          <div>
            <label>Dept:</label><br />
            <input type="text" name="dept" placeholder="Dept" required />
          </div><br />
          <div>
            <label>Time of expectation:</label><br  />
            <input type="time" name="time" placeholder="Time" required />
          </div><br />
          <div>
            <input type="submit" value="submit">
            <input type="reset" value="reset">
          </div>

        </form>
      </div>

      <div id="rooms">
        <form action="" >

          <div>
            <label>Room no:</label><br />
            <input type="text" name="roomno" placeholder="Room no" />
          </div><br />
          <div>
            <label>Type of room availed:</label><br />
            <input type="radio" name="roomtype" value="normal" />normal
            <input type="radio" name="roomtype" value="ac">ac
            <input type="radio" name="roomtype" value="super deluxe">deluxe
          </div><br />
          <div>
            <label>Availed Food:</label><br />
            <input type="radio" name="food" value="yes">yes
            <input type="radio" name="food" value="no">no
          </div><br />
          <div>
            <label>Admitted Date:</label><br />
            <input type="date" name="admitdate" value="" placeholder="admitdate">
          </div><br />
          <div>
            <label>Discharge Date:</label><br />
            <input type="date" name="dischargedate" value="" placeholder="dischargedate">
          </div><br />
          <div>
            <input type="submit" />
            <input type="reset" />
          </div>
        </form>
      </div>

      <div id="billing">

      </div>

    </div>
    <script src="main.js"></script>
  </body>
</html>
