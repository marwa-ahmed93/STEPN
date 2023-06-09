
<?php
session_start();
include '../connection.php';


?>


<!DOCTYPE html>
<html dir="rtl">
  <link rel="shortcut icon" href="images/Mo.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>
  <form id="regForm" action="handelPharmacySign.php" method = "post">
  <h1> تسجيل (صيدلية) جديدة - STEPN</h1>
  <!-- One "tab" for each step in the form: -->
<center>
   <?php
// $q1=$_GET['q1'];
// if ($q1==1){
//   echo " ! البريد الإلكتروني مستخدم بالفعل , يرجى محاولة استخدام بريد إالكتروني آخر ";
// }

   ?>
</center>
  <div class="tab"> بيانات شخصية
    <p><input placeholder="اسم الصيدلية" oninput="this.className = ''" name="wfirstname"></p>
    <p><input placeholder="اسم المالك" oninput="this.className = ''" name="wlastname"></p>
  </div>
  <div class="tab">معلومات الاتصال

<p><input placeholder="اسم المستخدم" oninput="this.className = ''"    name="wUsername"></p>
    <p><input placeholder="رقم الهاتف" oninput="this.className = ''" name="wPhone"></p>
	</p>
<p><input placeholder="مواعيد العمل" oninput="this.className = ''" name="working_time"></p>

</p>

<label for="sport"> الخدمات المتاحة  </label></p>
<input type="text" id="sport" name="services"></p>

</p>

<label for="sport"> التخصصات المتاحة  </label></p>
<input type="text" id="sport" name="specialties"></p>

</div>
<div class="tab">معلومات المكان
</p>
<label for="sport"> الدولة  </label></p>
<input type="text" id="sport" name="wCountry"></p>

<label for="sport"> المحافظة  </label></p>
<input type="text" id="sport" name="governorate"></p>

<label for="sport"> المدينة  </label></p>
<input type="text" id="sport" name="city"></p>

<p><input placeholder="رقم التسجيل" oninput="this.className = ''" name="registration"></p>
</p>
  </div>
  <div class="tab">معلومات تسجيل الدخول	
    <p><input placeholder="البريد الإلكتروني" oninput="this.className = ''" name="wEmail"></p>
    <p><input placeholder="كلمة السر" oninput="this.className = ''" name="wpassword" type="password"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">السابق</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)"> التالي</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>


<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = " STEPN - انشاء حساب فى ستيبن   ";
  } else {
    document.getElementById("nextBtn").innerHTML = "التالي";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
</form>
</body>
</html>
