<!-- Header Section Begin -->
<header class="header-section">
        <div class="ht-options">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="ht-widget">
                            <ul>
                                <?php
                                if(isset($isConnected) && $isConnected) {

                                echo '<a href="'.$this->Html->url(array('controller' => 'user', 'action' => 'profile', 'plugin' => false)).'">';
                                echo '<span class="btntop profile connecton"><i class="fa fa-user"></i> '.$Lang->get('Profil');
                                echo '</span></a>';

                                if($Permissions->can('ACCESS_DASHBOARD')) {
                                    echo '<a href="'.$this->Html->url(array('controller' => 'admin', 'action' => 'index', 'admin' => true, 'plugin' => false)).'">';
                                    echo '<span class="btntop padmin "><i class="fas fa-user"></i> '.$Lang->get('Panel Admin');
                                    echo '</span></a>';
                                    }  

                                    echo '<a href="'.$this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => false)).'">';
                                    echo '<span class="btntop logout "><i class="fas fa-sign-out-alt"></i> '.$Lang->get('USER__LOGOUT');
                                    echo '</span></a>';

                                    } else {
                                    echo '<a href="#" data-toggle="modal" data-target="#login"><span class="btntop connect noconnect"><i class="fas fa-sign-in-alt"></i> ' .$Lang->get('USER__LOGIN').'</span></a>';
                                    echo '<a href="#" data-toggle="modal" data-target="#register"><span class="btntop insc"><i class="fas fa-user-plus"></i> ' .$Lang->get('USER__REGISTER').'</span></a>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="ht-social">
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
            </div>
        </div>
        <div class="logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                                <?php
									if(isset($theme_config['logo']) && $theme_config['logo']) {
									echo '<img src="'.$theme_config['logo'].'" style="min-width:'.$theme_config['logo_width'].'px; max-width:'.$theme_config['logo_width'].'px; min-height:'.$theme_config['logo_height'].'px; max-height:'.$theme_config['logo_height'].'px;">';
									} else {
									echo '<img src="/theme/Gloomy/img/logo.png" style="min-width:'.$theme_config['logo_width'].'px; max-width:'.$theme_config['logo_width'].'px; min-height:'.$theme_config['logo_height'].'px; max-height:'.$theme_config['logo_height'].'px;">';
									}
								?>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-options">
            <div class="container">
                <div class="nav-menu">
                    <ul>
                            <div class="megamenu-wrapper">
                                <ul class="mw-nav">
                                    <li class=""><a href="/"><span>Accueil</span></a></li>  
                                    <?php if(!empty($nav)): ?>
							<?php $i = 0; ?>
							<?php foreach ($nav as $key => $value): ?>
							<?php if(empty($value['Navbar']['submenu'])): ?>
							<li class="scroll">
								<a class="hvr-underline-from-center" href="<?= $value['Navbar']['url'] ?>">
									<?php if(!empty($value['Navbar']['icon'])): ?>
									<i class="fa fa-<?= $value['Navbar']['icon'] ?>"></i>
									<?php endif; ?>
									<?= $value['Navbar']['name'] ?>
								</a>
							</li>
							<?php else: ?>
							<li class="dropdown">
								<a href="#" class="hvr-underline-from-center dropdown-toggle" data-toggle="dropdown" role="button"
								   aria-expanded="false">
									<?php if(!empty($value['Navbar']['icon'])): ?>
									<i class="fa fa-<?= $value['Navbar']['icon'] ?>"></i>
									<?php endif; ?>
									<?= $value['Navbar']['name'] ?>
									<i class="fa fa-angle-down">
									</i>
								</a>
								<ul class="dropdown" role="menu">
									<?php
									$submenu = json_decode($value['Navbar']['submenu']);
									 foreach ($submenu as $k => $v) {
									?>
									<li>
										<a class="hvr-underline-from-center"
										   href="<?= rawurldecode(rawurldecode($v)) ?>"<?= ($value['Navbar']['open_new_tab']) ?'target="_blank"':''?>>
										   <?= rawurldecode(str_replace('+', ' ', $k)) ?>
										</a>
									</li>

									<?php } ?>
								</ul>
							</li>
							<?php endif; ?>
							<?php endforeach; ?>
							<?php endif; ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->