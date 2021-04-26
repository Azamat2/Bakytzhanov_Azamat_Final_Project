<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('lang.AllWorker')</title>
    <link rel="stylesheet" href="{{ asset('allworker.css') }}" />
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

    <h1>@lang('lang.AllWorker')</h1>

    <table>
    <tr>
        <th>@lang('lang.WorkerId')</th>
        <th>@lang('lang.WorkId')</th>
        <th>@lang('lang.WorkerName')</th>
        <th>@lang('lang.WorkerSurname')</th>
        <th>@lang('lang.WorkerPhoto')</th>
        <th>@lang('lang.WorkName')</th>
        <th>@lang('lang.WorkDescription')</th>
    </tr>
    @forelse ($workers as $worker)
            <tr>
                <td>{{  $worker->id  }}</td>
                <td>{{  $worker->work->id  }}</td>
                <td>{{  $worker->worker_name  }}</td>
                <td>{{  $worker->worker_surname  }}</td>
                <td><img src="{{  $worker->worker_photo  }}" width="100px"  height="50px"></td>
                <td>{{  $worker->work->name  }}</td>
                <td>{{  $worker->work->description  }}</td>
            </tr>
    @empty
    @endforelse
    </table>
</body>
</html>