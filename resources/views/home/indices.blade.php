@include('home.header')






<div class="sentinal"></div>
    
    <main>
    

<section class="inner-page instrument instrument-page indices">
    <section class="instrument-banner inner-banner main-banner indices general-section gs-anim-target" data-section-name="hero-section">
        <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-turquoise-gr"></figure>
        <figure aria-hidden="true" class="plus-bg plus-bg-large blue-fill"></figure>
        <div class="container-xxl">
            <div class="row align-center-middle main-banner-wrap">
                <figure aria-hidden="true" class="plus-bg plus-bg-small white"></figure>
                <div class="col col-md-11 col-lg-9 main-banner-content hero-content container-wrap">
                    <h1 class="main-banner-title">Trade Index CFDs</h1>
                    <div class="main-banner-desc">Trade the most popular Indices around the world like S&P 500, US-TECH 100, and France 40 with leverage.</div> 
                    <div class="start-trading-box start-trading-banner-zone">
                        <div class="start-trading-buttons">
    <div class="cta-wrap"> 
            <a data-analytics="CTA_real" data-start-trading data-cta-name="start-trading-real-cfd" class="button blue-gradient" href="{{route('register')}}" target="_blank">Start Trading Now</a>
                    <a data-analytics="CTA_demo" data-cta-name="start-trading-demo-cfd" class="button white-bg hollow link-demo" href="{{route('register')}}" target="_blank">Try Free Demo</a>
    </div>
    </div>
                    </div>
                                                    <div class="comment">
                                    <span>Plus500UK Ltd is authorised and regulated by the Financial Conduct Authority (FRN&nbsp;509909).
</span>
                                    <br>
                                    <span>Based in London</span>
                                </div>
                </div>
            </div>
        </div>
    </section> 
    
        <section class="payment-section general-section">
            <div class="blue-card-bg white full-height not-rotate"></div>
            <div class="container">
    <div class="row justify-content-center align-center payment-brands">
        <div class="col main-column">
            <div class="payment-brand-list row align-middle align-center">
                        <div class="col payment-brand">
                            <figure class="payment-brand-img">
                                <img loading="lazy" title="Visa" alt="Visa" src="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/pay_methods/visa.svg" />
                            </figure>
                        </div>
                        <div class="col payment-brand ">
                            <figure class="payment-brand-img">
                                <img loading="lazy" title="MasterCard" alt="MasterCard" src="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/pay_methods/mastercard.svg" />
                            </figure>
                        </div>
                        <div class="col payment-brand">
                            <figure class="payment-brand-img">
                                <img loading="lazy" title="PayPal" alt="PayPal" src="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/pay_methods/paypal.svg" />
                            </figure>
                        </div>
                        <div class="col payment-brand">
                            <figure class="payment-brand-img">
                                <img loading="lazy" title="Bank transfer" alt="Bank transfer" src="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/pay_methods/wire.svg" />
                            </figure>
                        </div>
                        <div class="col payment-brand">
                            <figure class="payment-brand-img">
                                <img loading="lazy" title="Fast Bank Transfer" alt="Fast Bank Transfer" src="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/pay_methods/onlinebanking.svg" />
                            </figure>
                        </div>
                        <div class="col payment-brand">
                            <figure class="payment-brand-img">
                                <img loading="lazy" title="Apple Pay" alt="Apple Pay" src="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/pay_methods/applepay.svg" />
                            </figure>
                        </div>
                        <div class="col payment-brand">
                            <figure class="payment-brand-img">
                                <img loading="lazy" title="Google Pay" alt="Google Pay" src="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/pay_methods/googlepay.svg" />
                            </figure>
                        </div>
                                    <div class="col payment-brand">
                        <figure class="payment-brand-img">
                            <img loading="lazy" title="Trustly" alt="Trustly" src="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/pay_methods/trustly.svg" />
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
        </section>

<section class="markets-section general-section" data-section-name="global-markets">
    <div class="container-xxl px-0">
        <div class="row">
            <div class="col blue-card-parent gs-anim-target">
                <figure aria-hidden="true" class="plus-bg plus-bg-small blue-white-gr"></figure>
                <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-white-gr"></figure>
                <div class="blue-card-bg"></div>
                <div class="row justify-content-sm-center justify-content-lg-around ">
                    <div class="col-sm-12 col-md-8 col-lg-6 markets-item-wrap">
                        <div class="blue-card-content container-wrap">
                                    <div class="markets-item">
                                        <h2 class="title-section instrument-category">Trade Indices With Leverage</h2>
                                        <div class="free-content">Magnify the size of your trades without committing large amounts of capital. Leverage of up to 1:20 allows you to start trading CFDs with as little as £100 to gain the effect of £2,000 capital!</div>
                                            <a data-analytics="buttonClick" href="../instruments.html#Indices" class="button btn btn-lg btn-light">View Our Indices</a>
                                    </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-5 markets-widget-wrap">
                        <div class="markets-widget gs-markets-widget">
                            
