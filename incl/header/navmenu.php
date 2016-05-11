<?php

class NavMenu {
  
  public function showLogin() {
    echo "<li><a href='login'>Inloggen</a></li>";
  }
  
  public function showLogout() {
    echo "<li><a href='logout'>Uitloggen ()</a></li>";
  }
}

$navmenu = new NavMenu();
?>

<div class="row bnr-menu">
  <div class="medium-3 columns logo">
    <a href="home"><img src="img/logo/wijnwinkel_logo.png" alt="logo"></a>
  </div>
  <div class="medium-6 columns settings">
    <input type="text" placeholder="Zoek uw wijn">
    <div class="button-group large btn-menu-one">
      <button href="#" data-toggle="drop1" class="button dropdown"><i class="fi-torso"></i> Account</button>
      <ul class="dropdown-pane" id="drop1" data-dropdown data-auto-focus="true">
        <li><a href="account">Mijn account</a></li>
        <li><a href="registreer">Account aanmaken</a></li>
        <?php
          if(empty($_SESSION['signedin'])) {
            $this->showLogin();
          }
          else {
            $this->showLogout();
          }
        ?>
        <li><a href="login">Inloggen</a></li>
      </ul>
      <a class="button"><i class="fi-shopping-cart"></i> Winkelwagen</a>
    </div> 
  </div>
</div>

<div class="row btn-menu-two">
  <div class="button-group">
    <a class="button">Alle producten</a>
    <a class="button">Rode wijn</a>
    <a class="button">Witte wijn</a>
    <a class="button">Rosé wijn</a>
  </div>
</div>