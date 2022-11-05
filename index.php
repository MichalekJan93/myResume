<?php
    require_once "config.php";
?>
<!DOCTYPE html>
<!-- https://junior.guru/handbook/cv/ -->
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-print.css?v=<?php echo time(); ?>" media="print">
    <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">
    <meta name="description" content="JavaScript Junior Developer">
    <meta name="keywords" content="JavaScript, TypeScript, React, Junior Developer">
    <link rel="icon" href="/favicon.ico?v=2" type="image/x-icon" />
    <title>Jan Michálek | Tvorba webu</title>
</head>
<body>
    <div id="col-main">
        <div id="header">
            <h1><?php echo $langNav['fullName'] ?></h1>
            <p><?php echo $langNav['specialization'] ?></p>
        </div>
        <div id="col-body">
            <div class="col personal">
                <div class="personal-sticky">
                    <div class="multilanguage">
                        <li><a class="multilanguage-nav-item" id="<?php echo $langMiniOne ?>" href="?lang=<?php echo $langMiniOne ?>"><img src="<?php echo $langFlagOne ?>" alt=""></a></li>
                        <li><a class="multilanguage-drop-item" href="?lang=<?php echo $langMiniTwo ?>"><img src="<?php echo $langFlagTwo ?>" alt=""></a></li>
                    </div>
                    <div class="col personal-img">
                        <div class="img"></div>
                    </div>
                    <div class="col personal-information">
                        <h2><?php echo $langNav['personal'] ?></h2>
                        <p><img src="./img/user.png"><?php echo $langNav['name'] ?></p>
                        <p><img src="./img/calendar.png">14.7.1993</p>
                        <p><img src="./img/home-page.png">Na podlesí 48, Český Těšín, 735 62</p>
                    </div>
                    <div class="col personal-contact">
                        <h2><?php echo $langNav['contact'] ?></h2>
                        <a href="tel:+420734126757"><img src="./img/phone-call.png"><?php echo $langNav['phone'] ?></a>
                        <a href="mailto:janmichalek213@gmail.com"><img src="./img/email.png">janmichalek213@gmail.com</a>
                    </div>
                    <div class="col personal-socials">
                    <h2><?php echo $langNav['links'] ?></h2>
                        <a href="https://github.com/MichalekJan93"><img src="./img/github.png"></a>
                        <a href="https://www.linkedin.com/in/janmichalekcoding/"><img src="./img/linkedin.png"></a>
                        <a href="https://www.facebook.com/jan.s.michalek"><img src="./img/facebook.png"></a>
                    </div>
                </div>
            </div>
            <div class="col main">
                <div class="col profile"> <?php echo $langNav['profile'] ?> </div>
                <div class="col skills">
                    <h2><?php echo $langNav['skills'] ?></h2>
                    <div class="flex-wrapper"> 
                    </div>
                </div>
                <div class="col work">
                    <h2><?php echo $langNav['work'] ?></h2>
                    <div class="work-activitie">
                        <div class="token"><?php echo $langNav['date'] ?>
                            <div class="arrow-right"></div>
                        </div>
                        <div class="position-description">
                            <p class="company">RPS Ostrava a.s.</p>
                            <p><?php echo $langNav['projectManager'] ?></p>
                        </div>
                    </div>
                    <div class="work-activitie">
                        <div class="token">2014-2022
                            <div class="arrow-right"></div>
                        </div>
                        <div class="position-description">
                            <p class="company">ZAM-SERVIS s.r.o.</p>
                            <p><?php echo $langNav['projectManager'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col education">
                    <h2><?php echo $langNav['education'] ?></h2>
                    <div class="education-activitie">
                        <div class="token">2009-2014
                            <div class="arrow-right"></div>
                        </div>
                        <div class="position-description">
                            <p class="company"><?php echo $langNav['school'] ?></p>
                            <p><?php echo $langNav['fielOfEducation'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col hobbies">
                    <h2><?php echo $langNav['hobbies'] ?></h2>
                    <div class="hobbies-list">
                        <div class="hobbie">
                            <div class="img"></div>
                            <p><?php echo $langNav['sport'] ?></p>
                        </div>
                        <div class="hobbie">
                            <div class="img"></div>
                            <p><?php echo $langNav['books'] ?></p>
                        </div>
                        <div class="hobbie">
                            <div class="img"></div>
                            <p><?php echo $langNav['programming'] ?></p>
                        </div>
                        <div class="hobbie">
                            <div class="img"></div>
                            <p><?php echo $langNav['games'] ?></p>
                        </div>
                        <div class="hobbie">
                            <div class="img"></div>
                            <p><?php echo $langNav['movies'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>

    </div>
    <script src="script/script.js"></script>
</body>
</html>