<div id="feedTable" class="feed-table feeds-top-tabs">
    <div v-if="shouldDisplaySideCategoriesTabs" class="instruments-widget-tabs" :class="categoriesClass">
        <button class="btn" data-analytics="widgetInteractions_tab" type-of-Widget="feedsWidget" :category="categoryId" v-for="(category, categoryId) in categories" type="button" :data-tab-id="'tab_' + categoryId" :aria-label="categoryId" :class="categoryId == activeCategory ? 'selected' : ''" v-on:click="onCategoryTabClick(categoryId)" :title="category.categoryName">
            <span class="tab-icon" :class="category.icon"></span>
        </button>
    </div>
    <div class="instruments-widget-items">
        {{-- <h2 v-cloak>{{activeCategoryName}}</h2> --}}
        <div class="instruments-table" v-cloak>
            <template v-for="(instrument, i) in activeInstruments">
                <div class="instrument-item">
                    <div class="instrument-basic-info">
                        <figure class="skeleton-box" v-instrument-icon="instrument.instrumentIconImage">
                            <img loading="lazy" :src="instrument.instrumentIconImage" :alt="instrument.name" :title="instrument.name" aria-hidden="True"/>
                        </figure>
                    </div>
                    <span class="inst-name-wrapper">

                        {{-- <a data-analytics="widgetInteractions_instrumentName" type-of-Widget="feedsWidget" :category="activeCategory" :instrumentName="instrument.symbol" :href="instrument.instrumentLink" :title="instrument.name" :dir="resolveInstrumentLangDir(instrument)">{{instrument.name}}</a> --}}
                        <sup v-if="instrument.isDelayedInstrument" title="Delayed data. Use the platform to gain access to real time prices.">
                            <span class="icon-clock3 table-clock"></span>
                        </sup>
                    </span>
                    <div class="sell-buy-grid">
                        <span :class="['sell', resolveSellPriceClass(instrument)]">
                            {{-- <span>{{instrument.sellPrice ? instrument.sellPrice?.toFixed(instrument.precision) : '--'}}</span> --}}
                        </span>
                        <span :class="['change rate-change', resolvePercentClass(instrument)]">
                            {{-- <span :class="resolveThresholdClass(instrument)">{{instrument.changeRate?.toFixed(percentPrecision)}}%</span> --}}
                        </span>
                    </div>
                    <span class="trade">
                        <a data-analytics="CTA_demo" type-of-Widget="feedsWidget" :href="instrument.tradingLink" class="btn btn-sm btn-outline-primary trade-button lh-1" v-on:click="onTradeClick(activeCategory)">Trade</a>
                    </span>
                </div>
            </template>
        </div>
    </div>
</div>

