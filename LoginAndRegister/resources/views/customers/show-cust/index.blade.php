<x-testcomp>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer Management Control Panel</h4>
                    </div>

                    <div class="card-body">
                        <div class="show_cust">
                            <div class="show_cust_row">
                                <div class="cul">
                                    <span>
                                        <p>Customer ID <span>:</span></p>
                                        <span class="value">{{ str_pad($customer->id, 6, '0', STR_PAD_LEFT) }}</span>
                                    </span>
                                    <span>
                                        <p>Customer Name <span>:</span></p>
                                        <span class="value">{{ $customer->customername }}</span>
                                    </span>                                    
                                    <span>
                                        <p>Organization <span>:</span></p>
                                        <span class="value"></span>
                                    </span>                                    
                                    <span>
                                        <p>Agent <span>:</span></p>
                                        <span class="value">{{ $customer->agent }}</span>
                                    </span>                                    
                                </div>
                                <div class="cul">
                                    <p>Currency <span>: <!-- {{ $customer->accountname }} --></span></p>
                                    <p>Customer Profile <span>: <!-- {{ $customer->accountname }} --></span></p>
                                    <p>Invoice Tamplate <span>: <!-- {{ $customer->accountname }} --></span></p>
                                    <p>Payment Tamplate <span>: <!-- {{ $customer->accountname }} --></span></p>
                                </div>
                                <div class="cul">
                                    <p>Deposit <span>: <!-- {{ $customer->accountname }} --></span></p>
                                    <p>Credit <span>: <!-- {{ $customer->accountname }} --></span></p>
                                    <p>Unpaid Deposit <span>: <!-- {{ $customer->accountname }} --></span></p>
                                    <p>Invoice Balance <span>: <!-- {{ $customer->accountname }} --></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Customer's Information Edit 
                            <span>
                                <a  class="btn btn-primary float-end">Customer</a>
                                <a  class="btn btn-primary float-end">Contacts</a>
                                <a  class="btn btn-primary float-end">Accounts</a>
                                <a  class="btn btn-primary float-end">Finance</a>
                                <a  class="btn btn-primary float-end">Logs</a>
                            </span>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div>            
            </div>
        </div>
    </div>


</x-testcomp>
