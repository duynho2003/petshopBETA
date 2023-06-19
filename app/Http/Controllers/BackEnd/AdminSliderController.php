<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminSliderRequest;
use App\Models\Slider;
use App\Trait\DeleteModel;
use App\Trait\UpLoadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminSliderController extends Controller
{
    use UpLoadImage, DeleteModel;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::where('active', 1)->latest()->paginate(5);
        return view('be.components.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('be.components.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminSliderRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataSliderCreate = [
                'name' => $request->name,
                'description' => $request->description,
            ];

            $dataUpLoadSliderImage = $this->TraitUpLoadFile($request, 'image_path', 'images/sliderImages');
            if(!empty($dataUpLoadSliderImage)) {
                $dataSliderCreate['image_name'] = $dataUpLoadSliderImage['image_name'];
                $dataSliderCreate['image_path'] = $dataUpLoadSliderImage['image_path'];
            }
        
            Slider::create($dataSliderCreate);
            DB::commit();
            return redirect()->route('slider.index');

        } catch (\Exception $ex) {
            DB::rollBack();
            Log::error("Message: {$ex->getMessage()} --- Line: {$ex->getLine()} --- File: {$ex->getFile()}");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('be.components.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        try {
            DB::beginTransaction();
            $dataSliderUpdate = [
                'name' => $request->name,
                'description' => $request->description,
            ];

            $dataUpLoadSliderImage = $this->TraitUpLoadFile($request, 'image_path', 'images/sliderImages');
            if(!empty($dataUpLoadSliderImage)) {
                $dataSliderUpdate['image_name'] = $dataUpLoadSliderImage['image_name'];
                $dataSliderUpdate['image_path'] = $dataUpLoadSliderImage['image_path'];
            }
            
            $slider->update($dataSliderUpdate);
            DB::commit();
            return redirect()->route('slider.index');

        } catch (\Exception $ex) {
            DB::rollBack();
            Log::error("Message: {$ex->getMessage()} --- Line: {$ex->getLine()} --- File: {$ex->getFile()}");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        // dd($slider->id);
        $this->TraitHideRecord($slider);
    }
}
