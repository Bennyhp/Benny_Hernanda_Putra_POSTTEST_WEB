<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Posttest 4</title>
  <link rel="stylesheet" href="stylesheet/style-index.css" />
</head>

<body id="id-body">
  <a href="#" class="center">
    <p class="Logo">
      <img src="images/SSDT-Logo.png" alt="Logo Sekiro Shadow Die Twice" , width="250px" />
    </p>
  </a>
  <nav>
    <ul class="nav-link">
      <li class="nav-item"><a href="index.php">Home</a></li>
      <li class="nav-item"><a href="#">General</a></li>
      <li class="nav-item"><a href="#">Equipments</a></li>
      <li class="nav-item"><a href="#">Characters</a></li>
      <li class="nav-item"><a href="#">Bosses</a></li>
      <li class="nav-item"><a href="form_login.php">Login</a></li>
    </ul>
  </nav>
  <div class="nama-user">
    <p>
      <?php
      if ($_POST['regisUsername'] = null) {
        $_POST['regisUsername'] = "Guest";
      } else {
        echo $_SESSION['regisUsername'];
      }
      ?>
    </p>
  </div>
  <div class="main-contents" id="main-contents">
    <input type="checkbox" class="checkbox" id="checkbox">
    <label for="checkbox" class="label">
      <div class="ball"></div>
    </label>
    <div class="btn-font">
      <span class="btn-font-size active" onclick="document.getElementById('section').style.fontSize = '1em'">A</span>
      <span class="btn-font-size" onclick="document.getElementById('section').style.fontSize = '1.25em'">A</span>
      <span class="btn-font-size" onclick="document.getElementById('section').style.fontSize = '1.75em'">A</span>
    </div>
    <div class="section" id="section">
      <div class="about-text">
        <h3>ABOUT SEKIRO</h3>
        <p>Explore late 1500s Sengoku Japan, a brutal period of constant life and death conflict, as you come face to
          face
          with larger than life foes in the dark and twisted world of Sekiro: Shadows Die Twice. As a Shinobi, or ninja,
          you will unleash an arsenal of deadly prosthetic tools and powerful ninja abilities while you blend stealth,
          vertical traversal, and visceral head to head combat in bloody confrontations.
          <br><br>
          After being left for dead by the Ashina Clan, who kidnapped your young lord and severed your arm, you awake to
          find that a mysterious busshi (or Japanese sculptor) has replaced your arm with an incredible prosthetic,
          allowing you to use many ingenious gadgets and tools. The busshi dubs you Sekiro, the one-armed wolf and,
          armed
          with your katana and new prosthetic, your only goal is to rescue your lord and regain your honor.
      </div>
      <img src="images/4155758108.jpg" alt="Sekiro vs General">
      </p>
    </div>
    <br><br><br>
    <div class="gameplay-text">
      <h3>SEKIRO GAMEPLAY</h3>
      <p>
        The game is directed by Hidetaka Miyazaki, and qualified as a third-person “action-adventure game with RPG
        elements“. The game’s protagonist plays the role of a hard-hearted warrior on a quest to rescue his young lord
        and who seeks revenge. His name is “Sekiro” or “One-Armed Wolf”. The game is set in Sengoku Japan – much as
        Nioh was, so you might want to brush up on your Sekigahara history or related lore. <br><br>
        Combat delivers many different ways to engage in each scenario, a feature which was touted as the cornerstone of
        the game. The addition of vertical traversal options brings a new perspective for FromSoftware’s fans to enjoy
        as they can now gain access to higher vantage points than they might be used to.
      </p>
      <img src="images/sekiro-gorgeous-castle.webp" alt="">
    </div>
  </div>
  <div class="judul-am" id="judul-am">
    <h1>About Me</h1>
  </div>
  <div class="content-am" id="content-am">
    <p>Nama saya Benny Hernanda Putra, saya mahasiswa Informatika Universitas Mulawarman angkatan 2020. <br>Ini
      adalah Posttest untuk praktikum mata kuliah Pemrograman Web<br>Saya membuat website ini karena saya
      terobsesi dengan game Sekiro Shadow Die Twice oleh karena itu saya terinspirasi untuk membuat website ini
    </p>
  </div>


  <footer>
    <button class="about-me" id="about-me" onclick="btnHilang()">About Me</button>
    <a href="#" class="center">
      <p class="Logo">
        <img src="images/SSDT-Logo.png" alt="Logo Sekiro Shadow Die Twice" , width="250px" />
      </p>
    </a>
  </footer>
  <script src="js/scripts.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>