<?php
$lang = substr( get_locale(), 0,2);
?>
<header class="page-header  mt-5">
    <h1 class="page-title">
		<?php if($lang == 'es'):
			$autor = 'Autores';
			$titleEspecies = 'Búsqueda de Especies';
			$nombreCientifico = 'Nombre científico';
			$apendiceCITES = 'Apéndice CITES';
			$country = 'País';
			$readmore = 'Leer más';
			$noResults = 'No existen resultados para documentos';
			$noResultsSpecies = 'No existen resultados para especies';
			?>
            Resultados de búsqueda Cites para: <?php echo  $_REQUEST['s']; ?>
		<?php elseif($lang == 'en'):
			$autor = 'Authors';
			$titleEspecies = 'Species Search';
			$nombreCientifico = 'Scientific name';
			$apendiceCITES = 'CITES Appendix';
			$country = 'Country';
			$readmore = 'Read more';
			$noResults = 'No results for documents';
			$noResultsSpecies = 'No results for species';?>
            Search results Cites for: <?php echo  $_REQUEST['s']; ?>
		<?php else:
			$autor = 'Autores';
			$titleEspecies = 'Pesquisa de Espécies';
			$nombreCientifico = 'Nome científico';
			$apendiceCITES = 'Apêndice CITES';
			$country = 'País';
			$readmore = 'Ler mais';
			$noResults = 'Não há resultados para documentos';
			$noResultsSpecies = 'Não há resultados para espécies';?>
            Resultados da pesquisa Cites para: <?php echo  $_REQUEST['s']; ?>
		<?php endif; ?>
    </h1>
</header>

<div class="container">
    <div id="citesResults"></div>
	<table class="table table-striped table-hover">
		<thead class="thead-dark">
			<th class="text-center"><?php echo $nombreCientifico ?></th>
			<th class="text-center"><?php echo $apendiceCITES; ?></th>
			<th class="text-center"><?php echo $country; ?></th>
			<th class="text-center"></th>
		</thead>
		<tbody id="citesResultsSpecies">

		</tbody>
	</table>

</div>

<script>
    var citesResults = document.getElementById('citesResults')
    var citesResultsSpecies = document.getElementById('citesResultsSpecies')
    jQuery( document ).ready(function() {
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };
        fetch("https://inventalo.pe/ora/cites/documentos/listardocumento2?t=<?php echo $_REQUEST['s'] ?>&lang=<?php echo $lang; ?>", requestOptions)
            .then(response => response.text())
            .then(result => (JSON.parse(result).data.length > 0)?JSON.parse(result).data.map(parseDocuments):citesResults.innerHTML = '<div class="alert alert-warning"><?php echo $noResults; ?></div>')
            .catch(error => console.log('error', error));

		function parseDocuments(r){

		    citesResults.innerHTML  = citesResults.innerHTML + '<div class="row">' +
			    '<div class="col">' +
			    '<h4>'+r.duc_txt_title+'</h4>' +
			    '<p class="text-justify px-5 py-2">'+r.duc_txt_description+'</p>' +
			    '<p class="text-justify px-2 py-1">' +
			    '<b><?php echo $autor; ?>:</b>&nbsp;'+r.duc_txt_publisher +''+
			    ''+r.duc_txt_publisher+'</p>' +
			    '</div><!-- col -->' +
			    '</div><div class="row"><div class="col"><hr /></div> <!-- row -->'
		}
	    /* Busqueda de especies */
        fetch("https://inventalo.pe/ora//cites/reportes/listacites_datatable?draw=1&columns%5B0%5D%5Bdata%5D=pli_int_id&columns%5B0%5D%5Bname%5D=&columns%5B0%5D%5Bsearchable%5D=true&columns%5B0%5D%5Borderable%5D=true&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=pli_txt_scientificname&columns%5B1%5D%5Bname%5D=&columns%5B1%5D%5Bsearchable%5D=true&columns%5B1%5D%5Borderable%5D=true&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=pli_txt_cite&columns%5B2%5D%5Bname%5D=&columns%5B2%5D%5Bsearchable%5D=true&columns%5B2%5D%5Borderable%5D=true&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=pai_txt_name&columns%5B3%5D%5Bname%5D=&columns%5B3%5D%5Bsearchable%5D=true&columns%5B3%5D%5Borderable%5D=true&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B4%5D%5Bdata%5D=pli_int_id&columns%5B4%5D%5Bname%5D=&columns%5B4%5D%5Bsearchable%5D=true&columns%5B4%5D%5Borderable%5D=true&columns%5B4%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B4%5D%5Bsearch%5D%5Bregex%5D=false&order%5B0%5D%5Bcolumn%5D=3&order%5B0%5D%5Bdir%5D=asc&start=0&length=200&search%5Bvalue%5D=&search%5Bregex%5D=false&filter%5Bq1%5D=<?php echo $_REQUEST['s']?>&filter%5Bq2%5D=&filter%5Bq3%5D=&filter%5Bq4%5D=&filter%5Bq5%5D=&filter%5Bq6%5D=", requestOptions)
            .then(response => response.text())
            .then(resultS => (JSON.parse(resultS).data.length > 0)?JSON.parse(resultS).data.map(parseSpecies):citesResultsSpecies.innerHTML = '<div class="alert alert-warning"><?php echo $noResultsSpecies; ?></div>')
            .catch(error => console.log('error', error));

		function parseSpecies(r){

            citesResultsSpecies.innerHTML  = citesResultsSpecies.innerHTML + '<div class="row">' +
			    '<tr>' +
			    '<td><b>'+r.pli_txt_scientificname+'</b></td>' +
			    '<td class="text-center px-1 py-1">'+r.pli_txt_cite+'</td>' +
			    '<td class="text-center px-1 py-1">'+r.pai_txt_name+'</td>' +
			    '<td class="text-center px-1 py-1"><a href="https://ora.correovirtual.com/wp/cites/reportes/fichaespecie/'+r.pli_int_id+'" class="btn btn-success"><?php echo $readmore; ?></a></td>' +
			    '</tr><!-- col -->'
		}



    })
</script>