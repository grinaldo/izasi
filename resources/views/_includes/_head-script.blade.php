<!-- Google Tag Ma=nager -->
@if(!empty($googleAnalytic))
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ $googleAnalytic->description }}"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', '{{ $googleAnalytic->description }}');
</script>
@endif
<!-- End Google Tag Manager -->