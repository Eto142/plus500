@include('home.header')
<div class="sentinal"></div>
    
    <main>
    


<div class="">
    <div class="container-xxl">
    <section class="main-section ">
        <h1 class="main-title">Economic Calendar</h1>
        <div id="eventsSelection" class="calendar-events-selection">
            <label for="eventTypeEconomic">
                <span>Economic Calendar</span>
                <input type="radio" name="eventType" value="Economic" id="eventTypeEconomic" class="visually-hidden" checked/>
                <span class="radio-button"></span>
            </label>
            <label for="eventTypeCorporate">
                <span>Corporate Events</span>
                <input type="radio" name="eventType" value="Corporate" id="eventTypeCorporate" class="visually-hidden" />
                <span class="radio-button"></span>
            </label>
        </div>
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-6">
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <button type="button" class="nav-link" data-event data-date-type="1">Yesterday</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" data-event data-date-type="2">Today</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" data-event data-date-type="3">Tomorrow</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" data-event data-date-type="4">This Week</button>
                        </li>
                        <li class="nav-item filter-item">
                            <button id="eventsFiltersDateRangeButton" type="button" class="nav-link" data-date-type="5"><span class="icon icon-calendar4"></span></button>
                        </li>
                        <li class="nav-item filters-button filter-item d-none">
                            <button id="eventsFiltersButton" type="button" class="nav-link"><span class="icon icon-filter3"></span></button>
                        </li>
                    </ul>
               </div>
            </div>
            <div class="col-12 col-lg-5 col-xl-6 data-by justify-content-center justify-content-lg-end">
                <span>Data by</span>
                <picture>
                    <source srcset="https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/logo-dow-jones@0,75x.png 1x, https://cdn-main.plus500.com/1.0.0.120279/Resources/Images/logo-dow-jones.png 2x">
                    <img src="../../cdn-main.plus500.com/1.0.0.120279/Resources/Images/logo-dow-jones%400%2c75x.png" alt="Dow Jones logo" />
                </picture>
            </div>
        </div>
        <div id="dateRangeFilter" class="d-none filter date-range">
            <div class="row flex-fill">
                <div class="col col-lg-9">
                    <div class="input-group">
                        <span class="input-group-text">From:</span>
                        <input type="text" id="startDate" class="form-control datepicker-input" data-need-tz-fix-date data-server-time="1728864000000.0" readonly>
                        <button type="button" class="btn btn-outline has-tip" data-bs-toggle="tooltip" data-bs-offset="0,10" role="tooltip" aria-haspopup="true" data-bs-html="true" title="Select From"><span class="icon icon-calendar4"></span></button>
                        <span class="line-drop"></span>
                        <span class="input-group-text">To:</span>
                        <input type="text" id="endDate" class="form-control datepicker-input" data-need-tz-fix-date data-server-time="1731542400000.0" readonly>
                        <button type="button" class="btn btn-outline has-tip" data-bs-toggle="tooltip" data-bs-offset="0,10" role="tooltip" aria-haspopup="true" data-bs-html="true" title="Select To"><span class="icon icon-calendar4"></span></button>
                        <span class="line-drop"></span>
                        <button id="eventFilterByDateRange" type="button" class="btn btn-primary btn-submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="eventsImpactFilterElement" class="d-none filter">
            <span class="filter-title">Expected Impact:</span>
            <div class="fields-wrapper">
                <div class="checkbox-field">
                    <label for="filterImpactLow" class="impact-low has-tip" data-bs-toggle="tooltip" data-bs-offset="0,10" role="tooltip" aria-haspopup="true" data-bs-html="true" title="Low">
                        <input type="checkbox" id="filterImpactLow" name="eventImpactLevelFilter[]" data-impact-filter="Low" checked>
                        <span class="circle-impact"></span>
                    </label>
                </div>
                <div class="checkbox-field">
                    <label for="filterImpactMedium" class="impact-medium has-tip" data-bs-toggle="tooltip" data-bs-offset="0,10" role="tooltip" aria-haspopup="true" data-bs-html="true" title="Medium">
                        <input type="checkbox" id="filterImpactMedium" name="eventImpactLevelFilter[]" data-impact-filter="Medium" checked>
                        <span class="circle-impact"></span>
                        <span class="circle-impact"></span>
                    </label>
                </div>
                <div class="checkbox-field">
                    <label for="filterImpactHigh" class="impact-high has-tip" data-bs-toggle="tooltip" data-bs-offset="0,10" role="tooltip" aria-haspopup="true" data-bs-html="true" title="High">
                        <input type="checkbox" id="filterImpactHigh" name="eventImpactLevelFilter[]" data-impact-filter="High" checked>
                        <span class="circle-impact"></span>
                        <span class="circle-impact"></span>
                        <span class="circle-impact"></span>
                    </label>
                </div>
            </div>
        </div>
        <div id="corporateEventsFilterElement" class="d-none filter">
            <span class="filter-title">Event Type:</span>
            <div class="fields-wrapper">
                <div class="checkbox-field">
                    <label for="eventTypeDividends" class="has-tip" data-bs-toggle="tooltip" data-bs-offset="0,10" role="tooltip" aria-haspopup="true" data-bs-html="true" title="Dividends">
                        <input id="eventTypeDividends" type="checkbox" name="eventTypeCorporateFilter[]" value="Dividend" data-event-type-filter="Dividend" checked />
                        <span class="text">Dividends</span>
                    </label>
                </div>
                <div class="checkbox-field">
                    <label for="eventTypeEarnings" class="has-tip" data-bs-toggle="tooltip" data-bs-offset="0,10" role="tooltip" aria-haspopup="true" data-bs-html="true" title="Earnings Releases">
                        <input id="eventTypeEarnings" type="checkbox" name="eventTypeCorporateFilter[]" value="EarningRelease" data-event-type-filter="EarningRelease" checked />
                        <span class="text">Earnings Releases</span>
                    </label>
                </div>
            </div>
        </div>
    </section>
    
    <div id="loadingWrapper" class="loading-wrap">
        <span></span>
    </div>
    
    <section id="economicEventsDataElement" class="general-section"></section>
