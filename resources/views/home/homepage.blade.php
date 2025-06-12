
@include('home.header')


<div class="sentinel"></div>
<main>
    

<section class="main-banner new-banner hero-banner gs-anim-target" data-section-name="hero-section">
    <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-turquoise-gr"></figure>
    <figure aria-hidden="true" class="plus-bg plus-bg-large blue-fill"></figure>
    <div class="main-banner-wrap container-lg">
        <figure aria-hidden="true" class="plus-bg plus-bg-small white"></figure>
        <div class="main-banner-content hero-content">
            <div class="col-md-8">
                <h1 class="main-banner-title main-title-font">It’s Trading <strong>With a Plus</strong></h1>
                <div class="main-banner-slogan">Simple. Fast. Accessible.<br> Futures trading like you’ve never seen before.</div>
                <div class="main-banner-buttons-box">
                    <div class="main-banner-buttons button-group">
                        
<div class="cta-wrap">
            <a data-analytics="CTA_real" data-start-trading data-cta-name="start-trading-real-futures" class="button blue-gradient" href="{{route('register')}}">Start Trading Now</a>
        <a data-analytics="CTA_demo" data-cta-name="start-trading-demo-futures" class="button white-bg hollow link-demo" href="{{route('login')}}">Login</a>
</div>
                    </div>
                        <div class="bonus-box">
                            <a href="{{route('register')}}" data-cta-name="bonus-page" class="link-bonus">
                                <i class="icon-wallet" aria-hidden="true">
                                    <img src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/svg/icon-bonus.svg" alt=""/>
                                </i>
                                <span>Discover our bonuses</span>
                            </a>
                        </div>
                </div>
                <div class="main-banner-bulls">
                    <div class="main-banner-bulls-wrap">
                        <img class="main-banner-bulls-name" alt="Chicago Bulls" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/futures/svg/logo-bulls-name.svg" />
                    </div>
                    <div class="main-banner-bulls-slogan">Official Partner</div>
                </div>
            </div>
        </div>
    </div>
    <aside class="main-banner-link strip-bg"><a href="{{route('register')}}"><strong>As the 2024 US election nears</strong>, discover how the markets may shift and shape your trading. <strong>Read more</strong></a></aside>
</section>

<section class="market market-section general-section gs-anim-target">
    <figure aria-hidden="true" class="plus-bg plus-bg-small"></figure>
    <figure aria-hidden="true" class="plus-bg plus-bg-medium"></figure>
    <figure aria-hidden="true" class="plus-bg plus-bg-large transparent"></figure>
    <div class="container-xxl">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-7 col-xxl-6 text-center">
                <h2 class="title-section">FUTURES MARKETS FINALLY MADE ACCESSIBLE!</h2>
                <div class="free-content">Discover a new way to trade with attractive day margins,
