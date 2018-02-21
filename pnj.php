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
        <h1>Générateur de PNJ's</h1>
        <form class="formulaire" name="données" method = "post" action = "pnj.php">
            <label for="race">Race:</label><select name="race">
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
            <label for="classe">Classe:</label><select name="classe">
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
                <option value="guerrier">Guerrier</option>
                <option value="inquisiteur">Inquisiteur</option>
                <option value="invocateur">Invocateur</option>
                <option value="lutteur">Lutteur</option>
                <option value="magicien">Magicien</option>
                <option value="magus">Magus</option>
                <option value="moine">Moine</option>
                <option value="ninja">Ninja</option>
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
            <label for="race">Race:</label>
            <button name="submit" type="submit" form="formulaire">Envoyer</button>
        </form>
    </body>
</html>