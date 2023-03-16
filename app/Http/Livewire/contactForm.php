<?php

namespace App\Http\Livewire;


use App\Language;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Internationalizations\Http\Controllers\Actions\Currencies\AllCurrencyCodesAction;
use Modules\Inventory\Http\Controllers\Actions\Amenities\GetIAmenitiesAction;
use Modules\Inventory\Http\Controllers\Actions\AreaUnits\GetIAreaUnitsAction;
use Modules\Inventory\Http\Controllers\Actions\Developers\GetIDevelopersAction;
use Modules\Inventory\Http\Controllers\Actions\Facilities\GetIFacilitiesAction;
use Modules\Locations\Http\Controllers\Actions\GetCountriesAction;
use Modules\Tags\Http\Controllers\Actions\GetTagsAction;

class contactForm extends Component
{

    public $currentStep = 1;
    // public $area_units;

    public $auth_user;

    protected $developers ;

    public $countries;


    public $currency_codes;



    public $facilities;

    public $amenities;

    public $tags ;
    public $action;
    public $languages;
    public $translations;
    public $i_area_unit_id;




    public function mount()
    {

        $this->auth_user = Auth::user();
        $this->developers=(new GetIDevelopersAction)->execute()->toarray(0) ;
        $this->countries = ( new GetCountriesAction)->execute()->toarray(0);
        $this->currency_codes = (new AllCurrencyCodesAction)->execute();
        $this->area_units = (new GetIAreaUnitsAction)->execute()->toarray(0);
        $this->facilities = (new GetIFacilitiesAction) ->execute()->toarray(0);
        $this->amenities = (new GetIAmenitiesAction)->execute()->toarray(0);
        $this->tags = (new GetTagsAction)->execute()->toarray(0);

        $this->languages = Language::all();


    }
    /**
     * Write code on Method
     */




    // public function updatedDirection($direction)
    // {

    //     // $this->goOrBack = Direction::findOrFail($direction)->go_back;
    //     if (!is_null($direction)) {
    //         // $this->times = Direction::find($direction)->times()->get();
    //         // $this->points = Direction::find($direction)->points()->get();
    //         // $this->drivers = Direction::find($direction)->drivers()->get();


    //     }
    // }

    /**
     * Write code on Method
     */

    public function render()
    {
        return view('livewire.contact-form');
    }

