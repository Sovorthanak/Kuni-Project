<x-testcomp>
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <h4>Account Report</h4>
                    </div>


                    <div class="search-container">
                        <div class="search-panel">


                            <form action="{{ url('customers/all-customers') }}" method="GET" id="customerSearchForm">
                                <table class="search-table">
                                    <tr>
                                        <th colspan="18" style="text-align: center;">Search Accounts</th>
                                    </tr>
                                    <tr>
                                        <td><label for="">Customer ID:</label></td>
                                        <td>
                                            <input type="text" class="form-control" id="" name="" value="">
                                        </td>
                                        <td><label for="">Agent	:</label>
                                        </td>
                                        <td>
                                            <select class="form-control" id="" name="" >
                                                <option value="">======= ALL =======</option>
                                            </select>                                        
                                        </td>
                                        <td><label for="">Service Type :</label></td>
                                        <td>
                                            <select class="form-control" id="" name="" >
                                                <option value="">======= ALL =======</option>
                                            </select>                                           
                                        </td>
                                        


                                        
                                        <td><label for="create-date">Create Date :</label></td>
                                        <td>
                                            <input type="text" class="form-control" id="create-date" name="create-date" value="">
                                        </td>
                                        
                                        


                                        <td><label for="">to</label></td>
                                        <td>
                                            <input type="text" class="form-control" id="create-date-to" name="create-date-to" value="">
                                        </td>
                                        



                                    </tr>
                                    <tr>
                                        <td><label for="">Account ID :</label></td>
                                        <td>
                                            <input type="text" class="form-control" id="" name="" value="">
                                        </td>
                                        <td><label for="">Province/State :</label></td>
                                        <td>
                                            <input type="text" class="form-control" id="" name="" value="">
                                        </td>
                                        <td><label for="">Bill Cycle :	</label></td>
                                        <td>
                                            <select class="form-control" id="" name="" >
                                                <option value="">======= ALL =======</option>
                                            </select>                                           </td>
                                        <td><label for="">Initial Fee :</label></td>
                                        <td>
                                            <input type="text" class="form-control" id="" name="" value="">
                                        </td>
                                        <td><label for="">to</label></td>
                                        <td>
                                            <input type="text" class="form-control" id="" name="" value="">
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <td><label for="">Status :</label></td>
                                        <td>
                                            <select class="form-control" id="" name="" >
                                                <option value="">======= ALL =======</option>
                                            </select>                                           </td>
                                        <td><label for="">Country :</label></td>
                                        <td>
                                            <select class="form-control" id="" name="" >
                                                <option value="">======= ALL =======</option>
                                            </select>                                           </td>
                                        <td><label for="">Billing Type :	</label></td>
                                        <td>
                                            <select class="form-control" id="" name="" >
                                                <option value="">======= ALL =======</option>
                                            </select>                                           </td>
                                        <td><label for="">Recurring Fee :</label></td>
                                        <td>
                                            <input type="text" class="form-control" id="" name="" value="">
                                        </td>
                                        <td><label for="">to</label></td>
                                        <td>
                                            <input type="text" class="form-control" id="" name="" value="">
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <td><label for="">PoP :</label></td>
                                        <td>
                                            <select class="form-control" id="" name="" >
                                                <option value="">======= ALL =======</option>
                                            </select>                                           </td>
                                        <td><label for="">Currency :</label></td>
                                        <td>
                                            <select class="form-control" id="" name="" >
                                                <option value="">======= ALL =======</option>
                                            </select>                                           </td>
                                        <td><label for="">Context Name :	</label></td>
                                        <td>
                                            <input type="text" class="form-control" id="" name="" value="">
                                        </td>
                                        <td><label for="">Service Deposit :</label></td>
                                        <td>
                                            <input type="text" class="form-control" id="" name="" value="">
                                        </td>
                                        <td><label for="">to</label></td>
                                        <td>
                                            <input type="text" class="form-control" id="" name="" value="">
                                        </td>
                                        
                                    </tr>


                                    <tr>
                                        <td><label for="">Trail Tariff?</label></td>
                                        <td>:
                                            <input type="radio">
                                                <label for="">All</label>
                                                <input type="radio">
                                                <label for="">Yes</label>
                                                <input type="radio">
                                                <label for="">No</label>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="13">
                                            <button type="button" class="btn btn-secondary" id="">Search</button>
                                            <button type="button" class="btn btn-secondary" id="">Reset</button>
                                            <button type="button" class="btn btn-secondary" id="">Print</button>
                                            <button type="button" class="btn btn-secondary" id="">To Excel</button>
                                        </td>
                                        
                                    </tr>
                                </table>
                            </form>

                            
                            
                        </div>
                    </div>

                    <table class="table table-bordered table-striped">
                        <thead style="background-color: #7A7A7A; color:white">
                            <tr>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Customer ID</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Account ID</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Account Name</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Tariff</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Cur.</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Initial Fee</th>
                                <th style="text-align: center; vertical-align: middle;" colspan="3">Recurring Fee</th> 
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Service Deposit</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Status</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Create Date</th>

                            </tr>
                            <tr>
                                <th style="text-align: center; vertical-align: middle;">Basic</th>
                                <th style="text-align: center; vertical-align: middle;">CPE</th>
                                <th style="text-align: center; vertical-align: middle;"> Last Mile</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($customers as $item)
                            <tr>
                                <td><a href="{{ route('customers.show', ['id' => $item->id]) }}">{{ str_pad($item->id, 6, '0', STR_PAD_LEFT) }}</a></td>                                
                                <td><a href="{{ route('customers.show', ['id' => $item->id]) }}">{{ $item-> accountid }}</a></td>
                                <td><a href="{{ route('customers.show', ['id' => $item->id]) }}">{{ $item-> accountname }}</a></td>
                                <td>{{ $item->tariff}}</td>
                                <td>USD</td>
                                <td>0.00</td>
                                <td></td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td class="status">{{ $item->status }}</td>
                                <td></td>
                                
                                

                            </tr>
                            @endforeach
                        </tbody>

                        {{-- <thead style="background-color: #7A7A7A; color:white">
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>USD</th>
                                <th>0.00</th>
                                <th></th>
                                <th>0.00</th>
                                <th>0.00</th>
                                <th>0.00</th>
                                <th></th>
                                <th></th>

                            </tr>
                        </thead> --}}
                    </table>

                        

                
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $("#create-date ,#create-date-to").datepicker({
                dateFormat: "yy-mm-dd",
                showAnim: "slideDown",
                changeMonth: true,
                changeYear: true,
            });
        });


        $(document).ready(function() {
            $('.table').DataTable({
                "paging": true, // Enable pagination
                "pagingType": "full_numbers", // Full numbers pagination with First and Last buttons
                "dom": '<"top"ip><"clear">', // DOM positioning, removing 'l' for length changing input
                "lengthChange": false, // Disables the ability to change number of records per page
                "searching": false, // Disables the search bar
                "ordering": true, // Enables column sorting
                "info": true, // Displays table information
                "autoWidth": false, // Disables automatic column width calculation
                "pageLength": 20, // Default number of rows to display
                "language": {
                    "info": "Totally _TOTAL_ Items, showing Item _START_ to _END_.",
                    "infoEmpty": "Totally 0 Items, showing Item 0 to 0."
                },
                "drawCallback": function(settings) {
                    // Apply color based on the 'status' content after every draw
                    document.querySelectorAll('.status').forEach(function(td) {
                        if (td.textContent.trim() === 'Terminated') {
                            td.style.color = 'red';
                        } else if (td.textContent.trim() === 'Active') {
                            td.style.color = 'green';
                        }
                    });
                }
            });
        });
    </script>    
        
</x-testcomp>

