<style>
    .site-footer {
        background-color: #f8f9fa;
        padding: 20px;
        position: fixed;
        display: flex;
        width: 100%;
        bottom: 0;
        justify-content: center;
        align-items: center;
        border-top: 1px solid #ddd;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        /* Spread items out */
        align-items: center;
        width: 100%;
        /* Ensures full width */
        max-width: 1200px;
    }

    .toggle-section,
    .auto-trade-section {
        display: flex;
        align-items: center;
    }

    .toggle-section strong {
        margin-left: 10px;
    }

    .auto-trade-section font {
        margin-left: 5px;
    }
</style>
<!--End of Tawk.to Script-->
<!-- START: Footer-->
<footer class="site-footer">
    <div class="footer-container">
        <div class="toggle-section">
            <div class="toggle"></div>
        </div>
        <div class="auto-trade-section">
            <font color="#000">Auto-Trade:</font>
            <font color="green"> on</font>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</footer>

<!-- END: Footer-->


<!-- START: Template JS-->
<script src="{{ asset('dist/vendors/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('dist/vendors/moment/moment.js') }}"></script>
<script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/vendors/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('dist/vendors/flag-select/js/jquery.flagstrap.min.js') }}"></script>
<!-- END: Template JS-->

<!-- START: APP JS-->
<script src="{{ asset('dist/js/app.js') }}"></script>
<!-- END: APP JS-->

<!-- START: Page Vendor JS-->
<script src="{{ asset('dist/vendors/amcharts/core.js') }}"></script>
<script src="{{ asset('dist/vendors/amcharts/charts.js') }}"></script>
<script src="{{ asset('dist/vendors/amcharts/animated.js') }}"></script>
<script src="{{ asset('dist/vendors/amcharts/amchartsdark.js') }}"></script>
<script src="{{ asset('dist/vendors/amcharts/plugins/timeline.js') }}"></script>
<script src="{{ asset('dist/vendors/amcharts/plugins/bullets.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- START: Page Script JS-->
<script src="{{ asset('dist/js/amcharts.script.js') }}"></script>
<!-- END: Page Script JS-->


</body>
<!-- END: Body-->

</html>