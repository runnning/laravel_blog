<div class="list-group-item">
    <img src="{{$user->gravatar()}}" alt="{{$user->name}}" width="32">
    <a href="{{route('users.show',$user)}}">
        {{$user->name}}
    </a>
    {{-- 删除授权  --}}
    @can('destroy',$user)
        <form action="{{route('users.destroy',$user->id)}}" method="post" class="float-right">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
        </form>
    @endcan
</div>
