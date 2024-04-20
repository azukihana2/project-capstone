<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />        
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />
</head>
<body>
  <header>
        <div class="navbar">
            <div class="container">
                <div class="box-navbar">
                  <div class="logo">
                    <h1>Logo</h1>
                  </div>

                    <ul class="menu">
                        <li class="active"><a href="#dashboard">Dashboard</a></li>
                        <li><a href="<?php echo base_url('sertifikat/generate_sertifikat'); ?>">Buat</a></li>
                        <li><a href="#tutorial">Tutorial</a></li>
                        <i class="fa-solid fa-user"></i>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section>
      <main>
        <a class="cards" href="#">
          <div class="card">
            <span>+</span>
          </div>
          <p>Mulai Dari Awal</p>
        </a>
        <a class="cards" href="#">
          <div class="card active">
            <span>&#128452;</span>
          </div>
          <p>Sertifikat Eiji</p>
        </a>
        <a class="cards" href="#">
          <div class="card">
            <span>&#128452;</span>
          </div>
          <p>Sertifikat Rohman</p>
        </a>
      </main>
    </section>
    <footer>
      
    </footer>
  </div>
</body>
</html>