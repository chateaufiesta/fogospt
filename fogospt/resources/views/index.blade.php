<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('includes.head')
    @include('includes.meta')
</head>
<body>

@include('includes.navbar')

<main role="main" class="mb-auto">
    @include('includes.sidebar')
    <div id="map"></div>
</main>

@include('includes.scripts')

</body>
</html>

