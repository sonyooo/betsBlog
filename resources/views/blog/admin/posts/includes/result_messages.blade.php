@if($errors->any())
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-danger" role="alert">
                <button type="button" class="btn-close btn-close-white" disabled aria-label="Close"></button>
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
@if(session('success'))
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-success" role="alert">
                <button type="button" class="btn-close btn-close-white" disabled aria-label="Close"></button>
                {{ session()->get('success') }}
            </div>
        </div>
    </div>
@endif
