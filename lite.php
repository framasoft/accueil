    <div class="row" id="internav">
        <div class="container">
            <form method="post" action="#">
                <div class="input-group input-group-sm pull-right col-md-3 col-xs-4">
                    <select name="lang" class="form-control" title="<?php echo $t['_Select the language'] ?>" >
                        <?php echo $langs_options ?>
                    </select>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default btn-sm" title="<?php echo $t['_Change the language'] ?>"><?php echo $t['_OK'] ?></button>
                    </span>
                </div>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="?m=full"><?php echo $t['inav']['full'] ?></a></li>
            </ul>
        </div>
    </div>
    <style>
        @media (min-width:768px) {
            .container.ombre,
            #internav .container {
                width:750px;
            }
        }
    </style>
    <div class="container ombre" id="topPgAccueil">
        <div class="row header">
            <div class="col-md-4">
                <h1 id="framasoft" class="sitename"><?php echo $t['meta']['F'] ?></h1>
            </div>
            <div class="col-md-8 text-right">
                <p class="headerSubTitle"><?php echo $t['meta']['slogan'] ?></p>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12">
                <h3><?php echo $t['pg1']['news'] ?></h3>
                <?php echo $carousel ?>
            </div>
        </div>

        <div class="row" style="margin-top:40px; margin-bottom:20px">
            <div class="col-xs-12">
            <?php echo $search ?>
            </div>
        </div>

        <hr class="trait" role="presentation" style="margin-left:-15px; margin-right:-15px">

        <?php foreach ($t['cat'] as $k => $v) {
            if ($k != 'communaute') {
                echo '
        <div class="row lite">
            <h3 class="titreFramaTrucs '.$t['cat'][$k]['c'].'">'.$t['cat'][$k]['t'].'</h3>
            <ul class="list-inline">
                ';
                foreach ($s as $j => $u) {
                    if ($s[$j]['c'] == $t['cat'][$k]['c']) {
                    $fb = ' fb_'.substr($s[$j]['c'],0,1).rand(1,4);
                        echo '
                <li class="col-xs-3 text-center">
                    <a href="'.$s[$j]['l'].'"
                       data-toggle="popover" data-placement="top" data-container="body"
                       data-content="'.strip_tags($s[$j]['pt']).'"
                       title="'.strip_tags($s[$j]['pd']).'" >
                        <i class="fa fa-3x fa-fw '.$s[$j]['i'].$fb.' fc_dark"></i>
                        <br/>'.$s[$j]['t'].'
                    </a>
                </li>';
                    }
                }
                echo '
            </ul>
        </div>';
            }
        }?>
    </div>