and get access to a wide range of instruments. <br>
Futures on S&P500, NASDAQ100, Bitcoin, EUR/USD, Oil, Gold and many more!</div>
                <strong>Futures On</strong>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10 text-center">
                <nav class="market-menu"> 
                    <ul>
                            <li>
                                <a data-analytics="buttonClick" class="market-menu-item" href="/markets/crypto"><i aria-hidden="true" class="icon icon-futures-crypto"></i><span>Crypto</span></a>
                            </li>
                            <li>
                                <a data-analytics="buttonClick" class="market-menu-item" href="/markets/agriculture"><i aria-hidden="true" class="icon icon-futures-agriculture"></i><span>Agriculture</span></a>
                            </li>
                            <li>
                                <a data-analytics="buttonClick" class="market-menu-item" href="/markets/metals"><i aria-hidden="true" class="icon icon-futures-metals"></i><span>Metals</span></a>
                            </li>
                            <li>
                                <a data-analytics="buttonClick" class="market-menu-item" href="/markets/forex"><i aria-hidden="true" class="icon icon-futures-forex"></i><span>Forex</span></a>
                            </li>
                            <li>
                                <a data-analytics="buttonClick" class="market-menu-item" href="/markets/interestrates"><i aria-hidden="true" class="icon icon-futures-interestrates"></i><span>Interest Rates</span></a>
                            </li>
                            <li>
                                <a data-analytics="buttonClick" class="market-menu-item" href="/markets/energy"><i aria-hidden="true" class="icon icon-futures-energy"></i><span>Energy</span></a>
                            </li>
                            <li>
                                <a data-analytics="buttonClick" class="market-menu-item" href="/markets/equityindices"><i aria-hidden="true" class="icon icon-futures-equityindices"></i><span>Equity Index</span></a>
                            </li>
                    </ul>
                </nav>
            </div>
        </div> 
        <div class="container">
    <div class="row justify-content-center align-center payment-brands">
        <div class="col main-column">
            <div class="payment-brand-list row align-middle align-center">
                        <div class="col payment-brand">
                            <figure class="payment-brand-img">
                                <img loading="lazy" title="Visa" alt="Visa" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/pay_methods/visa.svg" />
                            </figure>
                        </div>
                        <div class="col payment-brand ">
                            <figure class="payment-brand-img">
                                <img loading="lazy" title="MasterCard" alt="MasterCard" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/pay_methods/mastercard.svg" />
                            </figure>
                        </div>
                        <div class="col payment-brand">
                            <figure class="payment-brand-img">
                                <img loading="lazy" title="Bank transfer" alt="Bank transfer" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/pay_methods/wire.svg" />
                            </figure>
                        </div>
                        <div class="col payment-brand">
                            <figure class="payment-brand-img">
                                <img loading="lazy" title="Apple Pay" alt="Apple Pay" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/pay_methods/applepay.svg" />
                            </figure>
                        </div>
                        <div class="col payment-brand">
                            <figure class="payment-brand-img">
                                <img loading="lazy" title="Google Pay" alt="Google Pay" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/pay_methods/googlepay.svg" />
                            </figure>
                        </div>
                            </div>
        </div>
    </div>
    <div class="row justify-content-center disclaimer-zone">
        <div class="col col-md-8">
            * Plus500 offers multiple global payment methods.
        </div>
    </div>
</div>
    </div>
</section>


<section class="trustpilot trustpilot-section gs-anim-target-phone">
    <div class="container-lg trustpilot-wrap">
        <div class="row justify-content-center">
            <figure aria-hidden="true" class="plus-bg plus-bg-small blue-gr"></figure>
            <figure aria-hidden="true" class="plus-bg plus-bg-large transparent"></figure>
            <div class="lazyload trustpilot-bg gs-trustpilot-bg text-center">
                <div class="trustpilot-widget">
    <div class="trustpilot-logo">
        <svg loading="lazy" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
            <path d="M28.8295 11.2024H17.852L14.4613 0.70874L11.06 11.2024L0.0825195 11.1917L8.97257 17.6837L5.57125 28.1667L14.4613 21.6854L23.3408 28.1667L19.95 17.6837L28.8295 11.2024Z" fill="#00B67A"/>
            <path d="M20.7131 20.0572L19.9502 17.6839L14.4614 21.6855L20.7131 20.0572Z" fill="#005128"/>
        </svg>
        <strong>Trustpilot</strong>
    </div>
    <div class="score-container">
        <div class="reviews">
            <p class="title"><span>Reviews</span><span class="amount">+13K</span></p>
            <div class="trust-score">
                <figure aria-hidden="true" class="item-icon">
                    <img loading="lazy" alt="" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/icons/trustpilot-stars.svg#great" />
                </figure>
            </div>
            <div class="quality">Great</div>
        </div>
        <div class="score">
            <span>4.1</span>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</section>

