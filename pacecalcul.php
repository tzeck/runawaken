
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="favicon-16x16.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>calculer son allure de course</title>
	<meta name="description" content="calcul d'allure pour le marathon, semi-marathon, 10k. comparaison dans le tableau des allures"/>
	<link rel="alternate" href="https://calcul-course.go.yj.fr/" hrefLang="fr-FR"/>
	<link rel="canonical" href="https://calcul-course.go.yj.fr/pacecalcul.php"/>
	<meta name="google-site-verification" content="P2RnQJqMHQIo0wV5upcqkomEedBomEHMJMhdLxUrBy8" />
	<meta name="keywords" content="allure, temps de course à pied, tableau des allures, tableau des temps de course"/>
	<meta name="author" content="F G"/>
	<meta property="og:url" content="https://calcul-course.go.yj.fr/"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="calcul de votre allure de course"/>
	<meta property="og:description" content="Determinez votre allure de course pour atteindre votre objectif"/>
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:site" content="@Calcul allure - Marathon"/>
	<meta name="twitter:creator" content="@Calcul allure - Marathon"/>
	
	<script type = "application/ld+json"
    class = "rank-math-schema-pro" > {
    "@context": "https://schema.org",
    "@graph": [{
        "@type": "Organization",
        "@id": "https://calcul-course.go.yj.fr/#organization",
        "name": "JeCoursAix"
    }, {
        "@type": "WebSite",
        "@id": "https://calcul-course.go.yj.fr/#website",
        "url": "https://calcul-course.go.yj.fr",
        "name": "JeCoursAix",
        "publisher": {
            "@id": "https://calcul-course.go.yj.fr/#organization"
        },
        "inLanguage": "fr-FR"
    }, {
        "@type": "CollectionPage",
        "@id": "https://calcul-course.go.yj.fr/pacecalcul.php/#webpage",
        "url": "https://calcul-course.go.yj.fr/pacecalcul.php/",
        "name": "calcul d'allure et comparaison dans le tableau des allures avec votre distance et votre allure",
        "description": "calcul d'allure ou de temps en course \u00e0 pied sur la distance de votre choix. Vous pourrez comparer votre allure et votre temps dans le tableau des allures",
        "isPartOf": {
            "@id": "https://calcul-course.go.yj.fr/#website"
        },
        "inLanguage": "fr-FR"
    }]
} </script>

	<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
	.navbar-nav > li{
	  margin-left:10px;
	  margin-right:5px;
	}
	
	.nav-link {
		color: #ffffff;
	}
	
	.nav-link:hover {
		color: #6592e6;
	}
	
	.nav-item.active .nav-link {
		color: #ff6666;
	}
			
	.title_article{
		color: #ff6666;
	}
	
	.btn_parti {
	 color: #ffffff;
	 background-color: #6592e6;
	}
		
	.btn_parti:hover {
	 color: #ffffff;
	 background-color: #2260d2;
	}
	</style>
  </head>
  <body>
    
<main>
  <div class="container py-4">
   <header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">
		<a href="./" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
		  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
		</svg>
        </a>
		<div class="collapse navbar-collapse" id="navbarText">
		  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item active">
			  <a class="nav-link ms-3 fs-5" href="https://calcul-course.go.yj.fr/index.html">Calculs</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link fs-5" href="https://calcul-course.go.yj.fr/training.html">Plans d'entrainement</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link fs-5" href="https://calcul-course.go.yj.fr/">Actualités</a>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>
  </header>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid">
            <h1 class="display-6 fw-semibold">Calcul de votre allure de course</h1>
			<p class="col-md-8 fs-5">vous pouvez déterminer votre allure cible en fonction de l'objectif que vous vous êtes fixé.
