<?php
    $langNav = array(
        /* Horni menu */
        "personal" => "OSOBNÍ INFORMACE",
        "name" => "Jan Michálek",
        "moje prace" => "Moje práce",
        "cenik" => "Ceník",
        "ahoj" => "Ahoj, ",
        "jmenuji se" => " jmenuji se ",
        "honza" => "Honza",
        "jsem" => "Jsem nezávislý webový vývojář, který pomáhá svým klientům <br> se zviditelnit na internetu.",
        "moje sluzby" => "Moje služby",

        /* Box se sluzbama */
        "tvorba webovych stranek" => "Tvorba webových stránek",
        "webova prezentace" => "Webová prezentace je dnes základním kamenem pro úspěšnou prezentaci Vaší firmy na internetu. Pomohu Vám vytvořit kvalitní a uživatelský přivětivý web.",
        "tvorba loga a ikon" => "Tvorba loga a ikon",
        "kvalitni logo" => "Kvalitní logo by se mělo člověku okamžitě vrýt do paměti na první pohled. Mělo by být jednoduché, výrazné, snadno zapamatovatelné. Já Vám takové logo pomohu vytvořit.",
        "sprava databaze" => "Správa databáze",
        "pokud pouzivate dtb" => "Pokud používáte pro správu vlastní databáze relační databázi MySQL, tak se na mne neváhejte obrátit. Mohu Vám pomoct provést úpravy ve stavajcí MySQL databázi nebo Vám vytvořit zcela novou databázi.",
        "sprava vaseho" => "Správa vašeho eshopu",
        "pokud pouzivate" => "Pokud používáte pro správu svého eshopu krabicové řešení od společnosti Shoptet, tak se neváhejte na mě obrátit. Pomůžu Vám s grafikou, nastavením i SEO.",
        
        /* Box moje prace 1*/
        "jak muze vypadat" => "Jak může váš web vypadat",
        "tento web slouzi 0" => "Tento web BESTBURGER slouží jako ukázka mé práce. Prezentuje objednávku jídla, resp. burgerů.",
        "funkcnost webu" => "Funkčnost webu:",
        "na webu si 0" => "Na webu si lze vybrat jeden ze tří burgerů a následně si zvolit sílu pálivé omáčky. Burger lze přidat do košíku.",
        "programovano pomoci" => "Programováno pomocí:",
        "jazyky" => "HTML, CSS, JavaScript",
        "navstivit web" => "NAVŠTÍVIT WEB",

        /* Box moje prace 2*/
        "tento web slouzi 1" => "Tento web WATERBOTTLE slouží jako ukázka mé práce. Ukázka představuje web pro prezentaci produktu - láhve na vodu. Design webu je v modernejším kabátku.",
        "na webu si 1" => "Na webu lze používat tzv. hamburger menu jak v mobilní tak i v deskoptové verzi.",
    
        /* Ceník */
        "cenik" => "Ceník",
        "tvorba webovych stranek" => "Tvorba webových stránek",
        "tw 0" => "Tvorba čistého kódu",
        "tw 1" => "Responzivní design",
        "tw 2" => "Kvalitní SEO",
        "tw 3" => "Firemní prezentace",
        "tw 4" => "Tvorba redakčního systému",
        "tw 5" => "Tvorba blogu",
        "tw cena" => "od 2500Kč,-",
        "tvorba loga" => "Tvorba loga a ikon",
        "tl 0" => "Logo manuál",
        "tl 1" => "Jedinečná a neomezená licence",
        "tl 2" => "Redesign loga nebo ikon",
        "tl 3" => "Možnost nespočtu úprav",
        "tl 4" => "Odliším Vás od konkurence",
        "tl 5" => "Tvorba minimálně 6 ikon",
        "tl cena" => "od 1500Kč,-",
        "sprava databaze" => "Správa databáze",
        "sd 0" => "Vytvoření MySQL příkazů",
        "sd 1" => "Práce s Triggery",
        "sd 2" => "Rutiny",
        "sd 3" => "Vytváření vazeb",
        "sd 4" => "Optimalizace výkonu databáze",
        "sd 5" => "Fulltextové vyhledávání",
        "sd cena" => "od 400Kč,-/hod",
        "sprava eshopu" => "Správa vašeho eshopu",
        "se 0" => "Nastavení domény",
        "se 1" => "Nastavení XML feedu",
        "se 2" => "SEO",
        "se 3" => "Vkládání a úprava produktů",
        "se 4" => "Grafická úprava šablony",
        "se 5" => "Celková analýza eshopu",
        "se cena" => "od 400Kč,-/hod",

        "vsechny ceny" => "Všechny ceny jsou uvedeny bez DPH.",
        "ceny jsou orientacni" => "Ceny jsou orientační. Pro vytvoření cenové nabídky mě můžete nezávazně kontaktovat.",

        /* Kontakt */
        "kontakt" => "Kontakt",
        "jmeno" => "Jméno",
        "email" => "Email",
        "telefon" => "Telefon",
        "zde napiste zpravu" => "Zde mi napiště zprávu...",
        "odeslat zpravu" => "Odeslat zprávu"
    );

    /* Zakazano kvuli Onebit - nefunguji zde 2D Session */
    /* if(empty($_SESSION['dtb']['cs'])){
        $JSON =  json_encode($langNav, JSON_PRETTY_PRINT);
        file_put_contents('./languages/multilanguagecs.json', $JSON);
        $_SESSION['dtb']['cs'] = 1;
    }*/
?>