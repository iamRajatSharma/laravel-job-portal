@if (Session::has('success'))
    <div class="alert alert-success">
        <b>{{ Session::get('success') }}</b>
    </div>
@endif
