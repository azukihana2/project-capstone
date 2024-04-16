<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Sertifikat</title>

    <!-- Font Awesome -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />
    
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/generate_sertifikat.css">
</head>
<body>
    <!--Navbar-->
    <header>
    <div class="navbar">
        <div class="container">
            <div class="box-navbar">
                <div class="logo">
                    <h1>Logo</h1>
                </div>
                <ul class="menu">
                    <li><a href="#dashboard">Dashboard</a></li>
                    <li class="active"><a href="#buat">Buat</a></li>
                    <li><a href="#tutorial">Tutorial</a></li>
                    <i class="fa-solid fa-user"></i>
                </ul>
            </div>
        </div>
    </div>
    </header>

    <!-- From -->
    <section>
        <div class="title">
            <h1>Generate Sertifikat</h1>
        </div>
        <div class="form-inner">
            <form action="proses.php" class="sertifikat" method="post">
                <div class="field">
                    <input type="text" placeholder="First Name" required>
                </div>
                <div class="column">
                    <div class="field">
                        <input type="text" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field">
                    <input type="text" placeholder="Organization" required>
                </div>
                <div class="column">
                    <div class="field">
                        <input type="text" placeholder="Sertifikat For" required>
                    </div>
                </div>
                <div class="field">
                    <input type="date" placeholder="Assigned Date" required>
                </div>
                <div class="column">
                    <div class="field">
                        <input type="time" placeholder="Duration" required>
                    </div>
                </div>
                <div class="field">
                    <input type="text" placeholder="Email" required>
                </div>
            </form>
        </div>
    </section>
</body>
</html>