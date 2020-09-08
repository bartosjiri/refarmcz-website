<?php
  $page = 'index';
  include 'components/head.php';
  include 'components/navigation.php';
?>

<main id="barba-wrapper">
  <div class="barba-container">

    <header class="_cover-header-modifier">
      <a class="header-logo" data-aos="fade-in" href="index">
        <svg class="header-logo-symbol" viewBox="0 0 257 314">
          <path d="M159.400244,0.013577739 L159.400244,0 L0,0 L0,192.947627 L159.400244,192.947627 L159.400244,192.93405 C159.941344,192.94309 160.483534,192.947627 161.026777,192.947627 C214.027034,192.947627 256.992231,149.75483 256.992231,96.4738137 C256.992231,43.1927977 214.027034,0 161.026777,0 C160.483534,0 159.941344,0.00453779577 159.400244,0.013577739 Z" fill="#00E270"></path>
          <polygon fill="#32F98D" points="0 0 256.992231 313.948682 0 313.948682"></polygon>
          <path d="M-1.42108547e-14,96.4738137 L-1.42108547e-14,192.947627 L157.943142,192.947627 L-2.84217094e-14,0 L-2.84217094e-14,96.4738137 Z" fill="#00AB6C"></path>
        </svg>
        <h1 class="header-logo-name">Refarm</h1>
      </a>
    </header>

    <section name="cover" class="cover wrapper">
      <h2 class="cover-title" data-aos="fade-up">Za budoucnost, kde zdravé a udržitelné potraviny jsou dostupné pro všechny.</h2>
      <div class="cover-scroll cover-scroll-animated"></div>
    </section>

    <section name="about" class="about wrapper">
      <h2 class="about-title" data-aos="fade-up">Posouváme hranice moderního zemědělství<br><span>prostřednictvím otevřenosti a spolupráce</span></h2>
      <div class="about-grid" data-aos="fade-up">
        <h3 class="about-grid-title">O nás</h3>
        <div class="about-grid-content">
          <p class="about-grid-content-desc">V Refarm se soustředíme na cíle spojené se vznikem nových potravinových systémů, které budou produktivnější při menší spotřebě, budou přinášet zdravější produkty a budou dostupné pro každého člověka v jeho nejbližším okolí.</p>
          <p class="about-grid-content-desc">Jsme interdisciplinární tým inovátorů, vývojářů a novodobých zemědělců. Nebojíme se zacházet za obzory vlastních odvětví a objevovat zcela nová řešení. Ve dne i v noci máme otevřené oči a uši pro lidi, kteří se nebojí něčeho dosáhnout a jít si za svým.</p>
          <p class="about-grid-content-desc">Nabízíme služby, které zajistí přeměnu Vašich snů v praktickou a udržitelnou realitu. Dodáváme na míru vhodná řešení, která navyšují množství příležitostí a minimalizují risk.</p>
          <p class="about-grid-content-desc">
            <span data-aos="fade-up"><a class="about-grid-content-desc-link" href="mise">Naše mise</a></span>
            <span data-aos="fade-up"><a class="about-grid-content-desc-link" href="sluzby">Naše služby</a></span>
          </p>
        </div>
      </div>
    </section>

    <section name="showcase" class="showcase wrapper">
      <h2 class="showcase-title" data-aos="fade-up">Pomáháme přeměňovat nápady ve skutečnost<br><span>a představovat projekty zítřka již dnes</span></h2>
      <div class="showcase-grid">
        <h3 class="showcase-grid-title" data-aos="fade-up">Reference</h3>
        <div class="showcase-grid-content">
          <div class="showcase-grid-content-item" data-aos="fade-up">
            <a class="showcase-grid-content-item-link" href="#" target="_blank">
              <img class="showcase-grid-content-item-img" src="img/clients/bohemian-avantgardeners.jpg">
              <h3 class="showcase-grid-content-item-title">Placeholder</h3>
            </a>
            <p class="showcase-grid-content-item-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus luctus egestas leo.</p>
          </div>
          <div class="showcase-grid-content-item" data-aos="fade-up">
            <a class="showcase-grid-content-item-link" href="#" target="_blank">
              <img class="showcase-grid-content-item-img" src="img/clients/bohemian-avantgardeners.jpg">
              <h3 class="showcase-grid-content-item-title">Placeholder</h3>
            </a>
            <p class="showcase-grid-content-item-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus luctus egestas leo.</p>
          </div>
          <div class="showcase-grid-content-item" data-aos="fade-up">
            <a class="showcase-grid-content-item-link" href="#" target="_blank">
              <img class="showcase-grid-content-item-img" src="img/clients/bohemian-avantgardeners.jpg">
              <h3 class="showcase-grid-content-item-title">Placeholder</h3>
            </a>
            <p class="showcase-grid-content-item-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus luctus egestas leo.</p>
          </div>
          <span data-aos="fade-up"><a class="showcase-grid-content-link" href="projekty">Další projekty</a></span>
        </div>
      </div>
    </section>

  </div>
</main>

<?php include 'components/footer.php'; ?>
