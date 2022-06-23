@include('includes.header')
@include('includes.navbar')
@include('includes.aside')


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            @include('Includes.messages')

            @yield('content')
        </div>
    </div>
</div>

@include('includes.footer')
