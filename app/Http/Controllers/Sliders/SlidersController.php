<?php

namespace App\Http\Controllers\Sliders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sliders\SlidersRequest;
use App\Models\Sliders;
use Illuminate\Support\Facades\Storage;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Sliders::all();
        return view('pages.slider.slider_index',[
          'slider' => $slider
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.slider.slider_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SlidersRequest $request)
    {
        $data = $request->validated();
        $nameSlider = time().'_'.$data['slider']->getClientOriginalName();
        $sliders = new Sliders();
        try {
          $sliders->create([
            'name' => $data['title'],
            'description' => $data['description'],
            'image' => $nameSlider
          ]);
          $data['slider']->storeAs('public/upload/sliders',$nameSlider);
          $success = 'Add slider successfully';
          return redirect()
            ->route('slider.index')
            ->with('success',$success);
        } catch (\Exception $e) {
          \Log::error($e);
          $error = 'Add slider failed';
          return back()->with('error',$error);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $sliderOfId = Sliders::find($id);
        return view('pages.slider.slider_edit',[
          'sliderOfId' => $sliderOfId
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SlidersRequest $request, $id)
    {
      $data = $request->validated();
      $slider = Sliders::findOrFail($id);
      $sliderImgOld = Storage::files('public/upload/sliders',$slider->name);
      $sliderImgNew = time().'_'.$data['slider']->getClientOriginalName();
      try {
        $slider->update([
          'title' => $data['title'],
          'description' => $data['description'],
          'image' => $sliderImgNew
        ]);
        $success = 'Update slider successfully!';
        $data['slider']->storeAs('public/upload/sliders', $sliderImgNew);
        Storage::delete($sliderImgOld);
        return redirect()
          ->route('slider.index')
          ->with('success',$success);
      } catch (\Exception $e) {
        \Log::error($e);
        $error = 'Update slider failed';
        return back()->with('error',$error);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $slider = Sliders::findOrFail($id);
      try
      {
        $slider->delete();
        if(Storage::exists('public/upload/sliders'.$slider->name)) {
          Storage::delete('public/upload/sliders'.$slider->name);
        }
        $success = 'Delete slider successfully';
        return redirect()
          ->route('slider.index')
          ->with('success', $success);
      } catch (\Exception $e) {
        \Log::error($e);
        $error = 'Delete slider failed';
        return back()->with('error', $error);
      }

    }
}
