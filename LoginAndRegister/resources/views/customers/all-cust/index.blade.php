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

                {{-- @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif --}}

                @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>All Cusomters
                            <span>
                                <a href="/customers/add-customer" class="btn btn-primary float-end">Add Customer</a>
                                <a href="/customers/add-customer-advance" class="btn btn-primary float-end">Add Customer (Advance)</a>
                            </span>
                        </h4>
                    </div>


                    <div class="search-container">
                        <div class="search-panel">


                            <form action="{{ url('customers/all-customers') }}" method="GET" id="customerSearchForm">
                                <table class="search-table">
                                    <tr>
                                        <th colspan="6" style="text-align: center; height: 4vh">Search Customers</th>
                                    </tr>
                                    <tr>
                                        <td style="padding-left: 10px; padding-top: 1vw"><label for="keyword">Keyword</label></td>
                                        <td style="padding-top: 1vw"><label for="customerType">Customer Type</label></td>
                                        <td style="padding-top: 1vw"><label for="industryType">Industry Type</label></td>
                                        <td style="padding-top: 1vw"><label for="currency">Currency</label></td>
                                        <td style="padding-top: 1vw"><label for="accountStatus">Account Status</label></td>
                                    </tr>
                                    <tr>  
                                        <td>
                                            <input type="text" class="form-control" id="keyword" name="keyword" value="{{ request('keyword') }}">
                                        </td>
                                        <td>
                                            <select class="form-control" id="type" name="type" style="width: 100%">
                                                <option value="">======= ALL =======</option>
                                                <option value="Firm" {{ request('type') == 'Firm' ? 'selected' : '' }}>Firm</option>
                                                <option value="Individual" {{ request('type') == 'Individual' ? 'selected' : '' }}>Individual</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" id="industryType" name="industryType" >
                                                <option value=""> ==================== ALL ==================== </option>
                                                <option value="IT" {{ request('industryType') == 'IT' ? 'selected' : '' }}>IT</option>
                                                <option value="Finance" {{ request('industryType') == 'Finance' ? 'selected' : '' }}>Finance</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" id="currency" name="currency" style="width: 100%">
                                                <option value="">====== ALL ======</option>
                                                <option value="KHR" {{ request('currency') == 'KHR' ? 'selected' : '' }}>[KHR] Khmer Riel</option>
                                                <option value="USD" {{ request('currency') == 'USD' ? 'selected' : '' }}>[USD] U.S. Dollar</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" id="accountStatus" name="accountStatus" >
                                                <option value="">====== ALL ======</option>
                                                <option value="Inactive" {{ request('accountStatus') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                                <option value="Active" {{ request('accountStatus') == 'Active' ? 'selected' : '' }}>Active</option>
                                                <option value="Suspended" {{ request('accountStatus') == 'Suspended' ? 'selected' : '' }}>Suspended</option>
                                                <option value="Terminated" {{ request('accountStatus') == 'Terminated' ? 'selected' : '' }}>Terminated</option>
                                                <option value="Trial" {{ request('accountStatus') == 'Trial' ? 'selected' : '' }}>Trial</option>
                                                <option value="Deactivated" {{ request('accountStatus') == 'Deactivated' ? 'selected' : '' }}>Deactivated</option>
                                                <option value="Canceled" {{ request('accountStatus') == 'Canceled' ? 'selected' : '' }}>Canceled</option>
                                            </select>
                                        </td>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                            <button type="button" class="btn btn-secondary" id="resetButton">Reset</button>
                                        </td>
                                    </tr>                                    

                                    <tr>
                                        <td colspan="8" style="height: 2.3vw; ">
                                            <span style="display: flex; align-items: center; justify-content: center;">
                                                <label style="margin-right: 2vw;">
                                                    <input type="radio" name="searchType" value="id" tabindex="6" {{ request('searchType') == 'id' ? 'checked' : '' }}> Customer ID
                                                </label>
                                                <label style="margin-right: 2vw;">
                                                    <input type="radio" name="searchType" value="customername" tabindex="6" {{ request('searchType') == 'customername' || !request('searchType') ? 'checked' : '' }}> Customer Name
                                                </label>
                                                <label style="margin-right: 2vw;">
                                                    <input type="radio" name="searchType" value="accountid" tabindex="6" {{ request('searchType') == 'accountid' ? 'checked' : '' }}> Account ID
                                                </label>
                                                <label style="margin-right: 2vw;">
                                                    <input type="radio" name="searchType" value="accountname" tabindex="6" {{ request('searchType') == 'accountname' ? 'checked' : '' }}> Account Name
                                                </label>
                                                <label style="margin-right: 2vw;">
                                                    <input type="radio" name="searchType" value="agent" tabindex="6" {{ request('searchType') == 'agent' ? 'checked' : '' }}> Agent
                                                </label>
                                            </span>    
                                        </td>
                                        
                                    </tr>
                                </table>
                            </form>
                            
                            <script>
                                document.getElementById('resetButton').addEventListener('click', function() {
                                    const form = document.getElementById('customerSearchForm');
                                    
                                    // Reset the form
                                    form.reset();
                                    
                                    // Clear all text inputs
                                    form.querySelectorAll('input[type="text"]').forEach(input => input.value = '');
                                    
                                    // Reset all select elements
                                    form.querySelectorAll('select').forEach(select => select.selectedIndex = 0);
                                    
                                    // Ensure "Customer Name" is checked by default for radio buttons
                                    form.querySelector('input[name="searchType"][value="customername"]').checked = true;
                                });
                            </script>
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                        

                        {{-- <form action="{{ url('customers/all-customers') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <input type="file" name="import_file" class="form-control"/>
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </form> --}}

                        
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Customer ID</th>
                                    <th style="text-align: center;">Name (Organization)</th>
                                    <th style="text-align: center;">Type</th>
                                    <th style="text-align: center;">Account ID</th>
                                    <th style="text-align: center;">Account Name </th>
                                    <th style="text-align: center;">Status</th>
                                    <th style="text-align: center;">Tarrif</th>
                                    <th style="text-align: center;">Agent</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($customers as $item)
                                <tr>
                                    <td><a href="{{ route('customers.show', ['id' => $item->id]) }}">{{ str_pad($item->id, 6, '0', STR_PAD_LEFT) }}</a></td>
                                    
                                    <td><a href="{{ route('customers.show', ['id' => $item->id]) }}">{{ $item->customername }}</a></td>
                                    
                                    <td>{{ $item-> type }}</td>
                                    
                                    <td><a href="{{ route('customers.show', ['id' => $item->id]) }}">{{ $item-> accountid }}</a></td>
                                    <td><a href="{{ route('customers.show', ['id' => $item->id]) }}">{{ $item-> accountname }}</a></td>
                                    <td class="status">{{ $item->status }}</td>
                                    <td>{{ $item->tariff}}</td>
                                    <td>{{ $item-> agent}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
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
                "pageLength": 25, // Default number of rows to display
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

