{{-- Social Media Card: Facebook Page/Group or Instagram Post --}}

@props([
	'platform' => 'facebook', // facebook | instagram
	'title' => 'RADMedics-Official',
	'subtitle' => 'Facebook Page',
	'logo' => '/images/radmedics-logo.png',
	'facebookPageUrl' => 'https://www.facebook.com/radmedicsph',
	'facebookGroupUrl' => null,
	'instagramUrl' => 'https://www.instagram.com/radmedicsph/',
	'instagramEmbedUrl' => null,
	'showInstagramPost' => true,
	'instagramProfileIframe' => true,
	'instagramIncludeProfileScript' => true,
	'buttonText' => null,
	'buttonType' => 'outline',
	'buttonColor' => 'tiffany-blue',
	'width' => 700,
	'height' => 900,
	'class' => '',
])

@php
	$platform = strtolower($platform);
	$isFacebook = $platform === 'facebook';
	$isInstagram = $platform === 'instagram';

	// Facebook Page Layout
	$facebookIsGroup = false; $facebookEmbedSrc = null; $facebookTarget = null;
	if($isFacebook) {
		$facebookIsGroup = filled($facebookGroupUrl);
		$facebookTarget = $facebookIsGroup ? $facebookGroupUrl : $facebookPageUrl;
		$baseUrl = 'https://www.facebook.com/plugins/' . ($facebookIsGroup ? 'group.php' : 'page.php');
		$pluginWidth = min($width, 500); // FB Page/Group plugin max width is 500
		$query = http_build_query([
			'href' => $facebookTarget,
			'tabs' => $facebookIsGroup ? null : 'timeline',
			'width' => $pluginWidth,
			'height' => $height,
			'small_header' => 'true',
			'adapt_container_width' => 'true',
			'hide_cover' => 'false',
			'show_facepile' => 'true',
		]);
		$facebookEmbedSrc = $baseUrl . '?' . $query;
	}

	// Instagram Page Layout
	$instagramTarget = $instagramUrl;
	$instagramPost = $instagramEmbedUrl;
	if($instagramPost) {
		$parsed = parse_url($instagramPost);
		$host = $parsed['host'] ?? 'www.instagram.com';
		$path = $parsed['path'] ?? '';
		$segments = array_values(array_filter(explode('/', trim($path,'/'))));
		if(count($segments) >= 2) {
			$path = '/' . $segments[0] . '/' . $segments[1] . '/';
		}
		$instagramPost = 'https://' . $host . $path;
	}

	if(!$buttonText) {
		if($isFacebook) {
			$buttonText = $facebookIsGroup ? 'Open Facebook Group' : 'Open Facebook Page';
		} elseif($isInstagram) {
			$buttonText = 'Open Instagram';
		} else {
			$buttonText = 'Visit';
		}
	}

	$buttonHref = $isFacebook ? $facebookTarget : ($isInstagram ? $instagramTarget : '#');
@endphp

<div class="flex flex-col items-center text-center space-y-4 {{ $class }}">
	<div class="w-24 h-24 rounded-full overflow-hidden flex items-center justify-center bg-white shadow">
		<img src="{{ $logo }}" alt="{{ $title }} Logo" class="w-full h-full object-contain" />
	</div>
	<div>
		<h2 class="text-xl font-semibold tracking-tight">{{ $title }}</h2>
		<p class="text-sm text-gray-600">{{ $subtitle }}</p>
	</div>

	{{-- Embed --}}
	<div class="w-full max-w-full" style="max-width: {{ $width }}px;">
		<div class="border-2 border-[#0ABAB5] rounded-xl bg-white shadow-md p-4 flex flex-col items-stretch gap-4 overflow-visible">
		@if($isFacebook)
			@php $pluginWidth = min($width,500); @endphp
			<div class="mx-auto" style="width:{{ $pluginWidth }}px;">
				<iframe src="{{ $facebookEmbedSrc }}" width="{{ $pluginWidth }}" height="{{ $height }}" style="border:none;overflow:hidden;display:block;width:{{ $pluginWidth }}px;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" title="Facebook {{ $facebookIsGroup ? 'Group' : 'Page' }} Embed"></iframe>
			</div>
		@elseif($isInstagram)
			@if($instagramPost && $showInstagramPost)
				@php $igWidth = min($width, 500); @endphp
				<div class="mx-auto" style="width:{{ $igWidth }}px;">
					<div class="relative" style="height:{{ $height }}px; overflow-y:auto; overflow-x:hidden; -webkit-overflow-scrolling:touch;">
						<blockquote class="instagram-media" data-instgrm-permalink="{{ rtrim($instagramPost,'/') }}/" data-instgrm-version="14" style="background:#fff; border:0; margin:0 auto; max-width:100%; width:{{ $igWidth }}px;">
						</blockquote>
					</div>
				</div>
			@elseif($instagramProfileIframe)
				@php $igWidth = min($width, 500); @endphp
				<div class="mx-auto" style="width:{{ $igWidth }}px;">
					<div class="relative" style="height:{{ $height }}px; overflow-y:auto; overflow-x:hidden; -webkit-overflow-scrolling:touch;">
						<iframe
							src="{{ rtrim($instagramTarget,'/') }}/"
							name="{{ $title }} Instagram"
							width="{{ $igWidth }}"
							height="{{ $height }}"
							frameborder="0"
							scrolling="no"
							allowfullscreen
							style="border:0; background:#fff; display:block; width:{{ $igWidth }}px;"
						></iframe>
					</div>
					@if($instagramIncludeProfileScript)
						<script async src="https://www.embedista.com/j/if.js"></script>
					@endif
				</div>
			@else
				<div class="flex items-center justify-center w-full bg-gray-50 text-gray-600 px-6" style="height: {{ $height }}px;">
					<span class="text-sm">Instagram content unavailable.</span>
				</div>
			@endif
		@endif
		</div>
	</div>

	{{-- Button Component --}}
	<x-layouts.button
		:href="$buttonHref"
		:text="$buttonText"
		:type="$buttonType"
		:color="$buttonColor"
		size="sm"
		class="mt-2"
	/>
</div>

