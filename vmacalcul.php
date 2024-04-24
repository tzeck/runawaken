
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="favicon-16x16.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>calculer sa VMA & temps de passage</title>
	<meta name="description" content="calcul de la VMA et allure à partir du pourcentage de VMA"/>
	<link rel="alternate" href="https://calcul-course.go.yj.fr/" hrefLang="fr-FR"/>
	<link rel="canonical" href="https://calcul-course.go.yj.fr/vmacalcul.php"/>
	<meta name="google-site-verification" content="P2RnQJqMHQIo0wV5upcqkomEedBomEHMJMhdLxUrBy8" />
	<meta name="keywords" content="VMA, allure de passage, % VMA, pourcentage de VMA"/>
	<meta name="author" content="F G"/>
	<meta property="og:url" content="https://calcul-course.go.yj.fr/"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="calcul de votre vma"/>
	<meta property="og:description" content="Determinez votre vma et connaitre son allure cible en fonction de la distance"/>
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:site" content="@Calcul vma - temps de passage"/>
	<meta name="twitter:creator" content="@Calcul vma - temps de passage"/>
	
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
        "@id": "https://calcul-course.go.yj.fr/vmacalcul.php/#webpage",
        "url": "https://calcul-course.go.yj.fr/vmacalcul.php/",
        "name": "calcul de la VMA et tableau des temps de passage",
        "description": "calcul de la VMA à partir de votre temps de reference sur une course de votre choix. Vous pourrez connaitre les temps de passage suivant votre course",
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
            <h1 class="display-6 fw-semibold">Calcul de votre VMA</h1>
			<p class="col-md-8 fs-5">vous pouvez déterminer votre VMA à partir de votre course de référence. Entrer votre temps et la distance parcourue que ce soit pour un marathon, un semi-marathon ou un 10 km.
			Votre VMA calculée servira à connaitre l'allure cible et les temps de passage pour les differentes courses
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
					<li><a class="dropdown-item" href="#">20k</a></li>
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
					<label for="textResultat">VMA</label>
					  <input type="text" class="form-control" readonly name="resultat" value="<?php
					$calcul_vitesse="10";
					$vitesse_vma_affiche="";
					if(isset($_POST['temps_pour_allure']) && isset($_POST['distance_pour_allure'])){ 
						  $temps_parse=date_parse_from_format("H:i:s", $temps_pour_allure_form);
						  $temps_second=($temps_parse['hour']*3600)+($temps_parse['minute']*60)+$temps_parse['second'];
						  $pourcentage_allure=0;
													
						  if($distance_pour_allure_form>0) {
							  if($distance_pour_allure_form==10000) {
								  $pourcentage_allure=0.9;
							  } else if($distance_pour_allure_form==20000) {
								   $pourcentage_allure=0.85;
							  } else if($distance_pour_allure_form==21097.5) {
								   $pourcentage_allure=0.85;
							  } else if($distance_pour_allure_form==42195) {
								   $pourcentage_allure=0.8;
							  }
						  }
						  if($pourcentage_allure>0) {							  
							  $calcul_vitesse=(($distance_pour_allure_form*3600/$temps_second)/1000)/$pourcentage_allure;							  
						}
					}
					$vitesse_vma_affiche = sprintf("%.1f",$calcul_vitesse);
					echo $vitesse_vma_affiche;?>">
					<small id="textdistance_pour_allureHelp" class="form-text text-muted">en km/h</small>
				 </div>
			  </div>
			  <button type="submit" class="btn btn-info" name="calculallure">Calculer</button>
			</form>
			<div class="container mt-5">
			<div class="row align-items-start mb-4">
			<div class="col">
			  <?php echo "<h4 class=\"title_calcul\">estimation de vos temps pour une VMA à <span class=\"blue\">$vitesse_vma_affiche</span> km/h</h4>" ?>
			</div>			
			<div class="col">			 
			  <?php
				$dist_tab_estimation = array("10000","21097.5","42195");				
				for ($pourcentage_vma_tab_estimation = 80; $pourcentage_vma_tab_estimation <= 90; $pourcentage_vma_tab_estimation=$pourcentage_vma_tab_estimation+5) {
								
					$calcul_allure_pourcentage_vma_sec_est=3600/($calcul_vitesse*$pourcentage_vma_tab_estimation/100);
								
					foreach($dist_tab_estimation as $value) {
						$allure_second_row=floor($calcul_allure_pourcentage_vma_sec_est*$value/1000);
						if($allure_second_row >= 3600){
							$allure_second_row_format = sprintf("%02d:%02d:%02d", floor($allure_second_row/3600),floor($allure_second_row%3600/60),$allure_second_row%60);
						} else {
							$allure_second_row_format = sprintf("%02d:%02d", floor($allure_second_row%3600/60), $allure_second_row%60);
						}
						
						if(($pourcentage_vma_tab_estimation == 90 && $value==10000)||($pourcentage_vma_tab_estimation == 85 && $value==21097.5) 
							|| ($pourcentage_vma_tab_estimation == 80 && $value==42195)){
							$dist_name="";
							if($value==10000) {
								$dist_name="10k";
							} else if ($value==20000) {
								$dist_name="20k";
							} else if ($value==21097.5) {
								$dist_name="semi-marathon";
							} else if ($value==42195) {
								$dist_name="marathon";
							}
							echo "$dist_name en <b>$allure_second_row_format</b><br>";
						}
					}															
				}
				?>
			</div>
		  </div>
			  
			  <?php echo "<h4>temps de passage</h4>" ?>		  
			  <table class="table table-sm">
				<thead>
				  <tr>
					<th>% VMA</th>					
					<th>Km/h</th>
					<th>T/Km</th>
					<th>400m</th>
					<th>1km</th>
					<th>5km</th>
					<th>10km</th>
					<th>semi</th>
					<th>marathon</th>
				  </tr>
				</thead>
				<tbody>
				<?php				
				$dist_tab = array("400","1000","5000","10000","21097.5","42195");				
				for ($pourcentage_vma_tab = 70; $pourcentage_vma_tab <= 120; $pourcentage_vma_tab=$pourcentage_vma_tab+5) {
					echo "<tr>";
					
					$pourcentage_vma_affiche = sprintf("%d", $pourcentage_vma_tab);
					$pourcentage_vma_affiche=$pourcentage_vma_affiche." % VMA";
					echo "<td>$pourcentage_vma_affiche</td>";
					
					$calcul_allure_pourcentage_vma_sec=floor(3600/($calcul_vitesse*$pourcentage_vma_tab/100));
					$calcul_vitesse_pourcentage_vma=$calcul_vitesse*$pourcentage_vma_tab/100;
					
					$calcul_allure_pourcentage_vma="";
					if($calcul_allure_pourcentage_vma_sec >= 3600){
								$calcul_allure_pourcentage_vma = sprintf("%02d:%02d:%02d", floor($calcul_allure_pourcentage_vma_sec/ 3600),floor($calcul_allure_pourcentage_vma_sec%3600/60),$calcul_allure_pourcentage_vma_sec%60);
					} else {
						$calcul_allure_pourcentage_vma = sprintf("%02d:%02d", floor($calcul_allure_pourcentage_vma_sec%3600/60), $calcul_allure_pourcentage_vma_sec%60);
					}					
					
					$calcul_vitesse_pourcentage_vma_affiche = sprintf("%.1f",$calcul_vitesse_pourcentage_vma);
					echo "<td>$calcul_vitesse_pourcentage_vma_affiche</td>";
					
					echo "<td>$calcul_allure_pourcentage_vma</td>";	
								
					foreach($dist_tab as $value) {
						$allure_second_row=floor($calcul_allure_pourcentage_vma_sec*$value/1000);
						if($allure_second_row >= 3600){
							$allure_second_row_format = sprintf("%02d:%02d:%02d", floor($allure_second_row/ 3600),floor($allure_second_row%3600/60),$allure_second_row%60);
						} else {
							$allure_second_row_format = sprintf("%02d:%02d", floor($allure_second_row%3600/60), $allure_second_row%60);
						}
						if(($value == "42195" && $pourcentage_vma_tab>85) ||
								($value == "21097.5" && $pourcentage_vma_tab>90) ||
								($value == "10000" && $pourcentage_vma_tab>95) ||
								($value == "5000" && $pourcentage_vma_tab>110)) {
							echo "<td>-</td>";
						} else {
							echo "<td>$allure_second_row_format</td>";
						}
					}											
					echo "</tr>";					
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
		else if(el.innerText == '20k'){
			result_distance='20000';}
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
