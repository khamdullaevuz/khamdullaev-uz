<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Works;
use Illuminate\Support\Facades\Storage;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Works::orderByDesc('created_at')->paginate(10);
        return view('backend.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $work = new Works();
        return view('backend.works.create', compact('work'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value = $request->validate([
            'name' => 'required|min:2',
            'description' => 'required|min:10',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'required|url',
        ]);

        $imageName = time() . '.' . $request->file('photo')->extension();
        $request->file('photo')->storeAs('public', $imageName,);
        $value['photo'] = $imageName;

        $work = Works::create($value);
        return redirect()->route('works.show', ['work' => $work->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $work = Works::findOrFail($id);
        return view('backend.works.show', compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = Works::findOrFail($id);
        return view('backend.works.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Works $work)
    {
        $value = $request->validate([
            'name' => 'required|min:2',
            'description' => 'required|min:10',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'required|url',
        ]);

        if ($request->photo) {
            Storage::delete('public/' . $work->photo);
            $imageName = time() . '.' . $request->file('photo')->extension();
            $request->file('photo')->storeAs('public', $imageName,);
            $value['photo'] = $imageName;
        }

        $work->update($value);
        return redirect()->route('works.show', ['work' => $work->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Works $work)
    {
        Storage::delete('public/' . $work->photo);
        $work->delete();
        return redirect()->route('works.index');
    }
}
