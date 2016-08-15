<?php
require 'scraperwiki.php';
    require 'scraperwiki/simple_html_dom.php';
?>


<?php
$url="http://202.61.43.53/cfms-hc-search/cases/search-result?CasesSearch%5BCASENAMECODE%5D=&CasesSearch%5BCASENO%5D=&CasesSearch%5BCASEYEAR%5D=&CasesSearch%5BCIRCUITCODE%5D=1&CasesSearch%5BPARTY%5D=&CasesSearch%5BMATTERCODE%5D=&CasesSearch%5BGOVT_AGENCY_CODE%5D=&CasesSearch%5BFIRNO%5D=&CasesSearch%5BFIRYEAR%5D=&CasesSearch%5BPOLICESTATIONCODE%5D=&CasesSearch%5BisPending%5D=3&page=1";
$html = scraperWiki::scrape( $url );
$dom = new simple_html_dom();
$dom->load($html);
