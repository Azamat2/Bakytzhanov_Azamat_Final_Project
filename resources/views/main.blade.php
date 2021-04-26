<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('lang.Main')</title>
    <link rel="stylesheet" href="{{ asset('main.css') }}" />
    <script src="{{ asset('script.js') }}"></script>
</head>
<body onload="load()">
    <div class="header">
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('main', ['lang' => App::getLocale()]) }}">@lang('lang.Main')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('add-worker', ['lang' => App::getLocale()]) }}">@lang('lang.AddWorker')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('add-work', ['lang' => App::getLocale()]) }}">@lang('lang.AddWork')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('allworker', ['lang' => App::getLocale()]) }}">@lang('lang.AllWorker')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('allwork', ['lang' => App::getLocale()]) }}">@lang('lang.AllWork')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('sendemail', ['lang' => App::getLocale()]) }}">@lang('lang.SendEmail')</a></div>
    </div>

        <h1 id='start'>@lang('lang.Start')</h1>

</body>
</html>