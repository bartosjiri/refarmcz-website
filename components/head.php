<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>
    <?php if($page=='mise'){echo 'Mise — ';} ?>
    <?php if($page=='sluzby'){echo 'Služby — ';} ?>
    <?php if($page=='projekty'){echo 'Projekty — ';} ?>
    <?php if($page=='kontakt'){echo 'Kontakt — ';} ?>
    <?php if($page=='klient'){echo $customHeader;} ?>
    Refarm
  </title>

  <meta name="description" content="
    <?php if($page=='mise'){echo 'Založili jsme Refarm s cílem vytvořit prostředí, kde podpora kreativity, talentu a skutečných výkonů bude samozřejmostí, a umožní tak rychleji posouvat hranice moderního zemědělství.' ;} ?>
    <?php if($page=='sluzby'){echo 'Poskytujeme inovativní a udržitelná řešení v oblasti městského zemědělství. Vyvíjíme nové technologie, které produkují více a spotřebovávají méně.' ;} ?>
    <?php if($page=='projekty'){echo 'Podílíme se na tvorbě perspektivních projektů v oblasti moderního zemědělství přinášejících nové přístupy k udržitelné produkci potravin.' ;} ?>
    <?php if($page=='kontakt'){echo 'Spolupracujeme s řadou jednotlivců i firem, které mají chuť a odhodlání něco změnit. Rádi pomůžeme i Vám vytvořit něco, co skutečně dává smysl.' ;} ?>
    <?php if($page!='mise' && $page!='sluzby' && $page!='projekty' && $page!='kontakt'){echo 'Za budoucnost, kde zdravé a udržitelné potraviny jsou dostupné pro všechny. Poskytujeme nástroje, data, znalosti, zkušenosti a kontakty potřebné k úspěchu na poli městského zemědělství.';} ?>
  ">
  <link rel="canonical" href="https://refarm.netlify.app<?php $url = $_SERVER['REQUEST_URI']; echo $url ?>">

  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-121312601-1');
  </script>

  <link rel="author" href="humans.txt" />
  <meta name="robots" content="index, follow">

  <link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-touch-icon.png?v=ng819BrKJd">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png?v=ng819BrKJd">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png?v=ng819BrKJd">
  <link rel="manifest" href="/img/icons/site.webmanifest?v=ng819BrKJd">
  <link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg?v=ng819BrKJd" color="#32f98d">
  <link rel="shortcut icon" href="/img/icons/favicon.ico?v=ng819BrKJd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-config" content="/img/icons/browserconfig.xml?v=ng819BrKJd">
  <meta name="theme-color" content="#ffffff">

  <script type="application/ld+json">
	  {
		  "@context": "https://schema.org",
			"@type": "Organization",
			"name": "Refarm",
			"url": "https://refarm.netlify.app",
			"logo": "https://refarm.netlify.app/img/logo/logo.jpg"
	  }
  </script>
	<script type="application/ld+json">
	  {
			"@context" : "http://schema.org",
			"@type" : "WebSite",
			"name" : "Refarm",
			"alternateName" : "Refarm - Za budoucnost, kde zdravé a udržitelné potraviny jsou dostupné pro všechny.",
			"url" : "https://refarm.netlify.app"
	  }
  </script>

  <meta itemprop="name" content="Refarm.cz" />
  <meta itemprop="description" content="
    <?php if($page=='mise'){echo 'Založili jsme Refarm s cílem vytvořit prostředí, kde podpora kreativity, talentu a skutečných výkonů bude samozřejmostí, a umožní tak rychleji posouvat hranice moderního zemědělství.' ;} ?>
    <?php if($page=='sluzby'){echo 'Poskytujeme inovativní a udržitelná řešení v oblasti městského zemědělství. Vyvíjíme nové technologie, které produkují více a spotřebovávají méně.' ;} ?>
    <?php if($page=='projekty'){echo 'Podílíme se na tvorbě perspektivních projektů v oblasti moderního zemědělství přinášejících nové přístupy k udržitelné produkci potravin.' ;} ?>
    <?php if($page=='kontakt'){echo 'Spolupracujeme s řadou jednotlivců i firem, které mají chuť a odhodlání něco změnit. Rádi pomůžeme i Vám vytvořit něco, co skutečně dává smysl.' ;} ?>
    <?php if($page!='mise' && $page!='sluzby' && $page!='projekty' && $page!='kontakt'){echo 'Za budoucnost, kde zdravé a udržitelné potraviny jsou dostupné pro všechny. Poskytujeme nástroje, data, znalosti, zkušenosti a kontakty potřebné k úspěchu na poli městského zemědělství.';} ?>
  " />
  <meta itemprop="image" content="http://refarm.netlify.app/img/social/og-image.jpg" />

  <meta property="og:image:width" content="931">
  <meta property="og:image:height" content="488">
  <meta property="og:title" content="
    <?php if($page=='index'){echo 'Refarm';} ?>
    <?php if($page=='mise'){echo 'Mise — Refarm';} ?>
    <?php if($page=='sluzby'){echo 'Služby — Refarm';} ?>
    <?php if($page=='projekty'){echo 'Projekty — Refarm';} ?>
    <?php if($page=='kontakt'){echo 'Kontakt — Refarm';} ?>
    <?php if($page=='klient'){echo $customHeader;} ?>
    <?php if($page=='404'){echo 'Nenalezeno — Refarm';} ?>
  ">
  <meta property="og:description" content="
    <?php if($page=='mise'){echo 'Založili jsme Refarm s cílem vytvořit prostředí, kde podpora kreativity, talentu a skutečných výkonů bude samozřejmostí, a umožní tak rychleji posouvat hranice moderního zemědělství.' ;} ?>
    <?php if($page=='sluzby'){echo 'Poskytujeme inovativní a udržitelná řešení v oblasti městského zemědělství. Vyvíjíme nové technologie, které produkují více a spotřebovávají méně.' ;} ?>
    <?php if($page=='projekty'){echo 'Podílíme se na tvorbě perspektivních projektů v oblasti moderního zemědělství přinášejících nové přístupy k udržitelné produkci potravin.' ;} ?>
    <?php if($page=='kontakt'){echo 'Spolupracujeme s řadou jednotlivců i firem, které mají chuť a odhodlání něco změnit. Rádi pomůžeme i Vám vytvořit něco, co skutečně dává smysl.' ;} ?>
    <?php if($page!='mise' && $page!='sluzby' && $page!='projekty' && $page!='kontakt'){echo 'Za budoucnost, kde zdravé a udržitelné potraviny jsou dostupné pro všechny. Poskytujeme nástroje, data, znalosti, zkušenosti a kontakty potřebné k úspěchu na poli městského zemědělství.';} ?>
  ">
  <meta property="og:image" content="http://refarm.netlify.app/img/social/og-image.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@refarm.cz">
  <meta name="twitter:title" content="
    <?php if($page=='index'){echo 'Refarm';} ?>
    <?php if($page=='mise'){echo 'Mise — Refarm';} ?>
    <?php if($page=='sluzby'){echo 'Služby — Refarm';} ?>
    <?php if($page=='projekty'){echo 'Projekty — Refarm';} ?>
    <?php if($page=='kontakt'){echo 'Kontakt — Refarm';} ?>
    <?php if($page=='klient'){echo $customHeader;} ?>
    <?php if($page=='404'){echo 'Nenalezeno — Refarm';} ?>
  ">
  <meta name="twitter:description" content="
    <?php if($page=='mise'){echo 'Založili jsme Refarm s cílem vytvořit prostředí, kde podpora kreativity, talentu a skutečných výkonů bude samozřejmostí, a umožní tak rychleji posouvat hranice moderního zemědělství.' ;} ?>
    <?php if($page=='sluzby'){echo 'Poskytujeme inovativní a udržitelná řešení v oblasti městského zemědělství. Vyvíjíme nové technologie, které produkují více a spotřebovávají méně.' ;} ?>
    <?php if($page=='projekty'){echo 'Podílíme se na tvorbě perspektivních projektů v oblasti moderního zemědělství přinášejících nové přístupy k udržitelné produkci potravin.' ;} ?>
    <?php if($page=='kontakt'){echo 'Spolupracujeme s řadou jednotlivců i firem, které mají chuť a odhodlání něco změnit. Rádi pomůžeme i Vám vytvořit něco, co skutečně dává smysl.' ;} ?>
    <?php if($page!='mise' && $page!='sluzby' && $page!='projekty' && $page!='kontakt'){echo 'Za budoucnost, kde zdravé a udržitelné potraviny jsou dostupné pro všechny. Poskytujeme nástroje, data, znalosti, zkušenosti a kontakty potřebné k úspěchu na poli městského zemědělství.';} ?>
  ">
  <meta name="twitter:image" content="http://refarm.netlify.app/img/social/twitter-image.jpg">

  <link type="text/css" rel="stylesheet" href="assets/css/style.css" />
  <link type="text/css" rel="stylesheet" href="assets/css/aos.css"  />

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
