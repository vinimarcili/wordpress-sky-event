<?php get_header() ?>
<div id='template-uri' style='display:none;'><?php echo get_template_directory_uri() ?></div>
<div class='wrapper' style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg.png');">
  <div class='login' id='login-wrapper'>
    <header>
      <figure class='logo-login mobile'>
        <img
          class='img-fluid'
          src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png"
          alt="Logo"
        />
      </figure>
      <h2>
        BEM-VINDO
      </h2>
      <figure class='logo-login desktop'>
        <img
          class='img-fluid'
          src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png"
          alt="Logo"
        />
      </figure>
    </header>
    <main>
      <figure>
        <img
          class='img-fluid'
          src="<?php echo get_template_directory_uri() ?>/assets/img/initial.png"
          alt="Juntos para Somar"
        />
      </figure>
      <form onsubmit="login()">
        <div class='form-group'>
          <label for='email'>E-mail</label>
          <input type='email' class='form-control' id='email' placeholder='email@exemplo.com' required />
        </div>
        <div class='form-group'>
          <button type='submit' class='button'>
            Entrar
          </button>
        </div>
      </form>
    </main>
  </div>
  <div class='video hidden' id='video-wrapper'>
    <header>
      <figure class='logo-video'>
        <img
          class='img-fluid'
          src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png"
          alt="Logo"
        />
      </figure>
      <button type='button' class='button' onclick="logout()">
        Sair
      </button>
    </header>
    <main>
      <div class='container'>
        <iframe class='video-iframe' src="https://vimeo.com/event/3252107/embed/047a27bfb6" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
      </div>
      <iframe class='chat-iframe' src="https://vimeo.com/event/3252107/chat/047a27bfb6" width="100%" height="100%" style='min-height: 350px' frameborder="0"></iframe>
    </main>
  </div>
</div>
<?php get_footer() ?>