</div>
	    <section class="page-sections">
	    <div class="mt-md-5">
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
                                    <div class="item-desc">Licensed and regulated by a variety of global leading regulators. <a href="tradingacademy/faq/regulators/throughwhichsubsdoyouoperate.html">Learn more</a>.</div>
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
        </div>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "FAQPage",
          "mainEntity": [ {"type":"Question","name":"How do I use the economic calendar?","acceptedAnswer":{"type":"Answer","text":"<p>\nYou can use the economic calendar to plan trades and future orders, as well as to be alerted about upcoming market events – including national interest rates, inflation levels, trade balances, oil and natural gas stockpiles, monthly jobs reports and more.\n</p>\n\n<p>\nThe economic calendar can also be accessed via the platform’s main menu.\n</p>\n"}}, {"type":"Question","name":"What is the expected impact of economic events?","acceptedAnswer":{"type":"Answer","text":"<p>\nEconomic events are defined as having economic significance to the value of <a href=\"/en/trading/stocks\">shares</a>, <a href=\"/en/trading/indices\">indices</a>, <a href=\"/en/trading/commodities\">commodities</a> and other <a href=\"/en/instruments\">financial instruments</a>, and encompass any internal or external occurrence that can affect their performance (primarily, supply and demand).\n</p>\n\n<p>\nAn economic event can either strengthen, weaken, or have a neutral effect on the instrument or instruments it correlates to.\n</p>\n"}}, {"type":"Question","name":"What economic factors may affect foreign currency exchange rates?","acceptedAnswer":{"type":"Answer","text":"<p>\nForeign currency exchange rates (also known as <a href=\"/en/trading/forex\">Forex</a>), are influenced by an array of political and economic factors relating to the difference in value of a currency or economic region, such as the euro (EUR) in relation of another country's or economic region's currency, such as the United States dollar (USD).\n</p>\n<cut></cut> \n\n<p>\nThe main factors affecting currency exchange rates are the terms of trade, political stability and overall economic performance between the two countries or regions. This also refers to their economic growth (for example GDP growth rate), economic health, interest rates, inflation rates and balance of payments (i.e. exports, imports, and government debt). \n</p>\n\n<p>\n<span class=\"ital-text\">The United States Non-Farm Payrolls report (NFP) is an example of a major economic event that is related to Forex. The NFP typically affects the following currency exchange rates: <a href=\"/en/instruments/eurusd\">EUR/USD</a>, <a href=\"/en/instruments/gbpusd\">GBP/USD</a>, and <a href=\"/en/instruments/usdjpy\">USD/JPY</a>.</span>\n</p>\n"}}, {"type":"Question","name":"What economic factors may affect stocks?","acceptedAnswer":{"type":"Answer","text":"<p>\nA company's stock price typically rises or falls according to changes in its competitive position in the market. Various factors affect the competitive position of a company, including news releases issued by, or in relation to, the company's financial performance, as well as corporate events (dividends, earnings reports, spin-offs, rights issue, etc).\n</p>\n<cut></cut> \n\n<p>\nPlus500’s Economic Calendar allows you to filter <strong>Corporate Events</strong> by Dividends and Earnings Releases within defined and customised time frames. \n</p>\n\n<p>\n<span class=\"ital-text\">A quarterly earnings report for <a href=\"/en/instruments/meta\">Meta (META)</a> is an example of a corporate event that affects a stock’s price.</span>\n</p>\n\n\n"}}, {"type":"Question","name":"What economic factors may affect index CFDs?","acceptedAnswer":{"type":"Answer","text":"<p>\nA stock index is a weighted average (or benchmark) of prices for a selected basket of companies listed on a stock market. The value of a stock index is determined according to factors such as place of listing, type of security, market capitalisation and the weightings of constituents. Popular stock market indices from across the world include: <a href=\"/en/instruments/uk100\">UK 100</a>, <a href=\"/en/instruments/nq\">US-TECH 100</a>, <a href=\"/en/instruments/niy\">Japan 225</a> and <a href=\"/en/instruments/fce\">France 40</a>.\n</p>\n<cut></cut> \n\n<p>\nOne of the main factors affecting an index CFD is the percentage changes in the value of a stock which forms a significant constituent of that index, and/or the average percentage change of a group of shares in a particular industry, sector or category. Investors' overall confidence and expected economic growth of a country's stock market may also influence the price of its indices.\n</p>\n\n<p>\n<span class=\"ital-text\">Germany Services PMI is an example of an economic event that can affect the price of the <a href=\"/en/instruments/fdax\">Germany 40</a> index, as well as other shares listed on the German stock exchange.</span>\n</p>\n"}} ]
        }
        </script>
        <section class="faq faq-section container-lg">
            <h2 class="title-section text-center"><strong>FAQ</strong></h2>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div id="accordionFaq" class="faq-accordion accordion" data-accordion data-allow-all-closed="true">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3 class="accordion-title">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#faq_accordion_1" aria-expanded="true" aria-controls="faq_accordion_1">How do I use the economic calendar?</button>
                                    </h3>
                                </div>
                                <div id="faq_accordion_1" class="accordion-content accordion-collapse collapse show" aria-labelledby="faq_accordion_heading_1" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body"><p>
