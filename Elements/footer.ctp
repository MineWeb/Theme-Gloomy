
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-about">
                        <div class="fa-logo">
                            <a href="/"><img src="<?= $theme_config['imgfooter'] ?>" alt=""></a>
                        </div>
                        <p><?= $theme_config['text1'] ?></p>
                        <div class="fa-social">
                        <?php if (!empty($findSocialButtons)): foreach ($findSocialButtons as $key => $value): ?>
							<?php endforeach; endif; ?>
							<?php if(!empty($facebook_link)): ?>
								<a href="<?= $facebook_link ?>"><i class="fab fa-facebook-f"></i></a>
							<?php endif; if(!empty($twitter_link)): ?>
								<a href="<?= $twitter_link ?>"><i class="fab fa-twitter"></i></a>
							<?php endif; if(!empty($youtube_link)): ?>
								<a href="<?= $youtube_link ?>"><i class="fab fa-youtube"></i></a>
                        <?php endif; ?>
                        <a href="<?= $theme_config['urldiscord'] ?>"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="tags-cloud" style="float: right;">
                        <div class="section-title">
                            <h5>Liens Utiles</h5>
                        </div>
                        <div class="tag-list">
                            
                            <a href="<?= $theme_config['url_btn_1'] ?>"><span><?= $theme_config['btn_1'] ?></span></a><br>
                            <a href="<?= $theme_config['url_btn_2'] ?>"><span><?= $theme_config['btn_2'] ?></span></a><br>
                            <a href="<?= $theme_config['url_btn_3'] ?>"><span><?= $theme_config['btn_3'] ?></span></a><br>
                            <a href="<?= $theme_config['url_btn_4'] ?>"><span><?= $theme_config['btn_4'] ?></span></a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ca-text"><p>
                        <?= $website_name ?> &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ca-text" style="float:right;">
                       Thème Gloomy créé avec <i class="fa fa-heart" aria-hidden="true"></i> par <a href="https://twitter.com/Kr0ZiX" target="_blank">Kr0ZiX</a> | Propulsé par <a href="https://mineweb.org/" target="_blank">MineWeb</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>