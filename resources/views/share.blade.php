<head>
    <meta property="og:url"           content="/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ $title }}" />
    <meta property="og:description"   content="挑戰成功立即抽千瓶十六茶，還有雲品住宿等三種大獎任你抽！" />
    <meta property="og:image" content="{{ asset('assets/image/share_' . $topicNumber . '_' . $scoreLevel . '.jpg') }}">

    {{--    <meta property="og:title" content="{{ $title }}">--}}
{{--    <meta property="og:site_name" content="十六茶 療癒之森">--}}
{{--    <meta property="og:url" content="/">--}}
{{--    <meta property="og:description" content="">--}}
{{--    <meta property="og:type" content="website">--}}
{{--    <link rel="image_src" href="/assets/image/share_{{ $topicNumber }}_{{ $scoreLevel }}.jpg">--}}
{{--    <meta property="og:image" content="/assets/image/share_{{ $topicNumber }}_{{ $scoreLevel }}.jpg">--}}
</head>

<script>
    setTimeout(function(){
        location.href = '/';
    }, 2000);
</script>