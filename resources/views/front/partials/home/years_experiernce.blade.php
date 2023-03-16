{{-- <section class="section numbers-holder">
    <div class="container">
      <div class="row py-5" data-aos="fade">
        @if($setting->years_experience ||  $setting->happy_clients ||  $setting->projects_completed || $setting->commitment)
        <div class="col-lg-6">
          <div class="stats">
            @if($setting->years_experience)
            <div class="stats__block">
              <div style="--delay: 0s">
                <span class='stats__num numscroller' data-suffix="+" data-min='1' data-max='{{$setting->years_experience}}' data-delay='5'
                  data-increment='10'> {{$setting->years_experience}}</span>
                <h3 class="stats__title">{{__("main.years_of_experience")}}</h3>
                <svg class="stats__icon" width="35" viewBox="0 0 36 36">
                  <path fill="#ef5777"
                    d="m34.486 13.86l-.432-.432a3.17 3.17 0 0 0-.563-3.563a3.011 3.011 0 0 0-2.326-.87A3.438 3.438 0 0 0 30 9.272V2H2v32h28V17.82l3.09-3.09l.264.263a.371.371 0 0 1 0 .525l-2.353 2.354a.8.8 0 0 0 1.131 1.132l2.354-2.354a1.974 1.974 0 0 0 0-2.79ZM8 8.2h16.002v1.6H8Zm0 4h16.002v1.6H8Zm0 4h10.5v1.6H8Zm14.791 13.696h-7.803c-.902 0-1.746-.086-2.194-.824c-.459-.755-.003-1.632.33-2.274c.059-.113-.072-.253-.222-.098c-.44.452-1.14 1.266-1.703 1.92c-.595.692-.831.963-.957 1.077a.92.92 0 0 1-1.106.224a.869.869 0 0 1-.407-.969c.042-.25.756-3.032 1.403-5.533c-.86 1.527-3.59 6.1-3.718 6.315a.7.7 0 0 1-1.203-.718c.035-.057 3.455-5.788 3.886-6.62a1.425 1.425 0 0 1 1.776-.793a1.315 1.315 0 0 1 .755 1.626c-.36 1.388-.727 2.812-1.01 3.92c.457-.528.935-1.07 1.28-1.425a1.899 1.899 0 0 1 2.24-.517a1.183 1.183 0 0 1 .616 1.32a4.557 4.557 0 0 1-.388.916c-.267.555-.14 1.052.622 1.052h7.803a.7.7 0 0 1 0 1.4Zm-2.08-5.05l-2.604.687a.218.218 0 0 1-.216-.058a.215.215 0 0 1-.059-.216l.664-2.599l6.59-6.59l2.2 2.2Zm11.466-11.467l-3.76 3.76l-2.2-2.2l3.76-3.76a1.949 1.949 0 0 1 1.27-.586l.09-.003a1.423 1.423 0 0 1 1.022.407a1.7 1.7 0 0 1-.182 2.382Z" />
                </svg>
              </div>
            </div>
            @endif
            @if($setting->happy_clients)
            <div class="stats__block">
              <div style="--delay:.3s">
                <span class='stats__num numscroller' data-suffix="+" data-min='1' data-max='{{$setting->happy_clients}}' data-delay='5'
                  data-increment='20'> {{$setting->happy_clients}}</span>
                <h3 class="stats__title">{{__("settings::settings.happy_clients")}}</h3>
                <svg class="stats__icon" width="35" viewBox="0 0 100 100">
                  <path fill="#0fbcf9"
                    d="M49.947 0C22.354.03 0 22.406 0 50a50 50 0 0 0 20.404 40.21c-.265-2.031-.213-4.128.117-6.202a45.22 45.22 0 0 1-8.511-9.877h12.445c1.182-1.845 2.4-3.67 4.525-5c-1.245-5.1-2.006-10.716-2.146-16.631h1.346a18.653 18.653 0 0 1 1.93-5h-3.243c.212-5.935 1.043-11.554 2.363-16.63H47.5v8.888a13.75 13.75 0 0 1 5 1.804V30.87h19.195c.26.997.495 2.02.715 3.057a19.769 19.769 0 0 1 5.084-.117a76.416 76.416 0 0 0-.639-2.94h13.89a44.747 44.747 0 0 1 3.965 14.028c.58 5.049.591 10.975-1.246 16.771a45.007 45.007 0 0 1-2.286 6.478c1.128 1.187 2.494 2.309 3.867 3.454A50 50 0 0 0 100 50c0-27.614-22.386-50-50-50ZM52.5 5.682c5.268.896 10.302 5.236 14.268 12.437c1.278 2.321 2.42 4.927 3.408 7.75H52.5Zm-5 .197v19.99H30.75c.988-2.823 2.13-5.429 3.408-7.75C37.89 11.341 42.571 7.102 47.5 5.88ZM35.98 7.232c-2.324 2.352-4.41 5.22-6.203 8.475c-1.68 3.05-3.125 6.467-4.312 10.162H12.01c5.535-8.706 13.975-15.37 23.97-18.637Zm29.41.463c9.398 3.413 17.32 9.868 22.6 18.174H75.455c-1.184-3.695-2.627-7.112-4.307-10.162c-1.676-3.045-3.613-5.749-5.757-8.012ZM9.257 30.87h14.808c-1.245 5.162-2.008 10.76-2.203 16.631H5.072a44.79 44.79 0 0 1 4.184-16.63ZM5.072 52.5h16.762c.129 5.856.82 11.454 1.994 16.63H9.256A44.79 44.79 0 0 1 5.072 52.5Z" />
                  <path fill="#0fbcf9"
                    d="M76 37.769c-8.285 0-15 6.716-15 15c0 8.284 6.715 15 15 15c8.283 0 15-6.716 15-15c0-8.284-6.717-15-15-15zm0 32.223c-16.57 0-24 7.431-24 24v2c.075 3.94 1.817 4.056 5.5 4h37c4.695-.004 5.532.005 5.5-4v-2c0-16.569-7.432-24-24-24zM44 43.39c-6.787 0-12.291 5.504-12.291 12.292c0 6.787 5.504 12.289 12.291 12.289c6.787 0 12.29-5.502 12.29-12.29c0-6.787-5.503-12.29-12.29-12.29zm0 26.401c-13.575 0-19.664 6.09-19.664 19.664v1.639c.062 3.228 1.489 3.323 4.506 3.277h19.123c-.488-8.088 1.901-16.678 7.851-22.139c-3.012-1.646-6.925-2.441-11.816-2.441z" />
                </svg>
              </div>
            </div>
            @endif
            @if($setting->projects_completed)
            <div class="stats__block">
              <div style="--delay:.6s">
                <span class='stats__num numscroller' data-suffix="+" data-min='1' data-max='{{$setting->projects_completed}}' data-delay='5'
                  data-increment='10'>{{$setting->projects_completed}}</span>
                <h3 class="stats__title">{{__("settings::settings.projects_completed")}}</h3>
                <svg class="stats__icon" width="40" viewBox="0 0 36 36">
                  <path fill="#0fb9b1"
                    d="M17.88 3H6.12A2.12 2.12 0 0 0 4 5.12V33h5v-3h6v3h5V14.64a3.67 3.67 0 0 1-1-4.76l1-1.65V5.12A2.12 2.12 0 0 0 17.88 3ZM9 25H7v-2h2Zm0-5H7v-2h2Zm0-5H7v-2h2Zm0-5H7V8h2Zm4 15h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2V8h2Zm4 15h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2V8h2Z" />
                  <path fill="#0fb9b1"
                    d="M22.23 15.4H22V33h11V15.4ZM26 25h-2v-2h2Zm0-5h-2v-2h2Zm4 5h-2v-2h2Zm0-5h-2v-2h2Z" />
                  <path fill="#FCB860"
                    d="M26.85 1.14L21.13 11a1.28 1.28 0 0 0 1.1 2h11.45a1.28 1.28 0 0 0 1.1-2l-5.72-9.86a1.28 1.28 0 0 0-2.21 0Z" />
                  <path fill="none" d="M0 0h36v36H0z" />
                </svg>
              </div>
            </div>
            @endif
            @if($setting->commitment)
            <div class="stats__block">
              <div style="--delay:.9s">
                <span class='stats__num numscroller' data-suffix="%" data-min='1' data-max='{{$setting->commitment}}' data-delay='5'
                  data-increment='10'>{{$setting->commitment}}</span>
                <h3 class="stats__title">{{__("settings::settings.commitment")}}</h3>
                <svg class="stats__icon" width="50" viewBox="0 0 64 64">
                  <path fill="#FED5A7"
                    d="m56.3 33.4l-1.2-18.1l-8.3 5.1c-4.1-.7-5.2-.7-8.4-2.3c-1.9-.9-4.3-.3-5.5.4c-1.8-1.9-13.5.9-14.8 1.5c-3.5-1-8.7-5.1-8.7-5.1L7.7 35.4l2.3.6c.2.7.8 2.4.8 2.4c-2.2 2.8.4 6.1 2.9 5c-1.1 2.8 1.8 5.4 4.1 3.6c-.3 2.6 2.4 4.5 4.4 2.7c-.9 3.1 2.6 5.4 4.7 2.9c1.5 1 2.9 1.8 4.1 2.2c2.1.9 4.4-1.1 4-3.6c2.4 2.8 6 .1 5.2-3c2.7 2.1 6-1.4 4.3-4.5c3 1.7 5.6-2.9 2.7-5.9l9.1-4.4" />
                  <g fill="#F7AD77">
                    <path
                      d="M13.9 36.3c1.5.7 2.5 3 .9 5l-.7.8c-.8 1-1.6 1.3-2.4 1.3c.6.3 1.3.3 2 0c.1-.3.3-.7.6-1l.7-.8c.4-.5.9-.9 1.3-1.1c.8-2.1-.6-4.1-2.4-4.2m11.5 9.9c1.6.4 2.8 2.5 1.6 4.8l-.6.9c-.6 1.1-1.4 1.6-2.2 1.7c1.1.3 2.3-.1 3.1-1.6l.6-.9c1.4-2.8-.5-5.1-2.5-4.9m-7.1-.8l1.6-2.5c-.1-1.4-1.3-2.6-2.5-2.7c1.5.7 2.5 3 .9 5l-.7.8c-.8 1-1.6 1.3-2.5 1.3c.8.4 1.7.3 2.6-.3c.1-.5.3-1.1.6-1.6m4.3-4.5c1.6.5 2.7 2.7 1.3 4.9l-1.9 3c-.7 1.1-1.5 1.5-2.3 1.5c1 .3 2.3 0 3.2-1.4l1.9-3c1.6-2.6-.2-5.1-2.2-5m13.3 2.5c.1 0 1.3-.2 1.7-.2c-1.5-1.5-3.9-.3-5.3-1.1c1 1.7 3.1 1.3 3.3 1.3l2.4 3.1c2 2.5.4 5.4-1.7 5.7c2.2.7 4.4-1.6 3.7-4.1c-.1-.1-4.1-4.7-4.1-4.7m2.4-5.8s1.5-.3 2.8-.3c-1.5-1.2-3.8-.1-5.3-1.1c.6 1.3 1.9 1.3 2.3 1.3l4.6 5.3c2.1 2.4.6 5.3-1.5 5.8c2.4.7 4.7-2.4 3.2-5.1c-1-.3-6.1-5.9-6.1-5.9" />
                    <path
                      d="M35.1 49.1c-1.5-1.2-3.6-.3-4.5-.9c.5 1.4 2.4 1.1 2.5 1.1c1.7 2.6-.1 5.3-2.2 5.5c2.1.9 4.4-1.1 4-3.6c-.1-.1-1.5-1.9-1.5-1.9c.2-.1 1.3-.2 1.7-.2m20.1-17.4s-1.7 3.5-8.3 5.4c-.9-1.1-2.8-3.3-5-5.2c1.4-.3 2.1-1.4 3.2-1.6c-.4-.4-1.8-.2-2.9.2c-2 .7-6.6-2.5-6.6-2.5l-3.8.5c-2.7 2.6-8.5 4-8.8 0c-.2-2.8 5.9-4.7 7.8-6.5c2.4-2.3 4.5-5.2 8.4-3.2c3.2 1.6 4.5 1.5 8.9 2.3c1.5.3 2.5 1 3.6 2.5c-.9-2.1-2.2-3-3.8-3.3l7-3.3l.1-1.7l-8.3 4.7c-3.8-.6-5.2-.6-8.3-2.1c-2-1-3.6-.7-4.9.1c-2.4-1.4-3.8-1.1-4.7-.9c-2.8.9-7.3 1-11.3 2.6c.7.2 1.4.4 1.9.4c3.9-1.2 8-1.1 9.9-1.8c.6-.2 1.8-.2 3.1.5c-.8.7-1.5 1.5-2.3 2.3c-1.9 1.8-7.7 4.4-7.3 7.7c.2 1.6 2.4 5.8 9.7 1.1l3.1-.4s5.7 2.7 11 8.9c2.1 2.4.8 5-1.3 5.6c2.7.5 5-3.3 2.4-5.9l6.3-3.4l1.2-3" />
                  </g>
                  <path fill="#68B2FD" d="m53.4 16.3l3.3 17.1l-2.7 1.2c-1.4-3.7-3.5-12.6-3-16.9l2.4-1.4" />
                  <path fill="#b58360"
                    d="M11.1 38c-.5-1.2-.8-2.8-.8-2.8l-2.5-1.7l-.2 1.9l2.2.6c.3 1 .6 1.8 1 2.4l.3-.4" />
                  <path fill="#68B2FD" d="m6.1 35.1l5.4-18.7l2.5 1.7c.4 2.8-4.2 15.6-5.9 17.5l-2-.5" />
                  <path fill="#68B2FD"
                    d="M53.3 16.2c-.8.5 2.1 17.8 3.3 17.3c3.8-1.7 5.5-2.2 5.5-2.2V10.7c-.1 0-2.4 1.7-8.8 5.5M2 9v25.5s1.8.3 4.1.8c1.3.3 6-18.5 5.7-18.8C8.4 14.2 2 9 2 9" />
                </svg>
              </div>
            </div>
            @endif
          </div>
        </div>
        @endif
        <div class="col-lg-6 d-none d-lg-block">
          <div class="stats-text">
            @if($setting->years_experience)
            <div class="section-title">
              <h2 class="title">+   {{$setting->years_experience}}
                <span>{{__("main.years_of_experience")}}</span></h2>
            </div>
            @endif

          </div>
          <!-- /.text -->
        </div>
      </div>
    </div>
  </section> --}}



  <div class="progress wow fadeIn" data-wow-duration="1s" data-wow-offset="150">
    <div class="container">
      <div class="our-progress">
        <div class="box">
          <i class="fas fa-award"></i>
          <span class="numscroller" data-min="1" data-max="{{$setting->commitment}}" data-delay="35" data-increment="10">>{{$setting->commitment}}</span>
          <h3>{{__("settings::settings.commitment")}}</h3>
        </div>
        <div class="box">
          <i class="fas fa-user-tie"></i>
          <span class="numscroller" data-min="1" data-max="{{$setting->happy_clients}}" data-delay="35" data-increment="10">>{{$setting->happy_clients}}</span>
          <h3>{{__("settings::settings.happy_clients")}}</h3>
        </div>
        <div class="box">
          <i class="fas fa-layer-group"></i>
          <span class="numscroller" data-min="1" data-max=" {{$setting->years_experience}}" data-delay="15" data-increment="10">> {{$setting->years_experience}}</span>
          <h3>{{__("main.years_of_experience")}}</h3>
        </div>
        <div class="box">
          <i class="fas fa-project-diagram"></i>
          <span class="numscroller" data-min="1" data-max="{{$setting->projects_completed}}" data-delay="35" data-increment="10">>{{$setting->projects_completed}}</span>
          <h3>{{__("settings::settings.projects_completed")}}</h3>
        </div>
      </div>
    </div>
  </div>
