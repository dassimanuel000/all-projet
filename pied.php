<head>
        <title>INGENIEUR INFORMATIQUE UCAC-ICAM</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="responsive.css"/>
        <link type=""/>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="viewport" content="width=device-width, user-scalable=no"/>
        <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
</head>




<div class="contain-pied">
  <div class="div-pied-logo">
    <center>
      <img src="UCAC-ICAM.jpg" class="logo-pied"/>
    </center>
  </div>
  <div class="div-pied-recherche" style="">

    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">


    <style>

    /* Style the search box*/
    #mySearch {
     border: 1px solid #ddd;
    }
    #myMenu {
     list-style-type: none;
    }

    #myMenu li a {
     text-decoration: none;
    }

    </style>



    <script>
    function myFunction() {
      // Declare variables
      var input, filter, ul, li, a, i;
      input = document.getElementById("mySearch");
      filter = input.value.toUpperCase();
      ul = document.getElementById("myMenu");
      li = ul.getElementsByTagName("li");

      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    }
    </script>

    <span class="button-recherche-social" style="font-family:social media" onclick="myFunction()">D</span>
  </div>
</div>
<div class="contain-pied-lien">
  <div class="div-pied-lien">
    <br>
    <div class="div-pied-option">
      <br><br>
      <span class="titre-lien">PAGES</span>
      <ul id="myMenu">
       <li><a class="lien-option" href="#">Accueil</a></li>
       <li><a class="lien-option" href="#">Projets</a></li>
       <li><a class="lien-option" href="#">Activites</a></li>
       <li><a class="lien-option" href="#">Ajoutez un Article</a></li>
      </ul>
    </div>
    <div class="div-pied-option">
      <br><br>
      <span class="titre-lien">PROMOTION</span>
      <ul id="myMenu">
       <li><a class="lien-option" href="#">Etudiants</a></li>
       <li><a class="lien-option" href="#">Encadreurs</a></li>
       <li><a class="lien-option" href="#login_form" id="login_pop">Textez</a></li>
       <li><a class="lien-option" href="#login_form" id="login_pop">Contactez</a></li>
      </ul>
    </div>
    <div class="div-pied-option">
      <br><br>
      <span class="titre-lien">PROJETS</span>
      <ul id="myMenu">
       <li><a class="lien-option" href="addArticle.php">Ajoutez un Projet</a></li>
       <li><a class="lien-option" href="#">Demandez un service</a></li>
       <li><a class="lien-option" href="#login_form" id="login_pop">Recrutez-Nous</a></li>
       <li><a class="lien-option" href="https://ucac-icam.com">Ucac-Icam</a></li>
      </ul>
    </div>
    <div class="div-pied-option">
      <br><br>
      <span class="titre-lien">SUIVEZ-NOUS</span>
      <ul id="myMenu">
       <a class="lien-option-social lien-option-socia1" style="" href="#">i</a>
       <a class="lien-option-social lien-option-socia2" style="" href="#">f</a>
       <a class="lien-option-social lien-option-socia3" style="" href="#">y</a>
       <a class="lien-option-social lien-option-socia4" style="" href="#">t</a>
      </ul>
      <span class="titre-lien">TELPHONE</span>
      <li class="date-projet"><tel>+237 6 95 34 96 77</tel></li>
    </div>
  </div>
  <div class="div-signature" style="">
    <br>
    <span class="signature">Copyright (c) 2019 Copyright Promotion EXARS 2024 - Ucac-Icam All Rights Reserved </span>
  </div>
