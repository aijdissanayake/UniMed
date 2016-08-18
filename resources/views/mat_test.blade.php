<html>


<head>

  <title>Materialize CSS Framework Demo</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS Files -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="\materialize\css\materialize.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
<script src="\materialize\js\materialize.min.js"></script>
<script src="\js\init.js"></script>

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

  <script type="text/javascript">
    $(".button-collapse").sideNav(); 
  </script>


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


<!-- <ul id="slide-out" class="side-nav full">
  <li><a href="#!">First Sidebar Link</a></li>
  <li><a href="#!">Second Sidebar Link</a></li>
</ul>

<a href="#" data-activates="slide-out" class="button-collapse">
  <i class="large mdi-navigation-menu"></i>
</a> -->

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

</div>

</body>

    
</html>