<script>
    let feedsInitialData = {"Indices":{"categoryName":"Indices","instruments":[{"instrumentId":3869,"precision":2,"threshold":"1.0","name":"UK 100","instrumentLink":"/en/instruments/uk100","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":8275.00,"buyPrice":8277.00,"changeRate":-0.58,"symbol":"UK100","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/UK100.png?v=1718693345"},{"instrumentId":98,"precision":0,"threshold":"1.0","name":"ASX 200","instrumentLink":"/en/instruments/spi200","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":8315.0,"buyPrice":8318.0,"changeRate":0.39,"symbol":"SPI200","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/SPI200.png?v=1718693350"},{"instrumentId":3017,"precision":2,"threshold":"1.0","name":"Germany 40","instrumentLink":"/en/instruments/fdax","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":19604.42,"buyPrice":19606.57,"changeRate":-0.14,"symbol":"FDAX","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/FDAX.png?v=1718693346"},{"instrumentId":4173,"precision":0,"threshold":"1.0","name":"Spain 35","instrumentLink":"/en/instruments/ibx","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":11913.0,"buyPrice":11922.0,"changeRate":0.55,"symbol":"IBX","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/IBX.png?v=1718693349"},{"instrumentId":85,"precision":0,"threshold":"1.0","name":"USA 30","instrumentLink":"/en/instruments/ym","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":42979.0,"buyPrice":42983.0,"changeRate":-0.08,"symbol":"YM","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/YM.png?v=1718693361"},{"instrumentId":4310,"precision":2,"threshold":"1.0","name":"Netherlands 25","instrumentLink":"/en/instruments/ft","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":898.08,"buyPrice":898.88,"changeRate":-2.68,"symbol":"FT","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/FT.png?v=1718693351"},{"instrumentId":18,"precision":2,"threshold":"1.0","name":"S&P 500","instrumentLink":"/en/instruments/es","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":5857.52,"buyPrice":5858.22,"changeRate":-0.08,"symbol":"ES","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/ES.png?v=1718693355"},{"instrumentId":295,"precision":0,"threshold":"1.0","name":"Italy 40","instrumentLink":"/en/instruments/fibi","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":34240.0,"buyPrice":34260.0,"changeRate":-0.85,"symbol":"FIBi","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/FIBi.png?v=1718693352"}],"icon":"icon-indices"},"MostPopular":{"categoryName":"Most Popular","instruments":[{"instrumentId":10,"precision":2,"threshold":"2.0","name":"Oil","instrumentLink":"/en/instruments/cl","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":70.92,"buyPrice":70.96,"changeRate":0.51,"symbol":"CL","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/CL_border.png?v=1718693369"},{"instrumentId":123,"precision":3,"threshold":"2.0","name":"Natural Gas","instrumentLink":"/en/instruments/ng","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":2.478,"buyPrice":2.482,"changeRate":-0.72,"symbol":"NG","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/NG.png?v=1718693370"},{"instrumentId":1069887,"precision":2,"threshold":"40.0","name":"Oil | Call 72","instrumentLink":"/en/instruments/cldec24c72","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":2.82,"buyPrice":2.97,"changeRate":5.66,"symbol":"CLDEC24C72","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/CL_border.png?v=1718693369"},{"instrumentId":85,"precision":0,"threshold":"1.0","name":"USA 30","instrumentLink":"/en/instruments/ym","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":42979.0,"buyPrice":42983.0,"changeRate":-0.08,"symbol":"YM","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/YM.png?v=1718693361"},{"instrumentId":1069497,"precision":2,"threshold":"40.0","name":"Gold | Call 2650","instrumentLink":"/en/instruments/ognov24c2650","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":42.09,"buyPrice":43.31,"changeRate":-1.39,"symbol":"OGNOV24C2650","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/XAU.png?v=1720339249"},{"instrumentId":431,"precision":2,"threshold":"2.0","name":"Brent Oil","instrumentLink":"/en/instruments/eb","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":74.64,"buyPrice":74.69,"changeRate":-3.61,"symbol":"EB","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/EB_border.png?v=1718693363"},{"instrumentId":3017,"precision":2,"threshold":"1.0","name":"Germany 40","instrumentLink":"/en/instruments/fdax","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":19604.42,"buyPrice":19606.57,"changeRate":-0.14,"symbol":"FDAX","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/FDAX.png?v=1718693346"},{"instrumentId":4078,"precision":2,"threshold":"1.0","name":"Nasdaq 100","instrumentLink":"/en/instruments/nq","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":20321.92,"buyPrice":20323.82,"changeRate":-0.09,"symbol":"NQ","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/NQ.png?v=1718693360"}],"icon":"icon-flame"},"Stocks":{"categoryName":"Shares","instruments":[{"instrumentId":1067539,"precision":2,"threshold":"4.0","name":"Alphabet (Extended Hours)","instrumentLink":"/en/instruments/goog_eh","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":166.34,"buyPrice":167.59,"changeRate":0.37,"symbol":"GOOG_EH","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Stocks/GOOG_EH_border.png?v=1723708729"},{"instrumentId":1067544,"precision":2,"threshold":"4.0","name":"NVIDIA (Extended Hours)","instrumentLink":"/en/instruments/nvda_eh","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":130.41,"buyPrice":131.39,"changeRate":-5.19,"symbol":"NVDA_EH","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Stocks/NVDA_EH.png?v=1723708817"},{"instrumentId":1067545,"precision":2,"threshold":"4.0","name":"Tesla (Extended Hours)","instrumentLink":"/en/instruments/tsla_eh","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":218.09,"buyPrice":219.73,"changeRate":-0.11,"symbol":"TSLA_EH","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Stocks/TSLA_EH.png?v=1723708918"},{"instrumentId":1067543,"precision":2,"threshold":"4.0","name":"Meta (Extended Hours)","instrumentLink":"/en/instruments/meta_eh","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":583.07,"buyPrice":587.46,"changeRate":-0.87,"symbol":"META_EH","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Stocks/META_EH_border.png?v=1723708791"},{"instrumentId":1067541,"precision":2,"threshold":"4.0","name":"Microsoft (Extended Hours)","instrumentLink":"/en/instruments/msft_eh","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":417.23,"buyPrice":420.37,"changeRate":-0.08,"symbol":"MSFT_EH","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Stocks/MSFT_EH_border.png?v=1723708801"},{"instrumentId":1067542,"precision":2,"threshold":"4.0","name":"Amazon (Extended Hours)","instrumentLink":"/en/instruments/amzn_eh","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":186.99,"buyPrice":188.40,"changeRate":0.08,"symbol":"AMZN_EH","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Stocks/AMZN_EH_border.png?v=1723708609"},{"instrumentId":5069,"precision":2,"threshold":"4.0","name":"Trump Media & Technology Group","instrumentLink":"/en/instruments/djt","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":27.00,"buyPrice":27.20,"changeRate":-9.52,"symbol":"DJT","instrumentIconImage":""},{"instrumentId":2104,"precision":2,"threshold":"4.0","name":"Wolfspeed","instrumentLink":"/en/instruments/wolf","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":13.68,"buyPrice":13.78,"changeRate":20.7,"symbol":"WOLF","instrumentIconImage":""}],"icon":"icon-stocks"},"Commodities":{"categoryName":"Commodities","instruments":[{"instrumentId":10,"precision":2,"threshold":"2.0","name":"Oil","instrumentLink":"/en/instruments/cl","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":70.92,"buyPrice":70.96,"changeRate":0.51,"symbol":"CL","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/CL_border.png?v=1718693369"},{"instrumentId":431,"precision":2,"threshold":"2.0","name":"Brent Oil","instrumentLink":"/en/instruments/eb","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":74.64,"buyPrice":74.69,"changeRate":-3.61,"symbol":"EB","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/EB_border.png?v=1718693363"},{"instrumentId":430,"precision":4,"threshold":"2.0","name":"Heating Oil","instrumentLink":"/en/instruments/ho","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":2.1929,"buyPrice":2.1945,"changeRate":0.27,"symbol":"HO","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/HO_border.png?v=1718693368"},{"instrumentId":11,"precision":2,"threshold":"2.0","name":"Gold","instrumentLink":"/en/instruments/xau","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":2661.50,"buyPrice":2662.15,"changeRate":-0.03,"symbol":"XAU","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/XAU.png?v=1720339249"},{"instrumentId":1062021,"precision":2,"threshold":"2.0","name":"Aluminum","instrumentLink":"/en/instruments/ali","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":2544.43,"buyPrice":2549.32,"changeRate":-0.75,"symbol":"ALI","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/ALI.png?v=1718693365"},{"instrumentId":12,"precision":3,"threshold":"2.0","name":"Silver","instrumentLink":"/en/instruments/xag","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":31.475,"buyPrice":31.504,"changeRate":-0.03,"symbol":"XAG","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/XAG.png?v=1718693367"},{"instrumentId":4092,"precision":2,"threshold":"2.0","name":"Low Sulphur Gasoil","instrumentLink":"/en/instruments/g","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":662.06,"buyPrice":664.44,"changeRate":-4.19,"symbol":"G","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/G.png?v=1718693370"},{"instrumentId":115,"precision":2,"threshold":"2.0","name":"Coffee","instrumentLink":"/en/instruments/kc","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":256.28,"buyPrice":256.48,"changeRate":-2.16,"symbol":"KC","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/KC.png?v=1718693366"}],"icon":"icon-commodities"},"Forex":{"categoryName":"Forex","instruments":[{"instrumentId":2,"precision":5,"threshold":"0.5","name":"EUR/USD","instrumentLink":"/en/instruments/eurusd","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":1.08888,"buyPrice":1.08913,"changeRate":-0.04,"symbol":"EURUSD","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Forex/EURUSD.png?v=1718693396"},{"instrumentId":5,"precision":5,"threshold":"0.5","name":"EUR/GBP","instrumentLink":"/en/instruments/eurgbp","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":0.83307,"buyPrice":0.83338,"changeRate":0.0,"symbol":"EURGBP","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Forex/EURGBP.png?v=1718693394"},{"instrumentId":177,"precision":5,"threshold":"0.5","name":"EUR/AUD","instrumentLink":"/en/instruments/euraud","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":1.62542,"buyPrice":1.62623,"changeRate":0.05,"symbol":"EURAUD","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Forex/EURAUD.png?v=1718693376"},{"instrumentId":376,"precision":5,"threshold":"0.5","name":"EUR/NZD","instrumentLink":"/en/instruments/eurnzd","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":1.79498,"buyPrice":1.79630,"changeRate":0.28,"symbol":"EURNZD","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Forex/EURNZD.png?v=1718693378"},{"instrumentId":72,"precision":4,"threshold":"0.5","name":"EUR/CAD","instrumentLink":"/en/instruments/eurcad","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":1.5004,"buyPrice":1.5010,"changeRate":0.02,"symbol":"EURCAD","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Forex/EURCAD.png?v=1718693377"},{"instrumentId":100,"precision":4,"threshold":"0.5","name":"EUR/CHF","instrumentLink":"/en/instruments/eurchf","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":0.9386,"buyPrice":0.9392,"changeRate":-0.01,"symbol":"EURCHF","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Forex/EURCHF.png?v=1718693386"},{"instrumentId":4,"precision":5,"threshold":"0.5","name":"GBP/USD","instrumentLink":"/en/instruments/gbpusd","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":1.30678,"buyPrice":1.30717,"changeRate":-0.03,"symbol":"GBPUSD","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Forex/GBPUSD.png?v=1718693375"},{"instrumentId":39,"precision":5,"threshold":"0.5","name":"AUD/USD","instrumentLink":"/en/instruments/audusd","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":0.66969,"buyPrice":0.66993,"changeRate":-0.08,"symbol":"AUDUSD","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Forex/AUDUSD.png?v=1718693375"}],"icon":"icon-forex"},"Options":{"categoryName":"Options","instruments":[{"instrumentId":1070165,"precision":2,"threshold":"40.0","name":"NVIDIA | Put 129","instrumentLink":"/en/instruments/nvidianov24p129","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":6.13,"buyPrice":6.27,"changeRate":72.22,"symbol":"NVIDIANOV24P129","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Stocks/NVDA.png?v=1723708817"},{"instrumentId":1070159,"precision":2,"threshold":"40.0","name":"ARM | Put 135","instrumentLink":"/en/instruments/armnov24p135","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":6.54,"buyPrice":6.85,"changeRate":57.53,"symbol":"ARMNOV24P135","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Stocks/ARM.png?v=1723708613"},{"instrumentId":1069454,"precision":4,"threshold":"40.0","name":"Natural Gas | Call 2.7","instrumentLink":"/en/instruments/ngnov24c2.7","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":0.0381,"buyPrice":0.0429,"changeRate":-20.9,"symbol":"NGNOV24C2.7","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/NG.png?v=1718693370"},{"instrumentId":1070086,"precision":2,"threshold":"40.0","name":"UK 100 | Call 8400","instrumentLink":"/en/instruments/ftsenov24c8400","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":43.20,"buyPrice":55.80,"changeRate":-18.85,"symbol":"FTSENOV24C8400","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/UK100.png?v=1718693345"},{"instrumentId":1069580,"precision":2,"threshold":"40.0","name":"S&P 500 | Put 5800","instrumentLink":"/en/instruments/ewoct24p5800","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":41.20,"buyPrice":42.55,"changeRate":4.69,"symbol":"EWOCT24P5800","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/ES.png?v=1718693355"},{"instrumentId":1069592,"precision":2,"threshold":"40.0","name":"Nasdaq 100 | Put 20000","instrumentLink":"/en/instruments/nqoct24p20000","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":190.66,"buyPrice":194.09,"changeRate":63.03,"symbol":"NQOCT24P20000","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/NQ.png?v=1718693360"},{"instrumentId":1069855,"precision":2,"threshold":"40.0","name":"VIX | Call 22","instrumentLink":"/en/instruments/vixnov24c22","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":1.71,"buyPrice":1.80,"changeRate":19.39,"symbol":"VIXNOV24C22","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/VIX.png?v=1718693345"},{"instrumentId":1069773,"precision":5,"threshold":"40.0","name":"EUR/USD | Put 1.085","instrumentLink":"/en/instruments/eurusdnov24p1.085","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":0.00567,"buyPrice":0.00593,"changeRate":12.4,"symbol":"EURUSDNOV24P1.085","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Forex/EURUSD.png?v=1718693396"}],"icon":"icon-options"},"ETFs":{"categoryName":"ETFs","instruments":[{"instrumentId":145,"precision":2,"threshold":"3.0","name":"USO-Oil Fund","instrumentLink":"/en/instruments/uso","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":72.70,"buyPrice":72.86,"changeRate":-4.15,"symbol":"USO","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/ETF/USO_border.png?v=1718693546"},{"instrumentId":403,"precision":2,"threshold":"3.0","name":"iShares Silver","instrumentLink":"/en/instruments/slv","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":28.69,"buyPrice":28.77,"changeRate":0.67,"symbol":"SLV","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/ETF/SLV.png?v=1718693512"},{"instrumentId":148,"precision":2,"threshold":"3.0","name":"UNG-Gas Fund","instrumentLink":"/en/instruments/ung","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":13.91,"buyPrice":14.11,"changeRate":0.14,"symbol":"UNG","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/ETF/UNG_border.png?v=1718693509"},{"instrumentId":150,"precision":2,"threshold":"3.0","name":"OIH-Oil Service","instrumentLink":"/en/instruments/oih","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":283.42,"buyPrice":284.52,"changeRate":-3.78,"symbol":"OIH","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/ETF/OIH_border.png?v=1718693519"},{"instrumentId":144,"precision":2,"threshold":"3.0","name":"GLD Gold","instrumentLink":"/en/instruments/gld","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":245.83,"buyPrice":245.98,"changeRate":0.34,"symbol":"GLD","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/ETF/GLD.png?v=1718693536"},{"instrumentId":1349,"precision":2,"threshold":"3.0","name":"Commodity Index Fund","instrumentLink":"/en/instruments/dbc","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":22.45,"buyPrice":22.51,"changeRate":-1.92,"symbol":"DBC","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/ETF/DBC.png?v=1718693509"},{"instrumentId":3519,"precision":2,"threshold":"3.0","name":"Global X Lithium & Battery Tech","instrumentLink":"/en/instruments/lit","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":42.52,"buyPrice":42.65,"changeRate":-3.24,"symbol":"LIT","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/ETF/LIT.png?v=1718693535"},{"instrumentId":4202,"precision":2,"threshold":"3.0","name":"NUGT","instrumentLink":"/en/instruments/nugt","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":51.45,"buyPrice":51.70,"changeRate":2.45,"symbol":"NUGT","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/ETF/NUGT.png?v=1718693509"}],"icon":"icon-etfs"},"RisersAndFallers":{"categoryName":"Risers & Fallers","instruments":[{"instrumentId":1069272,"precision":2,"threshold":"40.0","name":"Netherlands 25 | Put 900","instrumentLink":"/en/instruments/aexoct24p900","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":5.15,"buyPrice":5.95,"changeRate":692.86,"symbol":"AEXOCT24P900","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/FT.png?v=1718693351"},{"instrumentId":2104,"precision":2,"threshold":"4.0","name":"Wolfspeed","instrumentLink":"/en/instruments/wolf","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":13.68,"buyPrice":13.78,"changeRate":20.7,"symbol":"WOLF","instrumentIconImage":""},{"instrumentId":3468,"precision":2,"threshold":"1.0","name":"VIX Volatility Index","instrumentLink":"/en/instruments/vix","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":19.31,"buyPrice":19.54,"changeRate":0.62,"symbol":"VIX","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/VIX.png?v=1718693345"},{"instrumentId":10,"precision":2,"threshold":"2.0","name":"Oil","instrumentLink":"/en/instruments/cl","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":70.92,"buyPrice":70.96,"changeRate":0.51,"symbol":"CL","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/CL_border.png?v=1718693369"},{"instrumentId":1069297,"precision":2,"threshold":"40.0","name":"Netherlands 25 | Call 930","instrumentLink":"/en/instruments/aexoct24c930","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":0.09,"buyPrice":0.17,"changeRate":-95.15,"symbol":"AEXOCT24C930","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/FT.png?v=1718693351"},{"instrumentId":1067544,"precision":2,"threshold":"4.0","name":"NVIDIA (Extended Hours)","instrumentLink":"/en/instruments/nvda_eh","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":130.41,"buyPrice":131.39,"changeRate":-5.19,"symbol":"NVDA_EH","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Stocks/NVDA_EH.png?v=1723708817"},{"instrumentId":3427,"precision":2,"threshold":"1.0","name":"China A50","instrumentLink":"/en/instruments/cn","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":13239.88,"buyPrice":13253.13,"changeRate":-4.27,"symbol":"CN","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Indices/CN.png?v=1718693344"},{"instrumentId":123,"precision":3,"threshold":"2.0","name":"Natural Gas","instrumentLink":"/en/instruments/ng","isDelayedInstrument":false,"tradingLink":"https://app.plus500.com/trade?hl=en&innerTags=_cc_+uswsv&product=CFD&ms=True","sellPrice":2.478,"buyPrice":2.482,"changeRate":-0.72,"symbol":"NG","instrumentIconImage":"https://cdn.plus500.com/Media/Apps/cfd_invest/Commodities/NG.png?v=1718693370"}],"icon":"icon-risers-fallers"}};
    const feedsWidgetOptions = {
        rootElement: '#feedTable',
        initialData: feedsInitialData,
        apiUrl: '/en/api/LiveData/FeedsUpdates',
        priceDownClass: 'red',
        priceUpClass: 'green',
        percentUpClass: 'inst-up',
        percentDownClass: 'inst-down',
        thresholdClass: "highlight-threshold",
        updateInterval: 3000,
        percentPrecision: 2
    }
    let feedsApp;

    const observer = new window.IntersectionObserver(function (entries){
        const entry = entries[0]
        if (entry.isIntersecting){
            loadJS("../../../cdn-main.plus500.com/1.0.0.120279/Resources/Scripts/vue.min.js", document.body, function () {
                loadJS("../../../cdn-main.plus500.com/1.0.0.120279/Resources/Scripts/feedsApp.min.js", document.body, function () {
                    feedsApp = initFeedsApp(feedsWidgetOptions) 
                }, false);    
            }, false)
            observer.unobserve(entry.target);
        }
    }, {threshold: 0.05, rootMargin: '20%'});
    observer.observe(document.querySelector(feedsWidgetOptions.rootElement));
