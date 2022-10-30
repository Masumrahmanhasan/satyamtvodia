<!DOCTYPE html>

<html>
<head>
    <title>{{ config('app_name') }} | @yield('title')</title>

    <link rel="Stylesheet" type="text/css" href="{{ asset('backend/css/PointTransfer.css') }}" />
    <link href="{{ asset('backend/css/boilerplate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="../content/js/jquery-1.7.1.js"></script>
    <script type="text/javascript" src="../content/js/PointTransfer.js"></script>
</head>

<body>

    <div style="z-index: 102; position: absolute; width: 120px; height: 91px; top: 14px; left: 16px">
        <img style="z-index: 103; position: absolute; top: 0px; left: 0px" alt="" src="{{ asset('backend/images/logo.png') }}" width="120" height="90"/>
    </div>
    @include('backend.include.menu')

    <div class="gridContainer">
        <div
            style="text-align: center; color: #0c911a; font-size: 15px; font-weight: bold; word-spacing: 5px; margin-top: 5px;">
            For sales / marketing enquiry, please contact on WhatsApp Number: <span style="color: #1350dd; ">+14792035941</span>
            <br/>
            सेल्स / मार्केटिंग के लिए, कृपया व्हाट्सएप नंबर पर संपर्क करें: <span
                style="color: #1350dd;">+14792035941</span>
        </div>

        <div id="div1">
            <div class="welcome-details">
                <p>
                    Welcome</p>
                <p>
                    <span>
                        <span id="siteDataHolder_lblMemberName">Mr. Amar Ji 7 Chamu Rajasthan</span>
                    </span>
                </p>
                <p>
                    Your Current Balance is <strong>
                        <span id="siteDataHolder_lblCurrentBalance">1.13</span></strong>
                    <span id="siteDataHolder_spanOTC"
                          style="float:right; margin-right:20px; color:Gray; font-size:large; font-weight:bold;">
                        OTC is <strong>
                        <span id="siteDataHolder_lblOTCBalance" style="color:Blue;">0.00</span></strong>
                        </span>
                </p>
                <p class="wel-msg">
                </p>
            </div>

            @yield('content')

        </div>


    </div>

</body>
