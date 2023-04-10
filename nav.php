<nav>
    <?php
        $a_href = array(
            "index.html"=>[
                "text"=>"",
                "img_alt" => "Logo Robbie Lens",
                "img_src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/logo.png"]
            );
        include("a.php");

        $a_href = array(
            "index.html"=>[
                "class"=>"lien-icone",
                "text"=>"Accueil"],
            "a-propos.html"=>[
                "class"=>"lien-icone",
                "text"=>"À propos"],
            "portfolio.html"=>[
                "class"=>"lien-icone",
                "text"=>"Portfolio"]
        );
        include("div.php");
    ?>
</nav>