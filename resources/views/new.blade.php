<x-app-layout>
    <div class="container" style="margin-top: 30px">
        <div class="row">
          <h1>        <a href="{{route('order.index')}}" class="btn btn-success">My Orders</a>  
          </h1>
            @foreach($proudects as $proudect)

            <div class="col-3">
    <div class="card" style="width: 18rem; margin-top:20px">
        <div class="card-body">
          <h5 class="card-title">{{$proudect->name}}</h5>
          <p class="card-text">{{$proudect->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$proudect->User->name}}</li>
          <li class="list-group-item">{{$proudect->created_at}}</li>
          <li class="list-group-item"><center><a class="btn btn-success"  href="{{route('order.create',[$proudect->id])}}">Buy Now</a></center> 
          </li>
          
        </ul>
      </div>
            </div>

      @endforeach
     
            </div>

    </div>
</x-app-layout>