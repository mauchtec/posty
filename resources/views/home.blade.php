@extends('layouts.app')
@section('content')
<div class="row">
 
 @if ($data->count())
 @foreach ($data as $data )
 
   <div class="col-sm-3 mt-2">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title">{{$data->sitename}}</h5>
           <p class="card-text">{{$data->suppervisorname}} <br> {{$data->suppervisoremail}} <br> {{$data->suppervisorname}}.</p>
           <a href="#" class="btn btn-primary">Full details...</a>
         </div>
       </div>
     </div>
        
 @endforeach

 @else
 <p>there are no sites</p>
@endif 
</div>
 <script>
    
 </script>
@endsection