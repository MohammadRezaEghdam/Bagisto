@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif(session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
@elseif(session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
@endif
