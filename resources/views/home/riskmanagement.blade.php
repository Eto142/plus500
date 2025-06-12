@include('home.header')
<div class="sentinal"></div>
    
    <main>
    

<section class="academy-banner inner-page main-banner gs-anim-target" data-section-name="hero-section">
    <aside class="bg-wrap">
        <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-turquoise-gr"></figure> 
        <figure aria-hidden="true" class="plus-bg plus-bg-large blue-turquoise-gr"></figure>
    </aside>
    <div class="container-xxl">
        <div class="row align-center-middle main-banner-wrap">
            <div class="col-md-7 main-banner-content hero-content container-wrap">

                    <div class="main-banner-title">Trading <strong>Academy</strong></div>
                <div class="main-banner-desc">Learn the essentials of our platform and sharpen your trading skills with our ‘how-to’ videos and other educational materials.</div>
                <div class="mt-4 d-flex justify-content-lg-center justify-content-md-start text-start"><div class="search-container">
    <div class="search-box" id="search-box">
        <label class="search-label visually-hidden" for="tradingAcademySearchInput">Search</label>
        <div class="search-box-input">
            <i class="search-icon icon-search3" aria-hidden="true"></i>
            <input class="search-input" type="text" autocomplete="off" v-model="searchTerm" placeholder="Search" id="tradingAcademySearchInput">
            <i class="icon-chevron-right" aria-hidden="true"></i>
        </div>
        <div id="resultsInWidget" v-show="isOpen" class="search-results-wrap">
            <div id="autocomplete-results" class="autocomplete-results search-results">
                <div class="search-loading loading" v-if="isLoading">
                    <div class="loader"></div>
                    <span>Loading results...</span>
                </div>
                <ul class="search-results-list" v-else v-for="(itemResults, category) in groupResultsByCategory(results)">
                    <li class="search-results-category">{{toCategoryName(category)}}</li>
                    <li v-for="result in itemResults" class="autocomplete-result search-result">
                        <a class="search-result-link icon-class" v-html="result.title" tabindex="0" :href="result.url"></a>
                    </li>
                </ul>
            </div>
            <div v-if="isEmptyResults()" class="search-no-results">
                <div class="search-no-results-data"><span>No results found...</span> <a tabindex="0" href="contactus.html">Contact Us</a></div>
            </div>
        </div>
    </div>
</div>



</div>
            </div>
        </div>
    </div>
</section>
<nav class="top-navigation">
    <ul class="nav navigation">
            <li class="nav-item">
                <a class="nav-link " href="../tradingacademy.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../tradingacademy/tradersguide.html">Trader's Guide</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../tradingacademy/beginnersguide.html">Beginner's Guide</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../tradingacademy/webinars.html">Webinars</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../tradingacademy/tradingebook.html">eBook</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../tradingacademy/faq.html">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../newsandmarketinsights.html">News</a>
            </li>
    </ul>
</nav>
<section class="main-section inner-main content-strip">
    <div class="container-xxl">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1>Risk Management Tools</h1>
                <h2 class="inner-title">Manage your risk with our straightforward yet powerful trading tools</h2>
                <div class="d-none d-md-block risk-management-list">
                    <ul>
<li><a href="#RiskCloseTitle">
'Close at Profit' [Stop Limit] or 'Close at Loss' [Stop loss] rates
</a></li>
<li><a href="#RiskGuaranteedTitle">
Guaranteed Stop
</a></li>

<li><a href="#RiskTrailingTitle">
Trailing Stop
</a></li>
</ul>

                </div>
            </div>
            <div class="col-md-8 col-lg-6 main-image">
                     <picture>
                            <source media="(min-width: 768px)" srcset="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/devices-laptop@0,75x.png 1x, https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/devices-laptop.png 2x">
                            <source media="(max-width: 767px)" srcset="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/devices-ios-pro@0,75x.png 1x, https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/devices-ios-pro.png 2x">
                            <img src="../../../cdn-main.plus500.com/1.0.0.120279/Resources/Images/devices-laptop%400%2c75x.png" alt="Laptop with screenshot of Plus500 application" class="d-sm-none d-md-block"/>
                            <img src="../../../cdn-main.plus500.com/resources/images/devices-ios-pro%400%2c75x.html" alt="iPad Pro and iPhone showing the Plus500 trading platform." class="d-md-none"/>
                        </picture>
                    </div>
        </div>
    </div>
