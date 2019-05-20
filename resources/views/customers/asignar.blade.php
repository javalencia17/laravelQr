
@extends('layouts.master')

@section('content')
	

	<video id="preview">hola</video>
	
@endsection
<script src="{{ asset('js/plugins/instascan2.min.js') }}"></script>


<script type="text/javascript">
	let scanner = new Instascan.Scanner({ video: document.getElementById('preview'),
	mirror: true, });
  scanner.addListener('scan', function (content) {
    console.log("content: ",content);
  });
  Instascan.Camera.getCameras().then(function (cameras) {
    if (cameras.length > 0) {
      scanner.start(cameras[0]);
    } else {
      console.error('No cameras found.');
    }
  }).catch(function (e) {
    console.error("error:",e);
  });

</script>