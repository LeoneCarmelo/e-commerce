@if ($errors->any())
<div class="alert alert-danger alert-error position-absolute mt-4 w-50 mx-auto" role="alert">
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
