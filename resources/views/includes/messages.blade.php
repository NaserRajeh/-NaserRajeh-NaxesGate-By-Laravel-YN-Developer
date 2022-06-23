@if ($errors->any())
    @foreach ($errors->all() as $errorMessage)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p class="mb-0">
                {{$errorMessage}}
            </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endforeach
@endif

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p class="mb-0">
            {{session()->get('success')}}
        </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p class="mb-0">
            {{session()->get('error')}}
        </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

