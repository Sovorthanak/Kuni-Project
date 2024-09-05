<x-testcomp>
    <div class="container">
        <div class="cust-row">
            <div class="cust-row-box total-cust">
                <div class="cust-icon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="cust-num">
                    <p>Total Customer:</p>
                    <h1>0478</h1>
                </div>
            </div>
            <div class="cust-row-box active-cust">
                <div class="cust-icon">
                    <i class="fa fa-check" aria-hidden="true"></i>
                </div>
                <div class="cust-num">
                    <p>Active Customer:</p>
                    <h1>0415</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>Customer Management Control Panel 
                        </h4>
                    </div>

                    <div class="card-body">

                        <div class="w-full h-64 border-2 border-black">
                            <div class="flex h-full">
                              <div class="flex-1 border-r-2 border-black">
                                <p>Name: {{ $customer->accountname }}</p>
                                <h1>g</h1>
                                <h1>d</h1>
                                <h1>s</h1>
                              </div>
                              <div class="flex-1 border-r-2 border-black">
                                <h1>h</h1>
                                <h1>g</h1>
                                <h1>g</h1>
                                <h1>d</h1>
                                <h1>s</h1>
                              </div>
                              <div class="flex-1"><h1>h</h1>
                                <h1>g</h1>
                                <h1>g</h1>
                                <h1>d</h1>
                                <h1>s</h1></div>
                            </div>
                          </div>
                          
                          
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-testcomp>