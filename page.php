<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hospital</title>
    <link rel="stylesheet" href="main.css" />
    <?php   include 'connection.php'; ?>
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
        <center>
          <table>
            <tr>
              <td>Doctor id</td>
              <td>Doctor Name</td>
            </tr>
            <?php
            $sql = "select * from doctor";
            $result = mysqli_query($per, $sql);

            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row["doctorid"]."</td>";
                echo "<td>".$row["doctorname"]."</td>";
                echo "</tr>";
              }
            }
            else echo "0 results";
            ?>
          </table>
        </center>
<br />

        <form action="checkdoctor.php" method="post">

          <div>
            <label>Doctor name:</label><br />
            <input type="text" name="doctorname" placeholder="Doctor name" required>
          </div><br />
          <div>
            <label>Doctor Id:</label><br />
            <input type="text" name="doctorid" placeholder="Doctor Id" required>
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
        <form action="addroom.php" onsubmit="return checkdate()" method="post">

          <div>
            <label>Patient Id:</label><br />
            <input type="text" name="patid" id="patid" placeholder="Patient ID" required/>
          </div><br />

          <div>
            <label>Type of room availed:</label><br />
            <input type="radio" name="roomtype" value="normal" required/>normal
            <input type="radio" name="roomtype" value="ac" required>ac
            <input type="radio" name="roomtype" value="super deluxe" required>deluxe
          </div><br />
          <div>
            <label>Availed Food:</label><br />
            <input type="radio" name="food" value="yes" required>yes
            <input type="radio" name="food" value="no" required>no
          </div><br />
          <div>
            <label>Admitted Date:</label><br />
            <input type="date" name="admitdate" id="admitdate" placeholder="admitdate" required>
          </div><br />
          <div>
            <label>Discharge Date:</label><br />
            <input type="date" name="dischargedate" id="dischargedate" placeholder="dischargedate" required>
          </div><br />
          <div>
            <input type="submit" value="submit" />
            <input type="reset" value="reset"/>
          </div>
        </form>
      </div>

      <div id="billing">

      </div>

    </div>
    <script src="main.js"></script>
  </body>
</html>
