@props([
    'title' => 'ToursTravel Indonesia - Temukan Destinasi Menakjubkan',
    'description' => 'Jelajahi Indonesia dan sekitarnya bersama ToursTravel. Destinasi pilihan, pemandu ahli, dan pengalaman tak terlupakan menanti Anda.',
    'image' => asset('images/og-image.jpg'),
    'type' => 'website',
    'url' => url()->current(),
])

<!-- Primary Meta Tags -->
<title>{{ $title }}</title>
<meta name="title" content="{{ $title }}">
<meta name="description" content="{{ $description }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ $url }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image }}">
<meta property="og:site_name" content="ToursTravel Indonesia">
<meta property="og:locale" content="id_ID">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ $url }}">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $image }}">

<!-- Additional SEO -->
<meta name="robots" content="index, follow">
<meta name="author" content="ToursTravel Indonesia">
<link rel="canonical" href="{{ $url }}">

<!-- JSON-LD Structured Data -->
@if($type === 'website')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TravelAgency",
    "name": "ToursTravel Indonesia",
    "description": "{{ $description }}",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('images/logo.png') }}",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Jl. Jend. Sudirman Kav. 21",
        "addressLocality": "Jakarta Selatan",
        "addressRegion": "DKI Jakarta",
        "postalCode": "12920",
        "addressCountry": "ID"
    },
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+628123456789",
        "contactType": "customer service"
    },
    "sameAs": [
        "https://facebook.com/tourstravelindonesia",
        "https://twitter.com/tourstravelid",
        "https://instagram.com/tourstravelindonesia"
    ]
}
</script>
@endif
