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
                                            <input type="text" class="form-control" id="" name="" value="">
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
                                </table>
                            </form>

                            
                            
                        </div>
                    </div>
                        

                
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $("#create-date").datepicker({
                dateFormat: "yy-mm-dd",
                showAnim: "slideDown",
                changeMonth: true,
                changeYear: true,
            });
        });
    </script>    
        
</x-testcomp>

