<?php
  $page = 'projekty';
  include 'components/head.php';
  include 'components/navigation.php';
?>

<main id="barba-wrapper">
  <div class="barba-container">

    <header>
      <a class="header-logo" data-aos="fade-in" href="index">
        <svg class="header-logo-symbol" viewBox="0 0 257 314">
          <path d="M159.400244,0.013577739 L159.400244,0 L0,0 L0,192.947627 L159.400244,192.947627 L159.400244,192.93405 C159.941344,192.94309 160.483534,192.947627 161.026777,192.947627 C214.027034,192.947627 256.992231,149.75483 256.992231,96.4738137 C256.992231,43.1927977 214.027034,0 161.026777,0 C160.483534,0 159.941344,0.00453779577 159.400244,0.013577739 Z" fill="#00E270"></path>
          <polygon fill="#32F98D" points="0 0 256.992231 313.948682 0 313.948682"></polygon>
          <path d="M-1.42108547e-14,96.4738137 L-1.42108547e-14,192.947627 L157.943142,192.947627 L-2.84217094e-14,0 L-2.84217094e-14,96.4738137 Z" fill="#00AB6C"></path>
        </svg>
        <h1 class="header-logo-name">Refarm</h1>
      </a>
      <h2 class="header-title" data-aos="fade-up">Projekty<br><span>— na čem se podílíme</span></h2>
      <div class="header-img" data-aos="slide-left" data-aos-duration="800">
        <img class="header-img-asd" src="img/headers/projekty.jpg">
      </div>
    </header>

    <section name="projects" class="projects wrapper">
      <h2 class="projects-title" data-aos="fade-up">Pracujeme na perspektivních projektech<br><span>přinášejících skutečné změny a výsledky</span></h2>
      <div class="projects-grid">
        <h3 class="projects-grid-title" data-aos="fade-up">Projekty</h3>
        <div class="projects-grid-content">
          <div class="projects-grid-content-item" data-aos="fade-up">
            <a class="projects-grid-content-item-link" href="#" target="_blank">
              <img class="projects-grid-content-item-img" src="img/clients/bohemian-avantgardeners.jpg">
              <h3 class="projects-grid-content-item-title">Placeholder</h3>
            </a>
            <p class="projects-grid-content-item-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus luctus egestas leo. </p>
          </div>
          <div class="projects-grid-content-item" data-aos="fade-up">
            <a class="projects-grid-content-item-link" href="#" target="_blank">
              <img class="projects-grid-content-item-img" src="img/clients/bohemian-avantgardeners.jpg">
              <h3 class="projects-grid-content-item-title">Placeholder</h3>
            </a>
            <p class="projects-grid-content-item-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus luctus egestas leo.</p>
          </div>
      </div>
    </section>

    <section name="clients" class="clients wrapper">
      <div class="clients-grid">
        <h3 class="clients-grid-title" data-aos="fade-up">Klienti</h3>
        <div class="clients-grid-content">
          <div class="clients-grid-content-item" data-aos="fade-up">
            <a class="clients-grid-content-item-link" href="#" target="_blank">
              <img class="clients-grid-content-item-img" src="img/clients/bohemian-avantgardeners.jpg">
              <h3 class="clients-grid-content-item-title">Placeholder</h3>
            </a>
            <p class="clients-grid-content-item-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus luctus egestas leo.</p>
          </div>
          <div class="clients-grid-content-item" data-aos="fade-up">
            <a class="clients-grid-content-item-link" href="#" target="_blank">
              <img class="clients-grid-content-item-img" src="img/clients/bohemian-avantgardeners.jpg">
              <h3 class="clients-grid-content-item-title">Placeholder</h3>
            </a>
            <p class="clients-grid-content-item-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus luctus egestas leo.</p>
          </div>
        </div>
      </div>
    </section>

  </div>
</main>

<?php include 'components/footer.php' ?>
