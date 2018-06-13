

@section('styles')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet" type="text/css">

<script src='{{asset('unitegallery/js/unitegallery.min.js')}}'></script> 
<link rel='stylesheet' href='{{asset('unitegallery/css/unite-gallery.css')}}' type='text/css' /> 
<script src='{{asset('unitegallery/themes/tiles/ug-theme-tiles.js')}}'></script> 
<link rel='stylesheet' href='{{asset('unitegallery/themes/default/ug-theme-default.css')}}' type='text/css' /> 

<script> 

$(document).ready(function(){         
    $("#gallery").unitegallery(); 
});
</script>
@stop
