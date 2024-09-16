<x-testcomp>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>Account Status History</h4>
                    </div>

                    <div class="search-container">
                        <div class="search-panel">


                            <form action="{{ url('customers/all-customers') }}" method="GET" id="customerSearchForm">
                                <table class="search-table">
                                    <tr>
                                        <th colspan="18">Search Status Change History</th>
                                    </tr>
                                    <tr>

                                        <td><label for="opera-date">Operation Date: </label></td>
                                        <td>
                                            <input type="text" class="form-control" id="opera-date" name="opera-date" value="">
                                        </td>
                                        
                                        
                                        <td><label for="opera-date-to">to</label></td>
                                        <td>
                                            <input type="text" class="form-control" id="opera-date-to" name="opera-date-to" value="">
                                        </td>

                                        <td colspan="13">
                                            <button type="button" class="btn btn-secondary" id="">Search</button>
                                            <button type="button" class="btn btn-secondary" id="">Reset</button>
                                            <button type="button" class="btn btn-secondary" id="">Print</button>
                                        </td>
                                        
                                    </tr>
                                </table>
                            </form>


                        </div>
                    </div>


                    
                    <div class="container">
                        <div class="card-header">
                        <h4>Account Status History</h4>
                        <h4>Account Status History</h4>
                        <h4>Account Status History</h4>
                        <h4>Account Status History</h4>
                        <h4>Account Status History</h4>
                        <h4>Account Status History</h4>
                        <h4>Account Status History</h4>
                        <h4>Account Status History</h4>
                        <h4>Account Status History</h4>
                        <h4>Account Status History</h4>
                        <h4>Account Status History</h4>
                        </div>
                    </div>
                    <div class="container">
                        <div class="card-header" id= "acc-status-his">
                            <table class="table table-bordered table-striped" id= "acc-status-his-table-left">
                                <thead >
                                    <tr>
                                        <th colspan="9">Status Changes per Week</th>

                                    </tr>
                                    <tr>
                                        <th >Duration</th>
                                        <th id ="stat-change-col-2"></th>
                                        <th id ="stat-change-col-3" ></th>
                                        <th id ="stat-change-col-4" ></th>
                                        <th id ="stat-change-col-5" ></th>
                                        <th id ="stat-change-col-6" ></th>
                                        <th id ="stat-change-col-7" ></th>
                                        <th id ="stat-change-col-8" ></th>
                                        <th >Total</th>
                                    </tr>
                                </thead>
    
                                <tbody>
                                    <tr>
                                        <td>09/09/2023 - 09/09/2023</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>09/09/2023 - 09/09/2023</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>09/09/2023 - 09/09/2023</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>09/09/2023 - 09/09/2023</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>09/09/2023 - 09/09/2023</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>09/09/2023 - 09/09/2023</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>

                            <table class="table table-bordered table-striped" id="acc-status-his-table-right">
                                <thead >
                                    <tr>
                                        <th colspan="6">Account Status History (242)</th>

                                    </tr>
                                    <tr>
                                        <th>Date</th>
                                        <th>Account ID</th>
                                        <th>Old Status</th>
                                        <th>New Status</th>
                                        <th>Comment</th>
                                        <th>Invoice ID</th>


                                    </tr>
                                </thead>
    
                                <tbody>
                                    <tr>
                                        <td>11/09/2023 15:07:00</td>
                                        <td>FO202300084</td>
                                        <td>Inactive</td>
                                        <td>Active</td>
                                        <td>Issue inv</td>
                                        <td>TI23-00042</td>
                                    </tr>
                                    <tr>
                                        <td>11/09/2023 15:07:00</td>
                                        <td>FO202300084</td>
                                        <td>Inactive</td>
                                        <td>Active</td>
                                        <td>Issue inv</td>
                                        <td>TI23-00042</td>
                                    </tr>
                                    <tr>
                                        <td>11/09/2023 15:07:00</td>
                                        <td>FO202300084</td>
                                        <td>Inactive</td>
                                        <td>Active</td>
                                        <td>Issue inv</td>
                                        <td>TI23-00042</td>
                                    </tr>
                                    <tr>
                                        <td>11/09/2023 15:07:00</td>
                                        <td>FO202300084</td>
                                        <td>Inactive</td>
                                        <td>Active</td>
                                        <td>Issue inv</td>
                                        <td>TI23-00042</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>
            </div>
        </div>  
    </div>
    <script>
        $(function() {
            $("#opera-date ,#opera-date-to").datepicker({
                dateFormat: "yy-mm-dd",
                showAnim: "slideDown",
                changeMonth: true,
                changeYear: true,
            });
        });


        // $(document).ready(function() {
        //     $('.table').DataTable({
        //         "paging": true, // Enable pagination
        //         "pagingType": "full_numbers", // Full numbers pagination with First and Last buttons
        //         "dom": '<"top"ip><"clear">', // DOM positioning, removing 'l' for length changing input
        //         "lengthChange": false, // Disables the ability to change number of records per page
        //         "searching": false, // Disables the search bar
        //         "ordering": true, // Enables column sorting
        //         "info": true, // Displays table information
        //         "autoWidth": false, // Disables automatic column width calculation
        //         "pageLength": 20, // Default number of rows to display
        //         "language": {
        //             "info": "Totally _TOTAL_ Items, showing Item _START_ to _END_.",
        //             "infoEmpty": "Totally 0 Items, showing Item 0 to 0."
        //         },
        //         "drawCallback": function(settings) {
        //             // Apply color based on the 'status' content after every draw
        //             document.querySelectorAll('.status').forEach(function(td) {
        //                 if (td.textContent.trim() === 'Terminated') {
        //                     td.style.color = 'red';
        //                 } else if (td.textContent.trim() === 'Active') {
        //                     td.style.color = 'green';
        //                 }
        //             });
        //         }
        //     });
        // });
    </script>          
</x-testcomp>

