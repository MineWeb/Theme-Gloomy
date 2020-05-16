<!-- Update News Section Begin -->
<section class="update-news-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h5><span>Actualités - <?= $website_name ?></span></h5>
                    </div>
                    <div class="tab-elem">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane show active" id="tabs-1" role="tabpanel">
                              <div class="row">
                                <?php if(!empty($search_news)) {$i=1; foreach ($search_news as $k => $v) {?>
                                  <div class="col-sm-12">
                                    <div class="single-home-blog">
                                  <!-- Single blog Thumb -->
                                  <div class="card">
                                    <img src="<?= $theme_config['home_img_news'] ?>" class="card-img-top" alt="">
                                      <div class="card-body"> 
                                        <span style="float: right;">
                                          <p>Par <?= $v['News']['author'] ?>,</p>
                                            <h6 style="color: #c4c4c4;font-size: 12px;">    
                                              <i class="far fa-calendar" aria-hidden="true">&nbsp;le <?= $v['News']['created'] ?></i>
                                            </h6>
                                        </span>
                                      <a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $v['News']['slug'])) ?>">
                                        <h5 class="card-title" style="color: white;font-size: 30px;"><?= cut($v['News']['title'], 20) ?></h5>
                                      </a>
                                      <p><?= $this->Text->truncate($v['News']['content'], 110, array('ellipsis' => '...', 'html' => true)) ?></p>
                                  </div>
                              </div>
                            </div>
                          </div>
                        <?php if ($i++ == 3) break;}} else { ?>
                      <div class="col-12 text-center"><p style="color:#b70000">Aucun article n'a encore été posté pour le moment !</p></div>
                      <?php } ?>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-option">
                    <div class="hardware-guides">
                            <div class="section-title">
                                <h5>Top 3 voteurs</h5>
                            </div>
                            <div class="trending-item">
                            <?php if($EyPlugin->isInstalled('eywek.vote')) { ?>
								<?php
									$users_vote = ClassRegistry::init('Vote.Vote')->find('all', [
									'fields' => ['username', 'COUNT(id) AS count'],
									'conditions' => ['created LIKE' => date('Y') . '-' . date('m') . '-%'],
									'order' => 'count DESC',
									'group' => 'username',
									'limit' => 3
									]);
								?>
								<?php } else { ?>
									<div class="alert alert-danger"><b>Erreur :</b> Le plugin vote n'est pas installé.</div>
								<?php } ?>
									<?php $i_cl = 0;foreach($users_vote as $userv): $i_cl++; ?>
									<div id="player-info">
										<div id="title-votes">
                      <!--Add-->
                    <?php
                            $i = 0;
                            foreach ($users as $user) {
                                ++$i;
                                echo '<tr>';
                                    echo "<td>#$i";
                                        if ($i === 1)
                                            echo '&nbsp;<i style="color:rgb(255, 215, 0);" class="fa fa-trophy"></i>';
                                        else if ($i === 2)
                                            echo '&nbsp;<i style="color:rgb(192, 192, 192);" class="fa fa-trophy"></i>';
                                        else if ($i === 3)
                                            echo '&nbsp;<i style="color:rgb(176, 0, 14);" class="fa fa-trophy"></i>';
                                    echo "</td>";
                                echo '</tr>';
                            }
                            ?>
                          <!--Delete-->
                      <img src='<?= $this->Html->url(['controller' => 'API', 'action' => 'get_head_skin', 'plugin' => false, $userv['Vote']['username'], 32]); ?>' class='img-rounded' alt=''>
                      <strong class="player-name" style="text-transform: uppercase; color: #fff;"><?= $userv['Vote']['username']; ?></strong>
										  <div id="votes"><i class="far fa-check-square"></i> <?= $userv[0]['count']; ?> vote<?php if($userv[0]['count'] == 1){ ?> <?php }else{ ?>s<?php }?></div>
										</div>
									</div>
								<?php endforeach; ?>
                            </div>
                        </div>
                        <?php if($theme_config['widgetdiscord'] == "Non") { ?>
                        <?php } else { ?>
                            <?php if($theme_config['widgetdiscord'] == "Oui") { ?>
                              <div class="section-title">
                                <h5>Rejoignez-nous sur Discord</h5>
                            </div>
                              <div class="social-media">
                            <ul>
                            <iframe src="<?= $theme_config['url_widget_discord'] ?>" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
                            </ul>
                        </div>
                            <?php } else { ?>
                        <?php } ?>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if($theme_config['statshome'] == "Non") { ?>
                        <?php } else { ?>
                            <?php if($theme_config['statshome'] == "Oui") { ?>
                                <!--::cta_part start::-->
  <br>
    <div class="cta_part">
      <div class="container">
        <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="single_member_counter">
                        <center><h4>CONNECTÉS</h4></center>
                        <center><span class="counter" style="color: #c4c4c4;font-size: 30px;font-family: cinzel,serif;"><?= $server_infos['GET_PLAYER_COUNT'] ?></span></center>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="single_member_counter">
                        <center><h4>MEMBRES INSCRITS</h4></center>
                        <center><span class="counter" style="color: #c4c4c4;font-size: 30px;font-family: cinzel,serif;"><?= $users_count ?></span></center>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="single_member_counter">
                        <center><h4>VISITES UNIQUES</h4></center>
                        <center><span class="counter" style="color: #c4c4c4;font-size: 30px;font-family: cinzel,serif;"><?= $visits_count ?></span></center>
                    </div>
                </div>
            </div>
      </div>
    </div>
    <!--::cta_part end::-->
                            <?php } else { ?>
                        <?php } ?>
                    <?php } ?>

        
    </section>
    <!-- Update News Section End -->