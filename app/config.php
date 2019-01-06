<?php
/**
 * Created by (apexteam.net).
 * Powered by (ApexTeam) and (Mr.Mench)
 */
define("root", "https://shitilestan.ir/MonoKit/");
define("app_name", "MonoKit - Smart, fast and easy");

/*
 * Load Scripts ($url)
 */
$scripts = [
    "https://unpkg.com/popper.js/dist/umd/popper.min.js",
    "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js",
    "assets/js/index.js",
];

/*
 * Load Styles ($url)
 */
$styles = [
    "assets/style/index.css",
];


/*
 * Meta Tags ($key => $value)
 */
$meta_names = [
    "title" => "My MonoKit Website",
    "description" => "My MonoKit Website, Is very good and nice",
    "keywords" => "Mono,Kit",
];
$meta_properties = [
    "og:title" => "My MonoKit Website",
    "og:description" => "My MonoKit Website, Is very good and nice",
];


/*
 * Fragments ($id => [$url, $title, $other_params])
 */
$fragments = [
    "home" => [
        "url" => root . "app/fragments/home/index.php",
        "title" => "Home",
        "params" => [
            "from" => "MonoKit"
        ]
    ],
    "about_us" => [
        "url" => root . "app/fragments/about/index.php",
        "title" => "About US",
        "params" => [
            "from" => "MonoKit"
        ]
    ],
];

