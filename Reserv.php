<?php
require_once("config.php");
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Make a reservation">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Reserv</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Reserv.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.12.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    <script type="text/javascript">
 

  function Mont(){
    var x1=document.getElementById("choix")
    var e=x1.options[x1.selectedIndex].text
    

    if (e=="#1" || e=="#4"||e=="#5" || e=="#6"||e=="#7" || e=="#9"||e=="#19"){
      var date2=document.getElementById("date-4441").value
        var b=new Date(date2)
        
        var date1=document.getElementById("date-4444").value
        var a=new Date(date1)
        
        var diffTime =b.getTime() - a.getTime()
      var diffDays = diffTime / (1000 * 60 * 60 * 24);
      if (diffDays>=1){
      var t=200 * diffDays
      var z=t.toFixed(2);
      document.getElementById("n1").setAttribute("value", z+"\t"+"DH");
      }
      else {
        document.getElementById("n1").setAttribute("value", "Choisissez un jour de location au minimum !")
        

      }
    }
    else if (e=="#2"||e=="#3"||e=="#12"||e=="#16"){
      var date2=document.getElementById("date-4441").value
        var b=new Date(date2)
        var date1=document.getElementById("date-4444").value
        var a=new Date(date1)
        
        var diffTime =b.getTime() - a.getTime()
      var diffDays = diffTime / (1000 * 60 * 60 * 24);
      if (diffDays>=1){
      var t=300 * diffDays
      var z=t.toFixed(2);
      document.getElementById("n1").setAttribute("value", z+"\t"+"DH");
      }
      else {
        document.getElementById("n1").setAttribute("value", "Choisissez un jour de location au minimum !")
        

      }
    }
    else if (e=="#8"||e=="#10"||e=="#11"||e=="#14"||e=="#15"){
      var date2=document.getElementById("date-4441").value
        var b=new Date(date2)
        var date1=document.getElementById("date-4444").value
        var a=new Date(date1)
        
        var diffTime =b.getTime() - a.getTime()
      var diffDays = diffTime / (1000 * 60 * 60 * 24);
      if (diffDays>=1){
      var t=400 * diffDays
      var z=t.toFixed(2);
      document.getElementById("n1").setAttribute("value", z+"\t"+"DH");
      }
      else {
        document.getElementById("n1").setAttribute("value", "Choisissez un jour de location au minimum !")
        

      }
    }
    else if (e=="#17"){
      var date2=document.getElementById("date-4441").value
        var b=new Date(date2)
        var date1=document.getElementById("date-4444").value
        var a=new Date(date1)
        
        var diffTime =b.getTime() - a.getTime()
      var diffDays = diffTime / (1000 * 60 * 60 * 24);
      if (diffDays>=1){
      var t=500 * diffDays
      var z=t.toFixed(2);
      document.getElementById("n1").setAttribute("value", z+"\t"+"DH");
      }
      else {
        document.getElementById("n1").setAttribute("value", "Choisissez un jour de location au minimum !")
        

      }
    }
    else if (e=="#13"){
      var date2=document.getElementById("date-4441").value
        var b=new Date(date2)
        var date1=document.getElementById("date-4444").value
        var a=new Date(date1)
        
        var diffTime =b.getTime() - a.getTime()
      var diffDays = diffTime / (1000 * 60 * 60 * 24);
      if (diffDays>=1){
      var t=250 * diffDays
      var z=t.toFixed(2);
      document.getElementById("n1").setAttribute("value", z+"\t"+"DH");
      }
      else {
        document.getElementById("n1").setAttribute("value", "Choisissez un jour de location au minimum !")
        

      }
    }
  }
