<x-client.head />

<body>
    <!-- Page Preloder -->
    <!-- {{-- <div id="preloder">
		<div class="loader"></div>
	</div> --}} -->

    <!-- header section -->
    <x-client.header :set="$set"/>
    <!-- header section end-->


    <!-- Header section  -->
    <x-client.nav />
    <!-- Header section end -->

    <x-client.informasi.informasi :info="$info"/>
    
    <!-- Footer section -->
    <x-client.footer :if="$if"/>
    <!-- Footer section end-->
    <x-client.script />

</body>

</html>
