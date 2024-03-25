<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nielsen & Rønne</title>
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

<?php include "includes/navbar.php"; ?>

<script>
    // Offset for anchor jumps
    const offsetValue = 150; // Adjust this value as needed

    // Function to handle anchor jumps
    function handleAnchorJump() {
        const hash = window.location.hash;
        if (hash !== '') {
            const targetElement = document.querySelector(hash);
            if (targetElement) {
                const offsetTop = targetElement.getBoundingClientRect().top + window.pageYOffset - offsetValue;
                window.scrollTo({ top: offsetTop, behavior: 'smooth' });
            }
        }
    }

    // Listen for anchor jumps on page load
    window.addEventListener('load', handleAnchorJump);

    // Listen for hash changes
    window.addEventListener('hashchange', handleAnchorJump);
</script>

<div class="headerbg">
    <div class="container">
        <div class="row pt-5 align-items-center gy-xl-5 gy-lg-4 gy-md-3 gy-2">
            <div class="col-xl-4 col-6 mobile">
                <a href="#kraner"><img src="img/kran1.svg" alt="autoel" class="headerpic"><div class="header-text">Kraner</div></a>
            </div>
            <div class="col-6 mobile">
                <a href="#elmotor"><img src="img/elmotor1.svg" alt="autoel" class="headerpic"><div class="header-text">Elmotorer, Generatorer</div></a>
            </div>
            <div class="col-6 mobiletext">
                <a href="#elmotor">Kraner</a>
            </div>
            <div class="col-6 mobiletext">
                <a href="#elmotor">Elmotorer, Generatorer</a>
            </div>
            <div class="col-xl-2">
            </div>

            <div class="col-xl-4 col-6 mobile">
                <a href="#vindmoller"><img src="img/vindmølle1.svg" alt="autoel" class="headerpic"><div class="header-text">Vindmøller</div></a>
            </div>
            <div class="col-6 mobile">
                <a href="#lifte"><img src="img/lift1.svg" alt="autoel" class="headerpic"><div class="header-text">Lifte, Elevatorer</div></a>
            </div>
            <div class="col-6 mobiletext">
                <a href="#elmotor">Vindmøller</a>
            </div>
            <div class="col-6 mobiletext">
                <a href="#elmotor">Lifte, Elevatorer</a>
            </div>
            <div class="col-xl-2">
            </div>

            <div class="col-xl-4 col-6 mobile">
                <a href="#pumper"><img src="img/pumpe1.svg" alt="autoel" class="headerpic"><div class="header-text">Pumper</div></a>
            </div>
            <div class="col-6 mobile">
                <a href="#kontakt"><img src="img/kontakt1.svg" alt="autoel" class="headerpic"><div class="header-text">Kontakt</div></a>
            </div>
            <div class="col-6 mobiletext">
                <a href="#elmotor">Pumper</a>
            </div>
            <div class="col-6 mobiletext">
                <a href="#elmotor">Kontakt</a>
            </div>
            <div class="col-xl-2">
            </div>
        </div>
    </div>
</div>



<div class="container watermark-container">
    <hr class="mt-lg-5 mt-4">
    <section id="kraner" class="kraner ms-lg-5 me-lg-5 mt-lg-5 ms-xs-4 me-xs-4 ms-3 me-3 mt-4">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-6 col-12">
                <h1 class="overskrift1">Kraner</h1>
                    <div class="d-block d-lg-none text-center">
                        <img src="img/kran2.png" class="img-fluid sectionimg" alt="">
                    </div>
                <h5 class="underskrift1 mt-3 mb-3">Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:</h5>
                <p class="breadtext">
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                </p>
                <h5 class="underskrift1">Kontakt os gerne for et servicetilbud!</h5>
            </div>
            <div class="col-lg-4 d-lg-block text-center d-none">
                <img src="img/kran1.png" class="img-fluid sectionimg" alt="">
            </div>
        </div>
    </section>
</div>

<div class="container watermark-container">
    <hr class="mt-lg-5 mt-4">
    <section id="elmotor" class="kraner ms-lg-5 me-lg-5 mt-lg-5 ms-xs-4 me-xs-4 ms-3 me-3 mt-4">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-6 col-12">
                <h1 class="overskrift1">Elmotorer, Generatorer</h1>
                    <div class="d-block d-lg-none text-center">
                        <img src="img/elmotorheader1.png" class="img-fluid sectionimg" alt="">
                    </div>
                <h5 class="underskrift1 mt-3 mb-3">Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:</h5>
                <p class="breadtext">
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                </p>
                <h5 class="underskrift1">Kontakt os gerne for et servicetilbud!</h5>
            </div>
            <div class="col-lg-4 d-lg-block text-center d-none">
                <img src="img/elmotorheader.png" class="img-fluid sectionimg" alt="">
            </div>
        </div>
    </section>
</div>

<div class="container">
    <hr class="mt-lg-5 mt-4 mb-lg-5 mb-4">
</div>

