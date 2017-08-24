@if(count($errors))
<div class="alert alert-danger">
    <button class="close" data-dismiss="alert" type="button">
        <span>
            ×
        </span>
    </button>
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif
