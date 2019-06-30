<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Meta data -->
    <meta name="description" content="<?=isset($meta['site_desc']) ? $meta['author'] : $settings['description']?>">
    <meta name="keywords" content="<?=isset($meta['site_keyw']) ? $meta['author'] : $settings['keywords']?>">
    <meta name="author" content="<?=isset($meta['author']) ? $meta['author'] : $settings['author']?>">

    <title><?=isset($meta['site_title']) ? $meta['site_title'] : $settings['title']?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= Url::pub('styles\main.min.css')?>" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    
      <a class="navbar-brand" href="index.html"><?=$settings['title']?></a>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php foreach(navmenusQ(1) as $navmenus): ?>

            <li class="nav-item<?= !empty($navmenus['submenu']) ? ' dropdown' : null ?>">
                  <?php if(isset($navmenus['submenu'])): ?>
                    <a class="nav-link<?= !empty($navmenus['submenu']) ? ' dropdown-toggle' : null ?>" href="<?= $navmenus["url"] ?>" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true"<?= !empty($navmenus['submenu']) ? ' dropdown-toggle' : null ?> aria-expanded="false">
                      <?=$navmenus["title"]?>
                    </a>
                    <div class="dropdown-menu<?= !empty($navmenus['submenu']) ? ' dropdown-menu-right' : null ?>" aria-labelledby="navbarDropdownPortfolio">
                      <?php foreach($navmenus['submenu'] as $navsubmenusK=>$navsubmenus): ?>
                        <a class="dropdown-item" href="<?= $navsubmenus["url"] ?>"><?= $navsubmenus["title"] ?></a>
                      <?php endforeach; ?>
                    </div>               
                  <?php else: ?>
                    <a class="nav-link<?= !empty($navmenus['submenu']) ? ' dropdown-toggle' : null ?>" href="<?= $navmenus["url"] ?>" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?=$navmenus["title"]?>
                    </a>
                  <?php endif; ?>
            </li>
          <?php endforeach;?>
        </ul>
      </div>


      <!-- Login  -->
        <?php if(session('user_id')): ?>

          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">     
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= session('user_name');?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="<?=Url::site('_layouts/profile')?>">Profil</a>
            <?php if(session('user_rank')==1):?>
            <a class="dropdown-item" href="<?=Url::site('admin')?>">Admin Sayfası</a>
            <?php endif; ?>
            <a class="dropdown-item" href="<?=Url::site("exit")?>">Çıkış Yap</a>
          </div>
          </li>
            </ul>
          </div>
        <?php else: ?>

          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?=Url::site("login")?>">Giriş Yap</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html">Register</a>
              </li>
              </ul>
          </div>

        <?php endif; ?>

        
        </div>
  </nav>