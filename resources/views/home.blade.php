
@extends('layouts.app')

@include('includes.scrollBtn')
@section('content')
{{-- @include('includes.callander') --}}
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
  
            <section id="join">
                    <br><br>
      
                                    <!-- Heading -->
                   <h2 class="mb-5 font-weight-bold text-center txtLogin">Book Now</h2>
                    
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="/images/1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Book Table 1</h5>
                                    <a type="button" class="btn btn-success" href="/table1">BOOK</a>
                                    
                                
                                
                                {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="/images/2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Book Table 2</h5>
                                <a type="button" class="btn btn-success" href="/table2">BOOK</a>
                                {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="/images/3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Book Table 3</h5>
                                <a type="button" class="btn btn-success" href="/table3">BOOK</a>
                                {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="/images/4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Book Table 4</h5>
                                <a type="button" class="btn btn-success" href="/table4">BOOK</a>
                                {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>
                        
                    </div>


                </div>                
            </section> 
        </div>
    </div>
</div>


@endsection
