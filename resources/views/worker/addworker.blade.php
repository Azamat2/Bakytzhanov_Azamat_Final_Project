<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('lang.AddWorker')</title>
    <link rel="stylesheet" href="{{ asset('addworker.css') }}" />
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

    <h1>@lang('lang.AddWorker')</h1>

    <form method="POST" action="{{ route('add-worker', ['lang' => App::getLocale()])  }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="worker_name" placeholder=worker_name>
        <input type="text" name="worker_surname" placeholder=worker_surname>
        <input type="file" name="worker_photo" accept=image/png,image/jpeg>
        <input type="number" name="work_id" placeholder=work_id>
        <button type="submit">@lang('lang.AddWorker')</button>
    </form>
</body>
</html>