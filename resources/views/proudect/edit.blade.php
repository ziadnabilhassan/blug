<x-app-layout>
  <div class="container" style="margin-top: 30px">
        <form action="{{route('proudect.update',['id'=>$proudect->id])}}" method="POST" >
       @csrf
        @if(count($errors)){
            <ul>
                @foreach($errors->all() as $item)
                <li>{{$item}}</li>
                @endforeach
            </ul>
        }
        @endif
        <div class="form-group">
          <label for="exampleFormControlInput1">NAME </label>
          <input type="text" name="name" value="{{$proudect->name}}" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Description </label>
            <input type="text" name="description" value="{{$proudect->description}}" class="form-control" >
          </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
          </div>

      </form>
    </div>
  </div>
</x-app-layout>