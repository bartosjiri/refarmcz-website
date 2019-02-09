<?php
  $page = 'kontakt';
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
      <h2 class="header-title" data-aos="fade-up">Kontakt<br><span>— jak se s námi spojit</span></h2>
      <div class="header-img" data-aos="slide-left" data-aos-duration="800">
        <img class="header-img-asd" src="img/headers/kontakt.jpg">
      </div>
    </header>

    <section name="contact" class="contact wrapper">
      <h2 class="contact-title" data-aos="fade-up">Řešíme globální potravinové problémy<br><span>s ohledem na zapojení lokálních komunit</span></h2>
      <div class="contact-grid">
        <h3 class="contact-grid-title" data-aos="fade-up">Email</h3>
        <div class="contact-grid-content" data-aos="fade-up">
          <p class="contact-grid-content-desc">Spolupracujeme s řadou jednotlivců i firem, které mají chuť a odhodlání něco změnit. Rádi pomůžeme i Vám vytvořit něco, co skutečně dává smysl.</p>
          <p class="contact-grid-content-desc">
            <!-- <span data-aos="fade-up"><a class="about-grid-content-desc-link" href="mailto:kontakt@refarm.cz">kontakt@refarm.cz</a></span> -->
            <span data-aos='fade-up'><a class="contact-grid-content-desc-link" id="contact-email" href=""></a></span>
          </p>
        </div>

      </div>
    </section>

    <script type="text/javascript" language="javascript">

        { coded = "akjiVai@9oBV9Y.Cg"
          key = "I2YUbTQKoZltCB8v6zysqr1E5kOpinhJ4FgMXd9DNuaHxGjmRS0WPe7LAcfV3w"
          shift = coded.length
          link = ""
          for (i=0; i<coded.length; i++) {
            if (key.indexOf(coded.charAt(i))==-1) {
              ltr = coded.charAt(i)
              link += (ltr)
            } else {
              ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
              link += (key.charAt(ltr))
            }
          }
          href = "mailto:"+link;
        $('#contact-email').attr('href', href).html(link);
        }

    </script>

  </div>
</main>

<?php include 'components/footer.php' ?>
