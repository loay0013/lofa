<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>LoFa Media</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<?php include "includes/nav.php"; ?>

<div class="container-fluid hero justify-content-center row m-0">
	<div class="col-md-6">
		<div class="container justify-content-center d-flex flex-column">
			<h1>LoFa Media</h1>
			<div class="mt-3 d-flex">
				<a class="btn knap-1 btn-primary bg-textFarve text-minFarve border-0" href="#" role="button">Omkring os</a>
				<a class="btn knap-2 btn-primary text-minFarve border-0 ms-2" href="#" role="button">Hvad tilbyder vi?</a>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6">
		<div class="container-fluid d-flex hero-image img-fluid">
			<img src="" alt="">
		</div>
	</div>
</div>





<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<?php include "includes/footer.php"; ?>

</body>
</html>
