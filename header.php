<?php

    $langs_options = '';
    foreach ($langs as $k => $v) {
        $langs_options .= '
            <option lang="'.substr($k,0,2).'" value="'.$k.'">'.$v.'</option>';
    }


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
        <div class="row" class="finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    '.$navEntities.'
                </ul>
            </div>
        </div>
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
        });
    </script>

    <!-- accueil Top -->
    <div class="container ombre" style="margin-top:20px;" id="topPgAccueil">
        <div class="row header">
            <div class="col-md-4">
                <h1 id="framasoft" class="sitename"><?php echo $t['meta']['F'] ?></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle"><?php echo $t['meta']['slogan'] ?></p>
            </div>
            <div class="col-md-3">
                <ul class="navEntities">
                    <?php echo $navEntities ?>
                </ul>
            </div>
        </div>

