<?php
    $langNav = array(
        /* Horni menu */
        "personal" => "PERSONAL",
        "name" => "Jan Michálek",
        "moje prace" => "My work",
        "cenik" => "Price",
        "ahoj" => "Hello, ",
        "jmenuji se" => " my name is ",
        "honza" => "Jan",
        "jsem" => "I am an independent web developer who helps my clients <br> become visible on the Internet.",
        "moje sluzby" => "My services",

        /* Box se sluzbama */
        "tvorba webovych stranek" => "Website building",
        "webova prezentace" => "Today, a website is the cornerstone of a successful presentation of your company on the Internet. I will help you create a quality and user-friendly website.",
        "tvorba loga a ikon" => "Logo and icon design",
        "kvalitni logo" => "A quality logo should be immediately remembered at first sight. It should be simple, expressive, easy to remember. I will help you create such a logo.",
        "sprava databaze" => "Database administration",
        "pokud pouzivate dtb" => "If you use a MySQL relational database to manage your own database, do not hesitate to contact me. I can help you make modifications to the existing MySQL database or create a completely new database.",
        "sprava vaseho" => "Manage your eshop",
        "pokud pouzivate" => "If you use a box solution from Shoptet to manage your e-shop, do not hesitate to contact me. I will help you with graphics, settings and SEO.",
        
        /* Box moje prace 1*/
        "jak muze vypadat" => "What your site can look like",
        "tento web slouzi 0" => "This BESTBURGER website serves as an example of my work. Presents a food order, resp. burgers.",
        "funkcnost webu" => "Website functionality:",
        "na webu si 0" => "You can choose one of the three burgers on the website and then choose the strength of the hot sauce. Burger can be added to cart.",
        "programovano pomoci" => "Programmed using:",
        "jazyky" => "HTML, CSS, JavaScript",
        "navstivit web" => "VISIT THE WEB",

        /* Box moje prace 2*/
        "tento web slouzi 1" => "Tento web WATERBOTTLE slouží jako ukázka mé práce. Ukázka představuje web pro prezentaci produktu - láhve na vodu. Design webu je v modernejším kabátku.",
        "na webu si 1" => "Na webu lze používat tzv. hamburger menu jak v mobilní tak i v deskoptové verzi.",
    
        /* Ceník */
        "cenik" => "Price list",
        "tvorba webovych stranek" => "Website creation",
        "tw 0" => "Clean code",
        "tw 1" => "Responsive design",
        "tw 2" => "Quality SEO",
        "tw 3" => "Company presentation",
        "tw 4" => "Creation of a content management system",
        "tw 5" => "Creating a blog",
        "tw cena" => "from 120$",
        "tvorba loga" => "Creation of logos and icons",
        "tl 0" => "Logo manual",
        "tl 1" => "Unique and unlimited license",
        "tl 2" => "Redesign of logos or icons",
        "tl 3" => "Possibility of countless adjustments",
        "tl 4" => "I will set you apart from the competition",
        "tl 5" => "Creating at least 6 icons",
        "tl cena" => "from 80$",
        "sprava databaze" => "Database administration",
        "sd 0" => "Creating MySQL statements",
        "sd 1" => "Working with Triggers",
        "sd 2" => "Routines",
        "sd 3" => "Creating links",
        "sd 4" => "Database performance optimization",
        "sd 5" => "Full-text search",
        "sd cena" => "from 15$ / hour",
        "sprava eshopu" => "Manage your e-shop",
        "se 0" => "Domain settings",
        "se 1" => "XML feed settings",
        "se 2" => "SEO",
        "se 3" => "Inserting and editing products",
        "se 4" => "Graphic design template",
        "se 5" => "Overall analysis of the eshop",
        "se cena" => "from 15$ / hour",

        "vsechny ceny" => "All prices are without VAT.",
        "ceny jsou orientacni" => "Prices are indicative. You can contact me without obligation to create a price offer.",

        /* Kontakt */
        "kontakt" => "Contact",
        "jmeno" => "Name",
        "email" => "Email",
        "telefon" => "Phone",
        "zde napiste zpravu" => "Write me a message here...",
        "odeslat zpravu" => "Send a message"
    );

     /* Zakazano kvuli Onebit - nefunguji zde 2D Session */
    /* if(empty($_SESSION['dtb']['en'])){
        $JSON =  json_encode($langNav, JSON_PRETTY_PRINT);
        file_put_contents('./languages/multilanguageen.json', $JSON);
        $_SESSION['dtb']['en'] = 1;
    } */
?>