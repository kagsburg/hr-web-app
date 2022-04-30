<h1>Login</h1>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
<form action="/login" method="post" >
@csrf
<input type="text" name = "user">
<input type ="password" name = "password">
<button type="submit">Login</button>


</form>