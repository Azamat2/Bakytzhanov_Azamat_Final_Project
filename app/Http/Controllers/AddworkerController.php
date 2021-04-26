<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use Illuminate\Support\Facades\Storage;
use App;

class AddworkerController extends Controller
{
    public function index($lang) {
        $workers = Worker::all();
        App::setlocale($lang);

        return view('worker.allworker')->with(['workers' => $workers]);
    }

    public function store(Request $request) {
        $this->validate($request, ['worker_photo' => 'mimes:jpeg,png,jpg',]);
          
          if ($request->hasFile('worker_photo')) {
            $extension = $request->worker_photo->getClientOriginalExtension();
            $fileName = $request->worker_photo->getClientOriginalName();
            $request->file('worker_photo')->storeAs('/uploads', $fileName);
            $url = Storage::url($fileName);

            Worker::create([
                'worker_name' => $request->worker_name,
                'worker_surname' => $request->worker_surname,
                'worker_photo' => $url,
                'work_id' => $request->work_id
            ]);

        return back();
    }
    else {
        abort(501, 'Sorry, but no');
    }
}
}
