<?php

namespace Laravel\Jetstream\Http\Controllers\Livewire;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

class AboutController extends Controller
{
    /**
     * Show the privacy policy for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $AboutFile = Jetstream::localizedMarkdownPath('about.md');

        return view('policy', [
            'policy' => Str::markdown(file_get_contents($AboutFile)),
        ]);
    }
}
