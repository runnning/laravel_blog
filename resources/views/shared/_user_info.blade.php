<a href="{{route('users.show',$user->id)}}"></a>
<img src="{{$user->gravatar('140')}}" alt="{{$user->name}}" class="gravatar">
<h1>{{$user->name}}</h1>
