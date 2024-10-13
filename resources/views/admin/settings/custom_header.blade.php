@php
    $currentRoute = Route::currentRouteName();
@endphp

<ul class="nav mb-3">
    <li class="nav-item">
        <a class="btn btn-primary me-2 {{ $currentRoute == 'settings.index' ? 'active' : 'not-active' }}" href="{{ route('settings.index') }}" id="pills-home-tab"> {{ __('translation.social_links') }} </a>
    </li>
    <li class="nav-item">
        <a class="btn btn-primary me-2 {{ $currentRoute == 'settings.about' ? 'active' : 'not-active' }}" href="{{ route('settings.about_us') }}" id="pills-profile-tab">  {{ __('translation.about_us') }}  </a>
    </li>

    <li class="nav-item">
        <a class="btn btn-primary me-2 {{ $currentRoute == 'settings.images' ? 'active' : 'not-active' }}" href="{{ route('settings.images') }}" id="pills-profile-tab">  {{ __('translation.images') }}  </a>
    </li>

    <li class="nav-item">
        <a class="btn btn-primary me-2 {{ $currentRoute == 'settings.texts' ? 'active' : 'not-active' }}" href="{{ route('settings.texts') }}" id="pills-profile-tab">  {{ __('translation.texts') }}  </a>
    </li>

</ul>
