<x-testcomp >
    <div class="container" >
        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <h4>Account Report</h4>
                    </div>


                    <div class="search-container">
                        <div class="search-panel">


                            <form action="{{ url('customers/all-customers') }}" method="GET" id="accountReportForm">
                                <table class="search-table">
                                    <tr>
                                        <th colspan="18" >Search Accounts</th>
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
                                        
                                        


                                        <td><label for="to">to</label></td>
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
                                            </select>                                           
                                        </td>
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
                                        <td>
                                            <input type="radio" name="trail_tariff" value="all" id="all">
                                            <label for="all">All</label>
                                            
                                            <input type="radio" name="trail_tariff" value="yes" id="yes">
                                            <label for="yes">Yes</label>
                                            
                                            <input type="radio" name="trail_tariff" value="no" id="no">
                                            <label for="no">No</label>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td></td>
                                        <td colspan="13">
                                            <button type="button" class="btn btn-secondary" id="">Search</button>
                                            <button type="button" class="btn btn-secondary" id="resetButton">Reset</button>
                                            <button type="button" class="btn btn-secondary" id="" onclick="window.print()">Print</button>
                                            <button type="button" class="btn btn-secondary" id="">To Excel</button>
                                        </td>
                                        
                                    </tr>
                                </table>
                            </form>

                            
                            
                        </div>
                    </div>

                    <table class="table table-bordered table-striped" id= "report-table">
                        <thead >
                            <tr>
                                <th  rowspan="2">Customer ID</th>
                                <th  rowspan="2">Account ID</th>
                                <th  rowspan="2">Account Name</th>
                                <th  rowspan="2">Tariff</th>
                                <th  rowspan="2">Cur.</th>
                                <th  rowspan="2">Initial Fee</th>
                                <th  colspan="3">Recurring Fee</th> 
                                <th  rowspan="2">Service Deposit</th>
                                <th  rowspan="2">Status</th>
                                <th  rowspan="2">Create Date</th>

                            </tr>
                            <tr>
                                <th >Basic</th>
                                <th >CPE</th>
                                <th > Last Mile</th>
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
                                <td>13 / 09 / 2024</td>
                                
                                

                            </tr>
                            @endforeach
                        </tbody>

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
    // Define the table with DataTables settings
    var table = $('.table').DataTable({
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

    

    // Define a function to handle the print action
    function printHandler() {
        var originalLength = table.page.len();
        table.page.len(-1).draw(); // Display all records

        window.print(); // Trigger the print dialog

        // Restore original pagination after printing
        window.onafterprint = function () {
            table.page.len(originalLength).draw(); // Restore original page length
        };
    }

    // Attach the print event handler
    window.onbeforeprint = printHandler; // For most browsers
    if (window.matchMedia) {
        var mediaQueryList = window.matchMedia('print');
        mediaQueryList.addListener(function(mql) {
            if (mql.matches) {
                printHandler(); // Apply changes for printing
            } else {
                table.page.len(originalLength).draw(); // Restore when the print media query no longer matches
            }
        });
    }
});




        document.getElementById('resetButton').addEventListener('click', function() {
            const form = document.getElementById('accountReportForm');
            
            // Reset the form
            form.reset();
            
            // Clear all text inputs
            form.querySelectorAll('input[type="text"]').forEach(input => input.value = '');
            
            // Reset all select elements
            form.querySelectorAll('select').forEach(select => select.selectedIndex = 0);
            
        });

    </script>    
        
</x-testcomp>

