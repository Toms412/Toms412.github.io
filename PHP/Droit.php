
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Crypto-Money - Enjeux juridiques</title>
	<link rel="shortcut icon" href="../IMG/logo_site.png">
</head>

<body>

	<div class="header">
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                <button id="nav-toggle-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          					<a class="navbar-brand" href="Accueil.php" title="Crypto-Money"><img src="../IMG/logo_site_navbar.png" class="logo3" alt="logo site">rypto-Money</a>
                </div>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="navbutt"><a href="Accueil.php"title="Accueil"><img class="logo2" src="../IMG/accueil.png" alt="logo Accueil" height="20" width="20" />Accueil</a></li>
                        <li class="navbutt"><a href="Histoire.php" title="Histoire"><img class="logo2" src="../IMG/H.png" alt="logo H" height="20" width="20" />Histoire</a></li>
                        <li class="navbutt"><a href="Mining.php"title="Blockchain / Minage"><img class="logo2" src="../IMG/minage.png" alt="logo Minage"  height="20" width="20" />Blockchain / Minage</a></li>
                        <li class="navbutt"><a href="Economie.php"title="Enjeux économiques"><img class="logo2" src="../IMG/economie.png" alt="logo Economie "  height="20" width="20" />Enjeux économiques</a></li>
                        <li class="active navbutt"><a href="Droit.php" title="Enjeux juridiques"><img class="logo2" src="../IMG/droits.png" alt="logo Quizz" height="20" width="20"/>Enjeux juridiques</a></li>
                        <li class="navbutt"><a href="Quizz.php"title="Quizz"><img class="logo2" src="../IMG/quizz.png" alt="logo Quizz" height="20" width="20"/>Quiz</a></li>
						<li class="navbutt"><a href="contact.php" title="Contact"><img class="logo2" src="../IMG/mail.png" alt="logo Contact" height="20" width="20"/>Contact</a></li>
					</ul>
                </div>
            </div>
        </nav>
    </div>
		<div  class="page">
				<section>
						<h2 class="principal">Enjeux Juridiques</h2>
						<br>
						<h3>Les crypto-monnaies sont-elles légales et sûres ?</h3>
						<article class="article1">La seule prise que le droit ait sur la monnaie concerne le caractère absolu de son pouvoir libératoire, cette prise est d’ailleurs plus politique que juridique : il s’agit du <strong>cours légal</strong>.
								<br>
								<a href="https://www.legifrance.gouv.fr/affichCodeArticle.do?idArticle=LEGIARTI000036829870&cidTexte=LEGITEXT000006070721&dateTexte=20181001" target="_blank">
										L’article 1343- 3 du Code civil</a>
								dispose en ce sens que « <i>Le paiement, en France, d’une obligation de somme d’argent s’effectue en euro</i> ».
								<br>
								Tandis que <a href="https://www.legifrance.gouv.fr/affichCodeArticle.do?cidTexte=LEGITEXT000006072026&idArticle=LEGIARTI000006643875" target="_blank">
										l’article L.111-1 du Code monétaire et financier</a>
								(CMF) affirme que « <i>La monnaie de la France est l’euro</i> ».
								Ces articles posent un principe suivant lequel le créancier d’une obligation de somme d’argent, en France, est tenu d’accepter un paiement en euro. La sanction qui lui est attachée se trouve à
								<a href="https://www.legifrance.gouv.fr/affichCodeArticle.do?idArticle=LEGIARTI000022375969&cidTexte=LEGITEXT000006070719&dateTexte=20100621" target="_blank" >l’article R.642-3 du Code pénal</a>,
								selon lequel le contrevenant s’expose à une
								amende prévue pour les contraventions de 2ème classe.
								A contrario, bien entendu, rien n’empêche le créancier d’accepter en paiement une monnaie étrangère sous réserve que le débiteur puisse toujours se libérer en euros.
								Il faut donc déduire de ces dispositions que le bitcoin n’est pas une monnaie légale, son acceptation en paiement n’est donc pas garantie par la loi.
						</article>
						<br>
						<h3>Quels sont les risques ?</h3>
						<article class="article1">
								<li>Le premier d'entre eux, c'est le <strong>risque de bulle spéculative</strong>.
										Le cours des crypto-monnaies est très volatil et expose les acheteurs à des pertes financières potentiellement très importantes.</li>
								<li>Ensuite, la conservation des crypto‑actifs est sujette à des risques importants de piratages informatiques (hacking) et n’offre <strong>aucune protection en matière de sécurité des avoirs</strong>.</li>
								<li>Il existe aussi un <strong>risque de blanchiment des capitaux</strong>. Par leur caractère anonyme, les crypto‑actifs favorisent le contournement des règles relatives à la lutte contre le blanchiment des capitaux.</li>
								<li>De même, parce que les crypto‑actifs ne sont pas assujettis au cadre réglementaire relatif aux moyens de paiements, leur conservation comporte également un <strong>risque de financement du terrorisme ou d'activités criminelles</strong>.</li>
								<li>Enfin, le dernier <strong>risque est d'ordre environnemental</strong>. En effet, pour valider une seule opération en crypto-actif, la consommation d’électricité était estimée en décembre 2017 à 215 kWh , l’équivalent de six mois de travail sur un ordinateur allumé jour et nuit.
										Un coût énergétique qui ne fait que croître à mesure que le réseau de validation des opérations s'élargit. (Source Banque de France, mars 2018).</li>
						</article>

				</section>

		</div>
		<?php
        include("footer.php");
    ?>





	
</body>
</html>
