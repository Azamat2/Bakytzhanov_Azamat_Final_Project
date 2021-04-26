<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('lang.AllWork')</title>
    <link rel="stylesheet" href="{{ asset('allwork.css') }}" />
    <script src="{{ asset('script.js') }}"></script>
</head>
<body>
    <div class="header">
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('main', ['lang' => App::getLocale()]) }}">@lang('lang.Main')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('add-worker', ['lang' => App::getLocale()]) }}">@lang('lang.AddWorker')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('add-work', ['lang' => App::getLocale()]) }}">@lang('lang.AddWork')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('allworker', ['lang' => App::getLocale()]) }}">@lang('lang.AllWorker')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('allwork', ['lang' => App::getLocale()]) }}">@lang('lang.AllWork')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('sendemail', ['lang' => App::getLocale()]) }}">@lang('lang.SendEmail')</a></div>
    </div>

    <h1 id='start'>@lang('lang.AllWork')</h1>
    
    <table>
    <tr>
        <th>@lang('lang.WorkId')</th>
        <th>@lang('lang.WorkName')</th>
        <th>@lang('lang.WorkDescription')</th>
    </tr>
    @forelse ($works as $work)
            <tr>
                <td>{{  $work->id  }}</td>
                <td>{{  $work->name  }}</td>
                <td>{{  $work->description  }}</td>
            </tr>
    @empty
    @endforelse
    </table>
</body>
</html>