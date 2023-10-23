
<!-- @include('layouts.separate.header') -->
@include('layouts.separate.navbar')
<div class="isi">
@include('layouts.separate.sidebar')
@yield('content')

</div>
<style>
    .isi {
        display: flex;
    }
</style>
