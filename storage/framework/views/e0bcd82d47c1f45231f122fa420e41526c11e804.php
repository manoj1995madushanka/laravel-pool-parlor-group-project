<?php echo $__env->make('includes.scrollBtn', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>

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
                                <form action="">
                                    <button type="button" class="btn btn-success">BOOK</button>
                                </form>
                                
                                
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="/images/2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Book Table 2</h5>
                                <form action="">
                                    <button type="button" class="btn btn-success">BOOK</button>
                                </form>
                                
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="/images/3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Book Table 3</h5>
                                <form action="">
                                    <button type="button" class="btn btn-success">BOOK</button>
                                </form>
                                
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="/images/4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Book Table 4</h5>
                                <form action="">
                                    <button type="button" class="btn btn-success">BOOK</button>
                                </form>
                                
                            </div>
                        </div>
                        
                    </div>


                </div>                
            </section> 
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>