@if(Session::has('error'))
<p class="alert alert-danger">{{Session::get('error')}}</p>
@endif
@if(Session::has('success'))
<p class="alert alert-success">{{Session::get('success')}}</p>
@endif
@if(Session::has('comment'))
<p class="alert alert-success">{{Session::get('comment')}}</p>
@endif
<!-- lỗi thêm danh mục -->
@if(isset($errors))
@foreach($errors->all() as $value)
<p class="alert alert-danger">{{$value}}</p>
@endforeach
@endif
