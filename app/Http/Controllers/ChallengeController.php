<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Http\Requests\ChallengeStoreRequest;
use App\Http\Requests\ChallengeUpdateRequest;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $challenges = Challenge::all();

        return view('challenge.index', compact('challenges'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('challenge.create');
    }

    /**
     * @param \App\Http\Requests\ChallengeStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChallengeStoreRequest $request)
    {
        $challenge = Challenge::create($request->validated());

        $request->session()->flash('challenge.id', $challenge->id);

        return redirect()->route('challenge.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Challenge $challenge
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Challenge $challenge)
    {
        return view('challenge.show', compact('challenge'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Challenge $challenge
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Challenge $challenge)
    {
        return view('challenge.edit', compact('challenge'));
    }

    /**
     * @param \App\Http\Requests\ChallengeUpdateRequest $request
     * @param \App\Challenge $challenge
     * @return \Illuminate\Http\Response
     */
    public function update(ChallengeUpdateRequest $request, Challenge $challenge)
    {
        $challenge->update($request->validated());

        $request->session()->flash('challenge.id', $challenge->id);

        return redirect()->route('challenge.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Challenge $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Challenge $challenge)
    {
        $challenge->delete();

        return redirect()->route('challenge.index');
    }
}
