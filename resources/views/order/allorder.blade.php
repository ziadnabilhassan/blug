<x-app-layout> 
    <div class="container" style="margin-top: 30px">
      <div class="col">
          <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Count</th>
                  <th scope="col">Address</th>
                  <th scope="col">USER</th>
                  <th scope="col">Proudect</th>
                  <th scope="col">Date</th>
                  {{-- <th scope="col">Edit</th>
                  <th scope="col">Show</th>
                  <th scope="col">Delete</th> --}}
  
  
                </tr>
              </thead>
              <tbody>
                  @php
                  $i=1;
                  @endphp
                  @foreach ($orders as $order)
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$order->count}}</td>
                  <td>{{$order->address}}</td>
                  <td>{{$order->User->name}}</td>
                  <td>{{$order->Proudect->name}}</td>
                  <td>{{ $order->created_at }}</td>
                  {{-- <td>
                      <a href="{{route('order.edit',['id'=>$order->id])}}">edit</a>
                  </td>
                  <td>
                      <a href="{{route('order.show',['id'=>$order->id])}}">show</a>
                  </td>
                  <td>
                      <a href="{{route('order.destroy',['id'=>$order->id])}}">destroy</a>
                  </td> --}}
                </tr>

                @endforeach
              </tbody>
            </table>
        </div>
    </div>
  </x-app-layout>