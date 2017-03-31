<?php 
include "static/header.php";
?>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/"><span class ="nav_icon"><img src="/img/news.svg"/></span>
        <?php print_r($lang["menu.news"]); ?>
        </a></li>
        <li><a href="/comp.php"><span class ="nav_icon"><img src="/img/competences.svg"/></span>
        <?php print_r($lang["menu.comp"]); ?>
        </a></li>
        <li><a class="active" href="/projet.php"><span class ="nav_icon"><img src="/img/projets.svg"/></span>
        <?php print_r($lang["menu.project"]); ?>
        </a></li>
        <li><a href="/cv.php"><span class ="nav_icon"><img src="/img/cv.svg"/></span>
        <?php print_r($lang["menu.cv"]); ?>
        </a></li>
        <li><a href="/divers.php"><span class ="nav_icon"><img src="/img/divers.svg"/></span>
        <?php print_r($lang["menu.other"]); ?>
        </a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><span><img class="flag" src="/img/flags/<?php print_r($_SESSION['lang']); ?>.svg" /><span class="caret"></span></span></a>
          <ul class="dropdown-menu">
            <li><a href="?lang=fr"><img class="flag" src="/img/flags/fr.svg" />Français</a></li>
            <li><a href="?lang=en"><img class="flag" src="/img/flags/en.svg" />English</a></li>
          </ul>
        </li>
      </ul>
      </div>
    </div>
  </nav>

    <!-- FIN DU NAV-->
    
    <!-- Debut du corps -->
    <div class="container">
     <?php
          foreach ($lang["projects"] as $article) {
            ?>
            <div class="row">
              <section class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10">
                <header>
                  <h1><?php print_r($article->title); ?></h1>
                  <div class="date"><?php print_r($article->date); ?></div>
                  <div class="header_img">
                    <a href="<?php print_r($article->url); ?>">
                      <img src="<?php print_r($article->header_img); ?>"/>
                    </a>
                  </div>
                </header>
                <article>
                  <?php print_r($article->corps); ?>
                </article>
              </section>
            </div>
          <?php
          }
          ?>    

        <?php
        include "static/footer.php"
        ?>