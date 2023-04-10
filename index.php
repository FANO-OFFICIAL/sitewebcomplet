<?php
function checkTypeOfTag($tag,$data){
    switch($tag){
        case "div" : 
            $content = $data;
            include("div.php");break;
        case "header" : 
            $content = $data;
            include("header.php");break;
        case "nav" : 
            $content = $data;
            include("nav.php");break;
        case "main" : 
            $content = $data;
            include("main.php");break;
        case "section" : 
            $content = $data;
            include("section.php");break;
        case "img" : 
            $content = $data;
            include("img.php");break;
        case "h1" : 
            $content = $data;
            include("h1.php");break;
        case "h2" : 
            $content = $data;
            include("h2.php");break;
        case "p" : 
            $content = $data;
            include("p.php");break;
        case "a" : 
            $content = $data;
            include("a.php");break;
        default:break;
    }
}
$lang = "fr";
$title = "Titre de la page web";
$url_stylesheet = array("css/portfolio/style.css","css/portfolio/index.css");
$google_fonts = "https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap";

$header = array(
    "tag"=>"header",
    "content"=>array(
        array(
            "tag"=>"nav",
            "content"=>array(
                array(
                    "tag"=>"a",
                    "content"=>array(
                        "content"=>array(
                            array(
                                "tag"=>"img",
                                "content"=>array(
                                    "src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/logo.png",
                                    "alt"=>"Logo Robbie Lens"
                                )
                            )
                        ),
                        "target"=>"",
                        "href"=>"index.html",
                        "class"=>"",
                        "text"=>""
                    )
                ),
                array(
                    "tag"=>"div",
                    "content"=>array(
                        array(
                            "tag"=>"a",
                            "content"=>array(
                                "target"=>"",
                                "content"=>"",
                                "href"=>"index.html",
                                "class"=>"lien-icone",
                                "text"=>"Accueil"
                            )
                        ),
                        array(
                            "tag"=>"a",
                            "content"=>array(
                                "target"=>"",
                                "content"=>"",
                                "href"=>"a-propos.html",
                                "class"=>"lien-icone",
                                "text"=>"À propos"
                            )
                        ),
                        array(
                            "tag"=>"a",
                            "content"=>array(
                                "target"=>"",
                                "content"=>"",
                                "href"=>"portfolio.html",
                                "class"=>"lien-icone",
                                "text"=>"Portfolio"
                            )
                        )
                    )
                )
            )
        ),
    )
);
$main = array(
    "tag"=>"main",
    "content"=>array(
        array(
            "tag"=>"section",
            "content"=>array(
                "class"=>"accueil-introduction",
                "content"=>array(
                    array(
                        "tag"=>"div",
                        "content"=>array(
                            array(
                                "tag"=>"h1",
                                "content"=>array(
                                    "text"=>"Robbie Lens Photographie"
                                )
                            ),
                            array(
                                "tag"=>"p",
                                "content"=>array(
                                    "text"=>"Où <em>professionalisme</em> s’allie avec <em>passion</em>. Depuis
                                    plus de 5 ans maintenant, j’exerce mon métier avec la passion
                                    qui m’anime : capturer l’essence de chaque instant."
                                )
                            ),
                            array(
                                "tag"=>"a",
                                "content"=>array(
                                    "content"=>"",
                                    "target"=>"",
                                    "href"=>"#contact",
                                    "class"=>"cta",
                                    "text"=>"UN PROJET ? ÉCRIVEZ-MOI"
                                )
                            )
                        )
                    ),
                    array(
                        "tag"=>"img",
                        "content"=>array(
                            "src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/robbie-lens.png",
                            "alt"=>"Portrait avec effet de la photographe Robbie Lens"
                        )
                    )
                )
            )
        ),
        array(
            "tag"=>"section",
            "content"=>array(
                "class"=>"accueil-photos",
                "content"=>array(
                    array(
                        "tag"=>"div",
                        "content"=>array(
                            array(
                                "tag"=>"img",
                                "content"=>array(
                                    "src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/accueil/element-1.png",
                                    "alt"=>"Lac Rotorua - Nouvelle-Zélande"
                                )
                            ),
                            array(
                                "tag"=>"img",
                                "content"=>array(
                                    "src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/accueil/element-2.png",
                                    "alt"=>"Milford Sound - Nouvelle-Zélande"
                                )
                            ),
                            array(
                                "tag"=>"img",
                                "content"=>array(
                                    "src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/accueil/element-3.png",
                                    "alt"=>"Lac Wanaka - Nouvelle-Zélande"
                                )
                            )
                        )
                    ),
                    array(
                        "tag"=>"div",
                        "content"=>array(
                            array(
                                "tag"=>"img",
                                "content"=>array(
                                    "src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/accueil/element-4.png",
                                    "alt"=>"Lac Rotorua - Nouvelle-Zélande"
                                )
                            ),
                            array(
                                "tag"=>"img",
                                "content"=>array(
                                    "src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/accueil/element-5.png",
                                    "alt"=>"Milford Sound - Nouvelle-Zélande"
                                )
                            ),
                            array(
                                "tag"=>"img",
                                "content"=>array(
                                    "src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/accueil/element-6.png",
                                    "alt"=>"Lac Wanaka - Nouvelle-Zélande"
                                )
                            )
                        )
                    )
                )
            )
        )
    )
);
$body = array(
    $header,
    $main
);

include("base.php");
?>