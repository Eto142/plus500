@include('home.header')
<div class="sentinel"></div>
<main>
    

<section class="main-banner inner-banner">
    <div class="container-lg hero-container" data-section-name="hero-section">
        <div class="row justify-content-center hero-content-wrap">
            <div class="col-12 col-xl-10 text-center main-banner-content hero-content">
                <h1 class="main-banner-title main-title-font">All the Futures You Need</h1>
                <p class="main-banner-slogan">Elevate your trading with the most popular Futures like S&amp;P 500, Bitcoin, Oil, Gold, and more.</p>
                <div class="main-banner-buttons button-group">
                    
<div class="cta-wrap">
            <a data-analytics="CTA_real" data-start-trading data-cta-name="start-trading-real-futures" class="button blue-gradient" href="{{route('register')}}">Start Trading Now</a>
        <a data-analytics="CTA_demo" data-cta-name="start-trading-demo-futures" class="button white-bg hollow link-demo" href="{{route('register')}}">Try Free Demo</a>
</div>
                </div>
            </div>
        </div>
        <ul id="instrumentCategoriesTabList" class="instruments-nav" role="tablist">

                <li class="equityindices instrument-btn active" role="presentation" data-slide-parent="0">
                    <button type="button" id="equityindices_tab" data-slide="0" role="tab" aria-controls="equityindices_tabpanel" aria-selected="true">
                        <span class="icon icon-futures-equityindices" aria-hidden="true"></span>
                        <span class="item-name">Equity Index</span>
                    </button>
                </li>
                <li class="energy instrument-btn " role="presentation" data-slide-parent="1">
                    <button type="button" id="energy_tab" data-slide="1" role="tab" aria-controls="energy_tabpanel" aria-selected="false">
                        <span class="icon icon-futures-energy" aria-hidden="true"></span>
                        <span class="item-name">Energy</span>
                    </button>
                </li>
                <li class="agriculture instrument-btn " role="presentation" data-slide-parent="2">
                    <button type="button" id="agriculture_tab" data-slide="2" role="tab" aria-controls="agriculture_tabpanel" aria-selected="false">
                        <span class="icon icon-futures-agriculture" aria-hidden="true"></span>
                        <span class="item-name">Agriculture</span>
                    </button>
                </li>
                <li class="metals instrument-btn " role="presentation" data-slide-parent="3">
                    <button type="button" id="metals_tab" data-slide="3" role="tab" aria-controls="metals_tabpanel" aria-selected="false">
                        <span class="icon icon-futures-metals" aria-hidden="true"></span>
                        <span class="item-name">Metals</span>
                    </button>
                </li>
                <li class="forex instrument-btn " role="presentation" data-slide-parent="4">
                    <button type="button" id="forex_tab" data-slide="4" role="tab" aria-controls="forex_tabpanel" aria-selected="false">
                        <span class="icon icon-futures-forex" aria-hidden="true"></span>
                        <span class="item-name">Forex</span>
                    </button>
                </li>
                <li class="crypto instrument-btn " role="presentation" data-slide-parent="5">
                    <button type="button" id="crypto_tab" data-slide="5" role="tab" aria-controls="crypto_tabpanel" aria-selected="false">
                        <span class="icon icon-futures-crypto" aria-hidden="true"></span>
                        <span class="item-name">Crypto</span>
                    </button>
                </li>
                <li class="interestrates instrument-btn " role="presentation" data-slide-parent="6">
                    <button type="button" id="interestrates_tab" data-slide="6" role="tab" aria-controls="interestrates_tabpanel" aria-selected="false">
                        <span class="icon icon-futures-interestrates" aria-hidden="true"></span>
                        <span class="item-name">Interest Rates</span>
                    </button>
                </li>
        </ul>
    </div>
</section>

