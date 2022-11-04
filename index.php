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
    <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">
    <meta name="description" content="JavaScript Junior Developer">
    <meta name="keywords" content="JavaScript, TypeScript, React, Junior Developer">
    <link rel="icon" href="/favicon.ico?v=2" type="image/x-icon" />
    <title>Jan Michálek | Tvorba webu</title>
</head>
<body>
    <div id="col-main">
        <div id="header">
            <h1>JAN MICHÁLEK</h1>
            <p>JUNIOR FRONT-END PROGRAMATOR</p>
        </div>
        <div id="col-body">
            <div class="col personal">
                <div class="personal-sticky">
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
                        <h2>CONTACT</h2>
                        <a href="tel:+420734126757"><img src="./img/phone-call.png">+420 734 126 757</a>
                        <a href="mailto:janmichalek213@gmail.com"><img src="./img/email.png">janmichalek213@gmail.com</a>
                    </div>
                    <div class="col personal-socials">
                    <h2>LINKS</h2>
                        <a href="https://github.com/MichalekJan93"><img src="./img/github.png"></a>
                        <a href="https://www.linkedin.com/in/janmichalekcoding/"><img src="./img/linkedin.png"></a>
                        <a href="https://www.facebook.com/jan.s.michalek"><img src="./img/facebook.png"></a>
                    </div>
                </div>
            </div>
            <div class="col main">
                <div class="col profile">
                    Ahoj, <br /><br />
                    Jsem vášnivý samouk front-end webový vývojář. Programování je mou vášní už od střední školy. Poslední rok a půl se učím programovat na frontendu JavaScript, TypeScript a nedávno jsem se ponořil do Reactu a React native, ve kterém bych rád v budoucnu tvořil webové i mobilní aplikace. <br /><br /> Abych se více zdokonalil v programování tak aktuálně dokončují rekvalifikační kurz vývojář www aplikací u <a href="https://www.itnetwork.cz/">ITNetwork</a> a také ať mám aspoň nějaký ten papír v ruce. Po práci v elektro oboru, hledám svou první pracovní příležitost jako front-end junior programátor.
                    <br /><br />
                    Pro svou lepší prezentaci ať nezůstanu jen u pouhých slov jsem si pro Vás připravil ukázku své práce. Navrhl jsem jednoduchou webovou aplikaci se základními funkcemi a spravou SQL databázi pro pojišťovnictví. Jedná se o single-page aplikaci, která pro veškerou práci s DOM využívá vanilla JS.
                    <a href="#" class="js-app">UKÁZKA</a>
                    Pokud jsem Vás aspoň trochu zaujal, tak mne prosím kontaktujte. Velmi rád bych se s vámi osobně setkal. 
                    </p>
                </div>
                <div class="col skills">
                    <h2>SKILLS</h2>
                    <div class="flex-wrapper"> 
                    </div>
                </div>
                <div class="col work">
                    <h2>WORK</h2>
                    <div class="work-activitie">
                        <div class="token">2022-souč.
                            <div class="arrow-right"></div>
                        </div>
                        <div class="position-description">
                            <p class="company">RPS Ostrava a.s.</p>
                            <p>Projektový manager</p>
                        </div>
                    </div>
                    <div class="work-activitie">
                        <div class="token">2014-2022
                            <div class="arrow-right"></div>
                        </div>
                        <div class="position-description">
                            <p class="company">ZAM-SERVIS s.r.o.</p>
                            <p>Projektový manager</p>
                        </div>
                    </div>
                </div>
                <div class="col education">
                    <h2>EDUCATION</h2>
                    <div class="education-activitie">
                        <div class="token">2009-2014
                            <div class="arrow-right"></div>
                        </div>
                        <div class="position-description">
                            <p class="company">Střední škola polytechnická, Havířov-Šumbark</p>
                            <p>Elektrotechnik - maturita</p>
                        </div>
                    </div>
                </div>
                <div class="col hobbies">
                    <h2>HOBBIES</h2>
                    <div class="hobbies-list">
                        <div class="hobbie">
                            <div class="img"></div>
                            <p>Sport</p>
                        </div>
                        <div class="hobbie">
                            <div class="img"></div>
                            <p>Knihy</p>
                        </div>
                        <div class="hobbie">
                            <div class="img"></div>
                            <p>Programovani</p>
                        </div>
                        <div class="hobbie">
                            <div class="img"></div>
                            <p>Hry</p>
                        </div>
                        <div class="hobbie">
                            <div class="img"></div>
                            <p>Filmy</p>
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