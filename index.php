<?php

echo "<pre>";

echo htmlspecialchars('<!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
	@if(!empty($js["cores"]))
		@foreach($js["cores"] as $core)
			<script src="{{$assetUrl.$core}}"></script>
		@endforeach
	@endif
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        @if(!empty($js["plugins"]))
		@foreach($js["plugins"] as $plugin)
			<script src="{{$assetUrl.$plugin}}"></script>
		@endforeach
	@endif
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        @if(!empty($js["scripts"]))
		@foreach($js["scripts"] as $script)
			<script src="{{$assetUrl.$script}}"></script>
		@endforeach
	@endif
        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION -->',ENT_HTML5);
echo "</pre>";


// test

?>
