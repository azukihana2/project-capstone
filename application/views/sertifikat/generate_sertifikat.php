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
    <link rel="preconnect" href="https://fonts.googleapis.com" />        
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />
    
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/generatesertifikat.css">
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
        <div class="form-inner">
            <h1 class="title">Generate Sertifikat</h1>
            <form action="<?= site_url('generate_sertifikat/submit_form') ?>" method="post">
                <div class="user-info">
                    <div class="input-box">
                        <label for="First">First Name</label>
                        <input type="text" placeholder="First Name" name="first_name" required>
                    </div>
                    <div class="input-box">
                        <label for="Last">Last Name</label>
                        <input type="text" placeholder="Last Name" name="last_name" required>
                    </div>
                    <div class="input-box">
                        <label for="Organization">Organization</label>
                        <input type="text" placeholder="Organization" name="organization" required>
                    </div>
                    <div class="input-box">
                        <label for="Sertifikat">Certificate For</label>
                        <input type="text" placeholder="Certificate For" name="certificate_for" required>
                    </div>
                    <div class="input-box">
                        <label for="Assigned">Assigned Date</label>
                        <input type="date" placeholder="" name="assigned_date" required>
                    </div>
                    <div class="input-box">
                        <label for="Email">Email</label>
                        <input type="text" placeholder="Email" name="email" required>
                    </div>
                </div>
                <!-- Tombol Submit -->
                <div class="input-box">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>