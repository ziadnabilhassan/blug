<x-app-layout> 
  <div class="container" style="margin-top: 30px">
    <div class="col">
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NAME</th>
                <th scope="col">Description</th>
                <th scope="col">USER_ID</th>
                <th scope="col">USER</th>
                <th scope="col">Date</th>
                <th scope="col">Edit</th>
                <th scope="col">Show</th>
                <th scope="col">Delete</th>


              </tr>
            </thead>
            <tbody>
                @php
                $i=1;
                @endphp
                @foreach ($proudects as $proudect)
              <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$proudect->name}}</td>
                <td>{{$proudect->description}}</td>
                <td>{{$proudect->user_id}}</td>
                <td>{{$proudect->User->name}}</td>
                <td>{{ $proudect->created_at }}</td>
                <td>
                    <a href="{{route('proudect.edit',['id'=>$proudect->id])}}">edit</a>
                </td>
                <td>
                    <a href="{{route('proudect.show',['id'=>$proudect->id])}}">show</a>
                </td>
                <td>
                    <a href="{{route('proudect.destroy',['id'=>$proudect->id])}}">destroy</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
  </div>
</x-app-layout>