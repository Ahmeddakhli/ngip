  <div class="our-services" id="srevices">
      <!-- open our-services -->
      <div class="container">
          <!-- open container -->
          <h2 class="capitalize">{{ __('main.our_services') }}</h2>
          <div class="flex-box">
              <!-- open flex-box -->
              @foreach ($services as $service)
                  <div class="services wow heartBeat" data-wow-duration="1.5s" data-wow-offset="300">
                      <!-- open services -->
                      <div class="icon"><i class="{{ $service->icon }}"></i></div>
                      <p>
                          {!! $service->description !!}
                      </p>
                      <!-- <a href="#">Consultant Service &rarr;</a> -->
                  </div>
              @endforeach
              <!-- close services -->
          </div>
          <!-- close flex-box -->
      </div>
      <!-- close container -->
  </div>