</section>


<section class="page-sections inner-sections zebra-sections">
    <section class="content-strip content">
        <div class="container-xxl">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="anchor-box">
                        <a class="anchor" id="RiskCloseTitle"></a>
                    </div>
                    <h3>Set 'Close at Profit' [Stop Limit] and/or 'Close at Loss' [Stop Loss] Price Levels</h3>
                    <p><strong>‘Close at Profit’</strong> [Stop Limit] and <strong>‘Close at Loss’</strong> [Stop Loss] orders can be added to your trades when opening a new position/pending order, or when editing an existing position. These orders allow you to set a specific rate at which your position will close, in order to protect your profit, in the case of Close at Profit order or minimise your loss, in the case of Close at Loss order. 
Note that Close at Profit and Close at Loss orders do not guarantee your position will close at the exact price level you have specified. If the market price suddenly gaps down or up, at a price beyond your stop level, it is possible your position will be closed at the next available price which can be a different price than the one you have set. This is known as 'Slippage'.
</p>
                    <h5 class="example">Example:</h5>
                    <p class="example">Gold CFD is trading at $1,405/$1,410 (Sell/Buy) per bullion. 
You decide to open a Buy position on 10 units of Gold CFD at $1,410 while placing a Close at Loss order at $1,390. <br />
Gold CFD price falls directly to $1,390 and then to $1,350. Your position will automatically close at $1390. <br />
Your loss is: 10 * (1,390 - 1,410) = -$200
<br />
If Gold CFD’s price ‘gaps down’ from $1,410 directly to $1,350, the trade will close at $1,350 instead of $1,390 which was the Stop Loss level you have set. Since the Stop is not guaranteed, when the market suddenly dropped and passed $1,390, the position was triggered to close at the next available price which was $1,350.
In this case your loss will be: 10 * (1,350 - 1,410) = -$600 
</p>
                </div>
                <div class="col-md-8 col-lg-4 promo-image-risk">
                    <div class="tools-img">
                        
                        <picture>
                            <source srcset="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/risk-screen-close@0,75x.png 1x, https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/risk-screen-close.png 2x">
                            <img src="../../../cdn-main.plus500.com/1.0.0.120279/Resources/Images/risk-screen-close%400%2c75x.png" alt="Set 'Close at Profit' [Limit Stop] or 'Close at Loss' [Stop loss] price levels"/>
                        </picture>
                    </div>
                    <ul>
 <li>Available free of charge</li>
 <li>Lock in profits and limit your losses</li>
</ul>
                </div>
            </div>
        </div>
    </section>
    <section class="content-strip content">
        <div class="container-xxl">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="anchor-box">
                        <a class="anchor" id="RiskGuaranteedTitle"></a>
                    </div>
                    <h3>Guaranteed Stop</h3>
                    <p>Adding a <strong>Guaranteed Stop</strong> order to your trading position puts an absolute limit on your potential loss. Even if the price of the instrument moves significantly against you, your position will automatically be closed at the specified price, with no risk of Slippage. <br />

Guaranteed Stop is available for some instruments only. If an instrument supports the Guaranteed Stop order, a checkbox will be available for use in the platform (after you select the ‘Close at Loss’ checkbox). <br />

Guaranteed Stop details:  <br />

A Guaranteed Stop order can only be placed on a new trading position/pending order, and cannot be added to an existing position. <br />

A Guaranteed Stop can only be activated/edited when the instrument is available for trading. Once your Guaranteed Stop order is active, it cannot be removed, only a Close at Loss order can be amended/removed. <br />

The additional spread charge for a Guaranteed Stop is non-refundable once activated and will be displayed before approval. The level of the Guaranteed Stop must be at a certain predefined distance away from the current trading price of the instrument.

</p>
                    <h5 class="example">Example:</h5>
                    <p class="example">Apple CFD is trading at $148/$150 (Sell/Buy) per share. <br />

