<?php

    $langs_options = '';
    foreach ($langs as $k => $v) {
        $langs_options .= '
            <option lang="'.substr($k,0,2).'" value="'.$k.'">'.$v.'</option>';
    }

    // NavEntities
    $navEntities = '
                    <li><a href="#'.$t['cat']['logiciel']['l'].'" title="'.$t['inav']['logicielTitle'].'"><span class="sr-only">'.$t['inav']['logiciel'].'</span></a></li>
                    <li><a href="#'.$t['cat']['culture']['l'].'" title="'.$t['inav']['cultureTitle'].'"><span class="sr-only">'.$t['inav']['culture'].'</span></a></li>
                    <li><a href="#'.$t['cat']['cloud']['l'].'" title="'.$t['inav']['cloudTitle'].'"><span class="sr-only">'.$t['inav']['cloud'].'</span></a></li>
                    <li><a href="#'.$t['cat']['vrac']['l'].'" title="'.$t['inav']['vracTitle'].'"><span class="sr-only">'.$t['inav']['vrac'].'</span></a></li>
    ';
    $interNavHeader = '
            <div class="col-md-3">
                <ul class="navEntities">
                    '.$navEntities.'
                </ul>
            </div>
    ';
    $interNavFooter = '
        <div class="row finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    '.$navEntities.'
                </ul>
            </div>
        </div>
    ';

    // Carousel

    // Import des slides directement depuis le Framablog
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


    // Search
    $framaworld = 'framasoft.org';
    foreach ($s as $k => $v) {
        if($s[$k]['c']!='vert') {
            $parse = parse_url($s[$k]['l']);
            $framaworld .= ','.str_replace('www.','',$parse['host']);
        }
    }

    $search = '
        <form method="post" id="search" action="https://framabee.org">
            <div class="input-group input-group-lg">
                <input type="search" name="q" class="form-control">
                <span class="input-group-btn">
                    <div class="btn-group">
                        <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-search"></i> '.$t['_Rechercher'].' <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><button type="submit" class="btn btn-link" id="framabee">'.$t['_Rechercher'].' '.$t['_sur le web'].'</button></li>
                            <li><button type="button" class="btn btn-link" id="framaworld">'.$t['_Rechercher'].' '.$t['_sur Framasoft'].'</button></li>
                        </ul>
                    </div>
                </span>
            </div>
        </form>
    ';

?>

<!DOCTYPE html>
<html lang="<?php echo $t['meta']['lang'] ?>" dir="ltr">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title><?php echo $t['meta']['title'] ?></title>
    <meta name="url" content="<?php echo $l['F'] ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $t['meta']['desc'] ?>">
    <meta name="author" content="<?php echo $t['meta']['framasoft'] ?>">
    <meta name="keywords" content="<?php echo $t['meta']['keywords'] ?>" />

    <!--metas DC-->
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
    <meta name="DC.type" content="Text" />
    <meta name="DC.format" content="text/html" />
    <meta name="DC.identifier" scheme="URI" content="<?php echo $l['F'] ?>" />
    <meta name="DC.title" content="<?php echo $t['meta']['title'] ?>" />
    <meta name="DC.publisher" content="<?php echo $t['meta']['framasoft'] ?>" />
    <meta name="DC.contributor" content="<?php echo $t['meta']['framasoft'] ?>" />
    <meta name="DC.language" scheme="RFC3066" content="<?php echo $t['meta']['lang'] ?>" />
    <meta name="DC.subject" content="<?php echo $t['meta']['keywords'] ?>" />
    <meta name="DC.rights" content="<?php echo $t['meta']['license'] ?>" />
    <meta name="DC.description" content="<?php echo $t['meta']['desc'] ?>" />
    <!-- fin metas DC -->

    <!-- Les styles -->
    <link href="<?php echo $l['bsCSS'] ?>" rel="stylesheet" />
    <link href="<?php echo $l['faCSS'] ?>" rel="stylesheet" />
    <link href="<?php echo $l['fsCSS'] ?>" rel="stylesheet" />

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo $l['favicon'] ?>">
    <script src="<?php echo $l['jQuery'] ?>" type="text/javascript"></script>
    <script src="<?php echo $l['bsJS'] ?>" type="text/javascript"></script>

</head>

<body>
    <script src="<?php echo $l['navJS'] ?>" type="text/javascript"></script>
    <script>
        if ( window.addEventListener ) {
            var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
            window.addEventListener("keydown", function(e){
                kkeys.push( e.keyCode );
                if ( kkeys.toString().indexOf( konami ) >= 0 ) {
                alert('Konami old school ! pwnd :p');
                window.location = "http://framasoft.org";
                }
            }, true);
        }
        $(document).ready(function(){
            $('#carousel-actus').carousel()
            $("#play-pause a").on('click', function() {
                if(jQuery(this).children('.glyphicon').hasClass('glyphicon-pause')) {
                    jQuery(this).children('.glyphicon').addClass('glyphicon-play').removeClass('glyphicon-pause');
                    jQuery(this).attr('title','<?php echo $t['carousel']['play'] ?>');
                    jQuery(this).children('.sr-only').text('<?php echo $t['carousel']['play'] ?>');
                    jQuery('#carousel-actus').carousel('pause');
                } else {
                    jQuery(this).children('.glyphicon').addClass('glyphicon-pause').removeClass('glyphicon-play');
                    jQuery(this).attr('title','<?php echo $t['carousel']['pause'] ?>');
                    jQuery(this).children('.sr-only').text('<?php echo $t['carousel']['pause'] ?>');
                    jQuery('#carousel-actus').carousel('cycle');
                };
                return false;
            });

            $('#framaworld').on('click', function() {
                console.log('https://duckduckgo.com/?q='+$('#search input[name="q"]').val()+'site:<?php echo $framaworld ?>')
                location.href = 'https://duckduckgo.com/?q='+$('#search input[name="q"]').val()+' site:<?php echo $framaworld ?>';
            });
        });
    </script>
