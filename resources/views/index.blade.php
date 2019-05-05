@extends('layouts.app')

<?php
	$metabaseSiteUrl = 'http://kec-bisnis.herokuapp.com';
    $metabaseSecretKey = '6b058beaf1e46ec4d77f4000a4fb03d41b3c8ad741df0573d6f02dad912c3414';

    $signer = new \Lcobucci\JWT\Signer\Hmac\Sha256();
    $token = (new \Lcobucci\JWT\Builder())
        ->set('resource', ['dashboard' => 1])
        ->set('params', ['param' => 0])
        ->sign($signer, $metabaseSecretKey)
        ->getToken();

    $iframeUrl = "$metabaseSiteUrl/embed/dashboard/$token#bordered=true&titled=true";
?>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <iframe    src="http://kec-bisnis1.herokuapp.com/public/dashboard/536a6c92-a0c3-4dc5-a312-4f9c97e198f3"    frameborder="0"    width=100%    height="1700px"    allowtransparency></iframe>
        </div>
    </div>
</div>

@endsection