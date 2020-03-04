
@if(Session::get('message'))
    <div class="alert bg-primary fade in">
        <a href="#" class="close" data-dismiss="alert">×</a>
        {{ Session::get('message')}}
    </div>
@endif
