<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

h4 {
    color: #333;
    font-weight: 600;
    margin-bottom: 10px;
}

hr {
    border: 1px solid #4c4c4c;
    margin: 10px 8px;
}

.container {
    height: 100vh;
    width: 100%;
    background-image: url("images/hero.jpg");
    background-size: cover;
    background-position: center;
    background-color: rgba(211, 211, 211, 0.6); /* Warna abu-abu lebih terang */
}

.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 260px; /* Sidebar selalu terbuka dengan lebar 260px */
    height: 100%;
    background: rgba(255, 255, 255, 1); /* Navbar tetap putih */
    border-right: 1px solid rgba(255, 255, 255, 0.6);
    display: flex;
    align-items: center;
    flex-direction: column;
    transition: width 0.3s ease;
}

.sidebar .user-account {
    display: flex;
    align-items: center;
    padding: 40px 10px 20px 10px;
    color: #000;
}

.user-account img {
    height: 45px;
    border-radius: 50%;
}

.user-account h2 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-left: 15px;
}

.links {
    list-style: none;
    margin-top: 20px;
    overflow-y: scroll;
    height: calc(100% - 140px);
}

.links li {
    display: flex;
    border-radius: 4px;
    align-items: center;
    transition: 0.3s ease;
}

.links span {
    padding: 12px 10px;
}

.links li a {
    color: #000;
    font-weight: 500;
    text-decoration: none;
    padding: 10px 20px;
    white-space: nowrap;
    display: block; /* Text selalu tampil */
}

.links li:hover {
    background: #fff;
}

.logout {
    margin-top: 20px;
}

.links::-webkit-scrollbar {
    display: none;
}

/* Hapus hover effect */
.sidebar:hover {
    width: 260px;
}

.sidebar:hover .user-account h2 {
    display: block;
}

.sidebar:hover .links li a {
    display: block; 
    justify-content: flex-start;
}

.sidebar:hover h4 {
    display: block;
}

.sidebar:hover hr {
    border-color: transparent;
}

    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <div class="user-account">
        <img src="images/logoo.png" alt="logo" style="width: 180px; height: auto;" />
        </div>

        <div class="profile" style="display: flex; flex-direction: column; align-items: center;">
    <span class="material-symbols-outlined" style="font-size: 90px; font-variation-settings: 'OPSZ' 80; color: #333;">account_circle</span>
    <div class="profile-name" style="margin-top: 5px;">
      <span style="font-size: 16px; font-weight: bold; color: #333;">Administrator</span>
    </div>
  </div>

        <ul class="links">
          <li>
            <span class="material-symbols-outlined">dashboard</span>
            <a href="#">Dashboard</a>
          </li>
          <li>
            <span class="material-symbols-outlined">account_circle</span>
             <a href="#">Profil Sekolah</a>
        </li>
        <li>
        <span class="material-symbols-outlined">quiz</span>
        <a href="#">Kuesioner Leveling</a>
        </li>
        <li>
        <span class="material-symbols-outlined">emoji_events</span>
        <a href="#">Usulan CSA</a>
        </li>

          <li>
            <span class="material-symbols-outlined">emoji_events</span>
            <a href="#">Perpanjang CSA</a>
          </li>
          <li>
         <span class="material-symbols-outlined">assessment</span>
        <a href="#">Distribusi Penilaian</a>
        </li>

          <li>
            <span class="material-symbols-outlined">emoji_events</span>
            <a href="#">Penghargaan Daerah</a>
          </li>
          <li>
            <span class="material-symbols-outlined">monitoring</span>
            <a href="#">Rekapitulasi</a>
          </li>
          <li>
            <span class="material-symbols-outlined">settings</span>
            <a href="#">Settings</a>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>
