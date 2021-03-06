<?php
include 'inc/header.inc.php';
require 'inc/init.inc.php';
require 'controller/traitement.php';
?>
<?php
if (empty($_GET['choix']) || $_GET['choix'] == 'home') {
    ?>
<!-- Zone présentation -->
<section id="prez">
    <div class="container-fluid">
        <div class="container mt-5">
            <div class="row">
                <div class="meny-arrow"></div>
                <div class="contents">
                    <div class="profile-card-wrap">
                        <input id="check" type="checkbox" class="check"><label for="check" class="toggle"> +</label> <!--bouton et association image-->

                        <!--<div class="content" data-text=" ALPHA DIALLO développeur web">
                           <div class="title">@Alpha Diallo</div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis rerum rem labore molestiae nam libero quis,
                               sint atque excepturi debitis.</p>
                       </div>
                       <div class="link-info">
                           <div class="social">
                               <a class="link fb" href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                               <a class="link tw" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                               <a class="link cp" href="#" target="_blank"><i class="fab fa-codepen"></i></a>
                               <a class="link pi" href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
                               <a class="link li" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                               <a class="link yt" href="contact.html" target="_blank"><i class="fas fa-envelope"></i></a>
                               <a class="link gp" href="" target="_blank"><i class="fas fa-phone-square"></i></a>
                           </div>
                           <div class="photo"></div>
                       </div>
                   </div>-->

                  <div class="col-lg-12 mt-5">
                       <div class="row">
                           <div class="col-md-4 mt-5">
                               <img src="assets/photo/avatar.jpg" class="rounded-circle" alt="Responsive image">
                           </div>
                           <div class="col-md-8  mt-5">
                               <h2>Alpha DIALLO</h2>
                               <h3>Intégrateur / Développeur Web Junior</h3>
                               <hr>
                               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, id incidunt ipsam
                                   ipsa dicta quod, corrupti modi assumenda dolor, vitae libero inventore rerum quis
                                   distinctio ad? Repellendus alias neque vero.</p>
                           </div>
                       </div>
                   </div>
               </div>
        </div>
    </div>
</section>
<?php
} elseif (isset($_GET['choix']) && $_GET['choix'] == 'competence') {
    ?>
<!-- Zone competences -->
<section id="competence">
    <div class=container>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <?php
echo $competence;
    ?>
                </div>
                <hr>
                <div class="row">
                    <?php
echo $msg;
    ?>
                    <div class="col-lg-12 mt-5">
                        <div class="row">
                            <?php
echo $projet;
    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
} elseif (isset($_GET['choix']) && $_GET['choix'] == 'experience') {
    ?>
<!-- Zone experiences -->
<section id="experience">
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <table class="table table-striped table-dark mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Années</th>
                            <th scope="col">Fonction</th>
                            <th scope="col">Entreprise</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $xp; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php
} elseif (isset($_GET['choix']) && $_GET['choix'] == 'formation') {
    ?>
<!-- Zone formation -->
<section id="formation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <table class="table table-striped table-dark mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Années</th>
                            <th scope="col">Diplôme</th>
                            <th scope="col">Spécialité</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $diplome; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12 mt-4">
                <table class="table table-striped table-dark mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Langue</th>
                            <th scope="col">Niveau</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $langue; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php
} elseif (isset($_GET['choix']) && $_GET['choix'] == 'contact') {
    ?>
<!-- Zone contact -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-5">
                <form method="POST" id="myForm">
                    <?php echo $msg ?>
                    <div class="form-row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" placeholder="Prénom" name="prenom" value="<?php if (isset($prenom)) {
        echo $prenom;
    }
    ?>">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" placeholder="Nom" name="nom" value="<?php if (isset($nom)) {
        echo $nom;
    }
    ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col mt-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Email@gmail.com" name="email"
                                value="<?php if (isset($email)) {
        echo $email;
    }
    ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col mt-3">
                            <textarea name="message" id="" cols="82" rows="10" value="<?php if (isset($message)) {
        echo $message;
    }
    ?>">
                                </textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary submit" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
}
require_once 'inc/footer.inc.php';
?>