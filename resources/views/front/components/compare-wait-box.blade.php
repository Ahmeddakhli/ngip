<div class='slide wait-active' id="compare-wait-box-{{$unit->id}}" compare-id="{{$unit->id}}">
    @forelse($unit->unit->attachments as $attachment)
        @if($loop->index == 0)
            <div class="img">
                <a href="{{route('front.singleUnit', ['id' => $unit->unit->id, 'title' => str_slug($unit->unit->default_title)])}}">
                <img src="{{file_exists(public_path('/storage/dimensionals/uploads/'.$attachment->file_name_without_extension.'_370x300'.'.'.$attachment->extension)) ? asset('storage/dimensionals/uploads/'.$attachment->file_name_without_extension.'_370x300'.'.'.$attachment->extension) : $attachment->url}}" alt="{{$attachment->file_name}}">
                </a>
            </div>
            @break
        @endif
    @empty
        <div class="img">
            <a href="{{route('front.singleUnit', ['id' => $unit->unit->id, 'title' => str_slug($unit->unit->default_title)])}}">
                <img src="{{URL::asset('front/img/logo_1.png')}}" alt="{{$unit->unit->title}}">
            </a>
        </div>
    @endforelse

    @if ($unit->unit->bedroom || $unit->unit->bathroom || $unit->unit->area || $unit->unit->price)
        <div class="unit-brief">
            <h5 class='unit-title'>
                <a href="{{route('front.singleUnit', ['id' => $unit->unit->id, 'title' => str_slug($unit->unit->default_title)])}}">
                    {{$unit->unit->purpose_type}}
                </a>
            </h5>
            <div class="features">
                <ul class="d-flex">
                    @if($unit->unit->bedroom)
                        <li>
                            <svg viewBox="0 0 512 512">
                                <g>
                                    <path d="m482.09 235v-190h-30v33.906h-392.18v-33.906h-30v190h-29.91v232h30v-45.906h452v45.906h30v-232zm-.09 30v30h-452v-30zm-211-63.047c0-8.271 6.729-15 15-15h91.09c8.271 0 15 6.729 15 15v33.047h-121.09zm-30 33.047h-121.09v-33.047c0-8.271 6.729-15 15-15h91.09c8.271 0 15 6.729 15 15zm-181.09-126.094h392.18v126.094h-30v-33.047c0-24.813-20.187-45-45-45h-91.09c-11.517 0-22.032 4.353-30 11.495-7.968-7.141-18.483-11.495-30-11.495h-91.09c-24.813 0-45 20.187-45 45v33.047h-30zm-29.91 216.094h452v66.094h-452z" />
                                </g>
                            </svg>
                            <span>{{$unit->unit->bedroom}}</span>
                        </li>
                    @endif
                    @if($unit->unit->bathroom)
                        <li>
                            <svg viewBox="0 0 512 512">
                                <g>
                                    <path d="m30 346c0 59.101 37.62 109.509 90 128.221v37.779h30v-30.844c4.927.551 9.93.844 15 .844h182c5.07 0 10.073-.293 15-.844v30.844h30v-37.779c52.38-18.712 90-69.12 90-128.221 0-8.271 6.729-15 15-15h15v-30h-60v-30h30v-30h-30v-166c0-41.355-33.645-75-75-75s-75 33.645-75 75v16h-30v30h90v-30h-30v-16c0-24.813 20.187-45 45-45s45 20.187 45 45v226h-422v30h15c8.271 0 15 6.729 15 15zm422 0c0 58.448-47.103 106-105 106h-182c-57.897 0-105-47.552-105-106 0-5.258-.915-10.305-2.58-15h92.58v91h152v-91.01h152.58c-1.665 4.705-2.58 9.752-2.58 15.01zm-272-15h92v61h-92z" />
                                    <path d="m332 151h30v30h-30z" />
                                    <path d="m272 151h30v30h-30z" />
                                    <path d="m302 211h30v30h-30z" />
                                    <path d="m242 211h30v30h-30z" />
                                    <path d="m362 211h30v30h-30z" />
                                </g>
                            </svg>
                            <span>{{$unit->unit->bathroom}}</span>
                        </li>
                    @endif
                    @if($unit->unit->area)
                        <li>
                            @if ($unit->unit->area_unit == 'm2')
                                <svg viewBox="0 0 512 512.001">
                                    <path d="m497.355469 401.644531c19.496093 19.496094 19.496093 51.214844 0 70.710938-.027344.03125-.058594.058593-.089844.089843l-34.210937 33.785157c-3.898438 3.847656-8.976563 5.769531-14.050782 5.769531-5.164062 0-10.320312-1.984375-14.234375-5.945312-7.757812-7.859376-7.679687-20.523438.179688-28.285157l20.015625-19.769531h-320.964844c-44.113281 0-80-35.886719-80-80v-321.449219l-19.953125 19.6875c-7.863281 7.757813-20.527344 7.671875-28.285156-.191406-7.757813-7.863281-7.671875-20.527344.191406-28.285156l33.789063-33.332031c19.441406-19.179688 51.074218-19.179688 70.515624 0l33.789063 33.332031c7.863281 7.757812 7.949219 20.421875.191406 28.285156-3.914062 3.964844-9.074219 5.953125-14.238281 5.953125-5.074219 0-10.148438-1.917969-14.046875-5.761719l-21.953125-21.660156v323.421875c0 22.054688 17.945312 40 40 40h322.992188l-22.042969-21.769531c-7.859375-7.761719-7.941407-20.425781-.179688-28.285157 7.761719-7.855468 20.425781-7.9375 28.285157-.175781l34.210937 33.785157c.03125.03125.0625.058593.089844.089843zm-45.355469-401.644531h-259c-11.074219 0-20.039062 9-20 20.074219.042969 11.015625 8.984375 19.925781 20 19.925781h259c11.046875 0 20 8.953125 20 20v260c0 11.015625 8.910156 19.960938 19.925781 20 11.074219.039062 20.074219-8.925781 20.074219-20v-260c0-33.136719-26.863281-60-60-60zm-158 342.890625c11.046875 0 20-8.953125 20-20v-89.015625c0-30.328125-24.671875-55-55-55-13.285156 0-25.484375 4.734375-35 12.605469-9.515625-7.871094-21.714844-12.605469-35-12.605469-7.628906 0-14.902344 1.566406-21.511719 4.386719-3.558593-3.257813-8.285156-5.261719-13.488281-5.261719-11.046875 0-20 8.953125-20 20v125c0 11.046875 8.953125 20 20 20s20-8.953125 20-20v-89.125c0-8.269531 6.730469-15 15-15s15 6.730469 15 15v89.125c0 11.046875 8.953125 20 20 20s20-8.953125 20-20v-89.125c0-8.269531 6.730469-15 15-15s15 6.730469 15 15v89.015625c0 11.046875 8.953125 20 20 20zm90.75-234.890625c-.105469 0-.207031.015625-.3125.015625-.101562 0-.203125-.015625-.308594-.015625-25.433594 0-46.128906 20.71875-46.128906 46.183594 0 11.042968 8.953125 20 20 20s20-8.957032 20-20c0-3.351563 2.808594-6.183594 6.128906-6.183594.105469 0 .207032-.015625.3125-.015625.101563 0 .203125.015625.308594.015625 3.183594 0 5.894531 2.601562 6.113281 5.769531-.394531 1.464844-3.460937 10.523438-22.625 31.605469-11.886719 13.070312-23.566406 23.714844-23.679687 23.816406-6.121094 5.554688-8.191406 14.304688-5.214844 22.011719 2.976562 7.710937 10.390625 12.796875 18.65625 12.796875h54c11.046875 0 20-8.953125 20-20s-8.953125-20-20-20h-6.878906c17.757812-20.90625 25.757812-36.464844 25.757812-49.816406 0-25.464844-20.695312-46.183594-46.128906-46.183594zm0 0" />
                                </svg>
                            @endif
                            <span>{{$unit->unit->area}}<sup>{{$unit->unit->area_unit}}</sup></span>
                        </li>
                    @endif
                </ul>
            </div>
            <!-- ./ features -->
            @if ($unit->unit->price)
                <div class="price-box">
                    <h5 class="price">
                        {{__('inventory::inventory.price')}}
                        <a href='{{route('front.singleUnit', ['id' => $unit->unit->id, 'title' => str_slug($unit->unit->default_title)])}}'>
                            {{$unit->unit->price}}
                        </a>
                    </h5>
                </div>
            @endif
        </div> <!-- ./ unit-brief -->
    @endif

    <div class="add-btn" id="compare-div-{{$unit->unit->id}}">
        <a href="#" class="add up-to-compare" id="{{$unit->id}}" compare-id="{{$unit->id}}">
            <svg fill="#E0A436" viewBox="0 0 11 9">
                <title>{{__('main.add_to_compare')}}</title>
                <g stroke="none" transform="translate(-3.000000, -4.000000)">
                    <g transform="translate(3.000000, 4.500000)">
                        <polygon points="0 1.18461536 9.05384614 1.18461536 9.05384614 0 0 0"></polygon>
                        <polygon points="0 6.26153844 4.52692307 6.26153844 4.52692307 5.07692308 0 5.07692308">
                        </polygon>
                        <polygon points="5.92307692 6.26153844 11 6.26153844 11 5.07692308 5.92307692 5.07692308">
                        </polygon>
                        <polygon transform="translate(8.461538, 5.669231) rotate(-270.000000) translate(-8.461538, -5.669231) " points="5.92307692 6.26153844 11 6.26153844 11 5.07692308 5.92307692 5.07692308">
                        </polygon>
                        <polygon points="0 3.7230769 6.76923077 3.7230769 6.76923077 2.53846154 0 2.53846154">
                        </polygon>
                    </g>
                </g>
            </svg>
        </a>
    </div>
</div>
