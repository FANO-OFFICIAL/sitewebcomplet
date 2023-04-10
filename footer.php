<footer>
    <?php
        $a_href = array(
            "index.html"=>[
                "class"=>"lien-icone",
                "text"=>"",
                "img_alt" => "Logo Robbie Lens",
                "img_src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/logo.png"]
            );
        include("a.php");

        $a_href = array(
                "https://twitter.com/"=>[
                    "class"=>"lien-icone",
                    "target"=>"_blank",
                    "text"=>"",
                    "img_alt" => "Logo Twitter",
                    "img_src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/twitter.png"],
                "https://www.instagram.com/"=>[
                    "class"=>"lien-icone",
                    "target"=>"_blank",
                    "text"=>"",
                    "img_alt" => "Logo Instagram",
                    "img_src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/instagram.png"]
            );
        include("div.php");
    ?>
</footer>