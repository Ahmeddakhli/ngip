<div>

    @if(!empty($successMessage))

    <div class="alert alert-success">

        {{ $successMessage }}

    </div>

    @endif

    <div class="row">

        <div class="col-xl-12 mb-30">

            <div id="" role="application" class="wizard clearfix">

                <div >

                    <div class="stepwizard">

                        <div class="stepwizard-row setup-panel">

                            <div class="stepwizard-step">

                                <a href="#step-1" type="button" wire:click="back(1)"
                                    class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-success' }}">1</a>

                                <p>{{__('inventory::inventory.project_information')}}</p>

                            </div>

                            <div class="stepwizard-step">

                                <a href="#step-2" type="button" wire:click="back(2)"
                                    class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-success' }}">2</a>

                                <p>{{__('inventory::inventory.location_information')}}</p>

                            </div>

                            <div class="stepwizard-step">

                                <a href="#step-3" type="button" wire:click="back(3)"
                                    class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-success' }}"
                                    disabled="disabled">3</a>

                                <p> {{__('inventory::inventory.financial_information')}}</p>

                            </div>
                            <div class="stepwizard-step">

                                <a href="#step-3" type="button" wire:click="back(4)"
                                    class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-success' }}"
                                    disabled="disabled">4</a>

                                <p>{{__('inventory::inventory.attachments')}}</p>

                            </div>
                            <div class="stepwizard-step">

                                <a href="#step-3" type="button" wire:click="back(5)"
                                    class="btn btn-circle {{ $currentStep != 5 ? 'btn-default' : 'btn-success' }}"
                                    disabled="disabled">5</a>

                                <p>{{__('inventory::inventory.unit_types')}}</p>

                            </div>
                            <div class="stepwizard-step">

                                <a href="#step-4" type="button" wire:click="back(6)"
                                    class="btn btn-circle {{ $currentStep != 6 ? 'btn-default' : 'btn-success' }}"
                                    disabled="disabled">6</a>

                                <p> {{__('inventory::inventory.payment_plans')}}</p>

                            </div>


                        </div>

                    </div>
                </div>

                <div class="content ">

                    <div class="row setup-content {{ $currentStep != 1 ? 'd-none' : '' }}" id="step-1">

                        <section id="example-basic-p-0" role="tabpanel" aria-labelledby="example-basic-h-0"
                            class="body current" aria-hidden="false">

                      {{--  --}}
                      <div class="tab-pane fade show active" id="main-info" role="tabpanel" aria-labelledby="main-info-tab">
                        <div class="form-group row">
                            <div class="fancy-checkbox col-4">
                                <input name="is_featured" id="is_featured" type="checkbox">
                                <label for="is_featured">{{__('inventory::inventory.is_featured')}}</label>
                            </div>
                            <div class="fancy-checkbox col-4">
                                <input name="in_discover_by" id="in_discover_by" type="checkbox">
                                <label for="in_discover_by">{{__('main.what_do_we_offer')}}</label>
                            </div>
                            <div class="fancy-checkbox col-4">
                                <input name="ready_to_move" id="ready_to_move" type="checkbox">
                                <label for="ready_to_move">{{__('main.ready_to_move')}}</label>
                            </div>
                            <!-- Developer -->
                            <div class="form-group col-4">
                                <label class="col-12 control-label" for="developer_id">{{__('inventory::inventory.developer')}} <small class="text-muted"> - {{__('inventory::inventory.optional')}}</small></label>
                                <div class="col-12">
                                    <input type="text" id="developer_id" name="developer_id" data-parsley-trigger="change focusout" class="form-control" data-role="tagsinput" />
                                </div>
                            </div>
                            <div class="col-4">
                                <label>{{trans('inventory::inventory.delivery_date')}} <small class="text-muted"> - {{__('inventory::inventory.optional')}}</small></label>
                                <input name="delivery_date" autocomplete="off" class="form-control datepicker-init" placeholder="{{trans('inventory::inventory.select_delivery_date')}}" data-parsley-trigger="change focusout" />
                            </div>
                            <div class="col-4">
                                <label for="finished_status">{{__('inventory::inventory.finished_status')}} <small class="text-muted"> - {{__('inventory::inventory.optional')}}</small></label>
                                <select class="form-control selectpicker" data-live-search="true" id="finished_status" name="finished_status" data-parsley-trigger="change focusout">
                                    <option value="" selected disabled>{{__('inventory::inventory.select_finished_status')}}</option>
                                    <option value="1">{{trans('inventory::inventory.finished')}}</option>
                                    <option value="0">{{trans('inventory::inventory.not_finished')}}</option>
                                </select>
                            </div>
                            <!-- Area Unit -->
                            <div class="col-4">
                                <label for="i_view_id">{{__('inventory::inventory.area_unit')}} <small class="text-muted"> - {{__('inventory::inventory.optional')}}</small></label>
                                <select wire:model="i_area_unit_id" class="form-control selectpicker" data-live-search="true" id="i_area_unit_id" name="i_area_unit_id" data-parsley-trigger="change focusout">
                                    <option value="" selected disabled>{{__('inventory::inventory.select_area_unit')}}</option>

                                    @foreach ($area_units as $area_unit)

                                    <option value="{{$area_unit['id']}}">{{$area_unit['area_unit']}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <!-- Area From -->
                            <div class="col-4">
                                <label for="area_from">{{__('inventory::inventory.area_from')}} <small class="text-muted"> - {{__('inventory::inventory.optional')}}</small></label>
                                <input name="area_from" id="area_from" type="number" step="0.01" class="form-control" placeholder="{{__('inventory::inventory.enter_area')}}" data-parsley-trigger="change focusout">
                            </div>

                            <!-- Area To -->
                            <div class="col-4">
                                <label for="area_to">{{__('inventory::inventory.area_to')}} <small class="text-muted"> - {{__('inventory::inventory.optional')}}</small></label>
                                <input name="area_to" id="area_to" type="number" step="0.01" class="form-control" placeholder="{{__('inventory::inventory.enter_plot_area')}}" data-parsley-trigger="change focusout">
                            </div>
                            <div class="col-4">
                                <label for="facilities">{{__('inventory::inventory.facilities')}} <small class="text-muted"> - {{__('inventory::inventory.optional')}}</small></label>
                                <select class="form-control selectpicker" id="facilities" name="facilities[]" data-parsley-trigger="change focusout" multiple="multiple">
                                    @foreach ($facilities as $facility)
                                    <option value="{{$facility['id']}}">{{$facility['facility']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="amenities">{{__('inventory::inventory.amenities')}} <small class="text-muted"> - {{__('inventory::inventory.optional')}}</small></label>
                                <select class="form-control selectpicker" id="amenities" name="amenities[]" multiple="multiple">
                                    @foreach ($amenities as $amenity)
                                    <option value="{{$amenity['id']}}">{{$amenity['amenity']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="tags">{{__('inventory::inventory.tags')}} <small class="text-muted"> - {{__('inventory::inventory.optional')}}</small></label>
                                <select class="form-control selectpicker" id="tags" name="tags[]" data-parsley-trigger="change focusout" multiple="multiple">
                                    @foreach ($tags as $tag)
                                    <option value="{{$tag['id']}}">{{$tag['tag']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 repeater-project">
                            <div data-repeater-list="translations">
                                <div data-repeater-item class="row">
                                    <div class="col-6 form-group">
                                        <label for="language_id">{{__('inventory::inventory.language')}}</label>
                                        <select class="form-control" id="language_id" name="language_id" required data-parsley-required data-parsley-required-message="{{__('inventory::inventory.please_select_the_language')}}" data-parsley-trigger="change focusout">
                                            <option value="" selected disabled>{{__('inventory::inventory.language')}}</option>
                                            @foreach ($languages as $language)
                                            <option value="{{$language['id']}}" @if($language['id'] == 1) selected @endif>{{$language['code']}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label for="project">{{__('inventory::inventory.project')}}</label>
                                        <input name="project" id="project" type="text" class="form-control" placeholder="{{__('inventory::inventory.please_enter_the_project')}}" required data-parsley-required data-parsley-required-message="{{__('inventory::inventory.project_is_required')}}" data-parsley-trigger="change focusout" data-parsley-maxlength="150" data-parsley-maxlength-message="{{__('inventory::inventory.project_max_is_150_characters_long')}}">
                                    </div>
                                    <div class="col-6">
                                        <label for="second_title">{{__('inventory::inventory.second_title')}}</label>
                                        <input name="second_title" id="second_title" type="text" class="form-control" placeholder="{{__('inventory::inventory.please_enter_the_second_title')}}" required data-parsley-required data-parsley-required-message="{{__('inventory::inventory.second_title_is_required')}}" data-parsley-trigger="change focusout" data-parsley-maxlength="150" data-parsley-maxlength-message="{{__('inventory::inventory.second_title_max_is_150_characters_long')}}">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="description">{{__('inventory::inventory.description')}} <small class="text-muted"> - {{__('inventory::inventory.optional')}}</small></label>
                                        <textarea name="description" id="description-0" class="description"></textarea>

                                        {{-- <textarea rows="6" name="description" id="description" class="form-control" placeholder="{{__('inventory::inventory.enter_description')}}" data-parsley-maxlength="4294967295" data-parsley-maxlength-message="{{__('inventory::inventory.description_max_is_4294967295_characters_long')}}"></textarea> --}}
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="landing_description">{{__('inventory::inventory.landing_description')}} <small class="text-muted"> - {{__('inventory::inventory.optional')}}</small></label>
                                        <textarea name="landing_description" id="landing_description-0" class="landing_description"></textarea>

                                        {{-- <textarea rows="6" name="description" id="description" class="form-control" placeholder="{{__('inventory::inventory.enter_description')}}" data-parsley-maxlength="4294967295" data-parsley-maxlength-message="{{__('inventory::inventory.description_max_is_4294967295_characters_long')}}"></textarea> --}}
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label for="meta_title">{{__('inventory::inventory.meta_title')}} <small class="text-muted"> - {{__('inventory::inventory.optional')}}</small></label>
                                        <input name="meta_title" id="meta_title" type="text" class="form-control" placeholder="{{__('inventory::inventory.meta_title')}}" data-parsley-trigger="change focusout" data-parsley-maxlength="150" data-parsley-maxlength-message="{{__('inventory::inventory.title_max_is_150_characters_long')}}">
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label for="meta_description">{{__('inventory::inventory.meta_description')}} <small class="text-muted"> - {{__('inventory::inventory.optional')}}</small></label>
                                        <textarea rows="6" name="meta_description" id="meta_description" class="form-control" placeholder="{{__('inventory::inventory.meta_description')}}" data-parsley-trigger="change focusout" data-parsley-maxlength="4294967295" data-parsley-maxlength-message="{{__('inventory::inventory.description_max_is_4294967295_characters_long')}}"></textarea>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        {{-- <label class="control-label">&nbsp;</label> --}}
                                        <a href="javascript:;" data-repeater-delete class="btn btn-brand data-repeater-delete">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:;" data-repeater-create id="repeater_btn_project" class="btn">
                                <i class="fa fa-plus"></i> {{trans('inventory::inventory.project_trans')}}
                            </a>
                        </div>

                    </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <a class="button d-grid  pull-left"  wire:click="firstStepSubmit" href="#">
                                        التالى </a>
                                </div>
                            </div>
                        </section>

                    </div>

                    <div class="row setup-content {{ $currentStep != 2 ? 'd-none' : '' }}" id="step-2">

                        <section id="example-basic-p-0" role="tabpanel" aria-labelledby="example-basic-h-0"
                            class="body current" aria-hidden="false">



                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <a class="button d-grid  pull-left" wire:click="secondStepSubmit" href="#">
                                        التالى </a>
                                    <a class="button  d-grid" href="#" wire:click="back(1)"> السابق </a>
                                </div>
                            </div>
                        </section>

                    </div>
                    <div class="row setup-content {{ $currentStep != 3 ? 'd-none' : '' }}" id="step-3">

                        <section id="example-basic-p-0" role="tabpanel" aria-labelledby="example-basic-h-0"
                            class="body current" aria-hidden="false">
                 {{--  --}}
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <a class="button d-grid  pull-left" wire:click="thirdStepSubmit" href="#">
                                        التالى </a>
                                    <a class="button   d-grid" href="#" wire:click="back(2)"> السابق </a>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="row setup-content {{ $currentStep != 4 ? 'd-none' : '' }}" id="step-4">
                        <section id="example-basic-p-0" role="tabpanel" aria-labelledby="example-basic-h-0"
                            class="body current" aria-hidden="false">
{{--  --}}

                            <div class="card card-statistics mb-30 text-center" >
                                <div class="card-body text-center">
                                    <a class="button d-grid  pull-left" wire:click="forthStepSubmit" href="#">
                                        التالى </a>
                                    <a class="button  d-grid" href="#" wire:click="back(3)"> السابق </a>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="row setup-content {{ $currentStep != 5 ? 'd-none' : '' }}" id="step-5">
                        <section id="example-basic-p-0" role="tabpanel" aria-labelledby="example-basic-h-0"
                            class="body current" aria-hidden="false">
{{--  --}}
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <a class="button d-grid  " wire:click="fiveStepSubmit" href="#">
                                        تاكيد </a>
                                    <a class="button  d-grid" href="#" wire:click="back(4)"> السابق </a>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="row setup-content {{ $currentStep != 6 ? 'd-none' : '' }}" id="step-6">
                        <section id="example-basic-p-0" role="tabpanel" aria-labelledby="example-basic-h-0"
                            class="body current" aria-hidden="false">
{{--  --}}
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <a class="button d-grid  " wire:click="submitForm" href="#">
                                        تاكيد </a>
                                    <a class="button  d-grid" href="#" wire:click="back(5)"> السابق </a>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>


            </div>


        </div>
    </div>



</div>



