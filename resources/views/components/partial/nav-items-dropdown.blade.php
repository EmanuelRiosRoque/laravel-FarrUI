
@props(['name' => 'Options'])

<details>
    <summary>{{ $name }}</summary>
    <ul class="bg-base-100 rounded-t-none p-2 z-20">
        {{ $slot }}
    </ul>
</details>
