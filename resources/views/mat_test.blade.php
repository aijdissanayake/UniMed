<html>


<head>

  <title>Materialize CSS Framework Demo</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS Files -->

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
  <!-- <script type="text/javascript" src="materialize\js\materialize.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
  <script type="text/javascript" src="js\init.js"></script>
   <script type="text/javascript" src="js\patient.js"></script>
  <link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css'/>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

  <script type="text/javascript">
       
$('select').material_select();
       
     </script> 


  <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link type="text/css" rel="stylesheet" href="materialize\css\materialize.min.css">
 
  <style type="text/css">


    .box
    {
      background-color: yellow;
    }


    div
    {
      background-color: white;
    }



  </style>




</head>


<body>

  <div class="container">



    <!-- jQuery is required by Materialize to function -->



    <div class="input-field col s12">
      <select>
        <option value="" disabled selected>Choose your option</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
      <label>Materialize Select</label>
    </div>

    <!-- <script type="text/javascript">
      $(document).ready(function() {
        $(".button-collapse").sideNav();
      });

      $('select').material_select();

    </script> -->


    <h1>TESTING</h1>

    <a href="sidemenu" data-activates="slide-out" class="button-collapse"><i class="material-icons">cloud</i></a>

    BACKGROUND COLOR

    <div class="card-panel red z-depth-5">This is a card panel with a teal lighten-2 class and I'm trying checking the responsiveness now</div>

    TEXT COLOR

    <div class="card-panel">

      <span class="blue-text text-darken-2 ">This is a card panel with dark blue text</span>

    </div>

    <div >

     <h1>TESTING</h1>

     <div class="row">
      <div class="blue lighten-5 col s6 m1 l1">1</div>
      <div class="blue lighten-4 col s6 m1 l2">1</div>
      <div class="blue lighten-3 col s4 m1 l3">1</div>
      <div class="blue lighten-2 col s4 m2 l6">2</div>
      <div class="blue lighten-1 col s4 m3 l12">2</div>
      <div class="blue valign-wrapper z-depth-1 col  m4 l12">Vertical</div>
      <div class="blue darken-1 z-depth-2 col s4 m3 l12">2</div>
      <div class="blue darken-2 z-depth-3 col s4 m3 l12">2</div>
      <div class="blue darken-3 z-depth-4 col s4 m3 l12">2</div>
      <div class="blue darken-4 z-depth-5 col s4 m3 l12">2</div>
      <div class="blue darken-5 col s4 m3 l12">2</div>
      <div class="blue 			col s12 m4 l12">2</div>
    </div>


  </div>



<ul id="slide-out" class="side-nav">
  <li><div class="userView">
    <img class="background" src="images/office.jpg">
    <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
    <a href="#!name"><span class="white-text name">John Doe</span></a>
    <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
  </div></li>
  <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
  <li><a href="#!">Second Link</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Subheader</a></li>
  <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>


<div class="box  valign-wrapper" >
  <h5>Vertical</h5></div>


  <a class="waves-effect waves-light btn red">Stuff</a>
  <a class="waves-effect waves-light btn red lighten-1"><i class="mdi-file-cloud left"></i>button</a>
  <a class="waves-effect waves-light btn red lighten-2"><i class="mdi-file-cloud right"></i>button</a>
  <a class="btn-floating btn-large waves-effect waves-light red lighten-3"><i class="mdi-content-add"></i></a>

  <div class="row">
    <form id="upload" class="col s10 offset-s3" action="#" method="POST" >
      <div class="row">
        <div class="input-field col s6 l12">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6 l12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>

      <div class="row">

        <div class="input-field col s12">
          <select  name="session" id="sessionID">
            <option value="" disabled selected> Choose your preferred session </option>
            <option value=1>  8am - 11am </option>
            <option value=2>  12noon - 3pm </option>
            <option value=3>  4pm - 8pm  </option>
            <label for="sessionID">Session :</label>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s7">
          <select id="subject_id" name="subject_id" >
            <option value="-1" disabled selected>Choose the subject</option>
            <option value="-1" >Sessions </option>
          </select>
          <label for="subject_id" style="font-size: large">Sessions</label>
        </div>
      </div>

      <div class="input-field col s12">
        <select class="validate">
          <option value="0" disabled selected>Choose your option</option>
          <option value="1">Option 1</option>
          <option value="2">Option 2</option>
          <option value="3">Option 3</option>
        </select>
        <label>Materialize Select</label>
      </div>

     <!-- <script type="text/javascript">
       
$('select').material_select();

     </script> --> 


    </form>
  </div>

  <div id="appPolicy">
  <h5>Appointment Policy</h5>
  <div>
    Here Goes the Appointment Policies
  </div>

<button id="policyButton">Appointment Policy</button>



<div id="policy">

                        <ul>   
                            <li>Appointments should be made at least day prior to the appointment date.</li>
                            <li>All reserved appointments are given reservation order based priority.</li><br>
                            <li>Patients are advised to be present at the dispensary 10 minutes early.</li><br>
                            <li>Patients can roughly calculate his/her appointment time by assuming 10 mins for each patient.</li><br>
                            <li>If the patient is not available when his/her appointment number is called, then the next number will be called.</li><br>
                            <li>In case of late arrival of a patient with a higher priority number and another patient is examined during the arrival, the arrived patient will be called immediately after the current examination.</li><br>
                        </ul>
  
</div>



</div>

 
 <a  class="btn tooltipped col s2" data-position="right" data-delay="50" data-tooltip="I am tooltip"> Right</a>
 <br><br>
 {{$htmlCode}}       

</div>


</body>


</html>