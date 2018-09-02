
function patientdetails(){
  document.getElementById('patientdetails').style.display="block";
  document.getElementById('doctordetails').style.display="none";
  document.getElementById('rooms').style.display="none";
  document.getElementById('billing').style.display="none";
}

function doctordetails(){
  document.getElementById('patientdetails').style.display="none";
  document.getElementById('doctordetails').style.display="block";
  document.getElementById('rooms').style.display="none";
  document.getElementById('billing').style.display="none";
}

function rooms(){
  document.getElementById('patientdetails').style.display="none";
  document.getElementById('doctordetails').style.display="none";
  document.getElementById('rooms').style.display="block";
  document.getElementById('billing').style.display="none";
}

function billing(){
  document.getElementById('patientdetails').style.display="none";
  document.getElementById('doctordetails').style.display="none";
  document.getElementById('rooms').style.display="none";
  document.getElementById('billing').style.display="block";
}

function checkdate() {
  if (document.getElementById('admitdate')>document.getElementById('dischargedate')) {
    
    alert("Discharge Date cannot be greater than Admit Date")
  }
}
