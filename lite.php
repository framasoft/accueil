    <div class="row" id="internav">
        <div class="container">
        </div>
    </div>
    <style>
        @media (min-width:768px) {
            .container.ombre,
            #internav .container {
                width:750px;
            }
        }
        .sitename {
            margin-top:0;
        }
        .headerSubTitle {
            padding: 0.5em 0;
            margin-left: -5px;
        }
        .header {
            border-bottom: none;
        }
        .header div.trait {
            margin: 0 15px;
            width:calc(100% - 30px);
        }
    </style>
    <div class="container ombre" id="topPgAccueil">
        <div class="row header">
            <div class="col-md-8">
                <h1 id="framasoft" class="sitename"><?php echo $t['meta']['F'] ?></h1>
                <p class="headerSubTitle"><?php echo $t['meta']['slogan'] ?></p>
            </div>
            <div class="col-md-4">
                 <div class="pull-right">
                    <a href="<?php echo $l['F'] ?>/?m=lite" class="btn btn-default" title="<?php echo $t['inav']['lite'] ?>">
                        <i class="fa fa-lg fa-th-large" aria-hidden="true"></i>
                        <span class="sr-only"><?php echo $t['inav']['lite'] ?></span>
                    </a>

                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            title="<?php echo $t['_Change the language'] ?>">
                            <i class="fa fa-lg fa-language" aria-hidden="true"></i> Langue <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <?php echo $langs_options ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 trait"></div>
        </div>

        <div class="row" style="margin-top:40px; margin-bottom:20px">
            <div class="col-xs-12">
            <?php echo $search ?>
            </div>
        </div>

        <?php
        $temp = array(
            'cloud'    => '',
            'logiciel' => '',
            'culture'  => '',
            'vrac'     => ''
        );

        foreach ($temp as $k => $v) {
            echo '
        <div class="row lite">
            <h3 class="titreFramaTrucs '.$t['cat'][$k]['c'].'">'.$t['cat'][$k]['t'].'</h3>
            <ul class="list-inline">
                ';
                foreach ($s as $j => $u) {
                    if ($s[$j]['c'] == $t['cat'][$k]['c']) {
                    $fb = ' fb_'.str_replace('j5','j6', str_replace('b5', 'b9', substr($s[$j]['c'],0,1).'5'));
                        echo '
                <li class="col-xs-4 col-sm-3 text-center">
                    <a href="'.$s[$j]['l'].'"
                       data-toggle="popover" data-placement="top" data-container="body"
                       data-content="'.strip_tags($s[$j]['pt']).'"
                       title="'.strip_tags($s[$j]['pd']).'" >
                        <i class="fa fa-3x fa-fw '.$s[$j]['i'].$fb.' fc_light"></i>
                        <br/>'.$s[$j]['t'].'
                    </a>
                </li>';
                    }
                }
                echo '
            </ul>
        </div>';
        }?>

        <hr class="trait" role="presentation" style="margin-left:-15px; margin-right:-15px">

        <div class="row">
            <div class="col-xs-12">
                <h3><?php echo $t['pg1']['news'] ?></h3>
                <?php echo $carousel ?>
            </div>
        </div>
    </div>