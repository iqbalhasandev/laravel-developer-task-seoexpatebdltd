<!DOCTYPE html>
<html lang="en">

<head>
    {{-- meta menager --}}
    <x-meta-menager />
    {{-- css --}}
    <x-styles />
</head>

<body>

    {{ $slot }}
    <footer></footer>

    {{-- Scripts --}}
    <x-scripts />
</body>

</html>
