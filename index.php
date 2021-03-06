<?php 
    include('dbconnection.php');

    if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['subject'], $_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $insert = "INSERT INTO contact (name, email, phone, subject, message) 
                    VALUES ('".$name."', '".$email."', '".$phone."', '".$subject."', '".$message."')";
        
        if ($connect->query($insert)) {
            echo "<script>alert('Your message successfully sent');</script>";
        } else {
            throw new Exception('Error Processing Request', 1);
        }
        
    }
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ana Sayfa | Company A</title>

    <script src="https://kit.fontawesome.com/7ed5b719a4.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body>
    <section id="menu">
        <div id="logo">CompanyA</div>
        <nav>
            <a href=""><i class="fas fa-home icon-x"></i>Ana Sayfa</a>
            <a href=""><i class="fas fa-info icon-x"></i>Hakkımızda</a>
            <a href=""><i class="fas fa-users icon-x"></i>Ekibimiz</a>
            <a href=""><i class="fas fa-laptop-code icon-x"></i>Eğitimler</a>
            <a href=""><i class="fas fa-envelope-open-text icon-x"></i>İletişim</a>
        </nav>
    </section>

    <section id="banner">
        <div id="black">
            
        </div>
        
        <div id="content">
            <h2>Company A</h2>
            <hr width="300" align="left">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum officiis similique, quae explicabo atque impedit autem harum tenetur quisquam a labore debitis quas quaerat ipsum deserunt sint ipsa. Suscipit, atque.
                Ullam voluptatum dolores, id nobis sint magni voluptate debitis et officia nam quo adipisci asperiores iusto illo soluta maxime animi sit! Neque veniam quia eligendi quas sit fuga! Doloribus, voluptate?
                Aspernatur sint cupiditate vero deleniti numquam natus ullam dignissimos suscipit aliquid at, obcaecati earum accusamus amet nam inventore molestias, nobis voluptas totam non! Delectus eveniet harum voluptates neque sapiente ipsa.
            </p>
        </div>
    </section>

    <section id="about-us">
        <h3>Hakkımızda</h3>
        <div class="container">
            <div id="left">
                <h5 id="h5-left">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Molestiae inventore assumenda ad quo!
                </h5>
            </div>
            <div id="right">
                <span>L</span>
                <p id="p-right">orem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis fugiat cum quod cumque aut, eius ex omnis distinctio animi amet provident totam, rerum quos doloribus iste sit necessitatibus nobis sed.</p>
            </div>

            <img src="img/about.jpg" alt="" class="img-fluid mt100">

            <p id="p-end">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nostrum, praesentium, architecto deleniti tempora obcaecati laboriosam eveniet explicabo quas accusamus voluptate fuga ad laborum illum, itaque odio quae sunt nam?
            </p>
        </div>
    </section>

    <section id="educations">
        <div class="container">
            <h3>Eğitimler</h3>
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge="1.5">
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="title-card">HTML5 ve CSS3 Eğitimi</h5>
                    <p class="card-p">Lorem ipsum, dolor sit amet consectetur 
                        adipisicing elit. Voluptas, porro!</p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="title-card">HTML5 ve CSS3 Eğitimi</h5>
                    <p class="card-p">Lorem ipsum, dolor sit amet consectetur 
                        adipisicing elit. Voluptas, porro!</p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="title-card">HTML5 ve CSS3 Eğitimi</h5>
                    <p class="card-p">Lorem ipsum, dolor sit amet consectetur 
                        adipisicing elit. Voluptas, porro!</p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="title-card">HTML5 ve CSS3 Eğitimi</h5>
                    <p class="card-p">Lorem ipsum, dolor sit amet consectetur 
                        adipisicing elit. Voluptas, porro!</p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="title-card">HTML5 ve CSS3 Eğitimi</h5>
                    <p class="card-p">Lorem ipsum, dolor sit amet consectetur 
                        adipisicing elit. Voluptas, porro!</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="team">
        <div class="container">
            <h3 id="team-h3">Ekip</h3>
            <div class="column-left-right">
                <img src="img/ekip1.jpg" alt="" class="img-fluid oval">
                <h4 class="employee-name">Mustafa Kemal Kurudağ</h4>
                <p class="employee-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur, nobis.</p>
                <div class="employee-socials">
                    <a href="#" class=""><i class="fab fa-twitter social"></i></a>
                    <a href="#"><i class="fab fa-linkedin social"></i></a>
                    <a href="#"><i class="fab fa-instagram social"></i></a>
                </div>
            </div>
            <div class="column">
                <img src="img/ekip2.jpg" alt="" class="img-fluid oval">
                <h4 class="employee-name">Erdem Horoz</h4>
                <p class="employee-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur, nobis.</p>
                <div class="employee-socials">
                    <a href="#" class=""><i class="fab fa-twitter social"></i></a>
                    <a href="#"><i class="fab fa-linkedin social"></i></a>
                    <a href="#"><i class="fab fa-instagram social"></i></a>
                </div>
            </div>
            <div class="column-left-right">
                <img src="img/ekip3.jpg" alt="" class="img-fluid oval">
                <h4 class="employee-name">Gökhan Güneş</h4>
                <p class="employee-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur, nobis.</p>
                <div class="employee-socials">
                    <a href="#" class=""><i class="fab fa-twitter social"></i></a>
                    <a href="#"><i class="fab fa-linkedin social"></i></a>
                    <a href="#"><i class="fab fa-instagram social"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h3 id="h3-contact">İletişim</h3>
            <form action="index.php" method="POST">
                <div id="contact-opaque">
                    <div id="form-group">
                        <div id="left-form">
                            <input type="text" name="name" placeholder="Ad Soyad" required class="form-control">
                            <input type="text" name="phone" placeholder="Telefon Numarası" required class="form-control">
                        </div>
                        <div id="right-form">
                            <input type="email" name="email" placeholder="E-posta adresiniz" required class="form-control">
                            <input type="text" name="subject" placeholder="Konu" required class="form-control">
                        </div>
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Mesajınız..." class="form-control"></textarea>
                        <input type="submit" value="Gönder">
                    </div>
                    <div id="address">
                        <h4 id="address-title">Adres:</h4>
                        <p class="address-p">Namık Kemal Mahallesi</p>
                        <p class="address-p">Ahmet Arif Caddesi</p>
                        <p class="address-p">Bugün sokak No: 456 </p>
                        <p class="address-p">0123 456 78 90</p>
                        E-posta: <a href="mailto:info@companya.com">info@companya.com</a>
                    </div>
                </div>
            </form>
            <footer>
                <div id="copyright">2021 Tüm hakları saklıdır.</div>
                <div id="social-footer">
                    <a href="#"><i class="fab fa-twitter social"></i></a>
                    <a href="#"><i class="fab fa-linkedin social"></i></a>
                    <a href="#"><i class="fab fa-instagram social"></i></a>
                </div>
                <a href="#menu" title="Yukarı"><i class="fas fa-chevron-circle-up" id="up"></i></a>
            </footer>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>
</html>