<section class="trading trading-section gs-anim-target" >
    <figure aria-hidden="true" class="plus-bg plus-bg-small blue-turquoise-gr"></figure> 
    <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-turquoise-gr"></figure>
    <figure aria-hidden="true" class="plus-bg plus-bg-large blue-turquoise-gr"></figure>
    <section class="container-lg">
        <div class="row">
            <div class="col-12"><h2 class="title-section"><span>Benefits of Trading </span> with<img class="title-section-icon" loading="lazy" alt="Plus500" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/futures/svg/logo-plus500-blue-light.svg" /></h2></div>
        </div>
        <div class="row align-center items-icon-group">
            <div class="col-md-6 col-lg-6 col-xl-4 item-box">
                <article class="item">
                    <figure class="item-icon" aria-hidden="true"><img loading="lazy" alt="" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/futures/svg/icon-trading1.svg"/></figure>
                    <div class="item-content">
                        <h3 class="item-title">Easy to use</h3>
                        <div class="item-desc">Our app is designed for beginners and retail clients, helping to make your entry into Futures trading simpler than ever.</div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 item-box">
                <article class="item">
                    <figure class="item-icon" aria-hidden="true"><img loading="lazy" alt="" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/futures/svg/icon-trading2.svg"/></figure>
                    <div class="item-content">
                        <h3 class="item-title">Practice Makes Perfect</h3>
                        <div class="item-desc">Use our demo live quotes to build your strategy before trading real money.</div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 item-box">
                <article class="item">
                    <figure class="item-icon" aria-hidden="true"><img loading="lazy" alt="" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/futures/svg/icon-trading3.svg"/></figure>
                    <div class="item-content">
                        <h3 class="item-title">Swift Registration Flow</h3>
                        <div class="item-desc">Open an account safely and easily.</div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 item-box">
                <article class="item">
                    <figure class="item-icon" aria-hidden="true"><img loading="lazy" alt="" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/futures/svg/icon-trading4.svg"/></figure>
                    <div class="item-content">
                        <h3 class="item-title">Low Commissions</h3>
                        <div class="item-desc">Enjoy 0 platform fees and 0 market data fees.<br>
You won't break your wallet with our low trading commissions!</div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 item-box">
                <article class="item">
                    <figure class="item-icon" aria-hidden="true"><img loading="lazy" alt="" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/futures/svg/icon-trading5.svg"/></figure>
                    <div class="item-content">
                        <h3 class="item-title">Wealth of Experience</h3>
                        <div class="item-desc">With 20 years of experience in the U.S. market, we know all the ins and outs of Futures trading.</div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 item-box">
                    <article class="item">
                        <figure class="item-icon" aria-hidden="true"><img loading="lazy" alt="" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/futures/svg/icon-trading6.svg"/></figure>
                        <div class="item-content">
                            <h3 class="item-title">Go Small or Even Smaller</h3>
                            <div class="item-desc">Open an account with as little as $100 and scale up when you’re ready.</div>
                        </div>
                    </article>
                </div>
         </div>
    </section>
    <section class="call-to-actions button-group" data-section-name="call-to-action-section">
        
<div class="cta-wrap">
            <a data-analytics="CTA_real" data-start-trading data-cta-name="start-trading-real-futures" class="button blue-gradient" href="{{route('register')}}">Start Trading Now</a>
        <a data-analytics="CTA_demo" data-cta-name="start-trading-demo-futures" class="button white-bg hollow link-demo" href="{{route('register')}}">Try Free Demo</a>
</div>
    </section>
</section>

<section class="container-xxl academy-card general-section gs-anim-target">
        <figure aria-hidden="true" class="plus-bg plus-bg-medium"></figure>
        <figure aria-hidden="true" class="plus-bg plus-bg-large"></figure>
        <div class="blue-card-parent">
            <div class="row">
                <div class="col-md-10 col-lg-8 text-center">
                    <div class="blue-card-bg shadow-card full-height not-rotate"></div>
                    <div class="blue-card-content container-wrap row justify-content-center">
                        <div class="col-lg-10 col-xl-9 academy-content">
                            <img class="academy-logo" loading="lazy" alt="CME group" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/futures/svg/CME-logo.svg"/>
                            <figure class="academy-title-icon" aria-hidden="true"> 
                                <img loading="lazy" alt="" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/futures/svg/icon-academy.svg"/>
                            </figure>
                            <h2 class="title-section white instrument-title">
                                Futures Academy
                            </h2>
                            <div class="free-content">
                                Dive into our articles and videos to get an in-depth look at all you need to know about Futures trading.
                            </div>
                            <a data-analytics="buttonClick" class="button white-bg dark" href="/academy">Learn to Trade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="trade trade-section gs-anim-target" data-section-name="trade-trust">
            <figure aria-hidden="true" class="plus-bg plus-bg-small not-tablet"></figure>
            <figure aria-hidden="true" class="plus-bg plus-bg-small small-only"></figure>
            <figure aria-hidden="true" class="plus-bg plus-bg-medium"></figure>
            <div class="container-xl">
                <div class="row align-middle justify-content-center">
                    <div class="column col-md-8 col-lg-6 trade-title-bg">
                        <h2 class="trade-title">Over 26 million customers worldwide have already chosen Plus500.</h2>
                        <figure aria-hidden="true" class="plus-bg plus-bg-xlarge transparent gs-not-animation"></figure>
                    </div>
                    <div class="column col-lg-10 ">
                        <div class="trade-data">
                            <aside class="trade-sub-title" role="complementary" aria-label="Worldwide">Worldwide</aside>
                            <div class="trade-items row align-center align-middle">
                                <div class="trade-item col-md-6">
                                    <div class="item-anim-list">
                                        <div class="item-anim item-anim1">
                                            <span><strong>$800+</strong> Billion</span>
                                            Traded Value
                                        </div>
                                        <div class="item-anim item-anim2">
                                            <span><strong>2800*</strong>