You decide to buy 10 contracts (shares) on Apple CFD while placing a Guaranteed Stop at $130. The spread adjustment for a Guaranteed Stop is $10.  <br />

Apple CFD drops below $100, but you are guaranteed to close out the Buy position at $130. <br />

With a Guaranteed Stop order on 10 contracts (shares): P&L = 10*(130 - 150) - 10 [Guaranteed Stop spread adjustment] = -$210  <br />

Without a Guaranteed Stop order: P&L = 10*(100 - 150) = -$500 </p>
                </div>
                <div class="col-md-8 col-lg-4 promo-image-risk">
                    <div class="tools-img">
                        
                        <picture>
                            <source srcset="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/risk-screen-guaranteed@0,75x.png 1x, https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/risk-screen-guaranteed.png 2x">
                            <img src="../../../cdn-main.plus500.com/1.0.0.120279/Resources/Images/risk-screen-guaranteed%400%2c75x.png" alt="Guaranteed Stop"/>
                        </picture>
                    </div>
                    <ul>
 <li>Extra spread applies </li>
 <li>Limits on your risk</li>
 <li>Know in advance your maximum possible loss</li>
</ul>
                </div>
            </div>
        </div>
    </section>
    <section class="content-strip content">
        <div class="container-xxl"> 
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="anchor-box">
                        <a class="anchor" id="RiskTrailingTitle"></a>
                    </div>
                    <h3>Trailing Stop – Automatically Limit a Position's Losses While Locking in Profits</h3>
                    <p>Placing a <strong>Trailing Stop</strong> order helps you lock in a certain amount of profits. When you open a position or pending order with a Trailing Stop, it will remain open as long as its price moves in your favour, but will automatically close if its price changes direction by a specified amount of pips*. <br/>

Trailing Stop allows you to place a Close at Loss order which automatically updates when the market moves in your favour. The Close at Loss order is activated if the market moves unfavourably (in accordance with the requested pips change).
This feature is free of charge, however there is no guarantee that your position will close at the exact Close at Loss level, because of ‘Slippage’.
</p>
                    <h5 class="example">Example:</h5>
                    <p class="example">The price of EUR/USD is 1.19400/1.19500 (Sell/Buy). <br/>
You decide to open a buy position for 100,000 units while placing a Trailing Stop at 100 pips (100 pips = ‪0.00100). This sets a Trailing Stop order at the Sell rate of 1.19300 (1.19400 - 0.00100). The price of EUR/USD starts to rise and Sell rate reaches 1.19450; the Trailing Stop order trails the change to 1.19350 (1.19450 - 0.00100). <br/>
EUR/USD continues to rise and the Sell rate reaches 1.19750; the Trailing Stop order automatically adjusts according to the new market price, and changes to 1.19650 (1.19750 - 0.00100). <br/>
If the price of EUR/USD suddenly changes direction and falls by 100 pips (i.e. to 1.19650, your Trailing Stop price) or more, Plus500 will execute the order at 1.19650 if it is applicable; otherwise, the position will be closed at the next available rate. <br/>
If the position closed at the rate of 1.19650 - Your profit is: 100,000 * (1.19650 - 1.19500) = €150 (by using Trailing Stop you were able to lock in your profits). <br/>
</p>
                    <p class="example">* Pip (price interest point). For all Plus500 instruments, refers to the smallest unit of price change.</p>
                </div>
                <div class="col-md-8 col-lg-4 promo-image-risk">
                    <div class="tools-img">
                        
                        <picture>
                            <source srcset="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/risk-screen-trailing@0,75x.png 1x, https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/risk-screen-trailing.png 2x">
                            <img src="../../../cdn-main.plus500.com/1.0.0.120279/Resources/Images/risk-screen-trailing%400%2c75x.png" alt="Trailing Stop - Automatically protect a position's downside while locking in the upside"/>
                        </picture>
                    </div>
                    <ul>
 <li>Helps lock in profits</li>
 <li>Automatically amends your Close at Loss price</li>
 <li>Available free of charge</li>
 <li>Closing price is not guaranteed</li>
</ul>
                </div>
            </div>
        </div>
    </section>
