<?php

namespace Laravel\Jetstream\Http\Controllers\Inertia;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Laravel\Jetstream\Jetstream;

class AboutController extends Controller
{
    /**
     * Show the privacy policy for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Response
     */
    public function show(Request $request)
    {
        $AboutFile = Jetstream::localizedMarkdownPath('policy.md');

        return Inertia::render('AboutUs', [
            'about' => Str::markdown(file_get_contents($AboutFile)),
        ]);
    }
}