</script>
<style>
  * {
    box-sizing: border-box;
  }
  
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  input[type=email] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  input[type=date] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  input[type=time] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }


  
  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
  }
  .Pfirst-row{
     display: flex;
}
  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  .container {
    border-radius: 5px;
    background-color:  #ADCCE9;
    padding: 100px;
    padding-top: 20px;
  }
  input[type=tel] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  
  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }
  
  .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
  }
  .h2{
    font-weight: bolder;
    text-align: center;
    font-style: italic;

      }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  .Pcontainer{
    
    border: 1px solid;
    background-color: white;
    
    padding: 40px;
    
}
.pcontainer h1{
    text-align: center;
}

.Pfirst-row{
     display: flex;
}

.Powner{
    width: 100%;
    margin-right: 40px;
}

.Pinput-field{
    border: 1px solid #999;
}



.Pselection{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.Pselection select{
    padding: 10px 20px;
}
.ph{
  background-color:green;
  text-align:center;
}




.Pcards img{
    width: 100px;
    
}
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
  </style>
    <meta property="og:title" content="Reserv">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">

  </head>
  <body class="u-body"><header class="u-align-center-xs u-border-1 u-border-grey-25 u-clearfix u-header u-white u-header" id="sec-e68f"><div class="u-clearfix u-sheet u-sheet-1">
    
    
    <a href="Accueil.html" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
          <img src="images/JAYA (1).png" class="u-logo-image u-logo-image-1" data-image-width="80">
        </a>
        <form action="#" method="get" class="u-border-4 u-border-grey-15 u-search u-search-right u-search-1">
          <button class="u-search-button" type="submit">
            <span class="u-icon-rounded u-palette-1-base u-search-icon u-spacing-10 u-search-icon-1">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b04b"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-b04b" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </span>
          </button>
          <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
        </form>
        <nav class="u-align-left u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-1">
          <div class="menu-collapse">
            <a class="u-button-style u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="Accueil.html" style="padding: 10px 20px;"><strong>Accueil</strong></a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="Reserv.php" style="padding: 10px 20px;"><strong>Tarif et Réservation</strong></a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="Nos-Vehicules.html" style="padding: 10px 20px;"><strong>Nos Vehicules</strong></a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="Apropos.html" style="padding: 10px 20px;"><strong>À propos</strong></a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" onclick="window.location.href = 'contact.php';" style="padding: 10px 20px;"><strong>Contactez nous</strong></a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.html" style="padding: 10px 20px;"><strong>Accueil</strong></a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Reserv.php" style="padding: 10px 20px;"><strong>Tarif et Réservation</strong></a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Nos-Vehicules.html" style="padding: 10px 20px;"><strong>Nos Vehicules</strong></a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Apropos.html" style="padding: 10px 20px;"><strong>À propos</strong></a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" onclick="window.location.href = 'contact.php';" style="padding: 10px 20px;"><strong>Contactez nous</strong></a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
      

      
    <div class="ph">
      
    
    <?php
    
    if (isset($_POST['subi'])){
    $email = filter_input(INPUT_POST, 'email');
    $name = filter_input(INPUT_POST, 'name');
    $choix = filter_input(INPUT_POST, 'choix');
    $dated = filter_input(INPUT_POST, 'dated');
    $heured = filter_input(INPUT_POST, 'heured');
    $datea = filter_input(INPUT_POST, 'datea');
    $heurea = filter_input(INPUT_POST, 'heurea');
    $phone = filter_input(INPUT_POST, 'phone');
    $daten = filter_input(INPUT_POST, 'daten');
    $carte = filter_input(INPUT_POST, 'carte');
    $adresse = filter_input(INPUT_POST, 'adresse');
    $total = filter_input(INPUT_POST, 'total');
    $nomcarte = filter_input(INPUT_POST, 'nomcarte');
    $cvv = filter_input(INPUT_POST, 'cvv');
    $numerocarte = filter_input(INPUT_POST, 'numerocarte');
    $moisexp = filter_input(INPUT_POST, 'moisexp');
    $anneeexp = filter_input(INPUT_POST, 'anneeexp');
    
    if (!empty($email)){
      if (!empty($name)){
        if(!empty($choix)){
          if (!empty($dated)){
            if (!empty($heured)){
              if(!empty($datea)){
                if (!empty($heurea)){
                  if (!empty($phone)){
                    if(!empty($daten)){
                      if (!empty($carte)){
                        if (!empty($adresse)){
                          if (!empty($nomcarte)){
                          

                          
    
                          if (mysqli_connect_error()){
                            die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
                          }
                          else{
                              $sql = "INSERT INTO comm (email, name, choix, dated, heured, datea, heurea, phone, daten, carte, adresse, total, nomcarte, cvv, numerocarte, moisexp, anneeexp) values ('$email', '$name', '$choix', '$dated', '$heured', '$datea', '$heurea', '$phone', '$daten', '$carte', '$adresse', '$total','$nomcarte','$cvv','$numerocarte','$moisexp','$anneeexp')";

                              if ($conn->query($sql)){
                                $divName = "demo";
                                echo '<div id="'.$divName.'"></div>';
                                
                                  
                              }
                                else
                                    echo "Error: ". $sql ."". $conn->error;

                                }
                                $conn->close();
                             }
                        }
                      }
                  
          
                  }
                }
              }
            }
          }
        }
        }
        }
      }
    }
    


          
?>  
</div>
      
      
<div class="container" >
    <h2 class="h2">FAITES VOTRE RESERVATION!</h2>
    
    
      
  <form method="post" action="Reserv.php" >
  <div class="row">
  <div class="col-25">
    
  <br><label for="email"  ><strong>Email :</strong></label>
    </div>
    <div class="col-75">
    <input type="email" placeholder=""  name="email" >
    </div>
    </div>
    <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $email = filter_input(INPUT_POST, 'email');
            
            if (empty($email)){
              echo "*email should not be empty";
            }
        }
        ?>
        </section>
    <div class="row">
    <div class="col-25">
    <br><label for="name" ><strong>Nom et Prénom :</strong></label>
    </div>
    <div class="col-75">
    <input type="text" placeholder=""  name="name" >
    </div>
    </div>
    <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $name = filter_input(INPUT_POST, 'name');
            
            if (empty($name)){
              echo "*name should not be empty";
            }
        }
        ?>
        </section>
    <div class="row">
    <div class="col-25">
    <br><label for="select" ><strong>ID Vehicule Choisi :</strong></label>
    </div>
          
    <div class="col-75">   
    <select id="choix" name="choix" >
              <option ></option>
              <option value="Item 1">#1</option>
                  <option value="Item 2">#2</option>
                  <option value="Item 3">#3</option>
                  <option value="Item 4">#4</option>
                  <option value="Item 5">#5</option>
                  <option value="Item 6">#6</option>
                  <option value="Item 7">#7</option>
                  <option value="Item 8">#8</option>
                  <option value="Item 9">#9</option>
                  <option value="Item 10">#10</option>
                  <option value="Item 11">#11</option>
                  <option value="Item 12">#12</option>
                  <option value="Item 13">#13</option>
                  <option value="Item 14">#14</option>
                  <option value="Item 15">#15</option>
                  <option value="Item 16">#16</option>
                  <option value="Item 17">#17</option>
                  <option value="Item 18">#18</option>
                  <option value="Item 19">#19</option>
            </select>
    </div>
    </div>
    <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $choix = filter_input(INPUT_POST, 'choix');
            
            if (empty($choix)){
              echo "*choice should not be empty";
            }
        }
        ?>
        </section>
    <div class="row">
    <div class="col-25">

            <br><label for="dated" ><strong>Date du départ:</strong></label>
    </div>
    <div class="col-75">
            <input type="date" placeholder="MM/DD/YYYY" id="date-4444" name="dated">
    </div>
    </div>
    <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $datea = filter_input(INPUT_POST, 'datea');
            
            if (empty($datea)){
              echo "*Date should not be empty";
          
        }
      }
        ?>
        </section>
    <div class="row">
    <div class="col-25">
            <br><label for="heured" ><strong>Heure du départ:</strong></label>
    </div>
    <div class="col-75">
            <input type="time" placeholder="HH:MM" id="time-4444" name="heured">
    </div>
    </div>
    <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $heured = filter_input(INPUT_POST, 'heured');
            
            if (empty($heured)){
              echo "*Time should not be empty";
            }
        }
        ?>
        </section>
    <div class="row">
    <div class="col-25">
            <br><label for="datea" ><strong>Date d'arrivée:</strong></label>
    </div>
    <div class="col-75">
            <input type="date" placeholder="MM/DD/YYYY" id="date-4441" name="datea">
    </div>
    </div>
    <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $datea = filter_input(INPUT_POST, 'datea');
            
            if (empty($datea)){
              echo "*Date should not be empty";
            }
        }
        ?>
        </section>
    <div class="row">
    <div class="col-25">
            <br><label for="heurea" ><strong>Heure d'arrivée:</strong></label>
    </div>
    <div class="col-75">
            <input type="time" placeholder="HH:MM" id="time-4441" name="heurea">
    </div>
    </div>
    <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $heurea = filter_input(INPUT_POST, 'heurea');
            
            if (empty($heurea)){
              echo "*Time should not be empty";
            }
        }
        ?>
        </section>
    <div class="row">
    <div class="col-25">

            <br><label for="phone" ><strong>N° Téléphone:</strong></label>
    </div>
    <div class="col-75">
            <input type="tel" pattern="\+?\d{0,2}[\s\(\-]?([0-9]{3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +212691009722)"  name="phone" >
    </div>
    </div>
    <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $phone = filter_input(INPUT_POST, 'phone');
            
            if (empty($phone)){
              echo "*phone should not be empty";
            }
        }
        ?>
        </section>
    <div class="row">
    <div class="col-25">
            <br><label for="daten" ><strong>Date de naissance:</strong></label>
    </div>
    <div class="col-75">
            <input type="date" placeholder="MM/DD/YYYY" id="date-4447" name="daten">
    </div>
    </div>
    <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $daten = filter_input(INPUT_POST, 'daten');
            
            if (empty($daten)){
              echo "*Date should not be empty";
            }
        }
        ?>
        </section>
    <div class="row">
    <div class="col-25">
            <br><label for="carte" ><strong>N° Carte Nationale:</strong></label>
    </div>
    <div class="col-75">
            <textarea placeholder="Entrez le numero de votre carte nationale"   name="carte" ></textarea>
    </div>
    </div>
    <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $carte = filter_input(INPUT_POST, 'carte');
            
            if (empty($carte)){
              echo "*carte should not be empty";
            }
        }
        ?>
        </section>
    <div class="row">
    <div class="col-25">
            <br><label for="adresse" ><strong>Adresse</strong></label>
    </div>
    <div class="col-75">
            <textarea placeholder="Entrez votre adresse"   name="adresse" ></textarea>
    </div>
    </div>
    <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $adresse = filter_input(INPUT_POST, 'adresse');
            
            if (empty($adresse)){
              echo "*adresse should not be empty";
            }
        }
        ?>
        </section>
        <div class="montant">
                  <p> Montant à payer :<input class="in"  type="text" id="n1" name="total"> <input type="button" onclick="Mont()" value="Actualiser">  </p>
                </div>
                <div class="Pcontainer">
                <h1 style="text-align: center;">Continuer Votre Paiement:</h1>
                <div class="Pcards">
                              <img src="images/mc.png" alt="">
                              <img src="images/vi.png" alt="">
                              
                          </div>

                <div class="row">
                  <div class="col-25">
                    
                    <label for="nomcarte"  ><strong>Nom sur carte :</strong><br></label>
                    </div>
                    <div class="col-75">
                    <input type="text" placeholder=""  name="nomcarte" >
                    </div>
                    </div>
                    <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $nomcarte = filter_input(INPUT_POST, 'nomcarte');
            
            if (empty($nomcarte)){
              echo "*nomcarte should not be empty";
            }
        }
        ?>
        </section>
        <div class="row">
                      <div class="col-25">
                        
                        <label for="cvv"  ><strong>CVV :</strong><br></label>
                        </div>
                        <div class="col-75">
                        <input type="text" placeholder=""  name="cvv" >
                        </div>
                        </div>
                        <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $cvv = filter_input(INPUT_POST, 'cvv');
            
            if (empty($cvv)){
              echo "*cvv should not be empty";
            }
        }
        ?>
        </section>
        <div class="row">
                          <div class="col-25">
                            
                            <label for="numerocarte"  ><strong>Numero sur carte :</strong><br></label>
                            </div>
                            <div class="col-75">
                            <input type="text" placeholder=""  name="numerocarte" >
                            </div>
                            </div>
                            <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $numerocarte = filter_input(INPUT_POST, 'numerocarte');
            
            if (empty($numerocarte)){
              echo "*numero should not be empty";
            }
        }
        ?>
        </section>
        <div class="row">
                              <div class="col-25">
                              <br><label for="select" ><strong>Mois experisation :</strong></label>
                              </div>
                                    
                              <div class="col-75">   
                              <select id="moisexp" name="moisexp" >
                                <option></option>
                                <option value="Jan">Jan</option>
                                <option value="Feb">Feb</option>
                                <option value="Mar">Mar</option>
                                <option value="Apr">Apr</option>
                                <option value="May">May</option>
                                <option value="Jun">Jun</option>
                                <option value="Jul">Jul</option>
                                <option value="Aug">Aug</option>
                                <option value="Sep">Sep</option>
                                <option value="Oct">Oct</option>
                                <option value="Nov">Nov</option>
                                <option value="Dec">Dec</option>
                                      </select>
                              </div>
                              </div>
                              <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $moisexp = filter_input(INPUT_POST, 'moisexp');
            
            if (empty($moisexp)){
              echo "*mois should not be empty";
            }
        }
        ?>
        </section>
        <div class="row">
                                <div class="col-25">
                                <br><label for="select" ><strong>annee experation :</strong></label>
                                </div>
                                      
                                <div class="col-75">   
                                <select id="anneeexp" name="anneeexp" >
                                  <option></option>
                                  <option value="2021">2021</option>
                                  <option value="2020">2020</option>
                                  <option value="2019">2019</option>
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                        </select>
                                </div>
                                </div>

                                <section style="color:red">
      <?php
        
        if (isset($_POST['subi'])){
            $anneeexp = filter_input(INPUT_POST, 'anneeexp');
            
            if (empty($anneeexp)){
              echo "*annee should not be empty";
            }
        }
        ?>
        </section>
        
        
      </div>
            <div  class="row">       
              
        <input type="submit" name="subi" value="PAYEZ" >
      
    </div>
    </form>
  
</div>
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-cecc"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Accueil.html" class="u-image u-logo u-image-1">
          <img src="images/JAYA (2).png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f6fa"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-f6fa"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c127"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-c127"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7cbb"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7cbb"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-adf4"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-adf4"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
        <p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-1">Copyright © 2021&nbsp;<a href="Accueil.html" data-page-id="292396190" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">JAYA</a>&nbsp;<br>All Right Reserved<br>Website Designed by Abdelilah JALAL &amp; Yassine AHLAOU
        </p>
      </div></footer>
    <script>
      document.getElementById("demo").innerHTML= "Commande ID : " + `\t` + Math.floor(Math.random() * 10000)+"<br>"+"Félicitations ! nous avons bien reçu votre commande :)"+"<br>"+"Veuiller vérifier votre mail pour consulter la facture de votre commade." + "<br>"+ "N'hesitez pas de nous contacter pour plus d'informations .";
      </script>
  </body>
</html>