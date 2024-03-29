{{-- <div class="dev-card">
    <div class="dev-logo">
        <a href="{{ route('front.developers.show', ['id' => $developer->id, 'slug' => $developer->slug]) }}"
            class="stretched-link">
            @forelse($developer->attachments as $attachment)
                @if ($loop->index == 0)
                    <img src="{{ file_exists(public_path('/storage/dimensions/uploads/' . $attachment->file_name_without_extension . '_125x125' . '.' . $attachment->extension)) ? asset('storage/dimensions/uploads/' . $attachment->file_name_without_extension . '_125x125' . '.' . $attachment->extension) : $attachment->url }}"
                        alt="{{ $attachment->file_name }}">
                @break
            @endif
        @empty
            <img src="{{ URL::asset('front/img/logo_1.png') }}" alt="placeholder">
        @endforelse
    </a>
</div>
<div class="title my-2">
    <h4 class='text-capitalize'>
        <a href="{{ route('front.developers.show', ['id' => $developer->id, 'slug' => $developer->slug]) }}"
            title="{{ $developer->developer }}">{{ $developer->developer }}</a>
    </h4>
</div>
</div> --}}

<a href="{{ route('front.developers.show', ['id' => $developer->id, 'slug' => $developer->slug]) }}"
    title="{{ $developer->developer }}" class="our-developers">
    @forelse($developer->attachments as $attachment)
    @if ($loop->index == 0)
        <img src="{{ file_exists(public_path('/storage/dimensions/uploads/' . $attachment->file_name_without_extension . '_125x125' . '.' . $attachment->extension)) ? asset('storage/dimensions/uploads/' . $attachment->file_name_without_extension . '_125x125' . '.' . $attachment->extension) : $attachment->url }}"
            alt="{{ $attachment->file_name }}">
    @break
@endif
@empty
<img src="{{ URL::asset('front/img/logo_1.png') }}" alt="placeholder">
@endforelse

<div class="developers-content">
        <h3 class="name">{{ $developer->developer }}</h3>
        {{-- <span class="post">Emaar Developments</span> --}}
    </div> <!-- close developers-content -->
</a>

