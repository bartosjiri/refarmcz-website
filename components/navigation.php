<nav>
  <div class="nav-button">
    <div class="nav-button-open nav-button-active">
      <svg viewBox="0 0 20 20">
        <path d="M0 3h20v2h-20v-2zM0 9h20v2h-20v-2zM0 15h20v2h-20v-2z"></path>
      </svg>
    </div>
    <div class="nav-button-close">
      <svg viewBox="0 0 20 20">
        <path d="M10 8.586l-7.071-7.071-1.414 1.414 7.071 7.071-7.071 7.071 1.414 1.414 7.071-7.071 7.071 7.071 1.414-1.414-7.071-7.071 7.071-7.071-1.414-1.414-7.071 7.071z"></path>
      </svg>
    </div>
  </div>
  <div class="nav-menu">
    <div class="_nav-menu-container wrapper">
      <div class="nav-menu-logo delay-logo">
        <svg class="nav-menu-logo-symbol" viewBox="0 0 257 314">
          <path d="M159.400244,0.013577739 L159.400244,0 L0,0 L0,192.947627 L159.400244,192.947627 L159.400244,192.93405 C159.941344,192.94309 160.483534,192.947627 161.026777,192.947627 C214.027034,192.947627 256.992231,149.75483 256.992231,96.4738137 C256.992231,43.1927977 214.027034,0 161.026777,0 C160.483534,0 159.941344,0.00453779577 159.400244,0.013577739 Z" fill="#929292"></path>
          <polygon fill="#B1B1B1" points="0 0 256.992231 313.948682 0 313.948682"></polygon>
          <path d="M-1.42108547e-14,96.4738137 L-1.42108547e-14,192.947627 L157.943142,192.947627 L-2.84217094e-14,0 L-2.84217094e-14,96.4738137 Z" fill="#717171"></path>
        </svg>
        <h1 class="nav-menu-logo-name">Refarm</h1>
      </div>
      <ul class="nav-menu-list">
        <li class="nav-menu-list-item"><a class="link-nav link-nav-page <?php if($page=='index'){echo 'link-nav-page-active';} ?> delay-index" href="index">Úvod</a></li>
        <li class="nav-menu-list-item"><a class="link-nav link-nav-page <?php if($page=='mise'){echo 'link-nav-page-active';} ?> delay-mise" href="mise">Mise</a></li>
        <li class="nav-menu-list-item"><a class="link-nav link-nav-page <?php if($page=='sluzby'){echo 'link-nav-page-active';} ?> delay-sluzby" href="sluzby">Služby</a></li>
        <li class="nav-menu-list-item"><a class="link-nav link-nav-page <?php if($page=='projekty'){echo 'link-nav-page-active';} ?> delay-projekty" href="projekty">Projekty</a></li>
        <li class="nav-menu-list-item"><a class="link-nav link-nav-page <?php if($page=='kontakt'){echo 'link-nav-page-active';} ?> delay-kontakt" href="kontakt">Kontakt</a></li>
      </ul>
      <div class="nav-menu-social delay-social">
        <p class="nav-menu-social-desc">Více o nás</p>
        <ul class="nav-menu-social-list">
          <li class="nav-menu-social-list-item"><a class="link-nav link-nav-facebook no-barba" href="http://facebook.com/refarm.cz" target="_blank">Facebook</a></li>
          <li class="nav-menu-social-list-item"><a class="link-nav link-nav-instagram no-barba" href="http://instagram.com/refarm.cz" target="_blank">Instagram</a></li>
          <li class="nav-menu-social-list-item"><a class="link-nav link-nav-twitter no-barba" href="http://twitter.com/refarmcz" target="_blank">Twitter</a></li>
          <li class="nav-menu-social-list-item"><a class="link-nav link-nav-linkedin no-barba" href="http://linkedin.com/company/refarmcz" target="_blank">Linkedin</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