</span>
                                            Instruments
                                        </div>
                                        <div class="item-anim item-anim3">
                                            <span><strong>25+</strong> Million</span>
                                            Registered Customers
                                        </div>
                                    </div>
                                </div>
                                <div class="trade-item col-md-6">
                                    <div class="item-anim-list">
                                        <div class="item-anim item-anim4">
                                             <span><strong>300+</strong> Million</span>
                                             Positions Opened
                                        </div>
                                        <div class="item-anim item-anim5">
                                             <span><strong>50+</strong></span>
                                             Countries
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="disclaimer-note">* Instrument availability is subject to jurisdiction. Futures trading by U.S. market participants occurs through Plus500US Financial Services LLC, a registered futures commission merchant.</div>
                    </div>
                </div>
            </div>
</section>


<section class="why-us-section gs-whys-us-section gs-anim-target" data-section-name="whys-us">
    <div class="why-us-items container-xxl">
        <div class="columns blue-card-parent">
            <figure aria-hidden="true" class="plus-bg plus-bg-large blue-gr"></figure>
            <div class="blue-card-bg shadow-card flip full-height"></div>
            <h2 class="title-section center">Why Us?</h2>
            <div class="row align-center items-icon-group side-icon">
                <div class="col-lg-6 item-box">
                    <article class="item">
                        <figure aria-hidden="true" class="item-icon"><img loading="lazy" alt="" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/icons/icon-support.svg" /></figure>
                        <div class="item-content">
                            <h3 class="item-title">Professional Support</h3>
                            <div class="item-desc">24/7 customer support at your disposal.</div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 item-box">
                    <article class="item">
                        <figure aria-hidden="true" class="item-icon"><img loading="lazy" alt="" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/icons/icon-reliable.svg" /></figure>
                        <div class="item-content">
                            <h3 class="item-title">Reputable</h3>
                            <div class="item-desc">With over four decades of experience in the field, our firm is a full member of the CME Group and the National Futures Association.</div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 item-box">
                    <article class="item">
                        <figure aria-hidden="true" class="item-icon"><img loading="lazy" alt="" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/icons/icon-secure.svg" /></figure>
                        <div class="item-content">
                            <h3 class="item-title">Protected &amp; Secure</h3>
                            <div class="item-desc">We follow regulatory requirements to the letter, keeping your data safe and your funds in segregated accounts.</div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 item-box">
                    <article class="item">
                        <figure aria-hidden="true" class="item-icon"><img loading="lazy" alt="" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/icons/icon-regulated.svg" /></figure>
                        <div class="item-content">
                            <h3 class="item-title">Reliable</h3>
                            <div class="item-desc">Plus500 Ltd is listed on the London Stock Exchange’s Main Market for Listed Companies &amp; included in the FTSE 250.</div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sponsorships-section" data-section-name="sponsorships">
    <div class="container-xxl">
        <header class="row justify-content-center text-center sponsorships-header">
                <h3 class="title-section">We <strong>Sponsor</strong></h3>
        </header>
        <div class="row">
            <div class="column col">
                <div class="sponsorships-wrapper" data-featured-sponsorship="bulls">
                        <div class="row sponsorships-main-row">
                            <div data-index="2" style="z-index:2" class="sponsorships-item sponsorships-item-legia">
                                <a data-analytics="buttonClick" href="/sponsorships/legiawarsaw" class="sponsorships-item-link">
                                    <div class="sponsorships-item-image" data-cta-name="legia-players">
                                        <img loading="lazy" data-src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/img/legia-formation.png" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/img/legia-formation.png" alt="" class="lazyload ">
                                    </div>
                                    <div class="sponsorships-item-logo sponsorships-item-logo-legia" data-cta-name="legia-badge">
                                        <div class="sponsorships-item-logo-image">
                                            <img width="80" class="sponsorship-logo-back" loading="lazy" data-src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/svg/sponsorship-logo-legia-back.svg" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/svg/sponsorship-logo-legia-back.svg" alt="" class="lazyload ">
                                            <img width="80" class="sponsorship-logo-front" loading="lazy" data-src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/svg/sponsorship-logo-legia-front.svg" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/svg/sponsorship-logo-legia-front.svg" alt="" class="lazyload ">
                                        </div>
                                        <span>Legia Warsaw</span>
                                    </div>
                                </a>
                            </div>

                            <div data-index="3" style="z-index:3" class="sponsorships-item sponsorships-item-bulls">
                                <a data-analytics="buttonClick" href="/sponsorships/bulls" class="sponsorships-item-link">
                                    <div class="sponsorships-item-image" data-cta-name="bulls-players">
                                        <img loading="lazy" data-src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/img/bulls-formation.png" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/img/bulls-formation.png" alt="" class="lazyload ">
                                    </div>
                                    <div class="sponsorships-item-logo sponsorships-item-logo-bulls" data-cta-name="bulls-badge">
                                        <div class="sponsorships-item-logo-image">
                                            <img width="120" class="sponsorship-logo-back" loading="lazy" data-src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/svg/sponsorship-logo-bulls-back.svg" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/svg/sponsorship-logo-bulls-back.svg" alt="" class="lazyload ">
                                            <img width="120" class="sponsorship-logo-front" loading="lazy" data-src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/svg/sponsorship-logo-bulls-front.svg" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/svg/sponsorship-logo-bulls-front.svg" alt="" class="lazyload ">
                                        </div>
                                        <span>Chicago Bulls</span>
                                    </div>
                                </a>
                            </div>

                            <div data-index="1" style="z-index:1" class="sponsorships-item sponsorships-item-young-boys">
                                <a data-analytics="buttonClick" href="/sponsorships/youngboys" class="sponsorships-item-link">
                                    <div class="sponsorships-item-image" data-cta-name="young-boys-players">
                                        <img loading="lazy" data-src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/img/youngboys-formation.png" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/img/youngboys-formation.png" alt="" class="lazyload ">
                                    </div>
                                    <div class="sponsorships-item-logo sponsorships-item-logo-young-boys" data-cta-name="young-boys-badge">
                                        <div class="sponsorships-item-logo-image">
                                            <img width="100" class="sponsorship-logo-back" loading="lazy" data-src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/svg/sponsorship-logo-young-boys-back.svg" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/svg/sponsorship-logo-young-boys-back.svg" alt="" class="lazyload ">
                                            <img width="100" class="sponsorship-logo-front" loading="lazy" data-src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/svg/sponsorship-logo-young-boys-front.svg" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/newhome/svg/sponsorship-logo-young-boys-front.svg" alt="" class="lazyload ">
                                        </div>
                                        <span>BSC Young Boys</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
