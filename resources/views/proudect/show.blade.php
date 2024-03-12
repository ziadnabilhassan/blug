<x-app-layout>
    <div class="container" style="margin-top: 30px">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$proudect->name}}</h5>
          <p class="card-text">{{$proudect->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$proudect->User->name}}</li>
          <li class="list-group-item">{{$proudect->created_at}}</li>
          
        </ul>
        
      </div>
    </div>

</x-app-layout>