L'allure sera différente pour un 10k ou un marathon mais vous aurez les temps de passage, dans le tableau ci-dessous, qu'il vous faudra respecter.
Lors de vos entrainements il sera intéressant d'avoir ces repères pour être sur le bon tempo le jour J
</p>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col">
		<div class="h-100 p-5 bg-light border rounded-3">
            <form method="post">
			  <div class="row">
				<div class="col">
				 <label for="textAllure">temps</label>
				  <input type="time" step="1" class="form-control" placeholder="h:min:s" name="temps_pour_allure" value="<?php date_default_timezone_set('Europe/Paris'); if(isset($_POST['temps_pour_allure'])){$temps_pour_allure_form = $_POST['temps_pour_allure'];} else {$temps_pour_allure_form = "";} echo $temps_pour_allure_form;?>">
				  <!-- <small id="texttemps_pour_allureHelp" class="form-text text-muted">hh:min:ss</small> -->
				</div>
				<div class="col">
				  <label for="textDistance">distance</label>
				  <div class="input-group">
						<div class="btn-group">
				  <button type="button" class="btn btn-secondary">Selection</button>				  
				  <button type="button" class="btn btn-secondary  dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
					<span class="visually-hidden">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu" id="dropdownMenuLink" >
					<li><a class="dropdown-item" href="#">10k</a></li>
					<li><a class="dropdown-item" href="#">semi-marathon</a></li>
					<li><a class="dropdown-item" href="#">marathon</a></li>
				  </ul>
				</div>				
						 <input type="text" id="distancefield" class="form-control" placeholder="Entrer votre distance" name="distance_pour_allure" value="<?php if(isset($_POST['distance_pour_allure'])){$distance_pour_allure_form = $_POST['distance_pour_allure'];} else {$distance_pour_allure_form = "";} echo $distance_pour_allure_form;?>">				  
				  </div>
				 <small id="textdistance_pour_allureHelp" class="form-text text-muted">en mètre</small>
				</div>
				<div class="col-md-auto">
				<label for="textdistance_pour_allure">&nbsp;</label>
				<span class="input-group-text">=</span>
				</div>
				<div class="col">
					<label for="textResultat">allure</label>
					  <input type="text" class="form-control" readonly name="resultat" value="<?php
					$calcul_allure_second=0;
					$distance_pour_allure_form=0;
					if(isset($_POST['temps_pour_allure']) && isset($_POST['distance_pour_allure'])){ 
					  $distance_pour_allure_form = $_POST['distance_pour_allure'];
					  $temps_parse=date_parse_from_format("H:i:s", $temps_pour_allure_form);
					  $temps_second=($temps_parse['hour']*3600)+($temps_parse['minute']*60)+$temps_parse['second'];
					
					  if($distance_pour_allure_form>0) {$calcul_allure_second=$temps_second*1000/$distance_pour_allure_form;}
					  if($calcul_allure_second>3600) {
						  $calcul_allure = sprintf("%02d:%02d:%02d", floor($calcul_allure_second/3600%60), floor($calcul_allure_second%3600/60), $calcul_allure_second%60); }
					  else {
						  $calcul_allure = sprintf("%02d:%02d", floor($calcul_allure_second%3600/60), $calcul_allure_second%60); } 
					} else {
					  $calcul_allure="";}; 
					echo $calcul_allure;?>">
				 </div>
			  </div>
			  <button type="submit" class="btn btn-info" name="calculallure">Calculer</button>
			</form>
			<div class="tutorial"></div>
			<div class="container mt-2">
			  <h3>temps de passage à partir du temps au marathon</h3>
			  <table class="table table-sm">
				<thead>
				  <tr>
					<?php if($distance_pour_allure_form>42195) echo "<th class=text-primary>$distance_pour_allure_form</th>";?>
					<th>marathon</th>
					<?php if($distance_pour_allure_form>21097.5 && $distance_pour_allure_form<42195) echo "<th class=text-primary>".$distance_pour_allure_form."m</th>";?>
					<th>semi</th>
					<?php if($distance_pour_allure_form>10000 && $distance_pour_allure_form<21097.5) echo "<th class=text-primary>".$distance_pour_allure_form."m</th>";?>
					<th>10 km</th>
					<?php if($distance_pour_allure_form>5000 && $distance_pour_allure_form<10000) echo "<th class=text-primary>".$distance_pour_allure_form."m</th>";?>
					<th>5km</th>
					<?php if($distance_pour_allure_form>1000 && $distance_pour_allure_form<5000) echo "<th class=text-primary>".$distance_pour_allure_form."m</th>";?>
					<th>1km</th>
					<?php if($distance_pour_allure_form>400 && $distance_pour_allure_form<1000) echo "<th class=text-primary>".$distance_pour_allure_form."m</th>";?>
					<th>400m</th>
					<?php if($distance_pour_allure_form>0 && $distance_pour_allure_form<400) echo "<th class=text-primary>".$distance_pour_allure_form."m</th>";?>
					<th>Allure</th>
					<th>Vitesse</th>
				  </tr>
				</thead>
				<tbody>
				<?php
				if (isset($calcul_allure) && $calcul_allure_second>0){
				  echo "<tr class=\"text-light bg-danger\">";
					if($distance_pour_allure_form>42195) echo "<td class=text-light>$temps_pour_allure_form</td>";
					$tmarathon_second_allure=$calcul_allure_second*42.195; if($tmarathon_second_allure > 3600){$tmarathon_allure = sprintf("%02d:%02d:%02d", floor($tmarathon_second_allure/3600),floor($tmarathon_second_allure%3600/60),$tmarathon_second_allure%60);} else {$tmarathon_allure = sprintf("%02d:%02d", floor($tmarathon_second_allure%3600/60), $tmarathon_second_allure%60);} echo "<td>$tmarathon_allure</td>";
					if($distance_pour_allure_form>21097.5 && $distance_pour_allure_form<42195) echo "<td class=text-light>$temps_pour_allure_form</td>";
					 $tsemi_second_allure=$calcul_allure_second*21.0975; if($tsemi_second_allure > 3600){$tsemi_allure = sprintf("%02d:%02d:%02d", floor($tsemi_second_allure/3600),floor($tsemi_second_allure%3600/60),$tsemi_second_allure%60);} else {$tsemi_allure = sprintf("%02d:%02d", floor($tsemi_second_allure%3600/60), $tsemi_second_allure%60);} echo "<td>$tsemi_allure</td>";
					if($distance_pour_allure_form>10000 && $distance_pour_allure_form<21097.5) echo "<td class=text-light>$temps_pour_allure_form</td>";
					 $t10k_second_allure=$calcul_allure_second*10; if($t10k_second_allure > 3600){$t10k_allure = sprintf("%02d:%02d:%02d", floor($t10k_second_allure/3600),floor($t10k_second_allure%3600/60),$t10k_second_allure%60);} else {$t10k_allure = sprintf("%02d:%02d:%02d", floor($t10k_second_allure/3600), floor($t10k_second_allure%3600/60), $t10k_second_allure%60);} echo "<td>$t10k_allure</td>";
					if($distance_pour_allure_form>5000 && $distance_pour_allure_form<10000) echo "<td class=text-light>$temps_pour_allure_form</td>";
					 $t5k_second_allure=$calcul_allure_second*5; if($t5k_second_allure > 3600){$t5k_allure = sprintf("%02d:%02d:%02d", floor($t5k_second_allure/3600),floor($t5k_second_allure%3600/60),$t5k_second_allure%60);} else {$t5k_allure = sprintf("%02d:%02d", floor($t5k_second_allure%3600/60), $t5k_second_allure%60);} echo "<td>$t5k_allure</td>";
					if($distance_pour_allure_form>1000 && $distance_pour_allure_form<5000) echo "<td class=text-light>$temps_pour_allure_form</td>";
					 $t1k_second_allure=$calcul_allure_second;$t1k_allure = sprintf("%02d:%02d", floor($t1k_second_allure%3600/60), $t1k_second_allure%60); echo "<td>$t1k_allure</td>";		
					if($distance_pour_allure_form>400 && $distance_pour_allure_form<1000) echo "<td class=text-light>$temps_pour_allure_form</td>";
					 $t400_second_allure=$calcul_allure_second*400/1000;$t400_allure = sprintf("%02d:%02d", floor($t400_second_allure%3600/60), $t400_second_allure%60); echo "<td>$t400_allure</td>	";
					if($distance_pour_allure_form>0 && $distance_pour_allure_form<400) echo "<td class=text-light>$temps_pour_allure_form</td>";
					echo "<td>$calcul_allure</td>";
					$vitesse="";  $vitesse=sprintf("%.1f",3600/$calcul_allure_second); echo "<td>$vitesse</td>";			
				  echo "</tr>";
				}
					
				$dist_tab2 = array("42195","21097.5","10000","5000","1000","400");
				$apositionner_allure_recherche=true;					
				for ($row = 0; $row <= 60*3; $row=$row+5) {
					$apositionner=true;
					$afficher_allure_recherche=false;						
					$allure_tab2=180+$row;					
					if (isset($allure_tab2)){
						if($allure_tab2>$calcul_allure_second && ($allure_tab2-5)<$calcul_allure_second && $apositionner_allure_recherche){
							$allure_tab2=$calcul_allure_second;								
							$apositionner_allure_recherche=false;
							$afficher_allure_recherche=true;
							$row=$row-5;
						} else if($allure_tab2 == $calcul_allure_second) {
								$apositionner_allure_recherche = false;
						}
						if($afficher_allure_recherche) {
							echo "<tr class=text-primary>";
						} else {
							echo "<tr>";
						}
						$temps_pour_cette_distance_second = $allure_tab2*$distance_pour_allure_form/1000;
						$temps_pour_cette_distance = sprintf("%02d:%02d:%02d", ($temps_pour_cette_distance_second/ 3600),($temps_pour_cette_distance_second%3600/60),$temps_pour_cette_distance_second%60);
												
						foreach($dist_tab2 as $value) {
							$t_second_tab2=floor($allure_tab2*$value/1000);
							if($distance_pour_allure_form>$value && $apositionner) {
								echo "<td class=text-primary>$temps_pour_cette_distance</td>";
								$apositionner = false;
							} else if($distance_pour_allure_form == $value) {
								$apositionner = false;
							}
							if($t_second_tab2 >= 3600){
								$t_final_tab2 = sprintf("%02d:%02d:%02d", floor($t_second_tab2/3600),floor($t_second_tab2%3600/60),($t_second_tab2%60));		
								/* $t_final_tab2 =	floor($t_second_tab2/3600).":".floor($t_second_tab2%3600/60).":".($t_second_tab2%60);						 */
							} else {
								$t_final_tab2 = sprintf("%02d:%02d", floor($t_second_tab2%3600/60), ($t_second_tab2%60));
								/* $t_final_tab2 =	floor($t_second_tab2%3600/60).":".($t_second_tab2%60);	 */
							}
							echo "<td>$t_final_tab2</td>";
						}	
						$allure_tab2_affiche = sprintf("%02d:%02d", floor($allure_tab2%3600/60), $allure_tab2%60);
						echo "<td>$allure_tab2_affiche</td>";
						
						$vitesse_tab2_affiche = sprintf("%.1f",3600/$allure_tab2);
						echo "<td>$vitesse_tab2_affiche</td>";
						
						echo "</tr>";
					}
				}
					?>
				</tbody>
			  </table>
			</div>
        </div>
	</div>
  </div>

<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Links  -->
  <section class="">            
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p>
            <div class="fs-6 mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg>
              fg@calcul-course.go.yj.fr
            </div>
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
&copy; F.G Company
  </div>
  <!-- Copyright -->
</footer>
  </div>
</main>
<script>
document.querySelectorAll('li').forEach( function(el) {         
    el.addEventListener('click', function() {
		const result = document.getElementById('distancefield');
		let result_distance='';
		if(el.innerText == '10k') {
			result_distance='10000';} 
		else if(el.innerText == 'semi-marathon'){
			result_distance='21097.5';}
		else if(el.innerText == 'marathon'){
		result_distance='42195';}
        result.value = `${result_distance}`;
    });
});
</script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>