</main>

<footer class="main-footer">
    <div class="container">
        <div class="row align-center">
                <div class="col-sm-10 col-lg-3 col-xl-2 offset-xl-1">
                    <ul class="menu links-menu">
                            <li><a  href="/accessibilitystatement" data-page="AccessibilityStatement" >Accessibility Statement</a></li>
                            <li><a  href="https://cdn-main.plus500.com/Regulatory/CFTC/default/default/Futures/1716971168/PrivacyPolicy.pdf" target="_blank"rel="noopener noreferrer"doc-href="https://cdn-main.plus500.com/Regulatory/CFTC/default/default/Futures/1716971168/PrivacyPolicy.pdf">Privacy Policy</a></li>
                            <li><a  href="https://cdn-main.plus500.com/Regulatory/CFTC/default/default/Futures/1717507436/CCFirmDisclosure.pdf" target="_blank"rel="noopener noreferrer"doc-href="https://cdn-main.plus500.com/Regulatory/CFTC/default/default/Futures/1717507436/CCFirmDisclosure.pdf">Firm Disclosure</a></li>
                            <li><a  href="https://cdn-main.plus500.com/Regulatory/CFTC/default/default/Futures/1715260410/RiskDisclosureStatement.pdf" target="_blank"rel="noopener noreferrer"doc-href="https://cdn-main.plus500.com/Regulatory/CFTC/default/default/Futures/1715260410/RiskDisclosureStatement.pdf">Risk Disclosure Statement</a></li>
                            <li><a  href="/support/termsandagreements" data-page="TermsAndAgreements" >Terms & Agreements</a></li>
                                                    <li>
                                <a href="/support/cookiepolicy">Cookie Policy</a>
                            </li>
                    </ul>
                </div>
            <div class="col-sm-12 col-lg-6 main-column">
                <div class="footer-item footer-text">
                    <p>