</script>

                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
 
<section class="trading-list-section general-section">
    <div class="container-xxl">
        <div class="row item-list">
                    <div class="col-sm-12 col-md-6 item-box">
                        <div class="item">
                                <h2 class="title-section item-title">FREE Real-Time Index Quotes</h2>
                            <div class="free-content">Get free real-time streaming quotes on all Indices. Set price alerts and notifications on live quotes free-of-charge.</div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 item-box">
                        <div class="item">
                                <h2 class="title-section item-title">Quick and Easy Account Funding</h2>
                            <div class="free-content">Applying for an account takes only a few minutes. Use cards, bank transfer, PayPal or Skrill to fund your account.</div>
                        </div>
                    </div>
            <div class="col-sm-12 item-box">
                <a href="../instruments.html#Indices" class="item item-link"><i class="icon icon-file-presentation" aria-hidden="true"></i><span>List of indices - click here</span></a>
                        <a href="https://cdn-main.plus500.com/Regulatory/FCA/default/default/1725787842/Kid.pdf" class="item item-link" target="_blank"><i class="icon icon-file-pdf" aria-hidden="true"></i><span>Key Information Document</span></a>
                                </div>
        </div>
    </div>
</section><section class="why-us-section-wrap">
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
</section><section class="instruments-seo-section">
    <div class="container-xxl">
        <div class="row justify-content-center">
                    <div class="col-lg-8 item">
                            <h2 class="title-section item-title"><strong>What is Indices trading?</strong></h2>
                        <div class="d-flex justify-content-center item-content">
                            <div class="free-content">Trading indices CFD involves the buying or selling of Index Contracts for Difference. This type of trading centers on monitoring stock market indices, which are compilations of various stocks. Traders focus on these major indices, such as the S&P 500 or the Dow, predicting the collective movement of stocks within them rather than individual shares. In other words, indices CFDs offer a snapshot of broader market trends by measuring the movements of stocks, hence reflecting the health of the overall economy as well as specific markets.</div>
                        </div>
                    </div>
                    <div class="col-xl-11 col-xxl-10">
                            <section class="how-trade-section general-section blue-card-section">
                                <div class="container-xxl">
                                    <div class="row">
                                        <div class="col blue-card-parent">
                                            <figure aria-hidden="true" class="plus-bg plus-bg-large blue-gr"></figure>
                                            <div class="blue-card-bg shadow-card flip"></div>
                                            <div class="row align-center items-icon-group side-icon">
                                                <div class="col-lg-11 item-box">
                                                    <article class="item">
                                                        <figure aria-hidden="true" class="item-icon"><img aria-hidden="true" loading="lazy" alt="" src="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/icons/icon-how-trade.svg" /></figure>
                                                        <div class="item-content">
                                                                <h2 class="title-section"><strong>How do I trade Indices?</strong></h2>
                                                            <div class="item-desc free-content"><strong>Start trading Indices in 5 simple steps:</strong>
