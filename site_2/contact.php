<?php
require("template/header.php");
?>
    <section>
        <h3>Laissez-nous un message</h3>
        <form class="row g-3" action="" method="post">
            <div class="col-md-4">
                <label for="validationServer01" class="form-label" >Nom<span class="important">*</span> </label>
                <input type="text" class="form-control" id="validationServer01" name="name" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div>
                <label for="validationServer02" class="form-label">Email<span class="important">*</span></label>
                <input type="email" class="form-control" id="validationServer02" name="mail" required>
            </div>
            <div>
                <label for="validationServer03" class="form-label">Message<span class="important">*</span></label>
                <textarea id="validationServer03" class="form-control" name="message" required></textarea>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
        </form>
    </section>
    <hr>
    <section>
        <h3>Nous contacter</h3>
        <div class="divContact">
            <p>C2RT</p>
            <p>Lieu-dit Bouy-Rte Périgueux</p>
            <p>47500 FUMEL</p>
            <p>Tél : 05 53 40 66 93</p>
            <p>Mail pour la soudure et la chaudronnerie : t.boulanges@c2rt.fr</p>
            <p>Mail pour l'informatique : t.delmas@c2rt.fr</p>
        </div>
    </section>
<?php
require("template/footer.php");
?>