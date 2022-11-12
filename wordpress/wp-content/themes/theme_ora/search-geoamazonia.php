<?php
$lang = substr( get_locale(), 0,2);
if($lang == 'es'):
	$title = "Resultados búsqueda Geoamazonia: ". $_REQUEST['s'];
	$noResults = 'No existen resultados';

elseif($lang == 'en'):
	$title = "Geoamazonia search results for: ". $_REQUEST['s'];
	$noResults = 'No results';

else:
	$title = "resultados da pesquisa de Geoamazonia: ". $_REQUEST['s'];
	$noResults = 'Não há resultados';

endif;
?>
<header class="page-header mt-5">
<h1 class="page-title">
    <?php echo $title; ?>
</h1>
</header>
<div class="container">
    <div id="geoamazoniaResults"></div>
</div>

<script>
    var geoamazoniaResults = document.getElementById('geoamazoniaResults')
    jQuery( document ).ready(function() {
        console.info('it works')
        var myHeaders = new Headers();
        myHeaders.append("Cookie", "sessionid=trckndx0nnf8ra4xkvtdi5i5rc15b7yn");
        var requestOptions = {
            method: 'GET',
            headers: myHeaders,
            redirect: 'follow'
        };

        fetch("https://maps.otca.org/api/base/?abstract__icontains=<?php echo $_REQUEST['s']?>&f_method=or&offset=0&purpose__icontains=<?php echo $_REQUEST['s']?>&title__icontains=<?php echo $_REQUEST['s']?>", requestOptions)
            .then(response => response.text())
            .then(resultS => (JSON.parse(resultS).objects.length > 0)?JSON.parse(resultS).objects.map(parseDocuments):geoamazoniaResults.innerHTML = '<div class="alert alert-warning"><?php echo $noResults; ?></div>')
            .catch(error => console.log('error', error));

		function parseDocuments(r){
            console.info(r)
            var d = r.abstract;
		    geoamazoniaResults.innerHTML  = geoamazoniaResults.innerHTML + '<div class="row">' +
			    '<div class="col">' +
			    '<h4>'+r.title+'</h4>' +
			    '<p class="text-justify px-5 py-2">'+d.substr(0,500)+'<br />' +
                '<b>SRID:&nbsp;</b>'+r.srid +
                '</p>' +
			    '<p class="text-right px-2 py-1">' +
			    '<a target="_blank" href="'+r.site_url +'/'+r.detail_url+'"  class="btn btn-success">&nbsp;'+
			    '<?php echo $readmore; ?></a></p>' +
			    '</div><!-- col -->' +
			    '</div><div class="row"><div class="col"><hr /></div> <!-- row -->'
		}
    })
</script>