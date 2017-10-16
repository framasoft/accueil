<?php 

$html = file_get_contents('https://framablog.org');

libxml_use_internal_errors(true);
$page->preserveWhiteSpace = false;

$dom = new DOMDocument();
$dom->loadHTML($html);

$finder = new DomXPath($dom);
$captions = $finder->query("//*[contains(@class, 'captiontitle')]");
$images   = $finder->query("//*[contains(@class, 'slides')]/li/a/img");
$links   = $finder->query("//*[contains(@class, 'slides')]/li/a");

foreach ($captions as $k => $node) {
    $t['slide'][$k]['d'] = $node->textContent;
}
foreach ($images as $k => $node) {
    $t['slide'][$k]['i'] = $node->getAttribute('src');
}
foreach ($links as $k => $node) {
    $t['slide'][$k]['l'] = $node->getAttribute('href');
}

/*$tmp_dom = new DOMDocument(); 
foreach ($slides as $node) 
    {
    $tmp_dom->appendChild($tmp_dom->importNode($node,true));
    }
$innerHTML.=trim($tmp_dom->saveHTML()); 
echo $innerHTML;*/

    // Carousel
    $carousel = '
        <!--  Carousel -->
        <div id="carousel-actus" class="carousel slide">
            <div class="carousel-inner">';

    foreach ($t['slide'] as $k => $v) {
        $active = ($k == 0) ? 'active' : '';
        $carousel .= '
            <div class="item '.$active.'">
                <a href="'.$t['slide'][$k]['l'].'"><img src="'.$t['slide'][$k]['i'].'" alt="" />
                    <div class="carousel-caption">
                        <p>'.$t['slide'][$k]['d'].'</p>
                    </div>
                </a>
            </div>';
    }

    $carousel .= '
        </div>
            <!-- Controls -->
            <p class="text-center" id="play-pause"><a href="#play-pause" class="carousel-control" title="'.$t['carousel']['pause'].'"><span class="glyphicon glyphicon-pause"></span><span class="sr-only">'.$t['carousel']['pause'].'</span></a></p>
            <a class="left carousel-control" href="#carousel-actus" role="button" data-slide="prev" title="'.$t['carousel']['prev'].'">
                <i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">'.$t['carousel']['prev'].'</span>
            </a>
            <a class="right carousel-control" href="#carousel-actus" role="button" data-slide="next" title="'.$t['carousel']['next'].'">
                <i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">'.$t['carousel']['next'].'</span>
            </a>
        </div>
    ';
    
    echo $carousel;