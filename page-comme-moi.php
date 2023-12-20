<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="content-comme-moi">
			<div class="welcome-image">
				<p class="text-background">Chez maison chrysalide je vais...</p>
			</div>
			<div class="title-wrapper">
				<p class="text-background">1. Etre entouré de personnes qui me ressemblent</p>
			</div>
			<div class="schema-personne">
				<img class="schema-personne-famille icon" src="/chrysalide/wp-content/themes/my_theme/icons/famille.svg" alt="">
				<img class="schema-personne-personne icon" src="/chrysalide/wp-content/themes/my_theme/icons/personne.svg" alt="">
				<p class="schema-personne-text1">7 personnes autistes comme moi</p>
				<p class="schema-personne-text2">+</p>
				<p class="schema-personne-text3">3 adultes valides</p>
			</div>

			<div class="title-wrapper title-wrapper2">
				<p class="text-background">2. Vivre dans une maison agréable</p>
			</div>
			<p>Je pourrais trouver dans ma grande maison:</p>
			<div class="schema-maison">
				<img class="schema-maison-robot icon" src="/chrysalide/wp-content/themes/my_theme/icons/robot.svg" alt="">
				<img class="schema-maison-projecteur icon" src="/chrysalide/wp-content/themes/my_theme/icons/projecteur.svg" alt="">
				<p class="schema-maison-text1">De la technologie qui va m’aider a gerer l’ouverture et la fermeture des fenetres ou encore la température</p>
				<p class="schema-maison-text2">Une salle immersive pour me reposer et/ou stimuler mes sens !</p>	
			</div>

			<div class="title-wrapper">
				<p class="text-background">3. Avoir une vie commune et faire des activités</p>
			</div>
			<div class="schema-activites">
				<div class="schema-activites-personnes-table">
					<img class="icon" src="/chrysalide/wp-content/themes/my_theme/icons/personnes-table.svg" alt="">
					<p>Partager des repas ensemble</p>
				</div>
				<div class="schema-activites-personne-fleur">
					<img class="icon" src="/chrysalide/wp-content/themes/my_theme/icons/personne-fleur.svg" alt="">
					<p>(Participer au projet de jardin commun organisé par la mairie )</p>
				</div>
				<div class="schema-activites-porte-documents">
					<img class="icon" src="/chrysalide/wp-content/themes/my_theme/icons/porte-documents.svg" alt="">
					<p>Et enfin avoir une vie active et un travail encadré !</p>
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
