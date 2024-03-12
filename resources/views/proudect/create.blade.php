<x-app-layout>
  <div class="container" style="margin-top: 30px">
    <form action="{{route('proudect.store')}}" method="POST" enctype="multipart/form-data" >
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
           <label for="exampleFormControlInput1">Name </label>
           <input type="text" name="name" class="form-control" >
         </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">description</label>
           <textarea class="form-control" name="description" rows="3"></textarea>
         </div>
         <div class="form-group">
             <button type="submit" class="btn btn-success">Save</button>
           </div>
 
       </form>
  </div>
</x-app-layout>