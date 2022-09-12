<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>The Noble Quran | Quran.com</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="favicon.ico">
  <script src="https://kit.fontawesome.com/9f9453785e.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-sm bg-ligh navbar-light container nopadding">
    <ul class="navbar-nav">
      <li class="nav-item">
        <button type="button" class="btn btn-lg humberger">
          <img id="site-menu--trigger" class="sidebar-btns" alt="quran.com menu" src="https://cdn.qurancdn.com/assets/icon/hamburger-b328bd84b5f4e6621c239ea54e3511632642ebf56db943aa8b04cce4af6e6f7d.svg">
        </button>
      </li>
      <li class="nav-item">
        <a href="/" class="logo navbar-brand">
          <strong style="font-weight: bold">Quran</strong>.com
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <select class="language">
          <option value="en" selected="">English</option>
          <option value="ur">اردو</option>
          <option value="ar">العربية</option>
          <option value="bn">বাংলা</option>
          <option value="fa">فارسی</option>
          <option value="fr">Français</option>
          <option value="id">Indonesia</option>
          <option value="it">Inglese</option>
          <option value="nl">Dutch</option>
          <option value="pt">Português</option>
          <option value="sq">Shqip</option>
          <option value="th">ภาษาไทย</option>
          <option value="tr">Türkçe</option>
        </select>
      </li>
      <li class="nav-item">
        <div class="row">
          <div class="col-3">
            <button type="button" name="button" class="mode">
              <img src="images/light.svg" alt="light mode" class="light-image">
            </button>
          </div>
          <div class="col-4">
            <button type="button" name="button" class="mode">
              <img src="images/dark.svg" alt="light mode" class="dark-image">
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            Mode
          </div>
        </div>
      </li>
      <li class="nav-item" style="padding-top:5px;">
          <a href="log.php" style="color:#00acc2;">
            <i class="fas fa-sign-in-alt fa-2x"></i>
          </a>
      </li>
    </ul>
    </div>
  </nav>


  <!-- Hiring bar -->
  <section class="hire container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 hiring-text">
          <p style="font-weight: bold">We are hiring product designers and software engineers!</p>
          <p>Join us in building the next version of Quran.com.</p>
        </div>
        <div class="col-md-6 col-sm-12 hiring-buttons">
          <button type="button" class="btn btn-sm btn-info">View Positions</button>
          <button type="button" class="btn btn-sm dismiss-btn">Dismiss</button>
        </div>
      </div>
    </div>
  </section>


  <!-- Search Area -->
  <section class="container search">
    <img class="quran-logo" src="images/quran-logo.png" alt="quran-logo">
    <p>The Noble Quran</p>
    <div class="search-bar container">
      <input type="search" class="search-input" placeholder="Search &quot;Noah&quot;">
      <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
    </div>
  </section>
  <section class="quran-map container">
    <p>Popular Searches</p>
    <div class="popular-searches">
      <div>
        <a class="btn popular-btn" data-controller="track" data-name="popular-search" data-category="/ayatul-kursi" href="/ayatul-kursi"><span class="en ">Ayatul Kursi</span></a>
        <a class="btn popular-btn" data-controller="track" data-name="popular-search" data-category="/surah-ya-sin" href="/surah-ya-sin"><span class="en ">Surah Yaseen</span></a>
        <a class="btn popular-btn" data-controller="track" data-name="popular-search" data-category="/surah-al-mulk" href="/surah-al-mulk"><span class="en ">Surah Al Mulk</span></a>
        <a class="btn popular-btn" data-controller="track" data-name="popular-search" data-category="/surah-ar-rahman" href="/surah-ar-rahman"><span class="en ">Surah Ar-Rahman</span></a>
        <a class="btn popular-btn" data-controller="track" data-name="popular-search" data-category="/surah-al-waqiah" href="/surah-al-waqiah"><span class="en ">Surah Al Waqi'ah</span></a>
        <a class="btn popular-btn" data-controller="track" data-name="popular-search" data-category="/surah-al-kahf" href="/surah-al-kahf"><span class="en ">Surah Al Kahf</span></a>
        <a class="btn popular-btn" data-controller="track" data-name="popular-search" data-category="/surah-al-muzzammil" href="/surah-al-muzzammil"><span class="en ">Surah Al Muzzammil</span></a>
      </div>
    </div>
    <div class="category" role="group">
      <button type="button" class="category-btn surah btn">Show Surah</button>
      <button type="button" class="category-btn juzz btn">Show Juz</button>
    </div>
    <!-- Quran Map
    - 1. select * from `quran_surah`
    - 2. get count
    - 3. loop over the selected items & continue
    -->
    <div class="row">

      <?php
      require_once('connect.php');
      $conn = new Connect();
      $db=$conn->set_connection();
      $rowcount = $conn->getRowCount();
      $row = $conn->getRow();
        for ($i=0; $i < $rowcount; $i++) {

      ?>

              <div class="col-md-4 col-sm-12">
                <div class="surah-card row">
                  <p class="surah-number col-4">
                    <?php
                    echo $row[$i]["id"];
                    ?>
                  </p>
                  <div class="surah-en-name col-4">
                    <?php
                    echo $row[$i]["latin"];
                    ?>
                    <p class="translated-name">
                      <?php
                      echo $row[$i]["english"];
                      ?>
                    </p>
                  </div>
                  <div class="surah-ar-name col-4">
                    <?php
                    echo $row[$i]["arabic"];
                    ?>
                  </div>
                </div>
              </div>
        <?php

            }
            mysqli_close($db);
        ?>
      </div>

      <!-- Cards Link -->
      <div class="row">
        <a class="surah-link col-md-4 col-sm-12" href="https://salah.com/">
          <div class="makka-card">
            <div class="content">
              <h5>Salah</h5>
              <p>Search prayer times for any location</p>
            </div>
          </div>
        </a>
        <a class="surah-link col-md-4 col-sm-12" href="https://sunnah.com/">
          <div class="makka-card">
            <div class="content">
              <h5>Sunnah</h5>
              <p>The Hadith of Prophet Muhammad (ﷺ)</p>
            </div>
          </div>
        </a>
        <a class="surah-link col-md-4 col-sm-12" href="https://quranicaudio.com/">
          <div class="makka-card">
            <div class="content">
              <h5>Noble Quran in audio</h5>
              <p>Learning & listening at the same time</p>
            </div>
          </div>
        </a>
      </div>
    </a>
  </section>


  <!-- Footer Area -->
  <section class="footer container-fluid">
    <div class="footer-content container">
      <div class="row">
        <div class="col-4 content-1 container">
          <h5>Navigate</h5>
          <a href="#">About us</a>
          <a href="#">Donations</a>
          <a href="#">Help</a>
          <a href="#">Feedback</a>
          <a href="#">Developers</a>
          <a href="#">Download</a>
          <a href="#">Privacy</a>
        </div>
        <div class="col-4 content-2 container">
          <h5>Useful sites</h5>
          <a href="https://quranicaudio.com/" target="_blank">Quranicaudio.com</a>
          <a href="https://salah.com/" target="_blank">Salah.com</a>
          <a href="https://sunnah.com/" target="_blank">Sunnah.com</a>
          <a href="https://legacy.quran.com/" target="_blank">Legacy Quran.com</a>
          <a href="https://corpus.quran.com/wordbyword.jsp" target="_blank">Corpus.Quran.com</a>
          <a href="https://quranreflect.com/" target="_blank">QuranReflect.com</a>
        </div>
        <div class="col-4 content-3 container">
          <h5>Other links</h5>
          <a href="https://www.notion.so/QDC-Job-Board-a4478217b79c465ea1d6670ae4e0d645" target="_blank">We're hiring</a>
          <a href="#">Sitemap</a>
          <a href="#">Surah Yaseen (يس)</a>
          <a href="#">Ayat Al-Kursi (آية الكرسي)</a>
          <a href="#">Surah Al-Kahf (الكهف)</a>
        </div>
        <div class="col-4 content-4 container">
          <p class="copyrights">Quran.com is a Sadaqah Jariyah. We hope to make it easy for everyone to read, study, and learn The Noble Quran. The Noble Quran has many names including Al-Quran Al-Kareem, Al-Ketab, Al-Furqan, Al-Maw'itha, Al-Thikr,
            and Al-Noor.</p>
          <p>
            © 2021
            <a href="https://quran.com" style="display: inline;">Quran.com</a>. <span>All Rights Reserved</span>
          </p>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
