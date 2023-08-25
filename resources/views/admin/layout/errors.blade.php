@if ( Session::has('error') )
    <div class="card-body">
        <div
            class="alert-big alert alert-danger alert-dismissible fade show"
            role="alert"
        >
            <div class="alert-content">
                <h6 class="alert-heading">Lỗi</h6>

                    <p>
                        {{ Session::get('error') }}
                    </p>

                <button
                    type="button"
                    class="btn-close text-capitalize"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                >
                    <img
                        src="{{url('admin/img/svg/x.svg')}}"
                        alt="x"
                        class="svg"
                        aria-hidden="true"
                    />
                </button>
            </div>
        </div>
    </div>

    <div class="alert alert-danger alert-dismissible" role="alert">

        <strong>{{ Session::get('error') }}</strong>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>


    </div>

@endif

@if ($errors->any())
    <div class="card-body">
        <div
            class="alert-big alert alert-danger alert-dismissible fade show"
            role="alert"
        >
            <div class="alert-content">
                <h6 class="alert-heading">Lỗi</h6>
                @foreach ($errors->all() as $error)
                <p>
                    {{ $error }}
                </p>
                @endforeach
                <button
                    type="button"
                    class="btn-close text-capitalize"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                >
                    <img
                        src="{{url('admin/img/svg/x.svg')}}"
                        alt="x"
                        class="svg"
                        aria-hidden="true"
                    />
                </button>
            </div>
        </div>
    </div>


@endif
