<!DOCTYPE html>
<html lang="nl-be">
<head>

    <?php include "elements/head.html";?>

    <meta name="keywords" content="cv, curriculum vitae, resume, Jonas, Brüll, Brull, Bruell, over mij, vaardigheden, profiel">
    <meta name="description" content="Meer over mij">
    <title>Over mij</title>

</head>
<body>

    <?php include "elements/header.php";?>

    <main>
        <!-- PROFILE CARD -->
        <section>
            <div class="project-tile">
                <div>
                    <h1>Jonas Brüll</h1>
                    <p>Ik ben een 20 jaar oude student computerwetenschappen aan de VUB. Ik werk al heel mijn leven graag met computers - heb er op mijn 15e zelf een in elkaar gestoken - en ben van nature uit nieuwsgierig naar hoe de wereld in elkaar zit.</p>
                </div>
                <div style="width: 70px;"></div>
                <img src="images/jonas-brull.jpg" alt="profielfoto Jonas Brüll" title="Profielfoto Jonas Brüll" width=300px height=300px>
                
            </div> 
        </section>

        <!-- SKILL RATINGS -->
        <section class="grid" style="padding-top: 5vw; display: grid; gap: 2rem;">
            <?php function makeRating($array) {
                foreach($array as $rating) {
                    $text=$rating[0];
                    $stars=$rating[1];
                    include "elements/rating.php";
                }
            }?>
            <section style="grid-area: 1/1/3/2;">
                <h3>Programmeren</h3>
                <?php $programmeren = array(
                    array("Racket \ Scheme", 5),
                    array("Python", 4),
                    array("Scala", 3),
                    array("Java", 3),
                    array("C", 3),
                    array("x86 Assembly", 2),
                    array("HTML", 4),
                    array("CSS", 3),
                    array("PHP", 2),
                    array("Javascript", 2),
                    array("SQL", 1),
                );
                makeRating($programmeren); ?>
            </section>
            <section style="grid-area: 1/2/2/3;">
                <h3>Taalvaardigheden</h3>
                <?php $taalvaardigheden = array(
                    array("Nederlands - moedertaal", 5),
                    array("Duits - moedertaal", 5),
                    array("Engels - C1", 4),
                    array("Frans - B1", 2),
                );
                makeRating($taalvaardigheden); ?>
            </section>
            <section style="grid-area: 2/2/3/3;">
                <h3>Hulpmiddelen en programma's</h3>
                <?php $hulpmiddelen = array(
                    array("Microsoft Office Suite", 5),
                    array("LaTeX", 5),
                    array("Figma", 3),
                    array("MatLab", 2),
                    array("UML", 3),
                );
                makeRating($hulpmiddelen); ?>
            </section>
        </section>
    </main>

    <?php include "elements/footer.php";?>

</body>
</html>