IMPORTANT: Trading in futures and options carries substantial risk of loss and is not suitable for every investor. The valuation of futures and options contracts may fluctuate rapidly and unpredictably, and, as a result, clients may lose more than their original investments. In no event should the content of this website be construed as an express or implied promise or guarantee by or from Plus500US Financial Services LLC that you will profit or that losses can or will be limited in any manner whatsoever. Market volatility, trade volume, and system availability may delay account access and trade executions. Past results are no indication of future performance. Information provided in this correspondence is intended solely for informational purposes and is obtained from sources believed to be reliable. Information is in no way guaranteed. The trading of futures is available through Plus500US Financial Services LLC d/b/a Plus500, a Futures Commission Merchant registered with the US Commodity Futures Trading Commission and a member of the National Futures Association (NFA ID number 0001398). Plus500US Financial Services LLC is a wholly-owned subsidiary of Plus500US Inc. Trading privileges subject to review and approval. Not all applicants will qualify. Information collected on account applications will be used to verify an applicant’s identity, as required under Federal law.
</p>
                </div>
                <div class="footer-item secured">
                    <img width="24" height="24" loading="lazy" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/futures/svg/secure-lock.svg" alt="" class=""/>
                    <p>Secured by SSL.&nbsp;Copyright &copy; Plus500. All rights reserved.</p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3">
                <div class="social-networks">
                    <span>Follow Us On</span>
                    <ul class="menu social-menu">
        <li>
            <a href="https://www.facebook.com/Plus500" title="Facebook" target="_blank" rel="noopener noreferrer">
                <img width="24" height="24" loading="lazy" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/svg/social-networks/social-facebook-icon.svg" alt="" class="social-icon-facebook"/>
                <span class="visually-hidden">Facebook</span>
            </a>
        </li>            
        <li>
            <a href="https://www.twitter.com/plus500" title="Twitter" target="_blank" rel="noopener noreferrer">
                <img width="24" height="24" loading="lazy" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/svg/social-networks/social-twitter-icon.svg" alt="" class="social-icon-twitter"/>
                <span class="visually-hidden">Twitter</span>
            </a>
        </li>            
        <li>
            <a href="https://www.instagram.com/plus500/" title="Instagram" target="_blank" rel="noopener noreferrer">
                <img width="24" height="24" loading="lazy" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/svg/social-networks/social-instagram-icon.svg" alt="" class="social-icon-instagram"/>
                <span class="visually-hidden">Instagram</span>
            </a>
        </li>            
        <li>
            <a href="http://www.linkedin.com/company/plus500-official-page" title="LinkedIn" target="_blank" rel="noopener noreferrer">
                <img width="24" height="24" loading="lazy" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/svg/social-networks/social-linkedin-icon.svg" alt="" class="social-icon-linkedin"/>
                <span class="visually-hidden">LinkedIn</span>
            </a>
        </li>            
        <li>
            <a href="https://www.youtube.com/user/Plus500Site" title="YouTube" target="_blank" rel="noopener noreferrer">
                <img width="24" height="24" loading="lazy" src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Images/svg/social-networks/social-youtube-icon.svg" alt="" class="social-icon-youtube"/>
                <span class="visually-hidden">YouTube</span>
            </a>
        </li>            

