<?php
$form_input = array('title' => $Lang->get('THEME__UPLOAD_LOGO'));

if(isset($config['logo']) && $config['logo']) {
  $logo = explode('/', $config['logo']);
  //$form_input['img'] = '/img/uploads/theme_logo.png';
  $form_input['img'] =  $config['logo'];
  $form_input['filename'] = 'theme_logo.png';
}
?>
<section class="content">
    <div class="col-md-4">
        <div class="callout callout-success" style="border: none;"><h4>Suggestions & Support</h4>Une suggestion pour le thème ? Un soucis avec le thème ? Je suis disponible sur discord ! <a class="krozix" href="https://discord.gg/XDTXjjX" class="color hcolor footer-a">Kr0ZiX#2228</a></div>
    </div>
    <div class="col-md-4">
        <div class="callout callout-danger" style="border: none;"><h4>Copyright : Mineweb & Gloomy</h4>Il est interdit de modifier les crédits du footer.<br>Votre licence sera suspendue si vous le faites.</div>
    </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $Lang->get('THEME__CUSTOMIZATION') ?></h3><span class="pull-right">Kr0ZiX</span>
        </div>
        <div class="card-body">
          <div class="tabbable">
            <ul class="nav nav-tabs">
             <li class="active"><a href="#tab1" class="nav-link text-dark" data-toggle="tab">Option General</a></li>
             <li><a href="#tab2" class="nav-link text-dark" data-toggle="tab">Maintenance</a></li>
             <li><a href="#tab3" class="nav-link text-dark" data-toggle="tab">Accueil</a></li>
             <li><a href="#tab4" class="nav-link text-dark" data-toggle="tab">Footer</a></li>
             </ul>
             <form method="post" enctype="multipart/form-data" data-ajax="false">
          <div class="tab-content">
            <div class="tab-pane active" id="tab1">
              <br>
               <div class="form-group">
                 <label>General</label>

                 <table class="table">
                    <tr>
                     <td><?= $this->element('form.input.upload.img', $form_input) ?></td>
                    
                     <tr>
                     <td>Hauteur du logo</td>
                     <td><i></i></td>
                     <td><input type="text" class="form-control" name="logo_height" value="<?= $theme_config['logo_height'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Largeur du logo</td>
                     <td><i></i></td>
                     <td><input type="text" class="form-control" name="logo_width" value="<?= $theme_config['logo_width'] ?>"></td>
                   </tr>
                   </tr>
                   <tr>
                     <td>Lien d'invitation Discord</td>
                     <td><i>Lien pour rejoindre votre discord</i></td>
                     <td><input type="text" class="form-control" name="urldiscord" value="<?= $theme_config['urldiscord'] ?>"></td>
                   </tr>
                   <tr>
                     <td>URL Image background</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="img_bg" value="<?= $theme_config['img_bg'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Afficher "Joueur en ligne"</td>
                     <td><i>Par default : Oui</i></td>
                     <td>
                        <select name="playeronline" class="form-control">
                            <option value="Oui"<?= ($config['playeronline'] == "Oui") ? ' selected' : '' ?>>Oui</option>
                            <option value="Non"<?= ($config['playeronline'] == "Non") ? ' selected' : '' ?>>Non</option>
                        </select>
                     </td>
                   </tr>
                   <tr>
                     <td>Afficher le texte sur la bannière</td>
                     <td><i>Par default : Oui</i></td>
                     <td>
                        <select name="textbann" class="form-control">
                            <option value="Oui"<?= ($config['textbann'] == "Oui") ? ' selected' : '' ?>>Oui</option>
                            <option value="Non"<?= ($config['textbann'] == "Non") ? ' selected' : '' ?>>Non</option>
                        </select>
                     </td>
                   </tr>

                   <?php if($theme_config['textbann'] == "Non") { ?>
                        <?php } else { ?>
                            <?php if($theme_config['textbann'] == "Oui") { ?>
                    <tr>
                     <td>Texte sur la bannière</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="text_slider" value="<?= $theme_config['text_slider'] ?>"></td>
                   </tr>
                            <?php } else { ?>
                        <?php } ?>
                    <?php } ?>
                 </table>
               </div>
            </div>

            <!-- Section 2 -->
            <div class="tab-pane" id="tab2">
              <br>

              <div class="form-group">
                <label>Maintenance</label>

                <table class="table">

                  <tr>
                    <td>Compteur</td>
                    <td>
                      <select name="compteur" class="form-control">
                         <option value="true"<?= ($config['compteur'] == "true") ? ' selected' : '' ?>>Oui</option>
                         <option value="false"<?= ($config['compteur'] == "false") ? ' selected' : '' ?>>Non</option>
                       </select>
                    </td>
                  </tr>


                  <tr>
                    <td>Mois</td>
                    <td>
                      <select name="mois" class="form-control">
                         <option value="January"<?= ($config['mois'] == "January") ? ' selected' : '' ?>>January</option>
                         <option value="February"<?= ($config['mois'] == "February") ? ' selected' : '' ?>>February</option>
                         <option value="March"<?= ($config['mois'] == "March") ? ' selected' : '' ?>>March</option>
                         <option value="April"<?= ($config['mois'] == "April") ? ' selected' : '' ?>>April</option>
                         <option value="May"<?= ($config['mois'] == "May") ? ' selected' : '' ?>>May</option>
                         <option value="June"<?= ($config['mois'] == "June") ? ' selected' : '' ?>>June</option>
                         <option value="July"<?= ($config['mois'] == "July") ? ' selected' : '' ?>>July</option>
                         <option value="August"<?= ($config['mois'] == "August") ? ' selected' : '' ?>>August</option>
                         <option value="September"<?= ($config['mois'] == "September") ? ' selected' : '' ?>>September</option>
                         <option value="October"<?= ($config['mois'] == "October") ? ' selected' : '' ?>>October</option>
                         <option value="November"<?= ($config['mois'] == "November") ? ' selected' : '' ?>>November</option>
                         <option value="December"<?= ($config['mois'] == "December") ? ' selected' : '' ?>>December</option>
                       </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Jour</td>
                    <td><input type="text" class="form-control" name="day" value="<?= $theme_config['day'] ?>"></td>
                  </tr>
                  <tr>
                    <td>Année</td>
                    <td><input type="text" class="form-control" name="years" value="<?= $theme_config['years'] ?>"></td>
                  </tr>
                  <tr>
                    <td>Heure</td>
                    <td><input type="text" class="form-control" name="hour" value="<?= $theme_config['hour'] ?>" placeholder="15:00:00"></td>
                  </tr>


                </table>


              </div>
            </div>


            <!-- Section 3 -->
            <div class="tab-pane" id="tab3">
              <br>

              <div class="form-group">
                <label>Page d'accueil</label>

                <table class="table">
                   <tr>
                     <td>Image pour la bannière de l'actualité</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="home_img_news" value="<?= $theme_config['home_img_news'] ?>"></td></td>
                   </tr>
                   <tr>
                     <td>Afficher Le Widget Discord</td>
                     <td><i>Par default : Oui</i></td>
                     <td>
                        <select name="widgetdiscord" class="form-control">
                            <option value="Oui"<?= ($config['widgetdiscord'] == "Oui") ? ' selected' : '' ?>>Oui</option>
                            <option value="Non"<?= ($config['widgetdiscord'] == "Non") ? ' selected' : '' ?>>Non</option>
                        </select>
                     </td>
                   </tr>

                   <?php if($theme_config['widgetdiscord'] == "Non") { ?>
                        <?php } else { ?>
                            <?php if($theme_config['widgetdiscord'] == "Oui") { ?>
                    <tr>
                     <td>Lien Widget Discord</td>
                     <td><i>/!\ Le lien dans les "" src="" /!\</i></td>
                     <td><input type="text" class="form-control" name="url_widget_discord" value="<?= $theme_config['url_widget_discord'] ?>"></td></td>
                   </tr>
                            <?php } else { ?>
                        <?php } ?>
                    <?php } ?>

                    <tr>
                     <td>Afficher Les stats</td>
                     <td><i>Par default : Oui</i></td>
                     <td>
                        <select name="statshome" class="form-control">
                            <option value="Oui"<?= ($config['statshome'] == "Oui") ? ' selected' : '' ?>>Oui</option>
                            <option value="Non"<?= ($config['statshome'] == "Non") ? ' selected' : '' ?>>Non</option>
                        </select>
                     </td>
                   </tr>

                </table>
              </div>
            </div>


            <!-- Section 4 -->
            <div class="tab-pane" id="tab4">
              <br>

              <div class="form-group">
                <label>Footer</label>

                <table class="table">
                  <tr>
                     <td>URL Image Footer</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="imgfooter" value="<?= $theme_config['imgfooter'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Texte</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="text1" value="<?= $theme_config['text1'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Texte bouton 1</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="btn_1" value="<?= $theme_config['btn_1'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Url bouton 1</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="url_btn_1" value="<?= $theme_config['url_btn_1'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Texte bouton 2</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="btn_2" value="<?= $theme_config['btn_2'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Url bouton 2</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="url_btn_2" value="<?= $theme_config['url_btn_2'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Texte bouton 3</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="btn_3" value="<?= $theme_config['btn_3'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Url bouton 3</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="url_btn_3" value="<?= $theme_config['url_btn_3'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Texte bouton 4</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="btn_4" value="<?= $theme_config['btn_4'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Url bouton 4</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="url_btn_4" value="<?= $theme_config['url_btn_4'] ?>"></td>
                   </tr>
                </table>
              </div>
            </div>

                            <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                <button class="btn btn-primary" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>" type="button" class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>

            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