<div class="container-lg">
    <div class="row">
        <div class="page-sections gs-anim-target" id="allInstrumentsTopAnchor">
            <figure aria-hidden="true" class="plus-bg plus-bg-large blue-gr"></figure>
            <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-gr"></figure>
            <div class="all-instruments">
                    <section id="equityindices_tabpanel" class="instrument-section" role="tabpanel" aria-labelledby="equityindices_tab">
                        <h2 class="text-center title-section">
                            <strong>Equity Index</strong>
                        </h2>
                        <table class="table-design">
                            <thead>
                                <tr>
                                    <th scope="col">Symbol</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="text-center">Intraday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>EMDZ4</td>
                                    <td>E-mini S&amp;P MidCap 400</td>
                                    <td class="text-center">$1,000</td>
                                </tr>
                                <tr>
                                    <td>MESZ4</td>
                                    <td>Micro E-mini S&amp;P 500</td>
                                    <td class="text-center">$50</td>
                                </tr>
                                <tr>
                                    <td>ESZ4</td>
                                    <td>E-mini S&amp;P 500</td>
                                    <td class="text-center">$500</td>
                                </tr>
                                <tr>
                                    <td>NQZ4</td>
                                    <td>E-mini Nasdaq-100</td>
                                    <td class="text-center">$1,000</td>
                                </tr>
                                <tr>
                                    <td>YMZ4</td>
                                    <td>E-mini Dow Jones</td>
                                    <td class="text-center">$500</td>
                                </tr>
                                <tr>
                                    <td>MYMZ4</td>
                                    <td>Micro E-mini Dow Jones</td>
                                    <td class="text-center">$50</td>
                                </tr>
                                <tr>
                                    <td>NKDZ4</td>
                                    <td>Nikkei</td>
                                    <td class="text-center">$1,500</td>
                                </tr>
                                <tr>
                                    <td>MNQZ4</td>
                                    <td>Micro E-mini Nasdaq-100</td>
                                    <td class="text-center">$100</td>
                                </tr>
                                <tr>
                                    <td>M2KZ4</td>
                                    <td>Micro E-mini Russell 2000</td>
                                    <td class="text-center">$50</td>
                                </tr>
                                <tr>
                                    <td>RTYZ4</td>
                                    <td>E-mini Russell 2000</td>
                                    <td class="text-center">$500</td>
                                </tr>
                                <tr>
                                    <td>MNKZ4</td>
                                    <td>Micro Nikkei (USD)</td>
                                    <td class="text-center">$150</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <section id="energy_tabpanel" class="instrument-section" role="tabpanel" aria-labelledby="energy_tab">
                        <h2 class="text-center title-section">
                            <strong>Energy</strong>
                        </h2>
                        <table class="table-design">
                            <thead>
                                <tr>
                                    <th scope="col">Symbol</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="text-center">Intraday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MCLF5</td>
                                    <td>Micro WTI Crude Oil</td>
                                    <td class="text-center">$80</td>
                                </tr>
                                <tr>
                                    <td>BZF5</td>
                                    <td>Brent Crude Oil</td>
                                    <td class="text-center">$1,000</td>
                                </tr>
                                <tr>
                                    <td>CLG5</td>
                                    <td>Crude Oil</td>
                                    <td class="text-center">$800</td>
                                </tr>
                                <tr>
                                    <td>CLF5</td>
                                    <td>Crude Oil</td>
                                    <td class="text-center">$800</td>
                                </tr>
                                <tr>
                                    <td>HOF5</td>
                                    <td>Heating Oil</td>
                                    <td class="text-center">$1,500</td>
                                </tr>
                                <tr>
                                    <td>NGF5</td>
                                    <td>Natural Gas</td>
                                    <td class="text-center">$1,000</td>
                                </tr>
                                <tr>
                                    <td>QGF5</td>
                                    <td>E-mini Natural Gas</td>
                                    <td class="text-center">$250</td>
                                </tr>
                                <tr>
                                    <td>RBF5</td>
                                    <td>RBOB Gasoline</td>
                                    <td class="text-center">$1,000</td>
                                </tr>
                                <tr>
                                    <td>QMF5</td>
                                    <td>E-mini Crude Oil</td>
                                    <td class="text-center">$400</td>
                                </tr>
                                <tr>
                                    <td>MNGF5</td>
                                    <td>Micro Natural Gas</td>
                                    <td class="text-center">$100</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <section id="agriculture_tabpanel" class="instrument-section" role="tabpanel" aria-labelledby="agriculture_tab">
                        <h2 class="text-center title-section">
                            <strong>Agriculture</strong>
                        </h2>
                        <table class="table-design">
                            <thead>
                                <tr>
                                    <th scope="col">Symbol</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="text-center">Intraday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ZMZ4</td>
                                    <td>Soybean Meal</td>
                                    <td class="text-center">$715</td>
                                </tr>
                                <tr>
                                    <td>ZCZ4</td>
                                    <td>Corn</td>
                                    <td class="text-center">$250</td>
                                </tr>
                                <tr>
                                    <td>ZSF5</td>
                                    <td>Soybean</td>
                                    <td class="text-center">$910</td>
                                </tr>
                                <tr>
                                    <td>ZWZ4</td>
                                    <td>Wheat</td>
                                    <td class="text-center">$250</td>
                                </tr>
                                <tr>
                                    <td>ZLZ4</td>
                                    <td>Soybean Oil</td>
                                    <td class="text-center">$550</td>
                                </tr>
                                <tr>
                                    <td>HEG5</td>
                                    <td>Lean Hogs</td>
                                    <td class="text-center">$250</td>
                                </tr>
                                <tr>
                                    <td>LEG5</td>
                                    <td>Live Cattle</td>
                                    <td class="text-center">$300</td>
                                </tr>
                                <tr>
                                    <td>GFF5</td>
                                    <td>Feeder Cattle</td>
                                    <td class="text-center">$500</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <section id="metals_tabpanel" class="instrument-section" role="tabpanel" aria-labelledby="metals_tab">
                        <h2 class="text-center title-section">
                            <strong>Metals</strong>
                        </h2>
                        <table class="table-design">
                            <thead>
                                <tr>
                                    <th scope="col">Symbol</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="text-center">Intraday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>GCZ4</td>
                                    <td>Gold</td>
                                    <td class="text-center">$500</td>
                                </tr>
                                <tr>
                                    <td>MGCZ4</td>
                                    <td>Micro Gold</td>
                                    <td class="text-center">$50</td>
                                </tr>
                                <tr>
                                    <td>MHGZ4</td>
                                    <td>Micro Copper</td>
                                    <td class="text-center">$150</td>
                                </tr>
                                <tr>
                                    <td>PLF5</td>
                                    <td>Platinum</td>
                                    <td class="text-center">$690</td>
                                </tr>
                                <tr>
                                    <td>SIZ4</td>
                                    <td>Silver</td>
                                    <td class="text-center">$2,200</td>
                                </tr>
                                <tr>
                                    <td>QOZ4</td>
                                    <td>E-mini Gold</td>
                                    <td class="text-center">$250</td>
                                </tr>
                                <tr>
                                    <td>SILZ4</td>
                                    <td>Micro Silver</td>
                                    <td class="text-center">$200</td>
                                </tr>
                                <tr>
                                    <td>HGZ4</td>
                                    <td>Copper</td>
                                    <td class="text-center">$1,375</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <section id="forex_tabpanel" class="instrument-section" role="tabpanel" aria-labelledby="forex_tab">
                        <h2 class="text-center title-section">
                            <strong>Forex</strong>
                        </h2>
                        <table class="table-design">
                            <thead>
                                <tr>
                                    <th scope="col">Symbol</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="text-center">Intraday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>6AZ4</td>
                                    <td>Australian Dollar</td>
                                    <td class="text-center">$400</td>
                                </tr>
                                <tr>
                                    <td>6BZ4</td>
                                    <td>British Pound</td>
                                    <td class="text-center">$500</td>
                                </tr>
                                <tr>
                                    <td>6CZ4</td>
                                    <td>Canadian Dollar</td>
                                    <td class="text-center">$400</td>
                                </tr>
                                <tr>
                                    <td>6SZ4</td>
                                    <td>Swiss Franc</td>
                                    <td class="text-center">$400</td>
                                </tr>
                                <tr>
                                    <td>6NZ4</td>
                                    <td>New Zealand Dollar</td>
                                    <td class="text-center">$250</td>
                                </tr>
                                <tr>
                                    <td>6EZ4</td>
                                    <td>Euro FX</td>
                                    <td class="text-center">$300</td>
                                </tr>
                                <tr>
                                    <td>E7Z4</td>
                                    <td>E-mini Euro FX</td>
                                    <td class="text-center">$150</td>
                                </tr>
                                <tr>
                                    <td>M6AZ4</td>
                                    <td>Micro AUD/USD</td>
                                    <td class="text-center">$40</td>
                                </tr>
                                <tr>
                                    <td>M6BZ4</td>
                                    <td>Micro GBP/USD</td>
                                    <td class="text-center">$50</td>
                                </tr>
                                <tr>
                                    <td>M6EZ4</td>
                                    <td>Micro EUR/USD</td>
                                    <td class="text-center">$50</td>
                                </tr>
                                <tr>
                                    <td>MCDZ4</td>
                                    <td>Micro CAD/USD</td>
                                    <td class="text-center">$40</td>
                                </tr>
                                <tr>
                                    <td>6JZ4</td>
                                    <td>Japanese Yen</td>
                                    <td class="text-center">$825</td>
                                </tr>
                                <tr>
                                    <td>6LZ4</td>
                                    <td>Brazilian Real</td>
                                    <td class="text-center">$235</td>
                                </tr>
                                <tr>
                                    <td>6ZZ4</td>
                                    <td>South African Rand</td>
                                    <td class="text-center">$385</td>
                                </tr>
                                <tr>
                                    <td>6MZ4</td>
                                    <td>Mexican Peso</td>
                                    <td class="text-center">$385</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <section id="crypto_tabpanel" class="instrument-section" role="tabpanel" aria-labelledby="crypto_tab">
                        <h2 class="text-center title-section">
                            <strong>Crypto</strong>
                        </h2>
                        <table class="table-design">
                            <thead>
                                <tr>
                                    <th scope="col">Symbol</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="text-center">Intraday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MBTX4</td>
                                    <td>Micro Bitcoin</td>
                                    <td class="text-center">$100</td>
                                </tr>
                                <tr>
                                    <td>METX4</td>
                                    <td>Micro Ether</td>
                                    <td class="text-center">$20</td>
                                </tr>
                                <tr>
                                    <td>BFFX422</td>
                                    <td>Bitcoin Friday</td>
                                    <td class="text-center">$25</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <section id="interestrates_tabpanel" class="instrument-section" role="tabpanel" aria-labelledby="interestrates_tab">
                        <h2 class="text-center title-section">
                            <strong>Interest Rates</strong>
                        </h2>
                        <table class="table-design">
                            <thead>
                                <tr>
                                    <th scope="col">Symbol</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="text-center">Intraday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ZTZ4</td>
                                    <td>2Y T-Note</td>
                                    <td class="text-center">$200</td>
                                </tr>
                                <tr>
                                    <td>ZFZ4</td>
                                    <td>5Y T-Note</td>
                                    <td class="text-center">$200</td>
                                </tr>
                                <tr>
                                    <td>ZNZ4</td>
                                    <td>10Y T-Note</td>
                                    <td class="text-center">$200</td>
                                </tr>
                                <tr>
                                    <td>MTNZ4</td>
                                    <td>Micro Ultra 10-Year U.S Treasury Note</td>
                                    <td class="text-center">$100</td>
                                </tr>
                                <tr>
                                    <td>ZBZ4</td>
                                    <td>US T-Bond</td>
                                    <td class="text-center">$500</td>
                                </tr>
                                <tr>
                                    <td>UBZ4</td>
                                    <td>Ultra T-Bond</td>
                                    <td class="text-center">$500</td>
                                </tr>
                                <tr>
                                    <td>MWNZ4</td>
                                    <td>Micro Ultra U.S. T-Bond</td>
                                    <td class="text-center">$120</td>
                                </tr>
                                <tr>
                                    <td>10YX4</td>
                                    <td>Micro 10-Year Yield</td>
                                    <td class="text-center">$45</td>
                                </tr>
                                <tr>
                                    <td>TNZ4</td>
                                    <td>Ultra 10Y T-Note</td>
                                    <td class="text-center">$300</td>
                                </tr>
                                <tr>
                                    <td>Z3NZ4</td>
                                    <td>3Y T-Note</td>
                                    <td class="text-center">$500</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
            </div>
        </div>
    </div>
</div>

<section class="container-xxl instrument-card general-section gs-anim-target">
    <figure aria-hidden="true" class="plus-bg plus-bg-medium"></figure>
    <figure aria-hidden="true" class="plus-bg plus-bg-large"></figure>
    <div class="blue-card-parent">
        <div class="row">
            <div class="col-md-10 col-lg-8 instrument-wrap">
                <div class="blue-card-bg shadow-card full-height not-rotate"></div>
                <div class="blue-card-content container-wrap row justify-content-center">
                    <div class="col-lg-10 col-xl-9 instrument-content">
                        <figure class="instrument-title-icon">
                            <img loading="lazy" alt="Academy" src="https://cdn-main.plus500.com/1.0.0.121083/Resources/Images/futures/svg/icon-academy.svg"/>
                        </figure>
                        <h2 class="title-section white instrument-title">
                            Trade Futures Like a Boss
                        </h2>
                        <div class="free-content">
                            Browse our free educational videos and articles to stay in the loop on the Futures market. Jump in and learn the ins and outs of Futures trading!
                        </div>
                        <a data-analytics="buttonClick" class="button white-bg dark" href="/academy">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</main>

<script>
    var reportCtaClickUrl = '/api/ReportData';
</script>

@include('home.footer')