<!-- BIENVENUE à toi qui lit mon code, 
ce que tu vois ici est un WIP (= Work In Progress c'est à dire un travail en cours),
le principe est de réaliser un générateur de PNJ (= Personnage Non Joueur) dans le cadre
du jeu de rôle Pathfinder avec une possibilité de génération complètement aléatoire.
Le tout est prévu pour être fait entièrement en HTML, CSS et PHP. 
D'autres langages pourraient s'ajouter selon les besoins.

Si vous voulez apporter votre pierre à l'édifice, contactez moi par mail à l'adresse:
kevin.dubreucq@gmail.com
Cela dit, je n'accepterai pas un code fonctionnel, je veux comprendre tout ce qui se trouvera
dans ce code. J'accepte donc les conseils, critiques et possibilités d'apprentissages quant aux
méthodes que je ne connais pas encore.

Merci et bonne lecture. -->

<?php
    // préparation du random du genre
    $nombre_aleatoire_race=rand(1,51);
    // préparation du randon du nom
    $nombre_aleatoire_nom=rand(1,8619);
    $nombre_aleatoire_prenom_masc=rand(1,2364);
    $nombre_aleatoire_prenom_fem=rand(1,2617);
    // préparation du random de la race
    $nombre_aleatoire_race=rand(1,51);
    // préparation du random pour le multiclassage
    $nombre_aleatoire_classe_1=rand(1,30);
    $nombre_aleatoire_classe_2=rand(1,30);
    $nombre_aleatoire_classe_3=rand(1,30);
    $nombre_aleatoire_classe_4=rand(1,30);
    $nombre_aleatoire_classe_prestige_1=rand(1,30);
    $nombre_aleatoire_classe_prestige_2=rand(1,30);
    // préparation du random pour le background du pnj
    $nombre_aleatoire_historique=rand(1,100);
    $nombre_aleatoire_objectifs=rand(1,100);
    $nombre_aleatoire_physique=rand(1,100);
    $nombre_aleatoire_personnalite=rand(1,100);
    $nombre_aleatoire_occupations=rand(1,100);
    $nombre_aleatoire_secrets=rand(1,100);
    $nombre_aleatoire_recompense=rand(1,100);
    $nombre_aleatoire_nom_groupe_1=rand(1,100);
    $nombre_aleatoire_nom_groupe_2=rand(1,100);
    $nombre_aleatoire_nom_groupe_3=rand(1,100);
    $nombre_aleatoire_nom_groupe_4=rand(1,100);
    $nombre_aleatoire_nom_groupe_5=rand(1,100);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Générateur de PNJ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="pnj.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <section class="generateur">
            <h1>Générateur de PNJ's</h1>
            <form class="formulaire" name="donnees" method = "post" action = "pnj.php">
                <label for="race">Race:</label><br/>
                <select name="race">
                    <option value="aasimar">Aasimar</option>
                    <option value="androide">Androïde</option>
                    <option value="aquatique">Aquatique</option>
                    <option value="astomoi">Astomoï</option>
                    <option value="changelin">Changelin</option>
                    <option value="changepeau">Changepeau</option>
                    <option value="demielfe">Demi-elfe</option>
                    <option value="demiorque">Demi-orque</option>
                    <option value="dhampir">Dhampir</option>
                    <option value="drow">Drow</option>
                    <option value="duergar">Duergar</option>
                    <option value="elfe">Elfe</option>
                    <option value="fetchelin">Fetchelin</option>
                    <option value="gathlain">Gathlain</option>
                    <option value="ghoran">Ghoran</option>
                    <option value="gnome">Gnome</option>
                    <option value="gobelin">Gobelin</option>
                    <option value="grippli">Grippli</option>
                    <option value="halfelin">Halfelin</option>
                    <option value="hobgobelin">Hobgobelin</option>
                    <option value="hommefelin">Homme-Félin</option>
                    <option value="hommepoisson">Homme-Poisson</option>
                    <option value="hommerat">Homme-Rat</option>
                    <option value="humain">Humain</option>
                    <option value="hybrideprofond">Hybride Profond</option>
                    <option value="ifrit">Ifrit</option>
                    <option value="kasatha">Kasatha</option>
                    <option value="kitsune">Kitsune</option>
                    <option value="kobold">Kobold</option>
                    <option value="nagaji">Nagaji</option>
                    <option value="nain">Nain</option>
                    <option value="obscuriencaligni">Obscurien Caligni</option>
                    <option value="ondin">Ondin</option>
                    <option value="orangpendak">Orang-Pendak</option>
                    <option value="oreade">Oréade</option>
                    <option value="orque">Orque</option>
                    <option value="reptoide">Reptoïde</option>
                    <option value="samsaran">Samsaran</option>
                    <option value="shabti">Shabti</option>
                    <option value="strix">Strix</option>
                    <option value="suli">Suli</option>
                    <option value="svirfnebelin">Svirfnebelin</option>
                    <option value="sylphe">Sylphe</option>
                    <option value="tengu">Tengu</option>
                    <option value="tieffelin">Tieffelin</option>
                    <option value="trox">Trox</option>
                    <option value="vanara">Vanara</option>
                    <option value="virebois">Virebois</option>
                    <option value="vishkanya">Vishkanya</option>
                    <option value="wayang">Wayang</option>
                    <option value="wivaran">Wivaran</option>
                </select><br/>

                <label for="genre">Sexe:</label><br/>
                <input type="radio" name="genre" value="masculin">Homme</input><br/>
                <input type="radio" name="genre" value="feminin">Femme</input><br/>

                <label for="biclass">Multiclassage:</label><br/>
                <input type="radio" name="biclass" value="one">Une classe unique</input><br/>
                <input type="radio" name="biclass" value="twosolo">Une classe et une classe de prestige</input><br/>
                <input type="radio" name="biclass" value="twoduo">Deux classes</input><br/>
                <input type="radio" name="biclass" value="three">Deux classes et une classe de prestige</input><br/>
                <input type="radio" name="biclass" value="four">Quatres classes dans une configuration étrange</input><br/>

                <label for="classe">Classe:</label><br/>
                <select name="classe">
                    <option value="adepte">Adepte</option> <!-- Classe spéciale PNJ -->
                    <option value="alchimiste">Alchimiste</option>
                    <option value="arcaniste">Arcaniste</option>
                    <option value="barbare">Barbare</option>
                    <option value="barde">Barde</option>
                    <option value="bretteur">Bretteur</option>
                    <option value="chaman">Chaman</option>
                    <option value="chasseur">Chasseur</option>
                    <option value="chevalier">Chevalier</option>
                    <option value="druide">Druide</option>
                    <option value="enqueteur">Enquêteur</option>
                    <option value="ensorceleur">Ensorceleur</option>
                    <option value="expert">Expert</option> <!-- Classe spéciale PNJ -->
                    <option value="guerrier">Guerrier</option>
                    <option value="hommedarmes">Homme d'armes</option> <!-- Classe spéciale PNJ -->
                    <option value="hommedupeuple">Homme du peuple</option> <!-- Classe spéciale PNJ -->
                    <option value="inquisiteur">Inquisiteur</option>
                    <option value="invocateur">Invocateur</option>
                    <option value="lutteur">Lutteur</option>
                    <option value="magicien">Magicien</option>
                    <option value="magus">Magus</option>
                    <option value="moine">Moine</option>
                    <option value="ninja">Ninja</option>
                    <option value="noble">Noble</option> <!-- Classe spéciale PNJ -->
                    <option value="oracle">Oracle</option>
                    <option value="paladin">Paladin</option>
                    <option value="pistolier">Pistolier</option>
                    <option value="pretre">Prêtre</option>
                    <option value="pretrecombattant">Prêtre combattant</option>
                    <option value="rodeur">Rôdeur</option>
                    <option value="roublard">Roublard</option>
                    <option value="samourai">Samouraï</option>
                    <option value="sanguin">Sanguin</option>
                    <option value="scalde">Scalde</option>
                    <option value="tueur">Tueur</option>
                </select><br/>

                <label for="classe">Classe de prestige:</label><br/>
                <select name="classe_prestige">
                    <option value="aucune">Aucune</option>
                    <option value="adeptedemoniaque">Adepte démoniaque</option> <!-- Classe spéciale PNJ -->
                    <option value="archermage">Archer mage</option>
                    <option value="arpenteurdhorizon">Arpenteur d'horizon</option>
                    <option value="assassin">Assassin</option>
                    <option value="championoccultiste">Champion occultiste</option>
                    <option value="chroniqueur">Chroniqueur</option>
                    <option value="diaboliste">Diaboliste</option> <!-- Classe spéciale PNJ -->
                    <option value="discipledraconien">Disciple draconien</option>
                    <option value="duelliste">Duelliste</option>
                    <option value="fideledefenseur">Fidèle défenseur</option>
                    <option value="gardiendelanature">Gardien de la nature</option>
                    <option value="gardiendusavoir">Gardien du savoir</option>
                    <option value="heraut">Héraut</option>
                    <option value="lebuveurdame">Le buveur d'âme</option> <!-- Classe spéciale PNJ -->
                    <option value="maitrechymiste">Maître chymiste</option>
                    <option value="maitredesombres">Maître des ombres</option>
                    <option value="mystificateurprofane">Mystificateur profane</option>
                    <option value="propheteenrage">Prophète enragé</option>
                    <option value="theurgemystique">Théurge mystique</option>
                    <option value="vengeursacre">Vengeur sacré</option>
                </select><br/>

                <input name="submit" type="submit" value="Envoyer">
            </form>
        </section>
        <section class="fiche">
            <?php
                if (isset($_POST["submit"])){
                    if ("genre" == "masculin") {
                       require "Basedonnees.php";
                       prenoms_masc();
                    }
                    else {

                    }

                }
            ?>
        </section>
    </body>
</html>