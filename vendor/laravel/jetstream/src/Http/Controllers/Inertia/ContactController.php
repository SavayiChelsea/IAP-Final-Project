<?php

namespace Laravel\Jetstream\Http\Controllers\Inertia;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Laravel\Jetstream\Jetstream;

class ContactController extends Controller
{
    /**
     * Show the terms of service for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Response
     */
    public function show(Request $request)
    {
        $ContactFile = Jetstream::localizedMarkdownPath('contact.md');

        return Inertia::render('ContactUs', [
            'contact' => Str::markdown(file_get_contents($ContactFile)),
        ]);
    }
}
