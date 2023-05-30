@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="{{route('products.index')}}">Product Page</a>
                  
               
                 
                   
                  
                
                </div>
            </div>
        </div>
    </div>
</div>
{{-- 3DMp5MVC0VtrFkPbr7iiHHjSFjXlQaeT6jdAi8xh --}}


<button id="addButton">Add Input Group</button>
<form action="{{route('stocks.store')}}" method="post" >
    @csrf
<center><div id="container">
</div></center>
<button type="submit">Add To Inventory</button>
</form>






<script  type="text/javascript">

$(document).ready(function() {


    $("#addButton").click(function() {
                    var  counter=0;
                    var inputGroupId = "inputGroup_" + counter++;

                    var inputGroup = "<div  id='" + inputGroupId + "'>"+"<select name=\"type[]\">"+ "<option>Choose --</option><option value=\"0\">Addition</option><option value=\"1\">Deduction</option>"+ "</select>"+"<select id=\"product_select\" name=\"product_id[]\">"+ "<option>Choose --</option>@foreach ($product as $products)<option value={{$products->id}}>{{$products->product_name}}</option>@endforeach"+ "</select>"+"<input min=\"0\" type=\"number\" name=\"product_quantity[]\">"+"<input type=\"number\" @foreach($stock as $results) value=\"{{$results->product_in_stock}}\"    @endforeach readonly >"+"<Button type=\"button\" class=\"btn btn-danger delete-button\" >Delete</Button>"+"</div>";
                        
                      
                    $("#container").append(inputGroup);
    
                    

                    $('#product_select').change(function() {
                            var productId = $(this).val();
                            var csrfToken = "{{ csrf_token() }}"; 
                            
    //                         $.ajax({
    //                                 
    //                                 method: "POST",
    //                                 data: {
    //                                     _token: csrfToken,
    //                                     product_identifier: productId,
    //                                 },
    //                                 success: function(data) {
    //                                     // Handle success response
    //                                     // console.log(data);
    //                                 },
    //                                 error: function(xhr, status, error) {
    //                                     // Handle error response
    //                                     console.error(xhr.responseText);
    //                                 }
    // });
                            
                        
                });
                    
                    $("#container").on("click", ".delete-button", function() {
                            var inputGroup = $(this).parent();
                            inputGroup.remove();
                    });       
});
          






});


</script>





@endsection

