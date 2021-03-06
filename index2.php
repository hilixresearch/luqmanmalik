<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Luqman Malik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    <script src="js/login.js"></script>
      

    /*******************************************************************
    BODY
    *******************************************************************/
    html {
        height: 100%;
    }
    body {
        color:gray;
        background:#f8f8f8; cursor:default;
        background-repeat: no-repeat;
    }
    p.a:first-letter {
        color:#618DAA;
        float: top;
        font-size: 60px;
        line-height: 1;
        font-family:American Typewriter;
        text-shadow: 0 8px silver;
        padding:0;
        margin-right: 2px;
        border-bottom:1px solid gray;
    }
    /*******************************************************************
    Material Icons
    *******************************************************************/
    .material-icons:hover{color:#5D6D7E; transition: color .3s; cursor:pointer;}

    /*******************************************************************
      Filter
    *******************************************************************/

    hr.style-two {
      position: fixed;
      left: 50%;
      transform: translate(-50%, 0);
      top: -20px;
      width: 60%;
        border: 0;
        height: 120%;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.005), rgba(0, 0, 0, 0.24), rgba(0, 0, 0, 0.005));
    }

    /*******************************************************************
      LOGIN BUTTON / Trigger
    *******************************************************************/

    .btn-login {
      color: gray;
      font-size: 12px;
      text-align:center;
      background-color: #f9f9f9;
      border:1px solid transparent;
      box-shadow: 0 0 0 white;
      font-family: 'Avenir heavy';
      padding:15px 15px 15px 15px;
      margin-right: 0px;
      float:center;
      opacity:0.8;
      width:20%;
    }
    .btn-login:hover {
        color:#538BCB;
        background:#EBF5FB;
        transition: color .5s;
    }
    .btn-login0 {
      color: gray;
      font-size: 12px;
      text-align:center;
      background-color: #f9f9f9;
      border:1px solid transparent;
      box-shadow: 0 0 0 white;
      font-family: 'Avenir heavy';
      padding:15px 15px 15px 15px;
      margin-right:0px;
      float:left;
      opacity:0.8;
      width:20%;
    }
    .btn-login0:hover {
        color:#538BCB;
        background:#EBF5FB;
        transition: color .5s;
    }
    .btn-login1 {
      color: gray;
      font-size: 12px;
      text-align:center;
      background-color: #f9f9f9;
      border:1px solid transparent;
      box-shadow: 0 0 0 white;
      font-family: 'Avenir heavy';
      padding:15px 15px 15px 20px;
      margin-right: 0px;
      float:left;
      opacity:0.8;
      width:20%;
    }
    .btn-login1:hover {
        color:#538BCB;
        background:#EBF5FB;
        transition: color .5s;
    }
    .btn-login2 {
      color: gray;
      font-size: 12px;
      text-align:center;
      background-color: #f9f9f9;
      border:1px solid transparent;
      box-shadow: 0 0 0 white;
      font-family: 'Avenir heavy';
      padding:15px 15px 15px 15px;
      float:left;
      opacity:0.8;
      width:20%;
    }
    .btn-login2:hover {
        color:#538BCB;
        background:#EBF5FB;
        transition: color .5s;
    }
    /*******************************************************************
      THE MODAL
    *******************************************************************/
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: absolute; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 3.1%; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background: linear-gradient(rgba(0,0,0,0.85), silver); /* Black w/ opacity */
    }
    /* Modal Content */
    .modal-content {
        position:fixed;
        top:20%;
        background-color: #fefefe;
        font-family:"Avenir", "Light";
        font-size:20px;
        color: gray;
        margin-left:13.5%;
        padding:5%;
        border: 1px solid #fefefe;
        border-radius: 0%;
        width: 75%;
        height:75%;
        opacity: .95555555;
        border-radius:5px;
    }
    /* The Close Button */
    .close {
        font-weight:normal;
        position:fixed;
        top:24.5%;
        right:15%;
        color: #001a33;
        font-size: 13px;
        padding:5px;
    }
    .close:hover,
    .close:focus {
        color: #3399ff;
        text-decoration: none;
        cursor: default;
    }
    /*******************************************************************
      LOGIN FORM
    *******************************************************************/

    input[type=text] {
        width: 80%;
        color: #34495E;
        box-sizing: border-box;
        border: 1px solid #e9e9e9;
        border-radius: 5px;
        font-size: 14px;
        background-color: #f8f8f8;
        padding: 12px 20px 12px 40px;
        margin:10px;
    }
    input[type=text]:hover{border-color:#D6EAF8; background-color:#EAF2F8; transition:.4s; cursor:default;}
    input[type=password] {
        width: 80%;
        color: #34495E;
        box-sizing: border-box;
        border: 1px solid #e9e9e9;
        border-radius: 5px;
        font-size: 14px;
        background-color: #f8f8f8;
        padding: 12px 20px 12px 40px;
        margin:10px;
    }
    input[type=password]:hover{border-color:#D6EAF8; background-color:#EAF2F8; transition:.4s; cursor:default;}
    input[type=submit] {
      color: grey;
      font-size: 13px;
      background: linear-gradient(#f9f9f9, #f1f1f1);
      padding: 10px 20px;
      border: 1px solid transparent;
      box-shadow: 1px 1px 1px lightgray;
      border-radius: 3px;
    }
    input[type=submit]:hover{
        background: #f8f8f8; border: 1px solid #f5f5f5;
    }
    textarea{
        width:81%;
        height:100px;
        border:1px solid #f9f9f9;
        border-radius:5px; background-color:#f8f8f8;
        font-size:14px;
        color: #34495E;
        padding: 20px 20px 12px 40px;
    }
    a{color:gray;}
    a:hover{
        transition:.5s;
    }
    
    .trapazoid{
        text-align:right;
        position:fixed;
        top:12%;
        left:20.4%;
        width:60%;
        height:78%;
        background: linear-gradient(#f9f9f9, silver);
        opacity:.9;
        text-align: left;
        padding:5%;
        box-shadow: 2px 2px 2px #4444;
        border-radius:1%;
    }
    table, th, td {
    }
    table{
        width:75%;
        background:linear-gradient(white, lightgray);
        border-radius:5px;
    }
    th{
        height:40px;
        vertical-align:top;
        font-size: 10px;
        font-weight:normal;
        padding-left:1.5%;
    }
    rect {
        cursor: pointer;
        shape-rendering: crispEdges;
        fill: url(#MyGradient);
    }
    .RSSP{padding:2px 0 5px 0;}
    .RSSP:hover{color:#5D6D7E; transition:.2s;}
    .SF{font-family:American Typewriter; font-size:11px; color:#626567}
    </style>
    </head>
    <!-- _____________________________________ Body / HTML_____________________________________________ ___________________________________________________________________________________________ -->
    <body>
      <!--<a href="" style="font-size:8px; position:fixed; margin:33% 0 0 3%; color:#CACFD2;">Fiona Str&uuml;ngmann</a>-->
      <!-- Filter -->
      <image src="background.jpg" style="margin:0; position:fixed;"></image>
      <hr class="style-two">
      <!-- Center trapazoid -->
      <div class="trapazoid">
          <div style="margin:0 1% 0 0;" align="center">
          <p class="a" style="font-family:Avenir Next medium; margin-right:4.5%;">LUQMAN MALIK</p>
          <p style="font-weight:bold; font-size:12px; margin:0px; margin-right:2%;">TECHNOLOGIES RETAILER</p>
          <p style="font-size:11px; line-height:12px;">Communications, Energy, Security</p>
          
              <image src="profile-2.png" style="box-shadow: 2px 2px 2px #4444; margin-bottom:2%; border-radius:2%;"></image>
          </div>
          <div style="margin:1% 0 1% 0; text-align:center;">
              <span class="material-icons" style="-webkit-user-select:none; font-size:30px; color:#618DAA; border:1px solid #e9e9e9; border-radius:50%; padding:10px; background:linear-gradient(white,#f1f1f1); box-shadow:0px 1px 3px 1px #4444; cursor:default;" title="CBSIS | Security Specialist" onMouseOver="this.style.color='#7FB3D5'"
                  onMouseOut="this.style.color='#618DAA'">add_moderator
              </span>
              <span class="material-icons" style="-webkit-user-select:none; margin-left:10px; font-size:30px; color:#618DAA; border:1px solid #e9e9e9; border-radius:50%; padding:10px; background:linear-gradient(white,#f1f1f1); box-shadow:0px 1px 3px 1px #4444; cursor:default;" title="IBM | PRF Certified"
                  onMouseOver="this.style.color='#7FB3D5'"
                      onMouseOut="this.style.color='#618DAA'">admin_panel_settings
              </span>
              <span class="material-icons" style="-webkit-user-select:none; margin-left:10px; font-size:30px; color:#618DAA; border:1px solid #e9e9e9; border-radius:50%; padding:10px; background:linear-gradient(white,#f1f1f1); box-shadow:0px 1px 3px 1px #4444; cursor:default;" title="SEC | Accredited"
                  onMouseOver="this.style.color='#7FB3D5'"
                      onMouseOut="this.style.color='#618DAA'" >policy
              </span>
          </div>
          <div style="width:100%; color:gray; padding:2% 0 0 0.7%; text-align:center;">
              <a href="tel:+15105206506"><span class="material-icons" title="Office">call</span></a>
              <a href="tel:+15103843628"><span class="material-icons" title="Mobile">smartphone</span></a>
              <a href="mailto:luqmalik@gmail.com"><span class="material-icons" title="Email">email</span></a>
              <br>
              <span class="SF">San Francisco, CALIFORNIA</span>
          </div>
      </div>
      <!-- Login -->
      <!-- Trigger / Open The Modal -->
      <button id="libtn" class="btn-login">QCELSS</button>
      <button id="libtn" class="btn-login0">ADT</button>
      <button id="libtn" class="btn-login1">AT&T</button>
      <button id="libtn" class="btn-login2">IBM</button>
      <!-- The Modal -->
      <div id="myModal" class="modal">

        <p align="center" style="color:white; font-family: 'Open Sans', sans-serif; font-size:40px">QCELLS</p>

        <p align="center" style="color:#D6EAF8; font-family:'Avenir', 'light'; cursor:default;">MODULES
          <span style="color:white; margin-left:25px; cursor:pointer;">INVERTERS</span>
          <span style="color:white; margin-left:25px; cursor:pointer;">BATTERIES</span>
        </p>
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">x</span>

                  <div class="container">
                    <div class="main">
                      <form id="form_id" method="post" name="myform">
                          <table style="border-collapse:collapse;">
                              <tr>
                                <td style="width:20%; padding-left:2%; font-size:20px; font-weight:bold; color:gray;">
                                    <a href="https://www.q-cells.us/na/main/products/solar_panels/US_CANADA/residential/residential09.html" title="Q.ANTUM" target="_blank">
                                        Q.PEAK DUO BLK ML-G9+
                                    </a>
                                    <div style="font-size:12px; font-weight:normal;">Rebates and gratis inverters on all system installations.</div>
                                </td>
                                <td>
                                    <!-- Username -->
                                    <input  type="text" name="username" id="username" placeholder="First Name">
                                </td>
                              </tr>
                              <tr>
                                <td style="width:40%;">
                                  <svg style="position:fixed; height:30%; top:38%;">
                                      <defs>
                                          <linearGradient id="myGradient"><!--gradientTransform="rotate(90)"-->
                                            <stop offset="5%"  stop-color="#e8e8e8" />
                                            <stop offset="95%" stop-color="#3333" />
                                          </linearGradient>
                                        </defs>
                                    <!-- Module 1-->
                                    <polygon stroke="none" fill="url('#myGradient')" points="65,10 65,200 155,210 155,0"/>
                                    <polygon stroke="none" fill="url('#myGradient')" points="155,0 155,211 160,206 160,5"/>
                                    <!-- Module 2 -->
                                    <polygon stroke="none" fill="url('#myGradient')" points="120,10 120,200 200,210 200,0"/>
                                    <polygon stroke="none" fill="url('#myGradient')" points="200,0 200,211 205,206 205,5"/>
                                    <!-- Module 3-->
                                    <polygon stroke="none" fill="url('#myGradient')" points="175,10 175,200 255,210 255,0"/>
                                    <polygon stroke="none" fill="url('#myGradient')" points="255,0 255,211 260,206 260,5"/>
                                  </svg>
                                </td>
                                  <td>
                                      <!--  Password -->
                                      <input type="text" name="LastName" id="username" placeholder="Last Name">
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width:40%">&nbsp;</td>
                                  <td>
                                      <!-- Username -->
                                      <input  type="text" name="username" id="username" placeholder="Email Address">
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width:40%">&nbsp;</td>
                                  <td>
                                      <form action="mailto:luqmalik@gmail.com" method="POST" enctype="multipart/form-data" name="EmailForm">
                                          <input type="text" name="ContactName" placeholder="Telephone Number">
                                          <div style="margin:2.5% 0 2% 2%;">
                                              <textarea name="ContactCommentt" rows="6" cols="20" placeholder="System Specifications"></textarea>
                                          </div>
                                          <div  align="left">
                                            <label  class="checkbox" style="font-size:12px; font-weight:normal; width:6%">
                                              <input type="checkbox" value="remember-me" id="remember_me">
                                                  <div class="RSSP" title="Track promotions">RSS promos</div>
                                                  <input type="submit" value="Request demo"/>
                                            </label>
                                          </div>
                                      </form>
                                  </td>
                              </tr>
                              <tr>
                                  <th>&nbsp;</th>
                                  <th>
                                      <a href="">Terms and Conditions</a> | <a href="">Privacy Policy</a>
                                  </th>
                              </tr>
                          </table>
                          <!-- Remember me -->
                         
                        <!-- Login -->
                    
                      </form>
                    </div>
                  </div>
                
          </div>
      </div>
      <!-- ______________________________ JS ____________________________ -->

      <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("libtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
      </script>

      <!-- remember me __________________________________________________-->

       <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
              <script>
                  $(function() {
       
                      if (localStorage.chkbx && localStorage.chkbx != '') {
                          $('#remember_me').attr('checked', 'checked');
                          $('#username').val(localStorage.usrname);
                          $('#pass').val(localStorage.pass);
                      } else {
                          $('#remember_me').removeAttr('checked');
                          $('#username').val('');
                          $('#pass').val('');
                      }
       
                      $('#remember_me').click(function() {
       
                          if ($('#remember_me').is(':checked')) {
                              // save username and password
                              localStorage.usrname = $('#username').val();
                              localStorage.pass = $('#pass').val();
                              localStorage.chkbx = $('#remember_me').val();
                          } else {
                              localStorage.usrname = '';
                              localStorage.pass = '';
                              localStorage.chkbx = '';
                          }
                      });
                  });
              </script>

      <!-- ____________________ Login_script _____________________________ -->

      <script type="text/javascript">
        // Below function Executes on click of login button.
        function validate(){
          var username = document.getElementById("username").value;
          var password = document.getElementById("password").value;
          if ( username == "luqmanmalik@hilix.org" && password == "Pie.14159"){
            window.location = "http://localhost:8888/Hilix/Dashboard/dashboard.html"; // Redirecting to target page.
          return false;
          }
          else{
            alert("Invalid username or password.");
          }
        }
      </script>
    </body>
    <div style="position:fixed; bottom:0%; padding:1%; font-size:9px; color:gray;">
        <footer>Copyright &copy; 2021 Luqman Malik</footer>
    </div>
</html>