</div>

                <style>


                .panel a#login_pop, .panel a#join_pop {
                    border: 2px solid #aaa;
                    color: #fff;
                    text-decoration: none;
                    text-shadow: 1px 1px #000;
                    -webkit-border-radius: 10px;
                    -moz-border-radius: 10px;
                    -ms-border-radius: 10px;
                    -o-border-radius: 10px;
                    border-radius: 10px;
                }
                a#login_pop:hover, a#join_pop:hover {
                    border-color: #eee;
                }
                .overlay {
                    background-color: rgba(0, 0, 0, 0.6);
                    bottom: 0;
                    cursor: default;
                    left: 0;
                    opacity: 0;
                    position: fixed;
                    right: 0;
                    top: 0;
                    visibility: hidden;
                    z-index: 1;
                    -webkit-transition: opacity .5s;
                    -moz-transition: opacity .5s;
                    -ms-transition: opacity .5s;
                    -o-transition: opacity .5s;
                    transition: opacity .5s;
                }
                .overlay:target {
                    visibility: visible;
                    opacity: 1;
                }
                .popup {
                    background-color: #fff;
                    border: 3px solid #fff;
                    display: inline-block;
                    left: 50%;
                    opacity: 0;
                    padding: 15px;
                    position: fixed;
                    text-align: justify;
                    top: 40%;
                    visibility: hidden;
                    z-index: 10;
                    -webkit-transform: translate(-50%, -50%);
                    -moz-transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    -o-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);
                    -webkit-border-radius: 10px;
                    -moz-border-radius: 10px;
                    -ms-border-radius: 10px;
                    -o-border-radius: 10px;
                    border-radius: 10px;
                    -webkit-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
                    -moz-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
                    -ms-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
                    -o-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
                    box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
                    -webkit-transition: opacity .5s, top .5s;
                    -moz-transition: opacity .5s, top .5s;
                    -ms-transition: opacity .5s, top .5s;
                    -o-transition: opacity .5s, top .5s;
                    transition: opacity .5s, top .5s;
                }
                .overlay:target+.popup {
                    top: 50%;
                    opacity: 1;
                    visibility: visible;
                }
                .close {
                    height: 30px;
                    line-height: 30px;
                    position: absolute;
                    right: 0;
                    text-align: center;
                    text-decoration: none;
                    top: -15px;
                    width: 30px;
                    background: url(croix.png);
                    background-size: cover;
                    background-repeat: no-repeat;
                    -webkit-border-radius: 15px;
                    -moz-border-radius: 15px;
                    -ms-border-radius: 15px;
                    -o-border-radius: 15px;
                    border-radius: 15px;
                }
                .close:before {
                    content: "";
                }
                .close:hover {
                    background-color: rgba(64, 128, 128, 0.8);
                }
                .popup p, .popup div {
                    margin-bottom: 10px;
                }
                .popup label {
                    display: inline-block;
                    text-align: center;
                }
                .popup input[type="text"], .popup input[type="password"] {
                    border: 1px solid whitesmoke;
                    margin: 0;
                    padding: 2px;
                    -webkit-border-radius: 1px;
                    -moz-border-radius:1px;
                    -ms-border-radius: 1px;
                    -o-border-radius: 1px;
                    border-radius: 1px;
                }
                .popup input[type="text"]:hover, .popup input[type="password"]:hover {
                    border-color: #555 #888 #888;
                }
                .input-click{
                  width: 100%;
                  font-family: Phetsarath OT;
                  font-size: 20px;
                  background-color: white;
                }
                .label-click{
                  width: 100%;
                  text-align: center;
                  font-family: Phetsarath OT;
                  font-size: 20px;
                  background-color: whitesmoke;
                }

                </style>

      	        <a href="#x" class="overlay" id="login_form"></a>

      	        <div class="popup">

      	            <h2 class="propos">Welcome Guest!</h2>

      	            <p class="text-titre1" style="color:dimgrey">Please enter your Email and Telephone here</p>
      	            <div>

      	                <label for="login" class="label-click">Email</label>
                        <br>

      	                <input type="text" id="login" class="input-click" value="" placeholder="ex : Ucac-Icam@gmail.com"/>
      	            </div>
      	            <div>
      	                <label for="password" class="label-click">Telephone</label>
      	                <input type="password" id="password" class="input-click" value="" placeholder="+237 6........"/>
      	            </div>
      	            <input type="button" style="width:100%;" value="VALIDER" class="button-bloc"/>
      	            <a class="close" href="#close"></a>
      	        </div>
      	        <!-- popup form #2 -->
      	        <a href="#x" class="overlay" id="join_form"></a>
