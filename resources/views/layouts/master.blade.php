<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <main>
        @include('layouts.header')

        @yield('content')
        
        @include('layouts.footer-web')

        @include('shared.preorder-modal')
        
        @include('shared.filter-modal')
        
        @include('layouts.footer-mobile')
        
        @include('shared.search-bar')
    </main>
    
    @include('layouts.scripts')

</body>

</html>