<ol>
<li> Choose your Indices trading method</li>
<li> Learn about the Indices market</li> 
<li> Open and verify your Plus500 account</li>
<li> Plan your Indices trading strategy</li>
<li> Start trading!</li>
</ol></div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
        </div>
    </div>
</section>
    <section class="articles-list-section general-section">
        <div class="container-xxl">
            <div class="row justify-content-center">
                <div class="col col-lg-10">
                    <h2 class="title-section">
                        <strong>Explore Indices</strong>
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-lg-10 articles-list-container">
                    <ul class="articles-list">
                                        <li class="articles-list-item">
                                            <a class="articles-list-link icon-class" href="indices/what-are-indices_1.html">
                                                <h3 class="articles-list-title">What Are Indices?</h3>
                                            </a>
                                        </li>
                                        <li class="articles-list-item">
                                            <a class="articles-list-link icon-class" href="indices/what-are-the-most-traded-indices_2.html">
                                                <h3 class="articles-list-title">What Are the Most Traded Indices?</h3>
                                            </a>
                                        </li>
                                        <li class="articles-list-item">
                                            <a class="articles-list-link icon-class" href="indices/what-moves-an-index-price_3.html">
                                                <h3 class="articles-list-title">What Moves an Index’s Price?</h3>
                                            </a>
                                        </li>
                                        <li class="articles-list-item">
                                            <a class="articles-list-link icon-class" href="indices/how-to-trade-on-indices_4.html">
                                                <h3 class="articles-list-title">How to Trade Indices</h3>
                                            </a>
                                        </li>
                                        <li class="articles-list-item">
                                            <a class="articles-list-link icon-class" href="indices/how-does-an-index-cfd-trade-work_5.html">
                                                <h3 class="articles-list-title">How Does an Index CFD Trade Work?</h3>
                                            </a>
                                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
        


