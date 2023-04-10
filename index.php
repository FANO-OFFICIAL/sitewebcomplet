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

$body = array(
    array(
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
    ),
);

include("base.php");
?>