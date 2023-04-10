<main>
    <?php 
        $section_class="accueil-introduction";
        $content = array(
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
        );

        include("section.php");

        // $h1 = null;
        // $p = null;
        // $a_href = null; 

        // $section_class="accueil-photos";
        // $h2 = array(
        //     "text"=>"Robbie Lens Photographie"
        // );
        // $div = true;
        // $div_img = array(
        //     array(
        //         "src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/accueil/element-1.png",
        //         "alt"=>"Twelve apostles - Australie",
        //     ),
        //     array(
        //         "src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/accueil/element-2.png",
        //         "alt"=>"Wai-O-Tapu - Nouvelle-Zélande",
        //     ),
        //     array(
        //         "src"=>"https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/accueil/element-3.png",
        //         "alt"=>"Parc National d’Abel Tasman - Nouvelle-Zélande",
        //     )
        // );
        // include("section.php"); 
    ?>
    
    <!-- <section class="accueil-photos">
        <div>
            <img src="https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/accueil/element-4.png" alt="Lac Rotorua - Nouvelle-Zélande" />
            <img src="https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/accueil/element-5.png" alt="Milford Sound - Nouvelle-Zélande" />
            <img src="https://openclassrooms-student-center.github.io/1603881-creez-votre-site-web-avec-html5-et-css3/images/accueil/element-6.png" alt="Lac Wanaka - Nouvelle-Zélande" />
        </div>
    </section> -->
    <section id="contact" class="section-contact">
        <h2>Parlons de votre projet</h2>
        <form method="get" action="">
            <div class="form-nom-email">
                <div class="form-column">
                    <label for="nom">nom</label>
                    <input type="text" name="nom" id="nom" />
                </div>
                <div class="form-column">
                    <label for="email">email</label>
                    <input type="e-mail" name="email" id="email" />
                </div>
            </div>
            <label for="message">message</label>
            <textarea name="message" id="message" rows="10"></textarea>
            <input type="submit" value="ENVOYER" class="cta" />
        </form>
    </section>
</main>