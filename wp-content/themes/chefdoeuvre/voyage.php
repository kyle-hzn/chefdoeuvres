<?php get_header();
/*
* Template Name: Voyage
* Template Post Type: post, page, product
*/
?>

<!-- Start video hero -->
<div class="container-fluid competition__bg" style="background-image: url(<?php the_field('img_intro'); ?>);>
    <div class="col-lg-6 m-auto">
        <h2>
            On vous offre le plus <br>
            beau des cadeaux !
        </h2>
    </div>
</div>
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-10 m-auto article__hero">
            <h1>Une surprise au pied du sapin</h1>
            <p class="m-auto col-lg-10">Le 24 décembre, nous tirerons au sort l’heureux gagnant d’un voyage hors du commun. Vous pourrez partir quand vous voulez et avec qui vous voulez découvrir le chef-d'oeuvre de l’humanité qui vous a le plus marqué !</p>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="row">
        <img class="col-sm-4 image-fluid" src="<?= the_field('img_main')?>" alt="#">
        <div class="col-sm-6 offset-sm-2">
            <h1>Une chance chaque jour !</h1>
            <p>Parce que vous risquez chaque jour de tomber amoureux d’une nouvelle culture, vous pouvez participer tous les jours au jeu concours pour maximiser vos chances de recevoir une belle surprise le soir du 24 décembre. Pour cela c’est simple, il suffit d’inviter vos amis et de croiser les doigts.</p>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <h3>JE TENTE MA CHANCE !</h3>
    </div>

    <div class="row mt-5">
        <div class="col-sm-6">
            <h3 class="title_cc">ADRESSE MAIL</h3>
            <input class="m-0 rounded" type="text" name="firstname" value="" placeholder="Adresse e-mail">
        </div>
        <div class="col-sm-6">
            <h3 class="title_cc">MOT DE PASSE</h3>
            <input class="m-0 rounded" type="text" name="firstname" value="" placeholder="Mot de passe">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            <h3 class="title_cc">L’EXPÉRIENCE DE MES RÊVES</h3>
            <input class="m-0 rounded" type="text" name="firstname" value="" placeholder="Le carnaval d’Oruro">
        </div>
    </div>

    <div class="row mt-3">
        <h3 class="title_cc col-sm-6">MES ACCOMPAGNATEURS</h3>
    </div>
    <div class="row mt-3">
        <h3 class="col-sm-2">1</h3>
        <input class="col-sm-10 m-0 rounded" type="text" name="firstname" value="" placeholder="Adresse email de mon accompagnateur ">
    </div>
    <div class="row mt-3">
        <h3 class="col-sm-2">2</h3>
        <input class="col-sm-10 m-0 rounded" type="text" name="firstname" value="" placeholder="Adresse email de mon accompagnateur ">
    </div>
    <div class="row mt-3">
        <h3 class="col-sm-2">3</h3>
        <input class="col-sm-10 m-0 rounded" type="text" name="firstname" value="" placeholder="Adresse email de mon accompagnateur ">
    </div>
    <div class="row justify-content-center">
        <button type="button" class="btn btn_color m-5">CONFIRMER</button>
    </div>
</div>


<?php get_footer(); //appel du template footer.php ?>
