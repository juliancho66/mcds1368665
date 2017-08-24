@if(Session::has('info'))
<div class="alert alert-info">
    <button class="close" data-dismiss="alert" type="button">
        ×
    </button>
    {{ Session::get('info') }}
</div>
@endif