    /**
     * Write code on Method
     */
    public function firstStepSubmit()
    {
          // Check English language does exist
          $translations = $this->translations? $this->translations : $this->translations;
          if (is_array($translations)) {
              $exists = false;
              for ($i = 0; $i < count($translations); $i++) {
                  if ($translations[$i] && isset($translations[$i]['language_id']) && $translations[$i]['language_id'] == 1) {
                      $exists = true;
                      break;
                  }
              }

              if (!$exists) {
                  $errors = [];
                  $errors[] = [
                      'field' => 'translations',
                      'message' => 'Must contains english translation '
                  ];

                  throw new HttpResponseException(response()->json([
                      'errors' => $errors
                  ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
              }
          }

          // Check English language does exist for phases
          $phases = $this->phases ? $this->phases : $this->phases;
          if (is_array($phases) && count($phases)) {
              $exists = false;
              foreach ($phases as $phase) {
                  if (isset($phase['translations'])) {
                      foreach ($phase['translations'] as $translation) {
                          if (isset($translation['language_id']) && $translation['language_id'] == 1) {
                              $exists = true;
                              break;
                          }
                      }
                  }
              }

              if (!$exists) {
                  $errors = [];
                  $errors[] = [
                      'field' => 'phases',
                      'message' => 'Phases يجب أن تحتوي الترجمات على اللغة العربية'
                  ];

                  throw new HttpResponseException(response()->json([
                      'errors' => $errors
                  ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
              }
          }
        $validatedData = $this->validate([
            // 'start_address'   => 'required',
            // 'start_latlng'    => 'required',

        ]);



        $this->currentStep = 2;
    }

    /**
     * Write code on Method
     */
    public function secondStepSubmit()
    {
        // $validatedData = $this->validate([
        //     // 'status' => 'required',
        // ]);


        $this->currentStep = 3;
    }
    public function thirdStepSubmit()
    {
        // $validatedData = $this->validate([
        //     // 'status' => 'required',
        // ]);

        // $this->end_address = Point::where("latlng", '=', $this->point_id)->first()->name;
        $this->currentStep = 4;
    }
    public function forthStepSubmit()
    {

        // foreach ($this->chairsarr as $key => $value) {
        //     if (in_array($value, $this->chairs)) {

        //         unset($this->chairsarr[$key]);
        //     }
        // }
        // $validatedData = $this->validate([
        //     // 'status' => 'required',
        // ]);

        $this->currentStep = 5;
    }
    public function fiveStepSubmit()
    {


        // $validatedData = $this->validate([
        //     // 'status' => 'required',
        // ]);

        $this->currentStep = 6;
    }
    /**
     * Write code on Method
     */
    public function submitForm()
    {
        // ModelsReservation::create([
        //     'start_address' =>  $this->start_address,
        //     'start_latlng' =>   $this->start_latlng,
        //     'start_detailes' => $this->start_detailes,
        //     'end_address' =>    $this->end_address,
        //     'end_latlng' =>     $this->end_latlng,
        //     'end_detailes' =>   $this->end_detailes,
        //     'status' =>         $this->status,
        //     'date' =>           $this->date,
        //     'chair_quantity' => $this->chair_quantity,
        //     'price' =>          $this->price,
        //     'go_back' =>        $this->go_back,
        //     'time_id' =>        $this->time_id,
        //     'user_id' =>        $this->user_id,
        //     'trip_id' =>        $this->trip_id,
        // ]);
        // dd(
        //     "direction",
        //     $this->direction,

        //     "driverId",
        //     $this->driverId,
        //     "userId",
        //     $this->userId,
        //     "start_address",
        //     $this->start_address,
        //     "start_latlng",
        //     $this->start_latlng,
        //     "start_detailes",
        //     $this->start_detailes,
        //     "end_address",
        //     $this->end_address,
        //     "end_latlng",
        //     $this->end_latlng,
        //     "end_detailes",
        //     $this->end_detailes,
        //     "date",
        //     $this->date,
        //     "chair_quantity",
        //     $this->chair_quantity,
        //     "chairsarr",
        //     $this->chairsarr,
        //     ">price",
        //     $this->price,
        //     "go_back",
        //     $this->go_back,
        //     "time_id",
        //     $this->time_id,
        //     "point_id",
        //     $this->point_id,
        //     "trip_id",
        //     $this->trip->id,

        // );
        // if ($this->goOrBack == 0) {
        //     $inputs = [
        //         'start_address' => $this->end_address, //
        //         "start_detailes" => $this->end_detailes, //
        //         'start_latlng' => $this->point_id, //
        //         'end_address' =>  $this->start_address, //
        //         'end_latlng' =>  $this->start_latlng['lat'] . "," . $this->start_latlng['lng'], //
        //         "end_detailes" => $this->start_detailes, //
        //     ];
        // } else {


        //     $inputs = [

        //         'start_address' => $this->start_address, //
        //         'start_latlng' =>   $this->start_latlng['lat'] . "," . $this->start_latlng['lng'], //
        //         "start_detailes" => $this->start_detailes, //
        //         'end_address' =>  $this->end_address, //
        //         'end_latlng' =>  $this->point_id, //
        //         "end_detailes" => $this->end_detailes, //


        //     ];
        // }


        // $inputs2 = [
        //     'chair_quantity' => count($this->chairsarr), //$this->chair_quantity,//
        //     'date' => strtotime($this->date), //
        //     'time_id' => $this->time_id, //
        //     'user_id' =>  Auth::user()->id, //
        //     'trip_id' =>  $this->trip->id, //
        //     'go_back' =>  $this->goOrBack,
        //     'price' =>  count($this->chairsarr) * 60,

        // ];
        // $inputs3 = $inputs + $inputs2;



        // $resrvation =  ModelsReservation::create($inputs3);
        // $resrvation->seats()->attach($this->chairsarr, array('user_id' => Auth::user()->id));
        // $this->successMsg = 'Team successfully created.';


        $this->clearForm();

        $this->currentStep = 1;

        // $this->dispatchBrowserEvent('alert',
        //         ['type' => 'success',  'message' => 'Reservation successfully created!']);

        // return redirect(route('userReservations.index'))->with('success', 'Product updated successfully');
    }

    /**
     * Write code on Method
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     */
    public function clearForm()
    {

        // $this->start_address = '';
        // $this->start_latlng = '';
        // $this->start_detailes = '';
        // $this->end_address = '';
        // $this->end_latlng = '';
        // $this->end_detailes = '';
        // $this->status = 1;
        // $this->date = '';
        // $this->chair_quantity = '';
        // $this->price = '';
        // $this->go_back = '';
        // $this->time_id = '';
        // $this->user_id = '';
        // $this->trip_id = '';
    }
}
