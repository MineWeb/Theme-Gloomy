<section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="hs-text">
                        <?php if($theme_config['textbann'] == "Non") { ?>
                        <?php } else { ?>
                            <?php if($theme_config['textbann'] == "Oui") { ?>
                                <h3><?= $theme_config['text_slider'] ?></h3>
                            <?php } else { ?>
                        <?php } ?>
                    <?php } ?>

                    <?php if($theme_config['playeronline'] == "Non") { ?>
                        <?php } else { ?>
                            <?php if($theme_config['playeronline'] == "Oui") { ?>
                                <div class="label"><span style="font-size: 20px;"><?= $server_infos['GET_PLAYER_COUNT'] ?> Joueurs en ligne</span></div>
                            <?php } else { ?>
                        <?php } ?>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
</section>