You can use the economic calendar to plan trades and future orders, as well as to be alerted about upcoming market events – including national interest rates, inflation levels, trade balances, oil and natural gas stockpiles, monthly jobs reports and more.
</p>

<p>
The economic calendar can also be accessed via the platform’s main menu.
</p>
</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3 class="accordion-title">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_accordion_2" aria-expanded="false" aria-controls="faq_accordion_2">What is the expected impact of economic events?</button>
                                    </h3>
                                </div>
                                <div id="faq_accordion_2" class="accordion-content accordion-collapse collapse " aria-labelledby="faq_accordion_heading_2" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body"><p>
Economic events are defined as having economic significance to the value of <a href="trading/stocks.html">shares</a>, <a href="trading/indices.html">indices</a>, <a href="trading/commodities.html">commodities</a> and other <a href="instruments.html">financial instruments</a>, and encompass any internal or external occurrence that can affect their performance (primarily, supply and demand).
</p>

<p>
An economic event can either strengthen, weaken, or have a neutral effect on the instrument or instruments it correlates to.
</p>
</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3 class="accordion-title">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_accordion_3" aria-expanded="false" aria-controls="faq_accordion_3">What economic factors may affect foreign currency exchange rates?</button>
                                    </h3>
                                </div>
                                <div id="faq_accordion_3" class="accordion-content accordion-collapse collapse " aria-labelledby="faq_accordion_heading_3" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body"><p>
Foreign currency exchange rates (also known as <a href="trading/forex.html">Forex</a>), are influenced by an array of political and economic factors relating to the difference in value of a currency or economic region, such as the euro (EUR) in relation of another country's or economic region's currency, such as the United States dollar (USD).
</p>
<cut></cut> 

