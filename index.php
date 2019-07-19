<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Trabajos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/style.css" />

		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		 
	</head>

	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.html" class="logo">Trabajos</a>
				<nav class="right">
					<a href="#commencer" class="button alt">Commencer</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="#banner">Accueil</a></li>
					<li><a href="#main">A popos de FSP</a></li>
					<li><a href="#one">Méthodes implémentées</a></li>
					<li><a href="#commencer">Commencer</a></li>
					<li><a href="#Ajouter">Ajouter une instance</a></li>
					<li><a href="#three">A propos du site</a></li>
					<li><a href="#footer">Contactez-nous</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="#" class="button fit">Login</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1>Plateforme de résolution de problèmes FSP </h1>
					<p class="p2">Pour tout problème FlowShop de Permutation, qui est un problème d'optimisation combinatoire, nous vous proposons des solutions optimales et approximatives trouvées à l'aide de méthodes exactes, heuristiques et métaheuristiques!</p>
					<ul class="actions">
						<li><a href="#commencer" class="button">Commencer!</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<div id= "overlay" onclick="off()"></div>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<h2>Ils ont dit ...</h2>
					<figure>
					    <blockquote>
					        "L'optimisation prématurée est la racine de tous les maux (ou, du moins, la plupart d'entre eux) en programmation.”
					    </blockquote>
					    <footer>
					        <cite class="author">Donald Knuth</cite>
					        <cite class="company">Informaticien américain</cite>
					    </footer>
					</figure>
				</div>
			</section>
			<!-- <div w3-include-html="FPS.html"></div>  -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Qu'est ce que FSP</h1>
						<p>ou.. FlowShop de Permutation</p>
					</header>
					<div class="image fit">
						<img src="images/pic05.jpg" alt="" />
					</div>
					<p>De nombreux travaux d'ingénierie, de planification et de fabrication peuvent être modélisés comme des problèmes de minimisation ou de maximisation d'une fonction de coût sur un ensemble de variables. Ces types d’événements sont appelés problèmes d’optimisation combinatoire. Au cours des trois dernières décennies, ils ont fait l’objet d’une grande attention dans le domaine de la science et ont réalisé de grands progrès. </p>
					<p>Le problème du Flow-Shop de permutation représente un cas particulier du problème du Flow-Shop scheduling dont l'objectif principal est de fournir une séquence optimale pour N travaux dans M machines.</p>
					<p>La solution au problème consiste à séquencer n travaux (i = 1, ..., n) dans m machines (j = 1, ... m). Un travail consiste en m opérations et la j<sub>ième</sub> opération de chaque travail doit être traitée dans la machine j, il faut considérer que:
					<div style = "margin-left : 100px"><ol>
						<li>Lors du démarrage d'une opération dans la machine j, celle-ci a déjà été traitée dans la machine j-1.</li>
						<li>Au moment du démarrage d’une opération sur une machine, cette dernière n'exécute aucune autre. Chaque opération a un temps de traitement connu P<sub>ij</sub>.</li>
						<li>Si un travail est à la ième position sur la machine 1, il sera alors dans la ième position sur toutes les machines.</li>
						<li>La séquence de production de tous les travaux est la même.</li>
						<li>Le temps de réglage des machines entre les travaux n’est pas pris en compte.</li>
						<li>Lorsque l'exécution d'un travail commence sur une machine, elle ne peut pas être interrompue.</li>
						<li>Le makespan est un paramètre qui indique le temps total d'exécution de toutes les tâches.</li>
						</ol>
					</div>
					Pour résoudre le problème du Flow-Shop par permutation, la makespan est considérée comme une fonction objective à minimiser, résoudre le problème signifie déterminer la permutation des travaux qui fournit la valeur la plus basse de makespan.</p>
					
				</div>
			</section>
			<hr />
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>Méthodes exactes</h3>
							<p>Chercheent une solution exacte optimale,</br> mais peuvent prendre du temps.<br /><br /><br /><br /></p>
						</div>
					</div>
					<div class="flex-item image fit round">
					    <div class="align-center">
							<h3>heuristiques</h3>
							<p> Méthodes approchées fournissant une solution acceptable, calculable en un temps raisonnable. .</p>
						</div>
						<img src="images/pic01.jpg" alt="" />

					</div>
					<div class="flex-item right">
						<div>
							<h3>Métaheuristiques</h3>
							<p> Spécifiques à une instanceparticulière du problème, et ne sont pas facilement réutilisables.<br /><br /><br /><br /></p>
						</div>
					</div>

				</div>
			</section>
			<hr />
					
			<section id="commencer" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Essayez vous meme!</h1>
						<p>Précisez le nombre de travaux et de machines de l'instance FSP pour remplir votre table ou bien importez directement votre fichier texte!</p>
					</header>
						<form method="post" action="#" class="box">
									<div class="row uniform content ">
											<div class="6u 12u$(small)">
												<input type="text" name="n" id="n" value="" placeholder="Nombre de travaux" />
											</div>
											<div class="6u 12u$(small)">
												<input type="text" name="m" id="m" value="" placeholder="Nombre de machine" />
											</div>
									</div>
									<div class="drag" id="drop_zone"><p>Drop files here</p></div>
									<output id="list"></output>

									<div id="divTable" class="table-wrapper content" style="display: none;"">
									<table id="myTable" border="1" "> 
									</table>
									</div>
									<br>
									<br>
									<br>
									<br>
                                   
					                  <header class="align-center">
										<h1>Ou travailler avec une instance de notre librairie</h1>
									 <p>Choisir un fichier du dossier LIBRAIRIE</p>
									  </header>
								 
									                 
												<div  style="margin-left:100pt; margin-right:100pt;  ">
                                                 		<div class="file-upload">
                                                         <div class="file-select">
   
                                                         <div class="file-select-name" id="noFi">-Sélectionner une instance-</div> 
                                                          <input type="file" name="file" id="fileUP" placeholder="Selectionner une instance"  required />
                                                   
                                                      </div>
                                                    </div>
				                               </div>
												 
								 				
								
					
			                     
									<div id="methode" class="12u$" style="padding: 20px; display: none;" >
												<div class="select-wrapper">
													<select name="category" id="category">
														<option value="">- Sélectionner une méthode de résolution -</option>
														<option value="1">Branch & Bound</option>
														<option value="2">Programmation Dynamique</option>
														<option value="3.1">Heuristique -Palmer</option>
														<option value="3.2">Heuristique -Johnson</option>
														<option value="3.3">Heuristique -CDS</option>
														<option value="3.4">Heuristique -NEH</option>
														<option value="4">Métaheuristique</option>
														<option value="4.1">Heuristique -Récuit Simulé</option>
														<option value="4.2">Heuristique -Algorithme Génétique</option>
														<option value="4.3">Heuristique -Recherche Tabou</option>									
														<option value="5.1">Hyperheuristique - Temps</option>
														<option value="5.2">Hyperheuristique - Qualité</option>
														<option value="5.3">Hyperheuristique - Temps et qualité</option>
													</select>
											    </div>
									</div>
									<div class="form-popup" id="myForm">
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input  type= "text" name="pop" id="pop" value="" placeholder="Population size" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input  type= "text" name="gen" id="gen" value="" placeholder="Generations" />
											</div>
											<div class="6u 12u$(xsmall)">
												<input  type= "text" name=mut id="mut" value="" placeholder="Mutation. Prob" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type= "text" name="cross" id="cross" value="" placeholder="Cross. Prob" />
											</div>
											<!-- Break -->
											
											<!-- Break -->
											<div class="4u 12u$(small)">
												<input type="radio" id="priority-low" name="priority" checked>
												<label for="priority-low">Sélection aléatoire</label>
											</div>
											<div class="4u 12u$(small)">
												<input type="radio" id="priority-normal" name="priority">
												<label for="priority-normal">Sélection  élitiste</label>
											</div>
											<div class="4u$ 12u$(small)">
												<input type="radio" id="priority-high" name="priority">
												<label for="priority-high">Sélection par roulette</label>
											</div>

											<!-- Break -->
											<div class="12u$">
												<ul class="actions">
													<li><input type="button"  value="Résoudre" id="parm" onclick="prepareAG();" /></li>
													<li><input type="button"  value="Default" id="def" onclick="prepareAGDef();" /></li>
													<li><input type="reset" value="Réinitialiser" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>
									</div>
                           <div class="form-popup" id="myRep">
									<form method="post" action="#">
									<h2 style="color:#f6755e;">Résultats</h3>
									 <h3 style="color:#f6755e;">Selon la Qualité de la solution</h3>
											<div>
													<div id = "MHQ"><p></p></div>
 											</div>
 											 
 											 
											 
										
										 
 											<div>
													<div id = "MMQ"><p></p></div>
 											</div>
 								 
											 
 											<div>
													<div id = "MTQ"><p></p></div>
 											</div>
 									<h3 style="color:#f6755e;">Selon le temps d'execution</h3>

 											<div>
													<div id = "MHT"><p></p></div>
 											</div>
 											 
 											 
											 
										
										 
 											<div>
													<div id = "MMT"><p></p></div>
 											</div>
 								 
											 
 											<div>
													<div id = "MTT"><p></p></div>
 											</div>
							 

									</form>
									</div>
									<div class="form-popup" id="formRT">
										<form method="post" action="#">
											<div class="row uniform">
												<div class="6u 12u$(xsmall)">
													<input  type= "text" name="nbreIt" id="nbreIt" value="" placeholder="Nombre d'itérations" />
												</div>
												<div class="6u$ 12u$(xsmall)">
													<input  type= "text" name="listeTabou" id="listeTabou" value="" placeholder="Taille de la liste Tabou" />
												</div>
											
												<!-- Break -->
												<!-- Break -->
												<div class="12u$">
													<ul class="actions">
														<li><input type="button"  value="Résoudre" id="parm" onclick="prepareRT();" /></li>
														<li><input type="button"  value="Default" id="def" onclick="prepareRTDef();" /></li>
														<li><input type="reset" value="Réinitialiser" class="alt" /></li>
													</ul>
												</div>
											</div>
										</form>
										</div>
										<div class="form-popup1" id="FormRS">
											<form method="post" action="#">
												<div class="row uniform">
													<div class="6u 12u$(xsmall)">
														<input  type= "text" name="temp_init" id="temp_init" value="" placeholder="Température initiale" />
													</div>
													<div class="6u$ 12u$(xsmall)">
														<input  type= "text" name="temp_fin" id="temp_fin" value="" placeholder="Nombre des itérations" />
													</div>
													<div class="6u 12u$(xsmall)">
														<input  type= "text" name="taux_rof" id="taux_rof" value="" placeholder="Taux de refroidissement" />
													</div>
													<!-- Break -->
													
													<div class="4u 12u$(small)">
														<input type="radio" id="priority-low1" name="priority" checked>
														<label for="priority-low1">Sélection personnalisée</label>
														<input type="radio" id="priority-normal1" name="priority">
														<label for="priority-normal1">Sélection  par défaut</label>
													</div>
													
													<div class="12u$">
														<ul class="actions">
															<li><input type="button"  value="Résoudre" id="parm_RS" onclick="prepareRS();" /></li>
															<li><input type="reset" value="Réinitialiser" class="alt" /></li>
														</ul>
													</div>
												</div>
											</form>
											</div>
									<div class="row uniform content">
												<ul class="actions" style="float: right">
													<li><input type="button" value="Continuer" id="okey" onclick="createTableVoid();" /></li>
													<li><input type="button" value="Résoudre" id="start" style="display: none;" onclick=" selectMethod();"/></li>
													<li><input type="button" value="Meilleure" id="start1" style="display: none;" onclick=" evaluation();"/></li>
													<li><input type="reset" value="Réinitialiser" onclick="hide();" class="alt" /></li>
												</ul>
									
									</div>
						</form>					
					
				</div>
				<div class="inner" id ="sol" style= "display: none;">
					<header class="align-center">
						<h1>Voici la solution + un graphe illustratif du flowshop optimal : </h1>
						<div id = "seq"><p>Séquence optimale : </p></div>
						<div id = "make"><p>Temps d'éxécution globale (makespin) : </p></div>
					</header>
						
				</div>

				<div id="timeline" style="display: none; padding : 30px; height : 400px;"></div>
				

							
			</section>
			<hr />
		<!-- Three -->
			<!-- Three -->
			<section id="Ajouter" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Ajouter une instance au Librairie</h1>
						 
					</header>
						 
 
						<form form id="uploadimage" action="" method="post" enctype="multipart/form-data" class="box">
							<br>
						<br>
						<br>
				
									<div class="row uniform content " id="selectImage">
											<div class="9u 12u$(small)">
											 
												
                                                 		<div class="file-upload">
                                                         <div class="file-select">
   
                                                         <div class="file-select-name" id="noFile">-Sélectionner une instance-</div> 
                                                          <input type="file" name="file" id="file1" placeholder="Selectionner une instance"  required />
                                                   
                                                      </div>
                                                    </div>
											</div>
											 
											<div class="3u$ 12u$(small)" style="padding-right: 20px; padding-top: 20px; float:right;margin-top: 7px">
												<input type="submit" value="Ajouter" class="submit"  />
											</div>
										 
									</div>
						<br>
						<br>
						<br>
									 
						</form>		

					
				</div>
				 
								
					
				 

							
			</section>
	
			<section id="three" class="wrapper">
				
					<header class="align-center">
						<h1>A propos du site</h1>
						<p class="p2">Trabajos est une plateforme pédagogique réalisée par une équipe de 5 étudiantes à l'école nationale Supèrieure d'Informatique. Ce projet a été réalisé dans le cadre du module Optimisation enseigné aux étudiants 2CS, spécialité Systèmes Informatiques.</p>
						<h1>C'est nous!</h1>
					</header>
					<div class="inner flex flex-3">
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/R.jpg" alt="" />
						</div>
						<div class="content">
							<h3>BOUZIDI Halima</h3>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/Y.jpg" alt="" />
						</div>
						<div class="content">
							<h3>DJEBROUNI Yasmine</h3>
							
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/A.jpg" alt="" />
						</div>
						<div class="content">
							<h3>GUITTOUM Amal</h3>
							<p>Chef d'equipe</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/D.jpg" alt="" />
						</div>
						<div class="content">
							<h3>HAREB</br>Dalia</h3>
							
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/K.jpg" alt="" />
						</div>
						<div class="content">
							<h3>MOUFFOK Katia</h3>
							
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Contactez-nous</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">trabajos@contact.com</a></li>
						<li><span class="icon fa-map-marker"></span>ESI, Oued Smar, Alger, Algérie</li>
					</ul>
				</div>
				
			</footer>

		<!-- Scripts -->
			<!-- <script>
			includeHTML();
			</script> -->
		
			<script> 

				 
				function openForm1() {
				  on();
				  document.getElementById("myRep").style.display = "block";
				}

				function closeForm1() {
				  document.getElementById("myRep").style.display = "none";
				}

				function on() {
		  document.getElementById("overlay").style.display = "block";
		}

		
									function openForm() {
				  document.getElementById("myForm").style.display = "block";
				}

				function closeForm() {
				  document.getElementById("myForm").style.display = "none";
				}
				function closeFormRT() {
				  document.getElementById("formRT").style.display = "none";
				}
				function openFormRS() {
				  document.getElementById("FormRS").style.display = "block";
				}
				function closeFormRS() {
				  document.getElementById("FormRS").style.display = "none";
				}
				function offRS() {
		  document.getElementById("overlay").style.display = "none";
		  
		  closeFormRS();
		}

				function on() {
		  document.getElementById("overlay").style.display = "block";
		}

		function off() {
		  document.getElementById("overlay").style.display = "none";
		  closeForm();
		   closeForm1();
		  closeFormRT();
		  closeFormRS()
		}
		function offRT() {
		  document.getElementById("overlay").style.display = "none";
		  
		  closeFormRT();
		}
		function openFormRT()
		{
			document.getElementById("formRT").style.display = "block";
			
		}
				var arr = [];//var globale qui représnete la matrice saisie
				var  fileImported; // var globale qui contient le fichier si importé
					//Pur afficher le tableau à remplir
					var temprature;
					var NB_iter ;
					var COOLING_RATE ;
				var jobs = [];
				var eval=[];
				var M  = [];
				var seqRT = [];
				var saisi = true;
				var m = 0;
				var n = 0;
				function createTable()
				{  
					var val = 0;
					//r = nb lignes = nb travaux + 1
					//c = nb colonnes = nb machines + 1
				rn = document.getElementById('n').value;
				cn = document.getElementById('m').value;
				
				 for(var r=0;r<parseInt(rn,10)+1;r++)
				  {
				   var x=document.getElementById('myTable').insertRow(r);
				   
				   for(var c=0;c<parseInt(cn,10)+1;c++)  
				    {
				     var y=  x.insertCell(c);
                 
				     if(r==0 & c != 0) { y.innerHTML="Machine" + c; }
				     	else { 

				    		 if (r!=0 & c == 0) {  y.innerHTML="Travail" + r  ;}

				    		 else {	
				    		 	if (c!=0 & r!= 0)
									{ 
										val = jobs[r-1][c-1];
										y.innerHTML="<input id='"+r+c+"' type='text' value='"+val+"' name='" + c + "'>"; 
									}
								}
				    		}
				    }
				   }

				   document.getElementById('divTable').style.display = "block";
				   document.getElementById('methode').style.display = "block";
				   document.getElementById('drop_zone').style.display = "none";
				   document.getElementById('okey').style.display = "none";
				   document.getElementById('start').style.display = "block";
				      document.getElementById('start1').style.display = "block";
				  
				  } 
			 
				  function createTableVoid()
				{
					var val = 0;
					//r = nb lignes = nb travaux + 1
					//c = nb colonnes = nb machines + 1
				rn = document.getElementById('n').value;
				cn = document.getElementById('m').value;
				 
				 for(var r=0;r<parseInt(rn,10)+1;r++)
				  {
				   var x=document.getElementById('myTable').insertRow(r);
				   for(var c=0;c<parseInt(cn,10)+1;c++)  
				    {
				     var y=  x.insertCell(c);

				     if(r==0 & c != 0) { y.innerHTML="Machine" + c; }
				     	else { 

				    		 if (r!=0 & c == 0) {  y.innerHTML="Travail" + r  ;}

				    		 else {	
				    		 	if (c!=0 & r!= 0)
									{ 
										
										y.innerHTML="<input id='"+r+c+"' type='text' value='0' name='" + c + "'>"; 
									}
								}
				    		}
				    }
				   }

				   document.getElementById('divTable').style.display = "block";
				   document.getElementById('methode').style.display = "block";
				   document.getElementById('drop_zone').style.display = "none";
				   document.getElementById('okey').style.display = "none";
				   document.getElementById('start').style.display = "block";
				   document.getElementById('start1').style.display = "block";
				  } 
				  /////////////
			 


				  // Pour remplir la variable de la matrice saisie
				  function createVarTable(){
				  	
				  	rn = parseInt(document.getElementById('m').value);
					cn = parseInt(document.getElementById('n').value);
					

				
				var l, col;
				  // Creates all lines:
				  for(var i=0; i < rn; i++){
				  		col = i+1;
				      // Creates an empty line
				      arr.push([]);

				      // Adds cols to the empty line:
				      arr[i].push( new Array(cn));

				      for(var j=0; j < cn; j++){
				        // Initializes:
				        l = j +1;
				        arr[i][j] = parseInt(document.getElementById(""+l+""+col).value);
				        
				      }
				  }
				 
				  for (var i=0; i<cn; i++) 
				      {
						  
						  jobs[i] = new Array()
					 	  for (var j=0; j<rn; j++)
							  jobs[i][j]= arr[j][i];
						 
						}
				
				  

				  }
										document.getElementById('fileUP').onchange = function(){
											saisi=false
											var file = this.files[0];
											var reader = new FileReader();
											reader.onload = function(){
										
											// By lines
											var lines = this.result.split('\n');
											n = lines.length  ;
											m = (lines[0].split(' ')).length;
										//	alert('jobs ='+n+' machines ='+m+'\n');
											for(var line = 0; line < n; line++){
													var values = lines[line].split(' ');
													//var tab = [];
													jobs[line] = new Array();		
													for(var i=0; i<m; i++)
													{
														jobs[line].push(parseInt(values[i]));
													}
													//jobs[line] = tab;
											}
											jobs=transpose(jobs);
											
													/*for (var i = 0; i < n; i++) 
													{        
													alert(jobs[i]);
													};*/
											};
											reader.readAsText(file);
										};
										function getRandomInt(max) {
													return Math.floor(Math.random() * Math.floor(max));
													}
  
						function hyperheuristique(paramchoix){
							//0 pour time
							if (paramchoix==0){
									if (m>99){
										if(n==20 && m!=200){
											
											time =  johnson();
											drawChart(time);
											
											jobs = [];
										}
										else{
											
											time=palmer();
											drawChart(time);
											
											jobs = [];
										}
									}
								//sa partie 
								else{
										if (m<51 && n<11){
											 
											time=palmer();
										 
											drawChart(time);
											 
											jobs = [];
										}
										else{
											var jobsNEH=[];
											for (var i=0; i<jobs[0].length; i++) 
											{
											
												jobsNEH[i] = new Array()
												for (var j=0; j<jobs.length; j++)
												jobsNEH[i][j]= jobs[j][i];
											
											}
										    var order =  neh(jobsNEH);
											time = makespanNEH2(order, jobsNEH, jobsNEH.length);
											drawChartNEH(time, order );
										}
								}

							}

							
							else {
								//1 pour qualité
								if (paramchoix==1){
										if (m>99){
											 if (n==20){
														var jobsNEH=[];
														for (var i=0; i<jobs[0].length; i++) 
														{
														
															jobsNEH[i] = new Array()
															for (var j=0; j<jobs.length; j++)
															jobsNEH[i][j]= jobs[j][i];
														
														}
													    var order =  neh(jobsNEH);
														time = makespanNEH2(order, jobsNEH, jobsNEH.length);
														drawChartNEH(time, order );
												}
												else{
												
														time=palmer();
														drawChart(time);
														jobs = [];
												}
										}
										else{
											var r= getRandomInt(2)
											if(r==1){
												var jobsNEH=[];
														for (var i=0; i<jobs[0].length; i++) 
														{
														
															jobsNEH[i] = new Array()
															for (var j=0; j<jobs.length; j++)
															jobsNEH[i][j]= jobs[j][i];
														
														}
													var order =  neh(jobsNEH);
														time = makespanNEH2(order, jobsNEH, jobsNEH.length);
														drawChartNEH(time, order );

											}
											else{
												time =  cds(window.jobs);
												drawChart(time);
												jobs = [];

											}

										}
											
									}
								else{
									if (m>99){
										var rand2= getRandomInt(3);
										if(rand2==0){
											var jobsNEH=[];
													for (var i=0; i<jobs[0].length; i++) 
													{
													
														jobsNEH[i] = new Array()
														for (var j=0; j<jobs.length; j++)
														jobsNEH[i][j]= jobs[j][i];
													
													}
												var order =  neh(jobsNEH);
													time = makespanNEH2(order, jobsNEH, jobsNEH.length);
													drawChartNEH(time, order );

										}
										else{
											if(rand2==1){
												time=palmer();
														drawChart(time);
														jobs = [];
											}
											else{
												time =  johnson();
												drawChart(time);
												jobs = [];  
											}

										}
									

									}
									else{
										var jobsNEH=[];
										for (var i=0; i<jobs[0].length; i++) 
										{
										
											jobsNEH[i] = new Array()
											for (var j=0; j<jobs.length; j++)
											jobsNEH[i][j]= jobs[j][i];
										
										}
									var order =  neh(jobsNEH);
										time = makespanNEH2(order, jobsNEH, jobsNEH.length);
										drawChartNEH(time, order );
									}

								}
							}
						return time;
						}

				  function selectMethod (){
					if (saisi == true ) 
					{ 
						n = parseInt( document.getElementById('n').value);
						m =parseInt( document.getElementById('m').value);
						createVarTable();
					//	alert("jobs "+jobs.length+"arr"+arr.length)

					}
				
					var e = document.getElementById("category");
					var value = e.options[e.selectedIndex].value;
					var time;
					if (value ==1) 
						{
							 
							time = solveMethode(n,m);
							drawChart(time);
						}
					else if (value == 2 ) { 
						
						time = solveProgDyn (n,m);
						if (time != 3 ) drawChartPD(time);

					}

						 else if (value ==3.1) 
						 {
                            			time=palmer();
                            			drawChart(time);
                            			jobs = [];
						 	 
						  }
						  else if (value == 3.2)
						  {
							  time =  johnson();
							  drawChart(time);
						  	jobs = [];
						  }

						else if (value == 3.3)
						  {
							  time =  cds(window.jobs);
							  drawChart(time);
							  jobs = [];
						  }
						  else if (value == 3.4)
						  {
							  
						  			//alert("jobs "+jobs.length+"arr"+arr.length);

						  			var jobsNEH=[];
						  	 for (var i=0; i<jobs[0].length; i++) 
						      {
								  
								  jobsNEH[i] = new Array()
							 	  for (var j=0; j<jobs.length; j++)
									  jobsNEH[i][j]= jobs[j][i];
								 
								}
							  var order =  neh(jobsNEH);
							  alert("order = "+order);
							      time = makespanNEH2(order, jobsNEH, jobsNEH.length);
							     // alert("yes");
    /*for (var i =0; i< jobsNEH.length; i++)
    {
    	for (var j =0; j<order.length; j++)
    		alert(i+"   "+j+"   "+mat[i][j].deb + "  "+ mat[i][j].fin);
    }*/
						  drawChartNEH(time, order );
						  jobs = [];
						  }
						  	else if (value == 4.1)
						  {
							  //seq_opt2 == solution de départ
							  //var seq_opt2 =  cds(window.jobs);
							  on();
							  openFormRS();
						  }

						 	  else if (value == 4.2){
						 		on();
						 	openForm();
							 }
							 else if (value == 4.3)
						  	  {
								
								on();
								openFormRT();
							 
							 
						     }else if (value == 5.1){
									   time=hyperheuristique(0);
							 }else if (value == 5.2){
								 
								
									   time=hyperheuristique(1);

							 }else if (value == 5.3){
								 
									   time=hyperheuristique(2);
							 }
				
				  }
				 
				   function prepareAG()

				   {
				   		//alert("hh");
				   		
				   		var jobsAG=[];
				   		
				   		var mut = parseFloat(document.getElementById("mut").value);
				   		var cro = parseFloat(document.getElementById("cross").value);
				   		var gene = parseInt(document.getElementById("gen").value);
				   		var po =parseInt(document.getElementById("pop").value);
				   		var elite = document.getElementById("priority-normal").checked;
				   		//alert(elite);
				   		var tour = document.getElementById("priority-high").checked;
				   		var alea = document.getElementById("priority-low").checked;
				   		var selection;
				   		if (elite) selection = 's';
				   		else if (tour) selection = 't';
				   		else selection = 'a';
				   		//alert(mut+"  "+cro+"  "+gene+"   "+po );
						  	 for (var i=0; i<jobs[0].length; i++) 
						      {
						      	
								  
								  jobsAG[i] = new Array()
							 	  for (var j=0; j<jobs.length; j++)
									  jobsAG[i][j]= jobs[j][i];
								 
								}
							//	alert(po+"  "+ mut+"  "+ cro+" "+ gene);
							var orderneh = neh(jobsAG);
							var order = ag( jobsAG, jobsAG[0].length, po, mut, cro, gene, selection, orderneh);
							// popSizep, mutProbp, crossProbp, generationsp, selectionp
							  	
							var	 time = makespanNEH2(order, jobsAG, jobsAG.length);
							   drawChartNEH(time, order );
							jobs = [];
							off();
							 }


					function prepareAGDef()

				   {
				   		//alert("hh");
				   		
				   		var jobsAG=[];
				   		
				 
				   		//alert(mut+"  "+cro+"  "+gene+"   "+po );
						  	 for (var i=0; i<jobs[0].length; i++) 
						      {
						      	
								  
								  jobsAG[i] = new Array()
							 	  for (var j=0; j<jobs.length; j++)
									  jobsAG[i][j]= jobs[j][i];
								 
								}
							//	alert(po+"  "+ mut+"  "+ cro+" "+ gene);
							var orderneh = neh(jobsAG);
							var order = ag( jobsAG, jobsAG[0].length, 100, 0.01, 0.9, 400, 's', orderneh);
							// popSizep, mutProbp, crossProbp, generationsp, selectionp
							  	
							var	 time = makespanNEH2(order, jobsAG, jobsAG.length);
							   drawChartNEH(time, order );
							jobs = [];
							off();
							 }


							 function prepareRTDef()

							{
							 		M = [n];
									for (var i=0; i<n; i++) 
									{
										M[i]=[m];
										for (var j=0; j<m; j++) M[i][j] = jobs[j][i];

									}
									seqRT = neh(M);
									var sequence = searchTabu(400, 7);

									var matriceTemps = Timing(sequence, n, m);
									
									drawChartNEH(matriceTemps,sequence);
									offRT();
							}

					function prepareRS(){
					
						var perso = document.getElementById("priority-normal1").checked;
						   var defau = document.getElementById("priority-low1").checked;
						   var selection;
						  
						   if (perso == false) 
						   {
							temprature = parseFloat(document.getElementById("temp_init").value);
							NB_iter =parseInt(document.getElementById("temp_fin").value);
							COOLING_RATE = parseFloat(document.getElementById("taux_rof").value);
						   }
						   else 
						   {
							temprature = 2.5;
							NB_iter = 10;
							COOLING_RATE = 0.999;
						   }

					//var seq_opt2 =  cds(window.jobs);
					var jobsNEH=[];
						  	 for (var i=0; i<jobs[0].length; i++) 
						      {
								  
								  jobsNEH[i] = new Array()
							 	  for (var j=0; j<jobs.length; j++)
									  jobsNEH[i][j]= jobs[j][i];
								 
								}
							  var order =  neh(jobsNEH);
							  for(var i=0; i<order.length; i++) order[i]=order[i]+1;
					var time1 =start_RS(window.jobs, order);
					var matriceTemps = Timing(time1, n, m);
					drawChart(matriceTemps);
					offRS();
				}

				   function prepareRT(){
					
					    var nbreIteration = parseInt(document.getElementById("nbreIt").value);
				   		var sizeListTabou =parseInt(document.getElementById("listeTabou").value);
						   M = [n];
						   for (var i=0; i<n; i++) 
						   {
							   M[i]=[m];
							   for (var j=0; j<m; j++) M[i][j] = jobs[j][i];

						   }
						   seqRT = neh(M);
						var sequence = searchTabu(nbreIteration, sizeListTabou);

						var matriceTemps = Timing(sequence, n, m);
						
						drawChartNEH(matriceTemps,sequence);
						offRT();
					}

				   function hide()
				{

					 document.getElementById('okey').style.display = "block";
					 document.getElementById('start').style.display = "none";
					  document.getElementById('start1').style.display = "none";
					 document.getElementById('divTable').style.display = "none";
					   document.getElementById('methode').style.display = "none";
					   document.getElementById('sol').style.display = "none";
					   document.getElementById('timeline').style.display = "none";
					   document.getElementById('myTable').innerHTML = ""; 
					   document.getElementById('list').innerHTML = "";
					    document.getElementById('m').disabled = "";
					   document.getElementById('n').disabled = "";
					  document.getElementById('drop_zone').style.display = "block";
					  jobs = [];
					  arr = [];
					  location.reload();
					}
					//pOUR TRANSPOSER LES INSTANCES DE TAILLARDS
			        function transpose(a) {

					// Calculate the width and height of the Array
					var w = a.length || 0;
					var h = a[0] instanceof Array ? a[0].length : 0;

					// In case it is a zero matrix, no transpose routine needed.
					if(h === 0 || w === 0) { return []; }

					var i, j, t = [];

					// Loop through every item in the outer array (height)
					for(i=0; i<h; i++) {

							// Insert a new row (array)
							t[i] = [];

							// Loop through every item per item in outer array (width)
							for(j=0; j<w; j++) {

								// Save transposed data.
								t[i][j] = a[j][i];
							}
					}

					return t;
					}
			    
	//Pour retourner le fichier importé
	function handleFileSelect(evt) {
					   saisi = false;
				   			 document.getElementById('m').disabled ="disabled";
					  		 document.getElementById('n').disabled = "disabled";
							    evt.stopPropagation();
							    evt.preventDefault();

							    var files = evt.dataTransfer.files; // FileList object.

							    // files is a FileList of File objects. List some properties.
							    var output = [];
							    for (var i = 0, f; f = files[i]; i++) {
							      output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
							                  f.size, ' bytes, last modified: ',
							                  f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
							                  '</li>');
							    }
							    document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
							    fileImported = f;
							    var file = files[0];
							    var reader = new FileReader();
								reader.onload = function(){
							  
								  // By lines
								  var lines = this.result.split('\n');
								  n = lines.length  ;
								  m = (lines[0].split(' ')).length;
								  for(var line = 0; line < n; line++){
										var values = lines[line].split(' ');
										//var tab = [];
										jobs[line] = new Array();		
										for(var i=0; i<m; i++)
										{
											jobs[line].push(parseInt(values[i]));
										}
								  }
								  //alert(jobs[0]);		        
								   jobs=transpose(jobs);
								 // alert(jobs[0]);
										//Mettre à jour le n et m
										document.getElementById('n').value = m.toString();
										document.getElementById('m').value = n.toString();
										createTable();
								};
								reader.readAsText(file);
								
							    
							  }

							  function handleDragOver(evt) {
							    evt.stopPropagation();
							    evt.preventDefault();
							    evt.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.
							  }

							  // Setup the dnd listeners.
							  var dropZone = document.getElementById('drop_zone');
							  dropZone.addEventListener('dragover', handleDragOver, false);
							  dropZone.addEventListener('drop', handleFileSelect, false);
							  google.charts.load('current', {'packages':['timeline']});
						 ///////////////////
						 	//Pour retourner le fichier importé
				   
				     // google.charts.setOnLoadCallback(drawChart);
				      function drawChart(Timey) {
				      	 
						    
					   
				        var container = document.getElementById('timeline');
				        container.style.display = "block";
				        document.getElementById('sol').style.display = "block";
				       var chart = new google.visualization.Timeline(container);
				        var dataTable = new google.visualization.DataTable();

				        dataTable.addColumn({ type: 'string', id: 'Machine' });
				        dataTable.addColumn({ type: 'string', id: 'Job' });
				        dataTable.addColumn({ type: 'date', id: 'Start' });
				        dataTable.addColumn({ type: 'date', id: 'End' });

				    

				        var rowy = new Array();
						
				         for(var i=0; i<Timey.length; i++ ) 
						    {
						    	
						    for(var j=0; j<Timey[i].length; j++){
								
						        rowy.push([
						        	"Machine "+(j+1), 
						        	"Job "+ seqTab()[i], 
						        	new Date( 1950, 2, 2, 14, 15,0,parseInt(Timey[i][j].deb)),
						        	 new Date( 1950, 2, 2, 14, 15, 0,parseInt(Timey[i][j].fin))
						        	 ]);
								
							   

							}
							
							dataTable.addRows(rowy);
							
						    rowy = new Array();
					  	  }
						chart.draw(dataTable);

					
				      }
 
				      function drawChartPD(Timey) {
				      	 
						    
					   
				        var container = document.getElementById('timeline');
				        container.style.display = "block";
				        document.getElementById('sol').style.display = "block";
				        var chart = new google.visualization.Timeline(container);
				        var dataTable = new google.visualization.DataTable();

				        dataTable.addColumn({ type: 'string', id: 'Machine' });
				        dataTable.addColumn({ type: 'string', id: 'Job' });
				        dataTable.addColumn({ type: 'date', id: 'Start' });
				        dataTable.addColumn({ type: 'date', id: 'End' });

				    

				        var rowy = new Array();
				       
				         for(var i=0; i<Timey.length; i++ ) 
						    {
						    	
						    for(var j=0; j<Timey[i].length; j++){
						        rowy.push([
						        	"Machine "+ (j+1), 
						        	"Job "+ seqTabPD()[i], 
						        	new Date( 1950, 2, 2, 14, 15,0, parseInt(Timey[i][j].tpsDebut)),
						        	 new Date( 1950, 2, 2, 14, 15, 0, parseInt(Timey[i][j].tpsFin))
						        	 ]);

						       // alert('deb= '+Timey[i][j].tpsDebut+'fin= '+Timey[i][j].tpsFin);

						    }
						    dataTable.addRows(rowy);
						    rowy = new Array();
					  	  }
				        chart.draw(dataTable);
				      }

 
 function readFile(file)
{
  var txtFile = new XMLHttpRequest();
txtFile.open("GET", "test.txt", true);
txtFile.onreadystatechange = function() {
  if (txtFile.readyState === 4) {  // Makes sure the document is ready to parse.
       
    if (txtFile.status === 200) {  // Makes sure it's found the file.
          
      allText = txtFile.responseText; 
      lines = txtFile.responseText.split("\n");

										var	n1 = lines.length  ;
										  
										var	m1 = (lines[0].split(' ')).length;
										 
										//	alert('jobs ='+n+' machines ='+m+'\n');
											for(var line = 0; line < n1; line++){
													var values = lines[line].split(' ');
													//var tab = [];
													eval[line] = new Array();		
													for(var i=0; i<m1; i++)
													{
														eval[line].push(parseFloat(values[i]));
												}
													//jobs[line] = tab;
											} // Will separate each line into an array
    
    var fullPath = document.getElementById('fileUP').value;
    if (fullPath) {
    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
    var filename = fullPath.substring(startIndex);
    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
        filename = filename.substring(1);
    }
    meilleur(filename);
    openForm1();
}
      
    }
  }
}
txtFile.send(null);
}
function evaluation()
{
	readFile();
}

				       function drawChartNEH(Timey, order) {
				    	  
				        var container = document.getElementById('timeline');
				        container.style.display = "block";
				        document.getElementById('sol').style.display = "block";
				        document.getElementById('seq').innerHTML= "<p>Séquence optimale : " +order +" </p>";
						document.getElementById('make').innerHTML= "<p>Temps d'éxécution globale (makespin) : "+Timey[Timey.length-1][Timey[0].length-1].fin+" ms</p>";
				       var chart = new google.visualization.Timeline(container);
				        var dataTable = new google.visualization.DataTable();

				        dataTable.addColumn({ type: 'string', id: 'Machine' });
				        dataTable.addColumn({ type: 'string', id: 'Job' });
				        dataTable.addColumn({ type: 'date', id: 'Start' });
				        dataTable.addColumn({ type: 'date', id: 'End' });

				        //alert("lgine "+Timey.length+"colonne "+Timey[0].length);

				        var rowy = new Array();
						
				         for(var i=0; i<Timey.length; i++ ) 
						    {
						    	
						    for(var j=0; j<Timey[0].length; j++){
								
						        rowy.push([
						        	"Machine "+(i+1), 
						        	"Job "+ order[j], 
						        	new Date( 1950, 2, 2, 14, 15,0,parseInt(Timey[i][j].deb)),
						        	 new Date( 1950, 2, 2, 14, 15, 0,parseInt(Timey[i][j].fin))
						        	 ]);
								
							   

							}
							
							dataTable.addRows(rowy);
							
						    rowy = new Array();
					  	  }
						chart.draw(dataTable);

					
				      }
 
				  
			</script>
			<script type="text/javascript">
					$('#file1').bind('change', function () {
                 var filename = $("#file1").val();
                 if (/^\s*$/.test(filename)) {
                 $(".file-upload").removeClass('active');
                 $("#noFile").text("No file chosen..."); 
                }
              else {
               $(".file-upload").addClass('active');
    $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
  }
});
$('#fileUP').bind('change', function () {
	var filename = $("#fileUP").val();
	
    if (/^\s*$/.test(filename)) {
     $(".file-upload").removeClass('active');
	 $("#noFi").text("No file chosen..."); 
	}
	else {
		    $(".file-upload").addClass('active');
		    $("#noFi").text(filename.replace("C:\\fakepath\\", "")); 
		  }
});
			</script>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/script.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="script/solver.js"></script>
			<script src="script/palmer.js"></script>
			<script src="script/heuristique_Johnson.js"></script>
			<script src="script/cds.js"></script>
			<script src="script/NEH.js"></script>
			<script src="script/demo.js"></script>
			<script src="script/anneal.js"></script>
			<script src="script/ag.js"></script>
			<script src="script/tabou_search.js"></script>
			<script src="script/programmation_dynamique.js"></script> 

	</body>
</html>
