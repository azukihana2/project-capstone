<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Blockchain Sertifikat - Buat</title>
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