<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingStoreRequest;
use App\Http\Requests\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $settings = Setting::all();

        return view('setting.index', compact('settings'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('setting.create');
    }

    /**
     * @param \App\Http\Requests\SettingStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SettingStoreRequest $request)
    {
        $setting = Setting::create($request->validated());

        $request->session()->flash('setting.id', $setting->id);

        return redirect()->route('setting.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Setting $setting)
    {
        return view('setting.show', compact('setting'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Setting $setting)
    {
        return view('setting.edit', compact('setting'));
    }

    /**
     * @param \App\Http\Requests\SettingUpdateRequest $request
     * @param \App\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function update(SettingUpdateRequest $request, Setting $setting)
    {
        $setting->update($request->validated());

        $request->session()->flash('setting.id', $setting->id);

        return redirect()->route('setting.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Setting $setting)
    {
        $setting->delete();

        return redirect()->route('setting.index');
    }
}