<p>
The main factors affecting currency exchange rates are the terms of trade, political stability and overall economic performance between the two countries or regions. This also refers to their economic growth (for example GDP growth rate), economic health, interest rates, inflation rates and balance of payments (i.e. exports, imports, and government debt). 
</p>

<p>
<span class="ital-text">The United States Non-Farm Payrolls report (NFP) is an example of a major economic event that is related to Forex. The NFP typically affects the following currency exchange rates: <a href="instruments/eurusd.html">EUR/USD</a>, <a href="instruments/gbpusd.html">GBP/USD</a>, and <a href="instruments/usdjpy.html">USD/JPY</a>.</span>
</p>
</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3 class="accordion-title">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_accordion_4" aria-expanded="false" aria-controls="faq_accordion_4">What economic factors may affect stocks?</button>
                                    </h3>
                                </div>
                                <div id="faq_accordion_4" class="accordion-content accordion-collapse collapse " aria-labelledby="faq_accordion_heading_4" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body"><p>
A company's stock price typically rises or falls according to changes in its competitive position in the market. Various factors affect the competitive position of a company, including news releases issued by, or in relation to, the company's financial performance, as well as corporate events (dividends, earnings reports, spin-offs, rights issue, etc).
</p>
<cut></cut> 

<p>
Plus500’s Economic Calendar allows you to filter <strong>Corporate Events</strong> by Dividends and Earnings Releases within defined and customised time frames. 
</p>

<p>
<span class="ital-text">A quarterly earnings report for <a href="instruments/meta.html">Meta (META)</a> is an example of a corporate event that affects a stock’s price.</span>
</p>


</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3 class="accordion-title">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_accordion_5" aria-expanded="false" aria-controls="faq_accordion_5">What economic factors may affect index CFDs?</button>
                                    </h3>
                                </div>
                                <div id="faq_accordion_5" class="accordion-content accordion-collapse collapse " aria-labelledby="faq_accordion_heading_5" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body"><p>
A stock index is a weighted average (or benchmark) of prices for a selected basket of companies listed on a stock market. The value of a stock index is determined according to factors such as place of listing, type of security, market capitalisation and the weightings of constituents. Popular stock market indices from across the world include: <a href="instruments/uk100.html">UK 100</a>, <a href="instruments/nq.html">US-TECH 100</a>, <a href="instruments/niy.html">Japan 225</a> and <a href="instruments/fce.html">France 40</a>.
</p>
<cut></cut> 

<p>
One of the main factors affecting an index CFD is the percentage changes in the value of a stock which forms a significant constituent of that index, and/or the average percentage change of a group of shares in a particular industry, sector or category. Investors' overall confidence and expected economic growth of a country's stock market may also influence the price of its indices.
</p>

<p>
<span class="ital-text">Germany Services PMI is an example of an economic event that can affect the price of the <a href="instruments/fdax.html">Germany 40</a> index, as well as other shares listed on the German stock exchange.</span>
</p>
</div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
		</section>
	    <section class="start-trading-bottom-zone" data-section-name="call-to-action-section">
            <div class="start-trading-buttons">
    <div class="cta-wrap"> 
            <a data-analytics="CTA_real" data-start-trading data-cta-name="start-trading-real-cfd" class="button blue-gradient" href="https://app.plus500.com/trade?hl=en&amp;innerTags=_cc_+uswsv&amp;product=CFD&amp;IsRealMode=True&amp;ms=True" target="_blank">Start Trading Now</a>
                    <a data-analytics="CTA_demo" data-cta-name="start-trading-demo-cfd" class="button white-bg hollow link-demo" href="https://app.plus500.com/trade?hl=en&amp;innerTags=_cc_+uswsv&amp;product=CFD&amp;IsRealMode=False&amp;ms=True" target="_blank">Try Free Demo</a>
    </div>
    </div>
        </section>
</div>



    </main>

    <script>
        var reportCtaClickUrl = 'api/ReportData.html';
    </script>

    <section id="support-section" class="support-section">
        <div class="container-xxl">
            <div class="row">
                <div class="col d-md-flex justify-content-center align-items-center text-center">
                    <h5>Need Help?</h5>
                    <a data-analytics="buttonClick" class="support-link" href="tradingacademy/faq.html">
                        <span class="text">24/7 Support</span>
                        <span class="icon-users"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include('home.footer')