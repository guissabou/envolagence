<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="styles.css"> <!-- Lien vers votre fichier CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/IMG34.jpeg" alt="Logo ENVOLTOURS">
        </div>
        <nav class="main-menu">
            <ul>
                <li>
                    Réservations
                    <ul>
                        <li><a href="#">Réservation / vente de billets d’avion</a></li>
                        <li><a href="#">Réservation d’hôtel </a></li>
                        <li><a href="#">Location appartements Dakar</a></li>
                    </ul>
                </li>
                <li>
                    Services de Voyage
                    <ul>
                        <li><a href="#">Assurance voyage </a></li>
                        <li><a href="#">Assistance Visa</a></li>
                        <li><a href="#">E-visa</a></li>
                    </ul>
                </li>
                <li>
                    Location et Vente
                    <ul>
                        <li><a href="#">Location de voitures</a></li>
                        <li><a href="#">Vente de voitures</a></li>
                    </ul>
                </li>
                <li>
                    Packages et Offres
                    <ul>
                        <li><a href="#">Packages voyage (Oumrah, vacances toute destination, colonie de vacances, voyages d’affaires, voyage pour le commerce…)</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <section class="search-section">
        <h1>Trouvez les meilleures offres de voyage</h1>
        <form action="recherche.php" method="GET">
            <input type="text" name="destination" placeholder="Destination">
            <input type="date" name="date_depart">
            <input type="date" name="date_retour">
            <button type="submit">Rechercher</button>
        </form>
    </section>

    <section class="popular-destinations">
        <h2>Destinations populaires</h2>
        <div class="destinations-grid">
            <div class="destination">
                <img src="images/IMG24.jpeg" alt="Paris">
                <p>Paris</p>
            </div>
            <div class="destination">
                <img src="images/IMG12.jpeg" alt="New York">
                <p>New York</p>
            </div>
            <div class="destination">
                <img src="images/IMG15.jpeg" alt="Tokyo">
                <p>Tokyo</p>
            </div>
            <div class="destination">
                <img src="images/IMG1.jpeg" alt="Sydney">
                <p>Sydney</p>
            </div>
            <div class="destination">
                <img src="images/IMG1.jpeg" alt="Sydney">
                <p>Sydney</p>
            </div>
            <div class="destination">
                <img src="images/IMG1.jpeg" alt="Sydney">
                <p>Sydney</p>
            </div>
            <div class="destination">
                <img src="images/IMG1.jpeg" alt="Sydney">
                <p>Sydney</p>
            </div>
            <div class="destination">
                <img src="images/IMG1.jpeg" alt="Sydney">
                <p>Sydney</p>
            </div>
            <div class="destination">
                <img src="images/IMG1.jpeg" alt="Sydney">
                <p>Sydney</p>
            </div>
        </div>
    </section>
<?php
echo '<section class="partner-section">';
echo '    <h2>Nos Partenaires</h2>';
echo '    <div class="partner-slider">';
echo '        <div class="slide-item"><img src=" " alt="AFRIFISH"></div>';
echo '        <div class="slide-item"><img src=" " alt="ONG RAES"></div>';
echo '        <div class="slide-item"><img src=" " alt="OLAM"></div>';
echo '        <div class="slide-item"><img src=" " alt="YOUSSOU NDOUR HEADOFFICE"></div>';
echo '        <!-- Ajoutez plus d\'images ou d\'éléments de slide ici -->';
echo '    </div>';
echo '</section>';
?>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-column logo-section">
            <img src="images/IMG34.jpeg" alt="Logo ENVOLTOURS">
            <p>Think Travel, Think Us</p>
            <div class="social-icons">
                <a href="#"><img src="images/facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="images/twitter-icon.png" alt="Twitter"></a>
                <a href="#"><img src="images/linkedin-icon.png" alt="LinkedIn"></a>
                <a href="#"><img src="images/instagram-icon.png" alt="Instagram"></a>
            </div>
        </div>
        <div class="footer-column">
            <h4>Solution</h4>
            <ul>
                <li><a href="#">Corporate Travel Program</a></li>
                <li><a href="#">Online Booking Tool</a></li>
                <li><a href="#">Marine Offshore</a></li>
                <li><a href="#">MICE</a></li>
                <li><a href="#">Cargo</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Resources</h4>
            <ul>
                <li><a href="#">Case Studies</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Travel News</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>About</h4>
            <ul>
                <li><a href="#">Who We Are</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Contact Us</h4>
            <ul>
                <li><a href="#">Get In Touch</a></li>
                <li><a href="#">Exclusive Offers</a></li>
            </ul>
            <p>Latest Trends in Corporate Travel</p>
            <form action="#">
                <input type="email" placeholder="Email Address">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; envoltours@2024 - Tous droits réservés.</p>
    </div>
</footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.partner-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        centerPadding: '20px'
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerPadding: '10px'
                    }
                }
            ]
        });
    });
</script>


</body>
</html>
