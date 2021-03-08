<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormPitche;
use App\Models\Pitch;
use Exception;
use Illuminate\Http\Request;

class PitchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pitches = Pitch::paginate(5);
        return view('backend.pitche.list',compact('pitches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pitche.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FormPitche $request
     * @param $pitche
     * @return \Illuminate\Http\Response
     */
    public function store(FormPitche $request,Pitch $pitche)
    {
//        $pitche = new Pitch();
//        $pitche->fill($request->all());
//        $pitche->save();
//        return redirect()->route('pitche.list');
        if ($request->hasFile('image')) {
            try {
                $image = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images'), $image);
            } catch (Exception $e) {
                if (file_exists(public_path('images') . "/" . $image)) {
                    unlink(public_path('images') . "/" . $image);
                }
                return back()->with('error', 'Your must upload image file.');
            }
            $pitche->fill($request->all());
            $pitche->image = $image;
            $pitche->save();
            return redirect()->route('pitche.list');
        }
        return back()->with('error', 'You must select image file to upload.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pitch  $pitch
     * @return \Illuminate\Http\Response
     */
    public function show(Pitch $pitch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pitch  $pitch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pitche = Pitch::findOrFail($id);
        return view('backend.pitche.edit', compact('pitche'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pitch  $pitch
     * @return \Illuminate\Http\Response
     */
    public function update(FormPitche $request, $id)
    {
//        $pitche = Pitch::findOrFail($id);
//        $pitche->fill($request->all());
//        $pitche->save();
//        return redirect()->route('pitche.list');
        if ($request->hasFile('image')) {
            try {
                $image = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images'), $image);
            } catch (Exception $e) {
                if (file_exists(public_path('images') . "/" . $image)) {
                    unlink(public_path('images') . "/" . $image);
                }
                return back()->with('error', 'Your must upload image file.');
            }
            $pitche = Pitch::findOrFail($id);
            $pitche->fill($request->all());
            $pitche->image = $image;
            $pitche->save();
            return redirect()->route('pitche.list');
        }
        return back()->with('error', 'You must select image file to upload.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pitch  $pitch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pitche = Pitch::findOrFail($id);
        $pitche->delete();
        return redirect()->route('pitche.list');
    }
    public function search(Request $request){
        $search = $request->search;
        $pitches = Pitch::where('name', 'LIKE', "%$search%")->orWhere('address',"LIKE","%$search%")->orWhere('type',"LIKE","%$search%")->paginate(100);
        return view('backend.pitche.list', compact(['pitches']));
    }
}
