<?php
require('i18n.php');


include('header.php');
?>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <figure id="pingouinVolant" class="pull-right" >
                        <img src="<?php echo $l['pinchot'] ?>" alt="" />
                    </figure>

                    <ul class="accroche">
                        <?php echo $t['pg1']['accroche'] ?>
                    </ul>
                </div>

                <div class="row containerActu">
                    <h3 id="news"><?php echo $t['pg1']['news'] ?></h3>
                </div>
                <!--  Carousel -->
                <div id="carousel-actus" class="carousel slide">
                    <div class="carousel-inner">
                    <?php
                    foreach ($t['slide'] as $k => $v) {
                        $active = ($k == 0) ? 'active' : '';
                        echo '
                        <div class="item '.$active.'">
                            <a href="'.$t['slide'][$k]['l'].'"><img src="'.$t['slide'][$k]['i'].'" alt="" />
                                <div class="carousel-caption">
                                    <p>'.$t['slide'][$k]['d'].'</p>
                                </div>
                            </a>
                        </div>';
                    }?>
                    </div>

                    <!-- Controls -->
                    <p class="text-center" id="play-pause"><a href="#play-pause" class="carousel-control" title="<?php echo $t['carousel']['pause'] ?>"><span class="glyphicon glyphicon-pause"></span><span class="sr-only"><?php echo $t['carousel']['pause'] ?></span></a></p>

                    <a class="left carousel-control" href="#carousel-actus" role="button" data-slide="prev" title="<?php echo $t['carousel']['prev'] ?>">
                        <i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only"><?php echo $t['carousel']['prev'] ?></span>
                    </a>

                    <a class="right carousel-control" href="#carousel-actus" role="button" data-slide="next" title="<?php echo $t['carousel']['next'] ?>">
                        <i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only"><?php echo $t['carousel']['next'] ?></span>
                    </a>
                </div>

                <p class="homeAlerte well"><?php echo $t['pg1']['annuaire'] ?></p>
            </div>
            <div class="col-md-4" id="blocFramatrucs">
            <?php foreach ($t['cat'] as $k => $v) {
                if ($k != 'communaute') {
                    echo'
                <h4 class="titreFramaTrucs"><a href="#'.$t['cat'][$k]['l'].'" class="'.$t['cat'][$k]['c'].'">'.$t['cat'][$k]['t'].'</a></h4>
                <div class="row">
                    <ul class="listeFramaTrucs col-md-12">
                ';
                    foreach ($s as $j => $u) {
                        if ($s[$j]['c'] == $t['cat'][$k]['c']) {
                            echo '
                        <li>'.$s[$j]['d'].' <a href="'.$s[$j]['l'].'" class="'.$s[$j]['c'].'">≻   '.$s[$j]['t'].'</a></li>';
                        }
                    }
                    echo '
                    </ul>
                </div>';
                }
            }?>
            </div>
        </div>

        <?php echo $interNavFooter ?>
    </div>


    <!-- communauté -->
    <div class="container ombre" id="<?php echo $t['cat']['communaute']['l'] ?>">
        <div class="row header">
            <div class="col-md-4">
                <h1 class="sitename"><a href="#<?php echo $t['cat']['communaute']['l'] ?>" class="<?php echo $t['cat']['communaute']['c'] ?>"><?php echo $t['cat']['communaute']['t'] ?></a></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle"><?php echo $t['cat']['communaute']['d'] ?></p>
            </div>
            <?php echo $interNavHeader ?>
        </div>

        <div class="row" id="contentCommunaute">
            <div class="col-md-4 blocCommunaute" >
                <img src="<?php echo $l['team1'] ?>" alt="" />
            </div>

            <?php foreach ($t['pg2'] as $k => $v) {
                if ($k!='partenaire') {
                    echo '
            <div class="col-md-4 blocCommunaute">
                <h4 class="titreBloc">'.$t['pg2'][$k]['h'].'</h4>
                <p class="miniBlocSubTitle">'.$t['pg2'][$k]['d'].'</p>
                <p class="miniBlocTexte">'.$t['pg2'][$k]['t'].'</p>
            </div>';
                } else {
                    echo '
            <div class="col-md-12 blocCommunaute">
                <h4 class="titreBloc">'.$t['pg2'][$k]['h'].'</h4>
                <p class="miniBlocTexte">'.$t['pg2'][$k]['d'].'</p>
                <ul class="list-inline text-center">
                    '.$t['pg2'][$k]['t'].'
                </ul>
            </div>';
                }
                if ($k=='soutenir') {
                    echo '
            <div class="col-md-4 blocCommunaute">
                <img src="'.$l['team2'].'" alt="" />
            </div>';
                }
            }?>
        </div>
        <?php echo $interNavFooter ?>
    </div >


    <!-- Logiciel Libre -->
    <div class="container ombre" id="<?php echo $t['cat']['logiciel']['l'] ?>">
        <div class="row header">
            <div class="col-md-4">
                <h1 class="sitename <?php echo $t['cat']['logiciel']['c'] ?>"><a href="#<?php echo $t['cat']['logiciel']['l'] ?>" class="<?php echo $t['cat']['logiciel']['c'] ?>"><?php echo $t['cat']['logiciel']['t'] ?></a></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle"><?php echo $t['cat']['logiciel']['d'] ?></p>
            </div>
            <?php echo $interNavHeader ?>
        </div>

        <div class="row">
            <div class="col-md-8" id="presentationLogiciels">
                <h3 class="presentation"><?php echo $t['pg3']['pres']['h'] ?></h3>
                <p class="blocSubTitle"><?php echo $t['pg3']['pres']['d'] ?></p>
                <p class="blocTexte"><?php echo $t['pg3']['pres']['t1'] ?></p>
                <p class="blocTexte"><?php echo $t['pg3']['pres']['t2'] ?></p>
            </div>

            <div class="col-md-4">
                <figure id="pingouinMuseeWindows">
                    <img src="<?php echo $l['museeWindows'] ?>" alt="" />
                </figure>
            </div>
        </div>

        <div class="row">
        <?php foreach ($s as $k => $v) {
            $evl = '';
            if ($k == 'key' || $k == 'dvd') {
                $evl=  '
                <p class="EnVenteLibre">
                    <a href="'.$l['evl'].'" class="'.$s[$k]['c'].'"
                       title="'.$t['pg3'][$k]['evl'].'">
                        <span aria-hidden="true">[€]</span>
                        <span class="sr-only">'.$t['evl'].'</span>
                    </a>
                </p>';
            }
            if ($s[$k]['c'] == 'bleu') {
                echo '
            <div class="col-md-3 miniBloc">
                <a href="'.$s[$k]['l'].'" ><h4 class="'.$s[$k]['c'].'">'.$s[$k]['t'].'</h4></a>
                <p class="miniBlocSubTitle '.$s[$k]['i'].'">'.$s[$k]['pd'].'</p>
                <p class="miniBlocTexte">'.$s[$k]['pt'].'</p>
                '.$evl.'
            </div>';
            }
        }?>
        </div>
        <?php echo $interNavFooter ?>
    </div>


    <!-- Culture Libre -->
    <div class="container ombre" id="<?php echo $t['cat']['culture']['l'] ?>">
        <div class="row header">
            <div class="col-md-4">
                <h1 class="sitename <?php echo $t['cat']['culture']['c'] ?>"><a href="#<?php echo $t['cat']['culture']['l'] ?>" class="<?php echo $t['cat']['culture']['c'] ?>"><?php echo $t['cat']['culture']['t'] ?></a></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle"><?php echo $t['cat']['culture']['d'] ?></p>
            </div>
            <?php echo $interNavHeader ?>
        </div>

        <div class="row">
            <div class="col-md-6" id="presentationLibre">
                <div class="row col-md-12">
                    <h3 class="presentation"><?php echo $t['pg4']['pres']['h'] ?></h3>
                    <p class="blocSubTitle"><?php echo $t['pg4']['pres']['d'] ?></p>
                    <p class="blocTexte"><?php echo $t['pg4']['pres']['t1'] ?></p>
                    <p class="blocTexte"><?php echo $t['pg4']['pres']['t2'] ?></p>
                </div>

                <div class="row col-md-12">
                    <figure id="pingouinsQuelquesBriques">
                        <img src="<?php echo $l['briques'] ?>" alt="" />
                    </figure>
                </div>

                <div class="row col-md-12">
                    <blockquote class="well">
                    <?php echo $t['pg4']['quote']['t'] ?>
                    </blockquote>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
        <?php foreach ($s as $k => $v) {
            $evl = '';
            if ($k == 'book') {
                        $evl=  '
                <p class="EnVenteLibre">
                    <a href="'.$l['evl'].'" class="'.$s[$k]['c'].'"
                       title="'.$t['pg4'][$k]['evl'].'">
                        <span aria-hidden="true">[€]</span>
                        <span class="sr-only">'.$t['evl'].'</span>
                    </a>
                </p>';
            }
            if ($s[$k]['c'] == 'rouge') {
                echo '
            <div class="col-md-6 miniBloc2">
                <a href="'.$s[$k]['l'].'" ><h4 class="'.$s[$k]['c'].'">'.$s[$k]['t'].'</h4></a>
                <p class="miniBlocSubTitle '.$s[$k]['i'].'">'.$s[$k]['pd'].'</p>
                <p class="miniBlocTexte">'.$s[$k]['pt'].'</p>
                '.$evl.'
            </div>';
            }
            if ($k == 'book' || $k == 'lang') {
                echo '
                </div>
                <div class="row">';
            }
        }?>
                </div>
            </div>
        </div>

        <?php echo $interNavFooter ?>
    </div>

    <!-- Cloud libre -->
    <div class="container ombre" id="<?php echo $t['cat']['cloud']['l'] ?>">
        <div class="row header">
            <div class="col-md-4">
                <h1 class="sitename <?php echo $t['cat']['cloud']['c'] ?>"><a href="#<?php echo $t['cat']['cloud']['l'] ?>" class="<?php echo $t['cat']['cloud']['c'] ?>"><?php echo $t['cat']['cloud']['t'] ?></a></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle"><?php echo $t['cat']['cloud']['d'] ?></p>
            </div>
            <?php echo $interNavHeader ?>
        </div>

        <div class="row">
            <div class="col-md-6" id="presentationServices">
                <div class="row col-md-12" id="blocServices">
                    <h3 class="presentation"><?php echo $t['pg5']['pres']['h'] ?></h3>
                    <p class="blocSubTitle"><?php echo $t['pg5']['pres']['d'] ?></p>
                    <p class="blocTexte"><?php echo $t['pg5']['pres']['t1'] ?></p>
                    <p class="blocTexte"><?php echo $t['pg5']['pres']['t2'] ?></p>
                </div>
            </div>

        <?php foreach ($s as $k => $v) {
            if ($s[$k]['c'] == 'vert') {
                // Mise en page avec des éléments séparateurs
                switch ($k) {

                    // Début Framapad
                    case 'pad' : echo '
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 miniBloc2">
                        '; break;

                    // Framacalc
                    case 'calc' : echo '
                    <div class="col-md-6 miniBloc2">
                        '; break;

                    // Nlle ligne Framadate
                    case 'date' : echo '
                    </div>
                </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 miniBloc">
                        '; break;

                    // Nlle ligne + Image Framabee
                    case 'bee': echo '
                    </div>
                </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 miniBloc">
                        <a href="'.$l['DIo'].'"><img src="'.$l['dioStallman'].'" alt="" class="img-responsive"/></a>
                    </div>
                    <div class="col-md-6 miniBloc">
                        '; break;

                    // Nlle ligne Framasphère
                    case 'sphere' : echo '
                    </div>
                </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 miniBloc">
                        '; break;

                    // Nlle ligne + 2 images Framacarte
                    case 'carte' : echo '
                    <div class="col-md-3 miniBloc">
                        <a href="'.$l['DIo'].'"><img src="'.$l['dioCarte'].'" alt="" class="img-responsive"/></a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 miniBloc">
                        <a href="'.$l['DIo'].'"><img src="'.$l['dioVillage'].'" alt="" class="img-responsive"/></a>
                    </div>
                    <div class="col-md-3 miniBloc">
                        '; break;

                    // Nlle ligne Framadrive
                    case 'drive' : echo '
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 miniBloc">
                        '; break;

                    // Par défaut ligne 4 blocs
                    default : echo '
                    <div class="col-md-3 miniBloc">
                        '; break;

                }

                // Contenu des blocs
                echo '
                        <a href="'.$s[$k]['l'].'" ><h4 class="'.$s[$k]['c'].'">'.$s[$k]['t'].'</h4></a>
                        <p class="miniBlocSubTitle '.$s[$k]['i'].'">'.$s[$k]['pd'].'</p>
                        <p class="miniBlocTexte">'.$s[$k]['pt'].'</p>
                    </div>
                    ';
            }
        }?>
                    <div class="col-md-6 miniBloc">
                        <a href="<?php echo $l['DIo'] ?>"><img src="<?php echo $l['dioFight'] ?>" alt="" class="img-responsive"/></a>
                    </div>

                </div>
            </div>

        </div>

        <?php echo $interNavFooter ?>
    </div>

    <!-- Vrac Libre -->
    <div class="container ombre" id="<?php echo $t['cat']['vrac']['l'] ?>">

        <div class="row header">
            <div class="col-md-4">
                <h1 class="sitename <?php echo $t['cat']['vrac']['c'] ?>"><a href="#<?php echo $t['cat']['vrac']['l'] ?>" class="<?php echo $t['cat']['vrac']['c'] ?>"><?php echo $t['cat']['vrac']['t'] ?></a></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle"><?php echo $t['cat']['vrac']['d'] ?></p>
            </div>
            <?php echo $interNavHeader ?>
        </div>

        <div class="row">
            <div class="col-md-8" id="presentationLibrenVrac">
                <h3 class="presentation"><?php echo $t['pg6']['pres']['h'] ?></h3>
                <p class="blocSubTitle"><?php echo $t['pg6']['pres']['d'] ?></p>
                <p class="blocTexte"><?php echo $t['pg6']['pres']['t'] ?></p>
            </div>

            <div class="col-md-4" id="AlaUne">
                <h4 class="titreBloc"><?php echo $t['pg6']['une']['h'] ?></h4>
                <p class="miniBlocSubTitle"><?php echo $t['pg6']['une']['d'] ?></p>
                <figure id="GeGeGenerator">
                    <a href="<?php echo $l['LabGeGe'] ?>" ><img src="<?php echo $l['GeGe'] ?>" alt="<?php echo $t['pg6']['une']['d'] ?>" /></a>
                </figure>
                <p class="legende"><?php echo $t['pg6']['une']['t'] ?></p>
            </div>
        </div>

        <div class="row">
        <?php foreach ($s as $k => $v) {
            if ($s[$k]['c'] == 'jaune') {
                echo '
            <div class="col-md-6 miniBloc">
                <a href="'.$s[$k]['l'].'" ><h4 class="'.$s[$k]['c'].'">'.$s[$k]['t'].'</h4></a>
                <p class="miniBlocSubTitle '.$s[$k]['i'].'">'.$s[$k]['pd'].'</p>
                <p class="miniBlocTexte">'.$s[$k]['pt'].'</p>
            </div>';
            }
        }?>
        </div>
        <?php echo $interNavFooter ?>
    </div>

</body>
</html>