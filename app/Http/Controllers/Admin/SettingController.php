<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();

        return view('admin.settings.index', [
            'settings' => $settings,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'settings' => 'required|array',
        ]);

        foreach ($request->settings as $key => $value) {
            Setting::query()
                ->whereIsEditable()
                ->where('key', $key)
                ->update(['value' => $value ?? '']);
        }

        return redirect()->route('admin.settings.index');
    }
}