<section class="container-xxl market-insights-section general-section"> 
     <div class="row justify-content-center mb-3">
        <div class="col-12 text-center">
            <h2 class="title-section"><strong>Related News & Market Insights</strong></h2>
        </div>
    </div>
    <div class="row row row-cols-xxl-3 g-3 g-md-4 carousel-row"> 
                    <div class="carousel-item">
                        <a class="card-link" href="../newsandmarketinsights/china-s-stimulus-plan-boosts-asian-markets.html"  data-inner="China-s-Stimulus-Plan-Boosts-Asian-Markets">
                            <div class="card h-100">
                                <div class="ratio ratio-16x9 card-img card-img-bg">
                                    <img loading="lazy" src="../../../images.ctfassets.net/rbl6nw8n2c6i/6osROOIrQANkfsvtYMt55O/41e5f5652f2cb3e6cc8cee0967dc5953/image__1_.png" alt="China’s Stimulus Plan Boosts Asian Markets">
                                    <div class="meta">
                                        <div class="author">Plus500</div>
                                        <div class="date">Sep 24 2024</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">China’s Stimulus Plan Boosts Asian Markets</h3>
                                    <div class="card-text">Read about the latest PBOC stimulus plan and find out how it boosted Asian markets on Tuesday, 24 September, in this article.</div>
                                </div>
                                <div class="card-footer text-end">
                                    <div class="card-link-text"><span>Read More</span><i aria-hidden="true" class="icon icon-chevron-right"></i></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card-link" href="../newsandmarketinsights/wall-street-rebounds-amid-fed-speculation-and-tech-surge.html"  data-inner="Wall-Street-Rebounds-Amid-Fed-Speculation-and-Tech-Surge">
                            <div class="card h-100">
                                <div class="ratio ratio-16x9 card-img card-img-bg">
                                    <img loading="lazy" src="../../../images.ctfassets.net/rbl6nw8n2c6i/2oV9sLdUFMSyKAElLVHyw8/c9a24a10fb962dfc7ed00c4d445bb090/Wallstreet_article.jpg" alt="Wall Street Rebounds Amid Fed Speculation and Tech Surge">
                                    <div class="meta">
                                        <div class="author">Plus500</div>
                                        <div class="date">Sep 10 2024</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Wall Street Rebounds Amid Fed Speculation and Tech Surge</h3>
                                    <div class="card-text">Wall Street traders lifted key NYC indices upward on 9 September in a sharp trend reversal. Tech shares were especially crucial players even as interest rate speculation heightened.</div>
                                </div>
                                <div class="card-footer text-end">
                                    <div class="card-link-text"><span>Read More</span><i aria-hidden="true" class="icon icon-chevron-right"></i></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card-link" href="../newsandmarketinsights/nasdaq-punges-amid-ism-jitters.html"  data-inner="nasdaq-punges-amid-ism-jitters">
                            <div class="card h-100">
                                <div class="ratio ratio-16x9 card-img card-img-bg">
                                    <img loading="lazy" src="../../../images.ctfassets.net/rbl6nw8n2c6i/1s3TrthfazdGsJvIa3hJL4/bf718a57640a5044bf4047d1f3583f62/--04-09.png" alt="Nasdaq Plunges Amid ISM Jitters">
                                    <div class="meta">
                                        <div class="author">Stavros Tousios</div>
                                        <div class="date">Sep 04 2024</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Nasdaq Plunges Amid ISM Jitters</h3>
                                    <div class="card-text">Weak US ISM Manufacturing data on 3 September pushed the Nasdaq lower, raising doubts about the sustainability of AI-driven growth. Despite recent strong data, fears of a hard landing grew as investors await upcoming employment figures for more clarity.</div>
                                </div>
                                <div class="card-footer text-end">
                                    <div class="card-link-text"><span>Read More</span><i aria-hidden="true" class="icon icon-chevron-right"></i></div>
                                </div>
                            </div>
                        </a>
                    </div>
            </div>
    <div class="row">
        <div class="col text-center">
            <a data-analytics="buttonClick" class="btn button blue-gradient" id="all-news-link" href="../newsandmarketinsights.html">More News</a>
        </div>
    </div>
