@php
    if (! isset($photo)) {
        $slugPhotoPath = 'media/leadership/' . Str::of($name)->slug() . '.jpg';

        if (File::exists(public_path($slugPhotoPath))) {
            $photo = asset($slugPhotoPath);
        } else {
            $photo = 'https://www.placecage.com/c/500/501';
        }
    }
@endphp

<li>
    <div class="space-y-4">
        <div class="mx-auto h-20 w-20 rounded-full overflow-hidden lg:w-24 lg:h-24">
            <img
                class="h-full w-full object-cover"
                src="{{ $photo }}"
                alt="{{ $name }}"
            />
        </div>
        <div class="space-y-2">
            <div class="text-xs font-medium lg:text-sm">
                <h3>{{ $name }}</h3>
                <p class="text-indigo-600">{!! $title !!}</p>
            </div>
        </div>
    </div>
</li>
