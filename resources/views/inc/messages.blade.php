@if(count($errors)>0)
    @foreach($errors as $error)
    <div class="text-danger">{{$error}}
    </div>
    @endforeach
@endif

@if (session('success'))
<div class="text-success">
    {{session('success')}}
</div>
@endif

@if (session('error'))
<div class="text-danger">
    {{session('error')}}
</div>
@endif