</section>

<script>
    function onPostClicked(el, clickSource){
       var slug = el.getAttribute("data-inner");
       sendAnalyticsEvent("MarketInsightsSection", clickSource, slug)
    }
    
    window.addEventListener('load', function () {
        var elements = document.querySelectorAll(".post-title-link");
        for (var i=0 ; i < elements.length; i++) {
            elements[i].addEventListener('click', function (){ onPostClicked(this, "title") });
        }
        elements = document.querySelectorAll(".read-more-link");
        for (var j=0 ; j < elements.length; j++) {
            elements[j].addEventListener('click', function (){ onPostClicked(this, "readMore") });
        }
        
        document.querySelector("#all-news-link").addEventListener('click', function () {
            sendAnalyticsEvent("MarketInsightsSection", "allNews")
        })
    });
</script>
        <section class="banner-section blue-section">
    <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-turquoise-gr"></figure>
    <figure aria-hidden="true" class="plus-bg plus-bg-large blue-fill"></figure>
    <figure aria-hidden="true" class="plus-bg plus-bg-large white"></figure>
    <div class="container-xxl start-trading-container">
        <figure aria-hidden="true" class="plus-bg plus-bg-small white"></figure>
        <div class="row justify-content-center justify-content-md-start justify-content-lg-center align-items-center">
            <div class="col-md-10">
                <div class="data">
                    <h2 class="title-section"><span>Dive into extensive learning with our</span> <strong>Trading Academy</strong></h2>
                    <a class="button white-bg hollow" href="../tradingacademy.html">Learn About Trading</a>
                </div>
            </div>
        </div>
    </div>
</section>
 


        
        <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "FAQPage",
          "mainEntity": [ {"type":"Question","name":"What is a stock market index and what does it measure?","acceptedAnswer":{"type":"Answer","text":"<p>  \nA stock index is a performance indicator or measure of a country's economy or of an industry sector. For example, <a href=\"/en/instruments/nq\">Nasdaq 100</a> represents the largest 100 companies traded on the Nasdaq Stock Exchange. If, on average, the share price of these companies goes up, then the index will rise. Conversely, if they fall, the index will drop.\n</p>\n<cut></cut>\n\n<p> \nMost main indices are based on a basket of shares and are thus considered good measures of the current market sentiment. When you take a position on an index, you are effectively investing in the performance of these shares and thus avoid factors that influence the performance of individual companies (such as a lack of market volume).\nFor a full list of index futures CFD offered on the Plus500 platform, <a href=\"/en/instruments#Indices\">click here</a>.\n</p>\n\n"}}, {"type":"Question","name":"What Are the Different Forms of Index Calculations?","acceptedAnswer":{"type":"Answer","text":"<p>\r\nStock market indices have different forms of calculation. These are the two most common:\r\n</p> \r\n<cut></cut>\r\n\r\n<ul> \r\n<li>\r\n<strong>Adjusted market capitalisation (or cap-weighted)</strong> is used to track a number of companies based on the adjusted market capitalisation of the constituent stocks. Large-cap companies have a greater impact on the index’s price than small-cap companies. <a href=\"/en/instruments/es\">S&P 500</a> is an example of an index that is calculated this way.\r\n</li>\r\n\r\n<li>\r\n<strong>Price-weighted average</strong> – adds up the stock prices of all constituents, and then divides that figure by the total number of stocks in the index. <a href=\"/en/instruments/ym\">Dow Jones</a> is an example of an index that is calculated this way.\r\n</li>\r\n</ul> \r\n"}}, {"type":"Question","name":"How does leverage work in Index CFDs?","acceptedAnswer":{"type":"Answer","text":"<p>  \r\nBy trading index futures contracts with leverage, you can multiply the value of a trade through the use of borrowed capital, and as such, you can increase the potential profit or loss to be realised from the trade. \r\nThe available leverage for index CFDs on the Plus500 platform is up to 1:20.\r\n</p> "}}, {"type":"Question","name":"What are the highlights of trading Index CFDs?","acceptedAnswer":{"type":"Answer","text":"<p>\nHere are a few highlights of trading Index CFDs:\n</p> \n\n\n<ul> \n<li>\n<strong>You can gain diversified exposure using a single instrument</strong> – as most factors that affect individual companies are taken out of the equation.\n\n</li>\n\n<li>\n<strong>More trading opportunities</strong> – we offer access to a wide range of indices from the world’s largest and most important stock markets.\n</li>\n\n<li>\n<strong>Enjoy tight spreads and <a href=\"/en/help/feescharges?productType=CFD\">zero commissions</a></strong> on real-time index quotes, charts, deposits and for opening / closing trades with Plus500.\n</li>\n</ul>\n</p>\n<p>To explore more highlights and possible advantages of index CFDs, read our \"<a href=\"/en/trading/indices/what-are-indices~1\">What Are Indices</a>\" article. \n</p>"}} ]
        }
        </script>
        <section class="faq faq-section container-lg">
            <h2 class="title-section text-center"><strong>Indices FAQ</strong></h2>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div id="accordionFaq" class="faq-accordion accordion" data-accordion data-allow-all-closed="true">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3 class="accordion-title">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#faq_accordion_1" aria-expanded="true" aria-controls="faq_accordion_1">What is a stock market index and what does it measure?</button>
                                    </h3>
                                </div>
                                <div id="faq_accordion_1" class="accordion-content accordion-collapse collapse show" aria-labelledby="faq_accordion_heading_1" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body"><p>  
