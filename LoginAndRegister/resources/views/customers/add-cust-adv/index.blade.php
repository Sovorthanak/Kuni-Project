<x-testcomp>
    <div class="container">
        <span class="add-cust">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Sign Up New Customer (Advance)</h4>
                        </div>
                        <div class="card-body">
                            <form action="/administration/users" method="post">
                                @csrf
                                <div class="input">
                                <div class="mb-3">
                                    <label for="">Customer's Name <span>*</span></label>
                                    <input type="text" name="name" class="form-control" />
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Identity</label>
                                    <input type="text" name="identity" class="form-control" />
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Customer Type <span>*</span></label>
                                    <input type="text" name="customer-type" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Organization</label>
                                    <input type="text" name="customer-type" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Industry Type <span>*</span></label>
                                    <input type="text" name="industry-type" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Address Line 1 <span>*</span></label>
                                    <input type="text" name="address-line-1" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Address Line 2</label>
                                    <input type="text" name="address-line-2" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Address Line 3</label>
                                    <input type="text" name="address-line-3" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Postal Code</label>
                                    <input type="text" name="postal-code" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">City</label>
                                    <input type="text" name="city" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Province/State</label>
                                    <input type="text" name="province" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Country <span>*</span></label>
                                    <input type="text" name="country" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Phone Number <span>*</span></label>
                                    <input type="text" name="phone-number" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Fax Number</label>
                                    <input type="text" name="fax-number" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">E-Mail Address <span>*</span></label>
                                    <input type="text" name="email" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Agent <span>*</span></label>
                                    <input type="text" name="agent" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Currency <span>*</span></label>
                                    <input type="text" name="currency" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Customer Profile <span>*</span></label>
                                    <input type="text" name="customer-pf" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Invoice Template <span>*</span></label>
                                    <input type="text" name="invoice-template" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Payment Tamplate <span>*</span></label>
                                    <input type="text" name="postal-code" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Alt. Customer Name</label>
                                    <input type="text" name="alt-customer-name" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Tax ID Number</label>
                                    <input type="text" name="tax-id-number" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Alt. Organization</label>
                                    <input type="text" name="alt-organization" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Alt. Address Line 1</label>
                                    <input type="text" name="alt-address-line-1" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Alt. Address Line 2</label>
                                    <input type="text" name="alt-address-line-2" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Alt. Address Line 3</label>
                                    <input type="text" name="alt-address-line-3" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Alt. City</label>
                                    <input type="text" name="alt-city" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Alt. Province/State</label>
                                    <input type="text" name="alt-province" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Accept SMS? <span>*</span></label>
                                    <input type="text" name="accept-sms" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Accept E-Mail? <span>*</span></label>
                                    <input type="text" name="accept-email" class="form-control" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                </div>

                                <div class="mb-3-btn">
                                    <button type="submit" class="btn btn-primary">Sign Up New Customer</button>
                                    <button type="clear" class="btn btn-danger">Clear Form</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </span>
    </div>

</x-testcomp>