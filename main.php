<main>
    <?php 
        foreach ($content as $k => $v) {
            checkTypeOfTag($v['tag'],$v['content']);
        }
    ?>
    
    
    <!-- <section id="contact" class="section-contact">
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
</main> -->