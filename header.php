
<!DOCKTYPE html>
<html>
  <head>
      <meta sharset="UTF-8" />
      <meta name="viewport" content="width=device-width,initial-scale=1">

      <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo getMainStyleSheet(); ?>" />
      
      <!-- Fontawesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
            integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
            crossorigin="anonymous"></script>
      
  </head>
  <body>
  
    <div class="content">
        <div class="nav-bar">
                 <div class="logo-box">
                    <img src="<?php echo getHomeUrl() . 'assets/images/logo.svg'; ?>" alt="logo1" class="logo" />
                 </div>
                <nav>
                   <ul>
                      <li><a href="<?php echo getHomeUrl(); ?>">Home</a></li>
                      <li><a href="<?php echo getHomeUrl() . '#about'; ?>">About</a></li>
                      <li><a href="<?php echo getHomeUrl() . '#menu'; ?>">Menu</a></li>
                      <li><a href="<?php echo getHomeUrl() . '#gallerie'; ?> ">Gallerie</a></li>                      
                    </ul>
                </nav>
       </div>
