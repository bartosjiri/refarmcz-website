<?php
  $page = 'sluzby';
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
      <h2 class="header-title" data-aos="fade-up">Služby<br><span>— co můžeme nabídnout</span></h2>
      <div class="header-img" data-aos="slide-left" data-aos-duration="800">
        <img class="header-img-asd" src="img/headers/sluzby.jpg">
      </div>
    </header>

    <section name="services" class="services wrapper">
      <h2 class="services-title" data-aos="fade-up">Poskytujeme inovativní a udržitelná řešení<br><span>měnící přístup k produkci potravin</span></h2>
      <div class="services-grid">
        <h3 class="services-grid-title" data-aos="fade-up">Co děláme</h3>
        <div class="services-grid-content">
          <div class="services-grid-content-item" data-aos="fade-up">
            <!-- <img class="services-grid-content-item-img" src=""> -->
            <h3 class="services-grid-content-item-title">Poradenství</h3>
            <p class="services-grid-content-item-desc">Poskytujeme nástroje, data, znalosti, zkušenosti a kontakty potřebné k úspěchu. Ať už potřebujete vybrat správný produkt pro Vaši restauraci či postavit velkokapacitní vertikální farmu, jsme připraveni Vám pomoci překonat veškeré překážky a začít růst (doslova).</p>
          </div>
          <div class="services-grid-content-item" data-aos="fade-up">
            <!-- <img class="services-grid-content-item-img" src=""> -->
            <h3 class="services-grid-content-item-title">Vývoj</h3>
            <p class="services-grid-content-item-desc">Budujeme otevřené platformy s cílem nabídnout všem možnost podílet se na budoucnosti produkce potravin. Zapojujeme se do tvorby technologií, které bojují se současnými problémy, produkují více a spotřebovávají méně.</p>
          </div>
          <div class="services-grid-content-item" data-aos="fade-up">
            <!-- <img class="services-grid-content-item-img" src=""> -->
            <h3 class="services-grid-content-item-title">Vzdělávání</h3>
            <p class="services-grid-content-item-desc">Dáváme si za úkol vytvořit prostředí umožňující rozvoj potravinových systémů, které budou produktivní a udržitelné. Bereme jako svou povinnost zručným a talentovaným osobám poskytnout veškeré dostupné prostředky.</p>
          </div>
        </div>
      </div>
    </section>

  </div>
</main>

<?php include 'components/footer.php'; ?>
