<form action="{{route('users.update',$user->id)}}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" value="{{$user->name}}"><br>
    <label for="email">Email</label>
    <input type="text" name="email" value="{{$user->email}}"><br>
    <label for="password">Password</label>
    <input type="password" name="password"><br>
    <input type="submit" value="Edit">
</form>