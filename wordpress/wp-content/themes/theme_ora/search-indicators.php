<?php
$lang = substr( get_locale(), 0,2);
if($lang == 'es'):
	$title = "Resultados búsqueda indicadores para: ". $_REQUEST['s'];
	$noResults = 'No existen resultados';
elseif($lang == 'en'):
	$title = "Indicators search results for: ". $_REQUEST['s'];
	$noResults = 'No results';
else:
	$title = "Resultados da pesquisa de indicadores: ". $_REQUEST['s'];
	$noResults = 'Não há resultados';
endif;
?>
<header class="page-header mt-5">
<h1 class="page-title">
    <?php echo $title; ?>
</h1>
</header>
<div class="container">
    <div id="indicatorsResults"></div>
</div>

<script>
    var indicatorsResults = document.getElementById('indicatorsResults')

    jQuery( document ).ready(function() {
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };

        var myHeaders = new Headers();
        myHeaders.append("Authorization", "Basic dGVzdGNsaWVudDp0ZXN0c2VjcmV0");

        var requestOptions = {
            method: 'GET',
            headers: myHeaders,
            redirect: 'follow'
        };

        fetch("https://apps.otca.org/indicators/results?le=<?php echo $lang; ?>&k=<?php echo $_REQUEST['s']; ?>", requestOptions)
            .then(response => response.text())
            .then(result => (JSON.parse(result).length > 0)?JSON.parse(result).map(parseDocuments):indicatorsResults.innerHTML = '<div class="alert alert-warning"><?php echo $noResults; ?></div>')
            .catch(error => console.log('error', error));

		function parseDocuments(r){
            console.info(r)
            var d = r.ind_txt_description;

            if(r.url != null){
                indicatorsResults.innerHTML  = indicatorsResults.innerHTML + '<div class="row">' +
                    '<div class="col">' +
                    '<h4>'+r.ind_txt_name+'</h4>' +
                    '<p class="text-justify px-5 py-2">'+d.substr(0,300)+'</p>' +
                    '<p class="text-right px-2 py-1">' +
                    '<a href="'+r.url +'"  class="btn btn-success">&nbsp;'+
                    '<?php echo $readmore; ?></a></p>' +
                    '</div><!-- col -->' +
                    '</div><div class="row"><div class="col"><hr /></div> <!-- row -->'
            }else{
                indicatorsResults.innerHTML  = indicatorsResults.innerHTML + '<div class="row">' +
                    '<div class="col">' +
                    '<h4>'+r.ind_txt_name+'</h4>' +
                    '<p class="text-justify px-5 py-2">'+d.substr(0,300)+'</p>' +
                    '</div><!-- col -->' +
                    '</div><div class="row"><div class="col"><hr /></div> <!-- row -->'
            }


		}
    })
</script>