A stock index is a performance indicator or measure of a country's economy or of an industry sector. For example, <a href="../instruments/nq.html">Nasdaq 100</a> represents the largest 100 companies traded on the Nasdaq Stock Exchange. If, on average, the share price of these companies goes up, then the index will rise. Conversely, if they fall, the index will drop.
</p>
<cut></cut>

<p> 
Most main indices are based on a basket of shares and are thus considered good measures of the current market sentiment. When you take a position on an index, you are effectively investing in the performance of these shares and thus avoid factors that influence the performance of individual companies (such as a lack of market volume).
For a full list of index futures CFD offered on the Plus500 platform, <a href="../instruments.html#Indices">click here</a>.
</p>

</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3 class="accordion-title">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_accordion_2" aria-expanded="false" aria-controls="faq_accordion_2">What Are the Different Forms of Index Calculations?</button>
                                    </h3>
                                </div>
                                <div id="faq_accordion_2" class="accordion-content accordion-collapse collapse " aria-labelledby="faq_accordion_heading_2" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body"><p>
Stock market indices have different forms of calculation. These are the two most common:
</p> 
<cut></cut>

<ul> 
<li>
<strong>Adjusted market capitalisation (or cap-weighted)</strong> is used to track a number of companies based on the adjusted market capitalisation of the constituent stocks. Large-cap companies have a greater impact on the index’s price than small-cap companies. <a href="../instruments/es.html">S&P 500</a> is an example of an index that is calculated this way.
</li>

<li>
<strong>Price-weighted average</strong> – adds up the stock prices of all constituents, and then divides that figure by the total number of stocks in the index. <a href="../instruments/ym.html">Dow Jones</a> is an example of an index that is calculated this way.
</li>
</ul> 
</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3 class="accordion-title">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_accordion_3" aria-expanded="false" aria-controls="faq_accordion_3">How does leverage work in Index CFDs?</button>
                                    </h3>
                                </div>
                                <div id="faq_accordion_3" class="accordion-content accordion-collapse collapse " aria-labelledby="faq_accordion_heading_3" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body"><p>  
By trading index futures contracts with leverage, you can multiply the value of a trade through the use of borrowed capital, and as such, you can increase the potential profit or loss to be realised from the trade. 
The available leverage for index CFDs on the Plus500 platform is up to 1:20.
</p> </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3 class="accordion-title">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_accordion_4" aria-expanded="false" aria-controls="faq_accordion_4">What are the highlights of trading Index CFDs?</button>
                                    </h3>
                                </div>
                                <div id="faq_accordion_4" class="accordion-content accordion-collapse collapse " aria-labelledby="faq_accordion_heading_4" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body"><p>
Here are a few highlights of trading Index CFDs:
</p> 


<ul> 
<li>
<strong>You can gain diversified exposure using a single instrument</strong> – as most factors that affect individual companies are taken out of the equation.

</li>

<li>
<strong>More trading opportunities</strong> – we offer access to a wide range of indices from the world’s largest and most important stock markets.
</li>

<li>
<strong>Enjoy tight spreads and <a href="../help/feeschargesbf2b.html?productType=CFD">zero commissions</a></strong> on real-time index quotes, charts, deposits and for opening / closing trades with Plus500.
</li>
</ul>
</p>
<p>To explore more highlights and possible advantages of index CFDs, read our "<a href="indices/what-are-indices_1.html">What Are Indices</a>" article. 
</p></div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    
            <section class="start-trading-bottom-zone" data-section-name="call-to-action-section">
                <div class="start-trading-buttons">
    <div class="cta-wrap"> 
            <a data-analytics="CTA_real" data-start-trading data-cta-name="start-trading-real-cfd" class="button blue-gradient" href="{{route('register')}}" target="_blank">Start Trading Now</a>
                    <a data-analytics="CTA_demo" data-cta-name="start-trading-demo-cfd" class="button white-bg hollow link-demo" href="{{route('register')}}" target="_blank">Try Free Demo</a>
    </div>
    </div>
            </section>
    </section>
    


    </main>

    <script>
        var reportCtaClickUrl = '../api/ReportData.html';
    </script>

   

@include('home.footer')