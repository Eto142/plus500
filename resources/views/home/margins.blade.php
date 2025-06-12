@include('home.header')
<div class="sentinel"></div>
<main>
    

 <section class="main-banner hero-banner inner-banner" data-section-name="hero-section">
    <div class="main-banner-wrap container-lg">
        <div class="main-banner-content hero-content">
            <div class="col-lg-9 col-xl-8">
                <div class="blue-card-bg full-height"></div>
                <h1 class="main-banner-title main-title-font">
                    Low and Attractive <strong>Day Trading Margins</strong>
                </h1>
                <div class="main-banner-buttons-box">
                    <div class="main-banner-buttons button-group">
                        
<div class="cta-wrap">
            <a data-analytics="CTA_real" data-start-trading data-cta-name="start-trading-real-futures" class="button blue-gradient" href="{{route('register')}}">Start Trading Now</a>
        <a data-analytics="CTA_demo" data-cta-name="start-trading-demo-futures" class="button white-bg hollow link-demo" href="{{route('register')}}">Try Free Demo</a>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="general-section tables-section" data-section-name="instruments-tables">
    <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-turquoise-gr first"></figure>
    <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-turquoise-gr second"></figure>
    <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-gr third"></figure>
    <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-gr forth"></figure>
    <div class="container-xxl">
        <div class="row justify-content-center main-row">
            <figure aria-hidden="true" class="plus-bg plus-bg-medium blue-gr first"></figure>
            <div class="col-lg-10 col-xxl-9 pb-5">
                <input id="tableSwitcher" type="checkbox" class="tables-switcher-input visually-hidden" aria-labelledby="tableSwitcher">
                <div class="tables-switcher-wrapper">
                    <label class="tables-switcher-label" for="tableSwitcher" aria-label="Micro &amp; Mini contracts / Contracts">
                        <span class="micro-mini">Micro &amp; Mini contracts</span>
                        <span class="contracts">Contracts</span>
                    </label>
                </div>
                <div id="tablesWrapper" class="table-design tables-wrapper">
                    <table class="micro-mini-table">
                        <thead>
                            <tr class="row-header">
                                <th scope="col">Name</th>
                                <th scope="col">Symbol</th>
                                <th scope="col">IntraDay</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row-body">
                                <td colspan="3" class="p-0">
                                        <input class="expand" type="checkbox" id="expand-micro-mini-table-crypto" aria-labelledby="expand-micro-mini-table"/>
                                        <table class="table-child" role="presentation">
                                            <thead>
                                                <tr>
                                                    <td class="table-category" colspan="3">Crypto</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row-data">
                                                    <td class="name">Micro Bitcoin</td>
                                                    <td class="symbol">MBTX4</td>
                                                    <td class="intra-day">$100</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro Ether</td>
                                                    <td class="symbol">METX4</td>
                                                    <td class="intra-day">$20</td>
                                                </tr>
                                                <tr class="row-footer">
                                                    <td colspan="3">
                                                        <label class="icon-arrow-down4 expand-btn" for="expand-micro-mini-table-crypto">
                                                            <span class="visually-hidden">Close/Open</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <input class="expand" type="checkbox" id="expand-micro-mini-table-metals" aria-labelledby="expand-micro-mini-table"/>
                                        <table class="table-child" role="presentation">
                                            <thead>
                                                <tr>
                                                    <td class="table-category" colspan="3">Metals</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row-data">
                                                    <td class="name">Micro Gold</td>
                                                    <td class="symbol">MGCZ4</td>
                                                    <td class="intra-day">$50</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro Copper</td>
                                                    <td class="symbol">MHGZ4</td>
                                                    <td class="intra-day">$150</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">E-mini Gold</td>
                                                    <td class="symbol">QOZ4</td>
                                                    <td class="intra-day">$250</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro Silver</td>
                                                    <td class="symbol">SILZ4</td>
                                                    <td class="intra-day">$200</td>
                                                </tr>
                                                <tr class="row-footer">
                                                    <td colspan="3">
                                                        <label class="icon-arrow-down4 expand-btn" for="expand-micro-mini-table-metals">
                                                            <span class="visually-hidden">Close/Open</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <input class="expand" type="checkbox" id="expand-micro-mini-table-forex" aria-labelledby="expand-micro-mini-table"/>
                                        <table class="table-child" role="presentation">
                                            <thead>
                                                <tr>
                                                    <td class="table-category" colspan="3">Forex</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row-data">
                                                    <td class="name">E-mini Euro FX</td>
                                                    <td class="symbol">E7Z4</td>
                                                    <td class="intra-day">$150</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro AUD/USD</td>
                                                    <td class="symbol">M6AZ4</td>
                                                    <td class="intra-day">$40</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro GBP/USD</td>
                                                    <td class="symbol">M6BZ4</td>
                                                    <td class="intra-day">$50</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro EUR/USD</td>
                                                    <td class="symbol">M6EZ4</td>
                                                    <td class="intra-day">$50</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro CAD/USD</td>
                                                    <td class="symbol">MCDZ4</td>
                                                    <td class="intra-day">$40</td>
                                                </tr>
                                                <tr class="row-footer">
                                                    <td colspan="3">
                                                        <label class="icon-arrow-down4 expand-btn" for="expand-micro-mini-table-forex">
                                                            <span class="visually-hidden">Close/Open</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <input class="expand" type="checkbox" id="expand-micro-mini-table-interestrates" aria-labelledby="expand-micro-mini-table"/>
                                        <table class="table-child" role="presentation">
                                            <thead>
                                                <tr>
                                                    <td class="table-category" colspan="3">Interest Rates</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row-data">
                                                    <td class="name">Micro Ultra 10-Year U.S Treasury Note</td>
                                                    <td class="symbol">MTNZ4</td>
                                                    <td class="intra-day">$100</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro Ultra U.S. T-Bond</td>
                                                    <td class="symbol">MWNZ4</td>
                                                    <td class="intra-day">$120</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro 10-Year Yield</td>
                                                    <td class="symbol">10YX4</td>
                                                    <td class="intra-day">$45</td>
                                                </tr>
                                                <tr class="row-footer">
                                                    <td colspan="3">
                                                        <label class="icon-arrow-down4 expand-btn" for="expand-micro-mini-table-interestrates">
                                                            <span class="visually-hidden">Close/Open</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <input class="expand" type="checkbox" id="expand-micro-mini-table-energy" aria-labelledby="expand-micro-mini-table"/>
                                        <table class="table-child" role="presentation">
                                            <thead>
                                                <tr>
                                                    <td class="table-category" colspan="3">Energy</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row-data">
                                                    <td class="name">Micro WTI Crude Oil</td>
                                                    <td class="symbol">MCLF5</td>
                                                    <td class="intra-day">$80</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">E-mini Natural Gas</td>
                                                    <td class="symbol">QGF5</td>
                                                    <td class="intra-day">$250</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">E-mini Crude Oil</td>
                                                    <td class="symbol">QMF5</td>
                                                    <td class="intra-day">$400</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro Natural Gas</td>
                                                    <td class="symbol">MNGF5</td>
                                                    <td class="intra-day">$100</td>
                                                </tr>
                                                <tr class="row-footer">
                                                    <td colspan="3">
                                                        <label class="icon-arrow-down4 expand-btn" for="expand-micro-mini-table-energy">
                                                            <span class="visually-hidden">Close/Open</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <input class="expand" type="checkbox" id="expand-micro-mini-table-equityindices" aria-labelledby="expand-micro-mini-table"/>
                                        <table class="table-child" role="presentation">
                                            <thead>
                                                <tr>
                                                    <td class="table-category" colspan="3">Equity Index</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row-data">
                                                    <td class="name">E-mini S&amp;P MidCap 400</td>
                                                    <td class="symbol">EMDZ4</td>
                                                    <td class="intra-day">$1,000</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro E-mini S&amp;P 500</td>
                                                    <td class="symbol">MESZ4</td>
                                                    <td class="intra-day">$50</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">E-mini S&amp;P 500</td>
                                                    <td class="symbol">ESZ4</td>
                                                    <td class="intra-day">$500</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">E-mini Nasdaq-100</td>
                                                    <td class="symbol">NQZ4</td>
                                                    <td class="intra-day">$1,000</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">E-mini Dow Jones</td>
                                                    <td class="symbol">YMZ4</td>
                                                    <td class="intra-day">$500</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro E-mini Dow Jones</td>
                                                    <td class="symbol">MYMZ4</td>
                                                    <td class="intra-day">$50</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro E-mini Nasdaq-100</td>
                                                    <td class="symbol">MNQZ4</td>
                                                    <td class="intra-day">$100</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro E-mini Russell 2000</td>
                                                    <td class="symbol">M2KZ4</td>
                                                    <td class="intra-day">$50</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">E-mini Russell 2000</td>
                                                    <td class="symbol">RTYZ4</td>
                                                    <td class="intra-day">$500</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Micro Nikkei (USD)</td>
                                                    <td class="symbol">MNKZ4</td>
                                                    <td class="intra-day">$150</td>
                                                </tr>
                                                <tr class="row-footer">
                                                    <td colspan="3">
                                                        <label class="icon-arrow-down4 expand-btn" for="expand-micro-mini-table-equityindices">
                                                            <span class="visually-hidden">Close/Open</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="contracts-table">
                        <thead>
                            <tr class="row-header">
                                <th scope="col">Name</th>
                                <th scope="col">Symbol</th>
                                <th scope="col">IntraDay</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row-body">
                                <td colspan="3" class="p-0">
                                        <input class="expand" type="checkbox" id="expand-contracts-table-crypto" aria-labelledby="expand-contracts-table"/>
                                        <table class="table-child" role="presentation">
                                            <thead>
                                                <tr>
                                                    <td class="table-category" colspan="3">Crypto</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row-data">
                                                    <td class="name">Bitcoin Friday</td>
                                                    <td class="symbol">BFFX422</td>
                                                    <td class="intra-day">$25</td>
                                                </tr>
                                                <tr class="row-footer">
                                                    <td colspan="3">
                                                        <label class="icon-arrow-down4 expand-btn" for="expand-contracts-table-crypto">
                                                            <span class="visually-hidden">Close/Open</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <input class="expand" type="checkbox" id="expand-contracts-table-agriculture" aria-labelledby="expand-contracts-table"/>
                                        <table class="table-child" role="presentation">
                                            <thead>
                                                <tr>
                                                    <td class="table-category" colspan="3">Agriculture</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row-data">
                                                    <td class="name">Soybean Meal</td>
                                                    <td class="symbol">ZMZ4</td>
                                                    <td class="intra-day">$715</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Corn</td>
                                                    <td class="symbol">ZCZ4</td>
                                                    <td class="intra-day">$250</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Soybean</td>
                                                    <td class="symbol">ZSF5</td>
                                                    <td class="intra-day">$910</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Wheat</td>
                                                    <td class="symbol">ZWZ4</td>
                                                    <td class="intra-day">$250</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Soybean Oil</td>
                                                    <td class="symbol">ZLZ4</td>
                                                    <td class="intra-day">$550</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Lean Hogs</td>
                                                    <td class="symbol">HEG5</td>
                                                    <td class="intra-day">$250</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Live Cattle</td>
                                                    <td class="symbol">LEG5</td>
                                                    <td class="intra-day">$300</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Feeder Cattle</td>
                                                    <td class="symbol">GFF5</td>
                                                    <td class="intra-day">$500</td>
                                                </tr>
                                                <tr class="row-footer">
                                                    <td colspan="3">
                                                        <label class="icon-arrow-down4 expand-btn" for="expand-contracts-table-agriculture">
                                                            <span class="visually-hidden">Close/Open</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <input class="expand" type="checkbox" id="expand-contracts-table-metals" aria-labelledby="expand-contracts-table"/>
                                        <table class="table-child" role="presentation">
                                            <thead>
                                                <tr>
                                                    <td class="table-category" colspan="3">Metals</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row-data">
                                                    <td class="name">Gold</td>
                                                    <td class="symbol">GCZ4</td>
                                                    <td class="intra-day">$500</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Platinum</td>
                                                    <td class="symbol">PLF5</td>
                                                    <td class="intra-day">$690</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Silver</td>
                                                    <td class="symbol">SIZ4</td>
                                                    <td class="intra-day">$2,200</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Copper</td>
                                                    <td class="symbol">HGZ4</td>
                                                    <td class="intra-day">$1,375</td>
                                                </tr>
                                                <tr class="row-footer">
                                                    <td colspan="3">
                                                        <label class="icon-arrow-down4 expand-btn" for="expand-contracts-table-metals">
                                                            <span class="visually-hidden">Close/Open</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <input class="expand" type="checkbox" id="expand-contracts-table-forex" aria-labelledby="expand-contracts-table"/>
                                        <table class="table-child" role="presentation">
                                            <thead>
                                                <tr>
                                                    <td class="table-category" colspan="3">Forex</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row-data">
                                                    <td class="name">Australian Dollar</td>
                                                    <td class="symbol">6AZ4</td>
                                                    <td class="intra-day">$400</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">British Pound</td>
                                                    <td class="symbol">6BZ4</td>
                                                    <td class="intra-day">$500</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Canadian Dollar</td>
                                                    <td class="symbol">6CZ4</td>
                                                    <td class="intra-day">$400</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Swiss Franc</td>
                                                    <td class="symbol">6SZ4</td>
                                                    <td class="intra-day">$400</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">New Zealand Dollar</td>
                                                    <td class="symbol">6NZ4</td>
                                                    <td class="intra-day">$250</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Euro FX</td>
                                                    <td class="symbol">6EZ4</td>
                                                    <td class="intra-day">$300</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Japanese Yen</td>
                                                    <td class="symbol">6JZ4</td>
                                                    <td class="intra-day">$825</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Brazilian Real</td>
                                                    <td class="symbol">6LZ4</td>
                                                    <td class="intra-day">$235</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">South African Rand</td>
                                                    <td class="symbol">6ZZ4</td>
                                                    <td class="intra-day">$385</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Mexican Peso</td>
                                                    <td class="symbol">6MZ4</td>
                                                    <td class="intra-day">$385</td>
                                                </tr>
                                                <tr class="row-footer">
                                                    <td colspan="3">
                                                        <label class="icon-arrow-down4 expand-btn" for="expand-contracts-table-forex">
                                                            <span class="visually-hidden">Close/Open</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <input class="expand" type="checkbox" id="expand-contracts-table-interestrates" aria-labelledby="expand-contracts-table"/>
                                        <table class="table-child" role="presentation">
                                            <thead>
                                                <tr>
                                                    <td class="table-category" colspan="3">Interest Rates</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row-data">
                                                    <td class="name">2Y T-Note</td>
                                                    <td class="symbol">ZTZ4</td>
                                                    <td class="intra-day">$200</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">5Y T-Note</td>
                                                    <td class="symbol">ZFZ4</td>
                                                    <td class="intra-day">$200</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">10Y T-Note</td>
                                                    <td class="symbol">ZNZ4</td>
                                                    <td class="intra-day">$200</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">US T-Bond</td>
                                                    <td class="symbol">ZBZ4</td>
                                                    <td class="intra-day">$500</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Ultra T-Bond</td>
                                                    <td class="symbol">UBZ4</td>
                                                    <td class="intra-day">$500</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Ultra 10Y T-Note</td>
                                                    <td class="symbol">TNZ4</td>
                                                    <td class="intra-day">$300</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">3Y T-Note</td>
                                                    <td class="symbol">Z3NZ4</td>
                                                    <td class="intra-day">$500</td>
                                                </tr>
                                                <tr class="row-footer">
                                                    <td colspan="3">
                                                        <label class="icon-arrow-down4 expand-btn" for="expand-contracts-table-interestrates">
                                                            <span class="visually-hidden">Close/Open</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <input class="expand" type="checkbox" id="expand-contracts-table-energy" aria-labelledby="expand-contracts-table"/>
                                        <table class="table-child" role="presentation">
                                            <thead>
                                                <tr>
                                                    <td class="table-category" colspan="3">Energy</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row-data">
                                                    <td class="name">Brent Crude Oil</td>
                                                    <td class="symbol">BZF5</td>
                                                    <td class="intra-day">$1,000</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Crude Oil</td>
                                                    <td class="symbol">CLG5</td>
                                                    <td class="intra-day">$800</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Crude Oil</td>
                                                    <td class="symbol">CLF5</td>
                                                    <td class="intra-day">$800</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Heating Oil</td>
                                                    <td class="symbol">HOF5</td>
                                                    <td class="intra-day">$1,500</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">Natural Gas</td>
                                                    <td class="symbol">NGF5</td>
                                                    <td class="intra-day">$1,000</td>
                                                </tr>
                                                <tr class="row-data">
                                                    <td class="name">RBOB Gasoline</td>
                                                    <td class="symbol">RBF5</td>
                                                    <td class="intra-day">$1,000</td>
                                                </tr>
                                                <tr class="row-footer">
                                                    <td colspan="3">
                                                        <label class="icon-arrow-down4 expand-btn" for="expand-contracts-table-energy">
                                                            <span class="visually-hidden">Close/Open</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <input class="expand" type="checkbox" id="expand-contracts-table-equityindices" aria-labelledby="expand-contracts-table"/>
                                        <table class="table-child" role="presentation">
                                            <thead>
                                                <tr>
                                                    <td class="table-category" colspan="3">Equity Index</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row-data">
                                                    <td class="name">Nikkei</td>
                                                    <td class="symbol">NKDZ4</td>
                                                    <td class="intra-day">$1,500</td>
                                                </tr>
                                                <tr class="row-footer">
                                                    <td colspan="3">
                                                        <label class="icon-arrow-down4 expand-btn" for="expand-contracts-table-equityindices">
                                                            <span class="visually-hidden">Close/Open</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
 
<section class="container-xxl">
    <div class="row justify-content-center text-center">
        <div class="col-md-10 col-lg-8 col-xl-7 table-description">
            <h2 class="title-section">What is an Intraday Margin?</h2>
            <p class="content">This is the initial amount of money needed to open a Futures order position. With intraday margin, you can take trading positions in higher portfolio values than what you could have previously held using just your own money. This type of margin is considered relatively low-cost, and it is what makes a position leveraged.</p>
        </div>
    </div>
</section>

<section class="call-to-actions button-group" data-section-name="call-to-action-section">
    
<div class="cta-wrap">
            <a data-analytics="CTA_real" data-start-trading data-cta-name="start-trading-real-futures" class="button blue-gradient" href="{{route('register')}}">Start Trading Now</a>
        <a data-analytics="CTA_demo" data-cta-name="start-trading-demo-futures" class="button white-bg hollow link-demo" href="{{route('register')}}">Try Free Demo</a>
</div>
    <div class="start-with">
        <h3>Start with only $100</h3>
    </div>
</section>


</main>

<script>
    var reportCtaClickUrl = '/api/ReportData';
</script>

@include('home.footer')