</section>




<div class="disclaimer-zone">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12 text-center free-content">
                <p>Plus500 does not claim to be an official academic institution that has received recognition from any country/government.</p>
            </div>
        </div>  
    </div>
</div>

    <section class="blue-strip">
        
<section class="start-trading-section blue-section">
    <figure aria-hidden="true" class="plus-bg plus-bg-large white"></figure>
    <div class="container-xxl start-trading-container">
        <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-turquoise-gr"></figure>
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-9">
                <div class="data">
                    <h2 class="title-section"><strong>Put Your Knowledge to the Test</strong></h2>
                    <div class="free-content">Ready to take the next step in your journey?</div>
                    <div class="start-trading-buttons">
    <div class="cta-wrap"> 
            <a data-analytics="CTA_real" data-start-trading data-cta-name="start-trading-real-cfd" class="button blue-gradient" href="https://app.plus500.com/trade?hl=en&amp;innerTags=_cc_+uswsv&amp;product=CFD&amp;IsRealMode=True&amp;ms=True" target="_blank">Start Trading Now</a>
                    <a data-analytics="CTA_demo" data-cta-name="start-trading-demo-cfd" class="button white-bg hollow link-demo" href="https://app.plus500.com/trade?hl=en&amp;innerTags=_cc_+uswsv&amp;product=CFD&amp;IsRealMode=False&amp;ms=True" target="_blank">Try Free Demo</a>
    </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </section>
    <section class="white-strip">
        <section class="why-us-section-wrap">
    <section class="why-us-section general-section gs-anim-target" data-section-name="whys-us">
        <div class="container-xxl">
            <div class="row">
                <div class="col blue-card-parent">
                    <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-gr"></figure>
                    <div class="blue-card-bg shadow-card flip full-height"></div>
                    <h2 class="title-section white text-center"><strong>Why Plus500?</strong></h2>

                    <div class="row align-center items-icon-group side-icon">
                        <div class="col-lg-6 column item-box">
                            <article class="item">
                                <figure aria-hidden="true" class="item-icon"><img loading="lazy" alt="support" src="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/icons/icon-secure.svg" /></figure>
                                <div class="item-content">
                                    <h3 class="item-title">Protected & secure</h3>
                                    <div class="item-desc">Your data is safe and your funds are kept in segregated bank accounts, in accordance with regulatory requirements.</div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6 column item-box">
                            <article class="item">
                                <figure aria-hidden="true" class="item-icon"><img loading="lazy" alt="regulated" src="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/icons/icon-support.svg" /></figure>
                                <div class="item-content">
                                    <h3 class="item-title">Professional support</h3>
                                    <div class="item-desc">Get around-the-clock dedicated customer service in multiple languages.</div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6 column item-box">
                            <article class="item">
                                <figure aria-hidden="true" class="item-icon"><img loading="lazy" alt="secure" src="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/icons/icon-regulated.svg#fca" /></figure>
                                <div class="item-content">
                                    <h3 class="item-title">Regulated</h3>
                                    <div class="item-desc">Licensed and regulated by a variety of global leading regulators. <a href="../tradingacademy/faq/regulators/throughwhichsubsdoyouoperate.html">Learn more</a>.</div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6 column item-box">
                            <article class="item">
                                <figure aria-hidden="true" class="item-icon"><img loading="lazy" alt="reliable" src="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/icons/icon-reliable.svg#fca" /></figure>
                                <div class="item-content">
                                    <h3 class="item-title">Recognised</h3>
                                    <div class="item-desc">Plus500 Ltd is a FTSE 250 company listed on the London Stock Exchange’s Main Market for Listed Companies.</div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
    </section>

    </main>

    <script>
        var reportCtaClickUrl = '../api/ReportData.html';
    </script>

    <section id="support-section" class="support-section">
        <div class="container-xxl">
            <div class="row">
                <div class="col d-md-flex justify-content-center align-items-center text-center">
                    <h5>Need Help?</h5>
                    <a data-analytics="buttonClick" class="support-link" href="../tradingacademy/faq.html">
                        <span class="text">24/7 Support</span>
                        <span class="icon-users"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@include('home.footer')