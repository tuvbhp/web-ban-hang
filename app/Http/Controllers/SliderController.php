<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\Log;
use App\Slider;
use DB;

class SliderController extends Controller
{

    use StorageImageTrait;

    private $slider;

    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }

    public function index()
    {
        $sliders = $this->slider->latest()->paginate(4);
        return view('admin.slider.index', compact('sliders'));
    }

    public function create(){
        return view('admin.slider.create');
    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $sliderInsert = [
                'name' => $request->name,
                'content' => $request->get('content'),
            ];
            $sliderImage = $this->storageTraitUpload($request,'feature_image_path','slider');
            if (!empty($sliderImage)) {
                $sliderInsert['feature_image_path'] = $sliderImage['file_path'];
                $sliderInsert['feature_image_name'] = $sliderImage['file_name'];
            }
            $slider = $this->slider->create($sliderInsert);
             DB::commit();
            return redirect()->route('index.slider')->with('status', 'Your slider has been create ! ');

        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message' . $exception->getMessage() . 'Line : ' . $exception->getLine());
        }
    }

     public function edit($id){
         $slider = $this->slider->find($id);
         return view('admin.slider.edit',compact('slider'));
     }
     public function update(Request $request,$id){
         DB::beginTransaction();
         try {
             $sliderInsert = [
                 'name' => $request->name,
                 'content' => $request->get('content'),
             ];
             $sliderImage = $this->storageTraitUpload($request,'feature_image_path','slider');
             if (!empty($sliderImage)) {
                 $sliderInsert['feature_image_path'] = $sliderImage['file_path'];
                 $sliderInsert['feature_image_name'] = $sliderImage['file_name'];
             }
             $slider = $this->slider->find($id)->update($sliderInsert);
             DB::commit();
             return redirect()->route('index.slider')->with('status', 'Your slider has been create ! ');

         } catch (\Exception $exception) {
             DB::rollBack();
             Log::error('Message' . $exception->getMessage() . 'Line : ' . $exception->getLine());
         }
     }
    public function destroy($id){
        $slider = Slider::whereId($id)->firstOrFail();
        $slider->delete();
        return redirect()->route('index.slider');
    }
}