</ul>
                </div>
                    <div class="application-stores">
                        <a data-analytics="CTA_store" id="link-play-store" rel="nofollow" class="store-link link-play-store" href="https://app.appsflyer.com/com.plus500.futures?af_click_lookback=30d&amp;innerTags=_cc_+cfdwv+uswsv&amp;webVisitId=9e7d969a-7086-4d53-9d65-6fa91bf084f9" style="background-image: url(https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png);" title="Play Store" target="_blank"></a>
                        <a data-analytics="CTA_store" id="link-app-store" rel="nofollow" class="store-link link-app-store" href="https://app.appsflyer.com/id6443583569?af_click_lookback=30d&amp;innerTags=_cc_+cfdwv+uswsv&amp;webVisitId=9e7d969a-7086-4d53-9d65-6fa91bf084f9" style="background-image: url(https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/en-gb);" title="App Store" target="_blank"></a>
                    </div>
            </div>
        </div>
    </div>
</footer>
<div class="sticky-footer-wrapper">
<a data-analytics="buttonClick" class="side-support-link support-link fade" href="/support" title="24/7 Support">
    <span class="icon-users"></span>
    <span class="text">24/7 Support</span>
</a>    


</div>


    <script src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Scripts/futures.layout.bundle.min.js"></script>

   <script>
    window.addEventListener('load', () => {  
            $('.futures-slider').slick({
                dots: true,
                arrows: false,
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 2,
                responsive: [
                    {
                      breakpoint: 640,
                      settings: {
                        slidesToShow: 2
                      }
                    }
                ]
            }); 
            // Iphone Animation  
            gsap.timeline({
              scrollTrigger: {
                trigger: ".gs-anim-target-phone",
                start: "-70% 50%",
                end: "30% 50%"
              }
            })
            .from(".gs-trustpilot-bg", { opacity: 0, y: 400, duration: .5 });  

            let tl1 = new TimelineMax({ 
                onComplete: function() {
                  this.restart();
                }
            });
            tl1
            .fromTo(".item-anim1, .item-anim4", .5, { opacity: 0, x: -50 }, {opacity: 1, x:0 }) .to(".item-anim1, .item-anim4", .5, { opacity: 0, x: 50 }, "+=3")
            .fromTo(".item-anim2, .item-anim5", .5, { opacity: 0, x: 50 }, {opacity: 1, x:0 }, "-=.3") .to(".item-anim2, .item-anim5", .5, { opacity: 0, x: -50 }, "+=3")
            .fromTo(".item-anim3, .item-anim4", .5, { opacity: 0, x: -50 }, {opacity: 1, x:0 }, "-=.3") .to(".item-anim3, .item-anim4", .5, { opacity: 0, x: 50 }, "+=3")
            .fromTo(".item-anim1, .item-anim5", .5, { opacity: 0, x: 50 }, {opacity: 1, x:0 }, "-=.3") .to(".item-anim1, .item-anim5", .5, { opacity: 0, x: -50 }, "+=3")
            .fromTo(".item-anim2, .item-anim4", .5, { opacity: 0, x: -50 }, {opacity: 1, x:0 }, "-=.3") .to(".item-anim2, .item-anim4", .5, { opacity: 0, x: 50 }, "+=3")
            .fromTo(".item-anim3, .item-anim5", .5, { opacity: 0, x: 50 }, {opacity: 1, x:0 }, "-=.3") .to(".item-anim3, .item-anim5", .5, { opacity: 0, x: -50 }, "+=3") 
        
     });
    </script>
    <script src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Scripts/futures/resize-hero.min.js" async></script>
    <script src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Scripts/gsap.bundle.min.js"></script>
    <script src="https://cdn-main.plus500.com/1.0.0.120605/Resources/Scripts/slick.min.js"></script>

    <script>
    window.addEventListener("load", () => {
        const mainMenu = document.querySelector(".main-menu > ul");
        const mainMenuItems = Array.from(mainMenu.children);
        let isMenuOpen = false;
        let isMenuExpanded = false;
        let subMenu;
        let menuButtonElement;
        function calcMenuHeight() {
            let itemsHeight = 0;
            mainMenuItems.forEach(item => {
               itemsHeight += item.offsetHeight; 
            });
            subMenu = mainMenu.querySelector(".submenu");
            mainMenu.dataset.height = subMenu ? subMenu.offsetHeight : itemsHeight;
            return mainMenu.dataset.height;
        }
        document.querySelector(".mobile-menu-trigger").addEventListener("click", (e) => {
            isMenuExpanded = !isMenuExpanded; 
            e.currentTarget.classList.toggle("is-open");
            e.currentTarget.ariaExpanded = isMenuExpanded; 
            mainMenu.classList.toggle("open");
            isMenuOpen = mainMenu.classList.contains("open");
            mainMenu.dataset.height = calcMenuHeight();
            mainMenu.style.height = isMenuOpen ? mainMenu.dataset.height + "px" : 0;
        });
        mainMenu.addEventListener("click", (e) => {
            const target = e.target;
            if (target.matches(".menu-link")){
                const nextElement = target.nextElementSibling;
                const menuList = target.closest("ul");
                if (!menuList.classList.contains("open")) return;
                nextElement.classList.add("submenu");
                mainMenu.dataset.height = menuList.offsetHeight;
                mainMenu.style.height = nextElement.offsetHeight + "px";
                menuButtonElement = target;
                menuButtonElement.ariaExpanded = true;
            }
            if (target.matches(".back-link")) {
                e.target.closest(".submenu").classList.remove("submenu");
                mainMenu.style.height = calcMenuHeight() + "px";
                menuButtonElement.ariaExpanded = false;
            }
        });
        document.querySelectorAll(".main-menu a[data-page]").forEach(el => {
            el.addEventListener('click', () => {
               let pageName = el.dataset.page;
               let menuCategory = el.closest("ul").dataset.menuName;
               sendAnalyticsEvent("HeaderMenuClick", menuCategory, pageName);
            });
        });
        if (document.body.classList.contains("blue-header")) {
            window.addEventListener("scroll", (e) => {
                if (e.currentTarget.scrollY > 0){
                    document.body.classList.remove("blue-header");
                } else {
                    document.body.classList.add("blue-header");
                }
            }, { passive: true})
        }
    });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", () => {        
        const cookieBanner = document.querySelector(".sticky-cookie-wrapper");
        if (localStorage.getItem("_cookies_usage_")){
            cookieBanner.remove();
        } else {
            cookieBanner.classList.remove("d-none");
        }
        cookieBanner.querySelector("#cookieBannerAcceptButton").addEventListener('click', () => {
            UserCookiesManager.onCookiesAccept("banner")
            cookieBanner.classList.add("cookie-out");
            cookieBanner.addEventListener("transitionend", () => {
                if (typeof resizeHeroSection === "function") { resizeHeroSection(); }
                cookieBanner.remove();
            });
        });
        if (!UserCookiesManager.isAcceptedCookies()) {
        }
    });
    </script>

        <script>
            window.addEventListener('load',() => {
                loadJS("https://cdn-main.plus500.com/1.0.0.120605/Resources/Scripts/support-button-on-scroll.min.js", document.body);
            });
        </script>



<script>
    window.addEventListener("load", function() {
        loadJS("https://cdn-main.plus500.com/1.0.0.120605/Resources/Scripts/google-analytics-cookies-param-to-appsflyer-links.min.js", document.body, function() {
            if (typeof initGAAppsFlyerLinks === 'function') {
                initGAAppsFlyerLinks(
                    "_ga",
                    '_ga_QCWHY70E85'
                );
            }
        }, true);
    });
</script>

</body>
</html>