<!DOCTYPE html>
<html>
<head>
    <title>Nielsen & Rønne</title>
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


<div class="container">
<hr class="mt-lg-5 mt-4">
    <section id="kraner" class="kraner ms-lg-5 me-lg-5 mt-lg-5 ms-4 me-4 mt-4">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-6 col-md-11 col-11">
                <h1 class="overskrift1">Kraner</h1>
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
            <div class="col-lg-2 col-md-1 col-1 align-items-end">
                <img src="img/logo+pumpe.png" class="vandmærke" alt="">
            </div>
        </div>
    </section>
</div>

<div class="container">
<hr class="mt-lg-5 mt-4">
    <section id="kraner" class="kraner ms-5 me-5 mt-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 col-md-11 col-11">
                <h1 class="overskrift1">Kraner</h1>
                <h5 class="underskrift1 mt-3 mb-3">Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:</h5>
                <p>
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:</p>
                <h5 class="underskrift1">Kontakt os gerne for et servicetilbud!</h5>
            </div>
            <div class="col-lg-4 d-lg-block text-center d-none">
                <img src="img/kran1.png" class="img-fluid sectionimg" alt="">
            </div>
            <div class="col-lg-2 col-md-1 col-1 align-items-end">
                <img src="img/logo+pumpe.png" class="vandmærke" alt="">
            </div>
        </div>
    </section>
</div>

    <div class="container">
        <hr>
        <section id="kraner" class="kraner ms-5 mt-5 mb-5">
            <h3 class="os1">Kraner</h3>
            <h5 class="ut1">Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:</h5>
                <p>
                - Traverskraner
                <br>
                - Portalkraner
                <br>
                - Svingkraner
                <br>
                - Specialkraner
                <br>
                - Kædetaljer
                <br>
                - Wiretaljer
                <br>
                - Løftegrej
                <br>
                </p>
                <h5 class="ut2">Kontakt os gerne for et servicetilbud!</h5>
                <img src="img/logo+pumpe.png" alt="" class="watermark">
        </section>
        <hr>
        <section id="elmotor" class="elmotor ms-5 mt-5 mb-5">
            <h3>Elmotor, Generator</h3>
            <p>Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                <br>
                - Traverskraner
                <br>
                - Portalkraner
                <br>
                - Svingkraner
                <br>
                - Specialkraner
                <br>
                - Kædetaljer
                <br>
                - Wiretaljer
                <br>
                - Løftegrej
                <br>
                Kontakt os gerne for et servicetilbud!</p>
        </section>
        <hr class="mt-5 mb-5">
    </div>
    
    <img src="img/kran.png" class="split-img" alt="Image Description">

<div class="container">
    <hr class="mt-5 mb-5">
        <section id="vindmoller" class="vindmoller ms-5 mt-5 mb-5">
        
            <h3>Vindmøller</h3>
            <p>Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                <br>
                - Traverskraner
                <br>
                - Portalkraner
                <br>
                - Svingkraner
                <br>
                - Specialkraner
                <br>
                - Kædetaljer
                <br>
                - Wiretaljer
                <br>
                - Løftegrej
                <br>
                Kontakt os gerne for et servicetilbud!</p>
        </section>
        <hr>
        <section id="lifte" class="lifte ms-5 mt-5 mb-5">
            <h3>Lifte, Elevatorer</h3>
            <p>Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                <br>
                - Traverskraner
                <br>
                - Portalkraner
                <br>
                - Svingkraner
                <br>
                - Specialkraner
                <br>
                - Kædetaljer
                <br>
                - Wiretaljer
                <br>
                - Løftegrej
                <br>
                Kontakt os gerne for et servicetilbud!</p>
                
        </section>
        <hr class="mt-5 mb-5">
</div>


<img src="img/elevator.png" class="split-img" alt="Image Description">

<div class="container">
            <hr class="mt-5 mb-5">
            <section id="pumper" class="pumper ms-5 mt-5 mb-5">
                <h3>Pumper</h3>
                <p>Vi tilbyder salg, service og reparation, samt lovpligtige eftersyn af:
                    <br>
                    - Traverskraner
                    <br>
                    - Portalkraner
                    <br>
                    - Svingkraner
                    <br>
                    - Specialkraner
                    <br>
                    - Kædetaljer
                    <br>
                    - Wiretaljer
                    <br>
                    - Løftegrej
                    <br>
                    Kontakt os gerne for et servicetilbud!</p>
            </section>
        <hr>
    </div>
</div>   
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $to = "christian@christian.com";
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

<div class="kontakt">
    <div class="container">
    <section id="kontakt" class="ms-5 mt-5">
        <!-- HTML form -->
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="row">
                <div class="col-6 mt-4 column-gap">
                <h3 class="mt-5 mb-5">Kontakt</h3>
                    <label for="name">Navn</label>
                    <br>
                    <input type="text" name="name" id="name" style="width: 100%;" required>
                </div>
                <div class="col-6 mt-4">
                </div>
                <div class="col-6 mt-4 column-gap">
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email" style="width: 100%;" required>
                </div>
                <div class="col-6 mt-4">
                </div>
            </div>

            <div class="row">
                <div class="col-6 mt-4 column-gap">
                    <label for="message">Besked</label>
                    <br>
                    <textarea name="message" id="message" style="width: 100%; height: 150px;" required></textarea>
                </div>
                <div class="col-6 mt-4">
                </div>

                <div class="col-12 mt-4 mb-5">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>
        </div>
        <!-- Success message -->
        <?php if (isset($success) && $success): ?>
            <p>Message sent successfully!</p>
        <?php endif; ?>
    </section>
</div>

<?php include "includes/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>