<div class="wrapper">
    <img src="img/kran.png" class="split-img" alt="Image Description">
</div>

<div class="container watermark-container">
    <hr class="mt-lg-5 mt-4">
    <section id="vindmoller" class="kraner ms-lg-5 me-lg-5 mt-lg-5 ms-xs-4 me-xs-4 ms-3 me-3 mt-4">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-6 col-12">
                <h1 class="overskrift1">Vindmøller</h1>
                    <div class="d-block d-lg-none text-center">
                        <img src="img/kran2.png" class="img-fluid sectionimg" alt="">
                    </div>
                <h5 class="underskrift1 mt-3 mb-3">Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:</h5>
                <p class="breadtext">
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                </p>
                <h5 class="underskrift1">Kontakt os gerne for et servicetilbud!</h5>
            </div>
            <div class="col-lg-4 d-lg-block text-center d-none">
                <img src="img/kran1.png" class="img-fluid sectionimg" alt="">
            </div>
        </div>
    </section>
</div>

<div class="container watermark-container">
    <hr class="mt-lg-5 mt-4">
    <section id="lifte" class="kraner ms-lg-5 me-lg-5 mt-lg-5 ms-xs-4 me-xs-4 ms-3 me-3 mt-4">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-6 col-12">
                <h1 class="overskrift1">Lifte, Elevatorer</h1>
                    <div class="d-block d-lg-none text-center">
                        <img src="img/kran2.png" class="img-fluid sectionimg" alt="">
                    </div>
                <h5 class="underskrift1 mt-3 mb-3">Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:</h5>
                <p class="breadtext">
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                </p>
                <h5 class="underskrift1">Kontakt os gerne for et servicetilbud!</h5>
            </div>
            <div class="col-lg-4 d-lg-block text-center d-none">
                <img src="img/kran1.png" class="img-fluid sectionimg" alt="">
            </div>
        </div>
    </section>  
</div>

<div class="container">
    <hr class="mt-lg-5 mt-4 mb-lg-5 mb-4">
</div>

<div class="wrapper">
    <img src="img/elevator.png" class="split-img" alt="Image Description">
</div>

<div class="container watermark-container">
    <hr class="mt-lg-5 mt-4">
    <section id="pumper" class="kraner ms-lg-5 me-lg-5 mt-lg-5 ms-xs-4 me-xs-4 ms-3 me-3 mt-4">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-6 col-12">
                <h1 class="overskrift1">Pumper</h1>
                    <div class="d-block d-lg-none text-center">
                        <img src="img/kran2.png" class="img-fluid sectionimg" alt="">
                    </div>
                <h5 class="underskrift1 mt-3 mb-3">Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:</h5>
                <p class="breadtext">
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                </p>
                <h5 class="underskrift1">Kontakt os gerne for et servicetilbud!</h5>
            </div>
            <div class="col-lg-4 d-lg-block text-center d-none">
                <img src="img/kran1.png" class="img-fluid sectionimg" alt="">
            </div>
        </div>
    </section>
</div>

<div class="container">
    <hr class="mt-lg-5 mt-4 mb-lg-5 mb-4">
</div>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "christian544c@hotmail.com";
    $subject = "New Message from Website";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $headers = "From: $name <$email>";

    if (mail($to, $subject, $message, $headers)) {
        $success = true;
    } else {
        $success = false;
    }
} ?>

<section class="kontakt pt-5 pb-5" id="kontakt">
    <div class="container">
        <div class="row gx-lg-5 justify-content-around ms-lg-5 me-lg-5">
            <div class="col-xl-5 col-md-6 col-12">
                <h1 class="kontaktoverskrift mb-4 d-inline">Kontakt<img src="../img/kontaktwhite.svg" class="d-inline-block kontaktimg" alt=""></h1>
                <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <label for="name">Navn</label>
                    <br>
                    <input type="text" name="name" id="name" style="width: 100%;" required>
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email" style="width: 100%;" required>
                    <label for="message">Besked</label>
                    <br>
                    <textarea name="message" id="message" style="width: 100%; height: 150px;" required></textarea>
                    <button type="submit" class="btn btn-primary mt-4 mb-4 mobilebutton">Send</button>
                </form>
                <?php if (isset($success) && $success): ?>
                    <p>Message sent successfully!</p>
                <?php endif; ?>
            </div>
            <div class="col-xl-7 col-md-6 col-12 align-self-end ps-lg-5">
                <p class="kontakttext">Nielsen & Rønne A/S</p>
                <p class="kontakttext">DK-4800 Nykøbing Falster, Slotsporten 6</p>
                <p class="kontakttext">Email: nogr@nogr.dk</p>
                <p class="kontakttext">Telefon: +45 5485 0999</p>
                <p class="kontakttext">CVR-nr.: 16855871</p>
            </div>
            <div class="col-12 d-md-flex d-none">
                <button type="submit" class="btn btn-primary mt-4">Send</button>
            </div>
        </div>
        
    </div>
</section>

<?php include "includes/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>