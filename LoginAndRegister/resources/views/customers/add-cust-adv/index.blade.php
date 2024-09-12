<x-testcomp>
    <div class="container">
        <span class="add-cust add-cust-adv">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Sign Up New Customer Advance</h4>
                        </div>
                        <div class="card-body">
                            <form action="/administration/users" method="post" id="add-cust-form">
                                @csrf
                                <div class="input">
                                    <div class="mb-3">
                                        <label for="">Customer's ID</label>
                                        <input type="text" name="customer-id" class="form-control" />
                                        <span class="text-danger-blue">Six to twenty characters, allows uppercase letters and numbers, use hyphen (-) or underscore (_) as connector between words. Leave this field empty for automatic Customer ID.</span>
                                        @error('customer-id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Customer's Name <span>*</span></label>
                                        <input type="text" name="customer-name" class="form-control" />
                                        @error('customer-name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Identity</label>
                                        <input type="text" name="identity" class="form-control" placeholder="Government Issued Identification"/>
                                        @error('identity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Customer Type <span>*</span></label>
                                        <select name="customer-type" id="customer-type" class="form-control">
                                            <option value="">Select Customer Type</option> <!-- Placeholder option -->
                                            <option value="firm">Firm</option>
                                            <option value="individual">Individual</option>
                                        </select>                                    
                                        @error('customer-type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Organization</label>
                                        <input type="text" name="organization" class="form-control" />
                                        @error('organization')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Industry Type <span>*</span></label>
                                        <select class="form-control select" name="industy-type">
                                            <option value="">Select Industry Type</option>
                                            <option value="Unspecified">(Unspecified)</option>
                                            <option value="Advertising & Media Services">Advertising &amp; Media Services</option>
                                            <option value="Advertising & Media Services - Advertising Boards">Advertising &amp; Media Services - Advertising Boards</option>
                                            <option value="Advertising & Media Services - Communications">Advertising &amp; Media Services - Communications</option>
                                            <option value="Advertising & Media Services - Consultancy & Agency Services">Advertising &amp; Media Services - Consultancy &amp; Agency Services</option>
                                            <option value="Advertising & Media Services - Media Monitoring Services">Advertising &amp; Media Services - Media Monitoring Services</option>
                                            <option value="Advertising & Media Services - Media Production Services">Advertising &amp; Media Services - Media Production Services</option>
                                            <option value="Advertising & Media Services - Print Media">Advertising &amp; Media Services - Print Media</option>
                                            <option value="Advertising & Media Services - Radio">Advertising &amp; Media Services - Radio</option>
                                            <option value="Advertising & Media Services - Television">Advertising &amp; Media Services - Television</option>
                                            <option value="Agriculture">Agriculture</option>
                                            <option value="Agriculture - Consultancy - Agriculture">Agriculture - Consultancy - Agriculture</option>
                                            <option value="Agriculture - Contracting - Agricultural">Agriculture - Contracting - Agricultural</option>
                                            <option value="Agriculture - Farm Machinery">Agriculture - Farm Machinery</option>
                                            <option value="Agriculture - Farming">Agriculture - Farming</option>
                                            <option value="Agriculture - Fertiliser Supplies">Agriculture - Fertiliser Supplies</option>
                                            <option value="Agriculture - Grazing">Agriculture - Grazing</option>
                                            <option value="Agriculture - Research & Surveys - Agriculture">Agriculture - Research &amp; Surveys - Agriculture</option>
                                            <option value="Agriculture - Veterinary Services">Agriculture - Veterinary Services</option>
                                            <option value="Architectural Design Services">Architectural Design Services</option>
                                            <option value="Architectural Design Services - Commercial Design">Architectural Design Services - Commercial Design</option>
                                            <option value="Architectural Design Services - Domestic Design">Architectural Design Services - Domestic Design</option>
                                            <option value="Audio & Video">Audio &amp; Video</option>
                                            <option value="Audio & Video - Audio Equipment">Audio &amp; Video - Audio Equipment</option>
                                            <option value="Audio & Video - Close Circuit Television">Audio &amp; Video - Close Circuit Television</option>
                                            <option value="Audio & Video - Equipment Maintenance & Repair">Audio &amp; Video - Equipment Maintenance &amp; Repair</option>
                                            <option value="Audio & Video - Equipment Rental">Audio &amp; Video - Equipment Rental</option>
                                            <option value="Audio & Video - Media Conversion Services">Audio &amp; Video - Media Conversion Services</option>
                                            <option value="Audio & Video - Multi media Projectors">Audio &amp; Video - Multi media Projectors</option>
                                            <option value="Audio & Video - Television Equipment">Audio &amp; Video - Television Equipment</option>
                                            <option value="Audio & Video - Video Conferencing Equipment">Audio &amp; Video - Video Conferencing Equipment</option>
                                            <option value="Audio & Video - Video Equipment">Audio &amp; Video - Video Equipment</option>
                                            <option value="Aviation & Related Services">Aviation &amp; Related Services</option>
                                            <option value="Aviation & Related Services - Aerial Mapping & Services">Aviation &amp; Related Services - Aerial Mapping &amp; Services</option>
                                            <option value="Aviation & Related Services - Aerial Photography">Aviation &amp; Related Services - Aerial Photography</option>
                                            <option value="Aviation & Related Services - Aerial Spraying & Fertilising">Aviation &amp; Related Services - Aerial Spraying &amp; Fertilising</option>
                                            <option value="Aviation & Related Services - Aircraft Avionics & Equipment">Aviation &amp; Related Services - Aircraft Avionics &amp; Equipment</option>
                                            <option value="Aviation & Related Services - Aircraft Catering Services">Aviation &amp; Related Services - Aircraft Catering Services</option>
                                            <option value="Aviation & Related Services - Aircraft Hire & Supply">Aviation &amp; Related Services - Aircraft Hire &amp; Supply</option>
                                            <option value="Aviation & Related Services - Aircraft Maintenance">Aviation &amp; Related Services - Aircraft Maintenance</option>
                                            <option value="Aviation & Related Services - Airport Baggage & Security Systems">Aviation &amp; Related Services - Airport Baggage &amp; Security Systems</option>
                                            <option value="Aviation & Related Services - Aviation - Consultancy Services">Aviation &amp; Related Services - Aviation - Consultancy Services</option>
                                            <option value="Aviation & Related Services - Aviation - Research & Studies">Aviation &amp; Related Services - Aviation - Research &amp; Studies</option>
                                            <option value="Building Demolition & Removal">Building Demolition &amp; Removal</option>
                                            <option value="Building Demolition & Removal - Demolition (Buildings)">Building Demolition &amp; Removal - Demolition (Buildings)</option>
                                            <option value="Building Demolition & Removal - Removal (Houses)">Building Demolition &amp; Removal - Removal (Houses)</option>
                                            <option value="Business Professional Services">Business Professional Services</option>
                                            <option value="Business Professional Services - Accounting & Finance">Business Professional Services - Accounting &amp; Finance</option>
                                            <option value="Business Professional Services - Asset Management Services">Business Professional Services - Asset Management Services</option>
                                            <option value="Business Professional Services - Auditing & Probity Services">Business Professional Services - Auditing &amp; Probity Services</option>
                                            <option value="Business Professional Services - Business & Strategic Planning">Business Professional Services - Business &amp; Strategic Planning</option>
                                            <option value="Business Professional Services - Business Consulting Services">Business Professional Services - Business Consulting Services</option>
                                            <option value="Business Professional Services - Business Research">Business Professional Services - Business Research</option>
                                            <option value="Business Professional Services - Business Surveys / Studies">Business Professional Services - Business Surveys / Studies</option>
                                            <option value="Business Professional Services - Community & Stakeholder Consultations">Business Professional Services - Community &amp; Stakeholder Consultations</option>
                                            <option value="Business Professional Services - Contract Administration Services">Business Professional Services - Contract Administration Services</option>
                                            <option value="Business Professional Services - Economic & Industry Development">Business Professional Services - Economic &amp; Industry Development</option>
                                            <option value="Business Professional Services - Election Services">Business Professional Services - Election Services</option>
                                            <option value="Business Professional Services - Feasibility Studies & Planning">Business Professional Services - Feasibility Studies &amp; Planning</option>
                                            <option value="Business Professional Services - Legal Services">Business Professional Services - Legal Services</option>
                                            <option value="Business Professional Services - Procurement Consultancy">Business Professional Services - Procurement Consultancy</option>
                                            <option value="Business Professional Services - Quality Assurance">Business Professional Services - Quality Assurance</option>
                                            <option value="Business Professional Services - Risk Management">Business Professional Services - Risk Management</option>
                                            <option value="Business Professional Services - Secretarial & Transcription Services">Business Professional Services - Secretarial &amp; Transcription Services</option>
                                            <option value="Business Professional Services - Translation & Interpretation Services">Business Professional Services - Translation &amp; Interpretation Services</option>
                                            <option value="Civil Engineering & Construction">Civil Engineering &amp; Construction</option>
                                            <option value="Civil Engineering & Construction - Asphaltic Supply">Civil Engineering &amp; Construction - Asphaltic Supply</option>
                                            <option value="Civil Engineering & Construction - Bitumen Supply">Civil Engineering &amp; Construction - Bitumen Supply</option>
                                            <option value="Civil Engineering & Construction - Bridge Building">Civil Engineering &amp; Construction - Bridge Building</option>
                                            <option value="Civil Engineering & Construction - Bridge Maintenance">Civil Engineering &amp; Construction - Bridge Maintenance</option>
                                            <option value="Civil Engineering & Construction - Cable Laying - Underground">Civil Engineering &amp; Construction - Cable Laying - Underground</option>
                                            <option value="Civil Engineering & Construction - Cables - Overhead">Civil Engineering &amp; Construction - Cables - Overhead</option>
                                            <option value="Civil Engineering & Construction - Carparks & Sports Courts">Civil Engineering &amp; Construction - Carparks &amp; Sports Courts</option>
                                            <option value="Civil Engineering & Construction - CCTV Inspection">Civil Engineering &amp; Construction - CCTV Inspection</option>
                                            <option value="Civil Engineering & Construction - Civil Construction - Major Works">Civil Engineering &amp; Construction - Civil Construction - Major Works</option>
                                            <option value="Civil Engineering & Construction - Civil Construction - Subcontract Works">Civil Engineering &amp; Construction - Civil Construction - Subcontract Works</option>
                                            <option value="Civil Engineering & Construction - Cleaning - Manholes & Sewer">Civil Engineering &amp; Construction - Cleaning - Manholes &amp; Sewer</option>
                                            <option value="Civil Engineering & Construction - Consultancy - Urban Design & Town Planning">Civil Engineering &amp; Construction - Consultancy - Urban Design &amp; Town Planning</option>
                                            <option value="Civil Engineering & Construction - Design Services - Civil Engineering">Civil Engineering &amp; Construction - Design Services - Civil Engineering</option>
                                            <option value="Civil Engineering & Construction - Drainage / Watermains">Civil Engineering &amp; Construction - Drainage / Watermains</option>
                                            <option value="Civil Engineering & Construction - Drilling & Piling Services">Civil Engineering &amp; Construction - Drilling &amp; Piling Services</option>
                                            <option value="Civil Engineering & Construction - Earth Works">Civil Engineering &amp; Construction - Earth Works</option>
                                            <option value="Civil Engineering & Construction - Erosion Control Works">Civil Engineering &amp; Construction - Erosion Control Works</option>
                                            <option value="Civil Engineering & Construction - Footpath & Driveway Construction">Civil Engineering &amp; Construction - Footpath &amp; Driveway Construction</option>
                                            <option value="Civil Engineering & Construction - Geotechnical Services">Civil Engineering &amp; Construction - Geotechnical Services</option>
                                            <option value="Civil Engineering & Construction - Guard Rails / Noise Barriers">Civil Engineering &amp; Construction - Guard Rails / Noise Barriers</option>
                                            <option value="Civil Engineering & Construction - Irrigation & Reticulation">Civil Engineering &amp; Construction - Irrigation &amp; Reticulation</option>
                                            <option value="Civil Engineering & Construction - Kerb and Channel">Civil Engineering &amp; Construction - Kerb and Channel</option>
                                            <option value="Civil Engineering & Construction - Land Surveying & Draughting Services">Civil Engineering &amp; Construction - Land Surveying &amp; Draughting Services</option>
                                            <option value="Civil Engineering & Construction - Landscaping - Civil">Civil Engineering &amp; Construction - Landscaping - Civil</option>
                                            <option value="Civil Engineering & Construction - Light Poles - Supply of">Civil Engineering &amp; Construction - Light Poles - Supply of</option>
                                            <option value="Civil Engineering & Construction - Parking Meters - Supply of">Civil Engineering &amp; Construction - Parking Meters - Supply of</option>
                                            <option value="Civil Engineering & Construction - Professional Services - Civil">Civil Engineering &amp; Construction - Professional Services - Civil</option>
                                            <option value="Civil Engineering & Construction - Project Management - Civil">Civil Engineering &amp; Construction - Project Management - Civil</option>
                                            <option value="Civil Engineering & Construction - Retaining & Rock Walls">Civil Engineering &amp; Construction - Retaining &amp; Rock Walls</option>
                                            <option value="Civil Engineering & Construction - Road Reflectors & Marker Posts">Civil Engineering &amp; Construction - Road Reflectors &amp; Marker Posts</option>
                                            <option value="Civil Engineering & Construction - Roading - Physical Works">Civil Engineering &amp; Construction - Roading - Physical Works</option>
                                            <option value="Civil Engineering & Construction - Roadmarking">Civil Engineering &amp; Construction - Roadmarking</option>
                                            <option value="Civil Engineering & Construction - Roadside Maintenance">Civil Engineering &amp; Construction - Roadside Maintenance</option>
                                            <option value="Civil Engineering & Construction - SCADA Equipment">Civil Engineering &amp; Construction - SCADA Equipment</option>
                                            <option value="Civil Engineering & Construction - Street Cleaning & Sweeping">Civil Engineering &amp; Construction - Street Cleaning &amp; Sweeping</option>
                                            <option value="Civil Engineering & Construction - Street Furniture & Bus Shelters">Civil Engineering &amp; Construction - Street Furniture &amp; Bus Shelters</option>
                                            <option value="Civil Engineering & Construction - Street Lighting & Accessories">Civil Engineering &amp; Construction - Street Lighting &amp; Accessories</option>
                                            <option value="Civil Engineering & Construction - Streetscape Works">Civil Engineering &amp; Construction - Streetscape Works</option>
                                            <option value="Civil Engineering & Construction - Sub Division Development">Civil Engineering &amp; Construction - Sub Division Development</option>
                                            <option value="Civil Engineering & Construction - Traffic & Parking Control Services">Civil Engineering &amp; Construction - Traffic &amp; Parking Control Services</option>
                                            <option value="Civil Engineering & Construction - Traffic Management Services">Civil Engineering &amp; Construction - Traffic Management Services</option>
                                            <option value="Civil Engineering & Construction - Traffic Signals & Controls">Civil Engineering &amp; Construction - Traffic Signals &amp; Controls</option>
                                            <option value="Civil Engineering & Construction - Tunnel Works">Civil Engineering &amp; Construction - Tunnel Works</option>
                                            <option value="Civil Engineering & Construction - Underpasses - Precast">Civil Engineering &amp; Construction - Underpasses - Precast</option>
                                            <option value="Civil Engineering & Construction - Verge Mowing / Spraying">Civil Engineering &amp; Construction - Verge Mowing / Spraying</option>
                                            <option value="Civil Engineering & Construction - Walking Track Construction & Maintenance">Civil Engineering &amp; Construction - Walking Track Construction &amp; Maintenance</option>
                                            <option value="Civil Engineering & Construction - Weigh Station Construction">Civil Engineering &amp; Construction - Weigh Station Construction</option>
                                            <option value="Cleaning">Cleaning</option>
                                            <option value="Cleaning - Carpet & Floor Cleaning">Cleaning - Carpet &amp; Floor Cleaning</option>
                                            <option value="Cleaning - Cleaning Equipment - Supply of">Cleaning - Cleaning Equipment - Supply of</option>
                                            <option value="Cleaning - Commercial Cleaning">Cleaning - Commercial Cleaning</option>
                                            <option value="Cleaning - Domestic Cleaning">Cleaning - Domestic Cleaning</option>
                                            <option value="Cleaning - Graffiti Removal">Cleaning - Graffiti Removal</option>
                                            <option value="Cleaning - Hygiene & Sanitary Services">Cleaning - Hygiene &amp; Sanitary Services</option>
                                            <option value="Cleaning - Laundering">Cleaning - Laundering</option>
                                            <option value="Cleaning - Public Conveniences">Cleaning - Public Conveniences</option>
                                            <option value="Cleaning - Schools Cleaning">Cleaning - Schools Cleaning</option>
                                            <option value="Cleaning - Soaps & Detergents">Cleaning - Soaps &amp; Detergents</option>
                                            <option value="Cleaning - Window Cleaning">Cleaning - Window Cleaning</option>
                                            <option value="Clothing & Textiles & Footwear">Clothing &amp; Textiles &amp; Footwear</option>
                                            <option value="Clothing & Textiles & Footwear - Corporate Apparel & Uniforms">Clothing &amp; Textiles &amp; Footwear - Corporate Apparel &amp; Uniforms</option>
                                            <option value="Clothing & Textiles & Footwear - Defence Clothing & Apparel">Clothing &amp; Textiles &amp; Footwear - Defence Clothing &amp; Apparel</option>
                                            <option value="Clothing & Textiles & Footwear - Footwear">Clothing &amp; Textiles &amp; Footwear - Footwear</option>
                                            <option value="Clothing & Textiles & Footwear - Promotional Items">Clothing &amp; Textiles &amp; Footwear - Promotional Items</option>
                                            <option value="Clothing & Textiles & Footwear - Protective Apparel">Clothing &amp; Textiles &amp; Footwear - Protective Apparel</option>
                                            <option value="Clothing & Textiles & Footwear - Safety Products">Clothing &amp; Textiles &amp; Footwear - Safety Products</option>
                                            <option value="Clothing & Textiles & Footwear - Textiles & Linen">Clothing &amp; Textiles &amp; Footwear - Textiles &amp; Linen</option>
                                            <option value="Construction">Construction</option>
                                            <option value="Construction - Building & Plumbing Supplies">Construction - Building &amp; Plumbing Supplies</option>
                                            <option value="Construction - Building Compliance Services">Construction - Building Compliance Services</option>
                                            <option value="Construction - Concrete - Precast">Construction - Concrete - Precast</option>
                                            <option value="Construction - Concrete - Ready Mixed">Construction - Concrete - Ready Mixed</option>
                                            <option value="Construction - Consultancy - Construction Services">Construction - Consultancy - Construction Services</option>
                                            <option value="Construction - Consultancy Services / Reviews">Construction - Consultancy Services / Reviews</option>
                                            <option value="Construction - Education - Adult">Construction - Education - Adult</option>
                                            <option value="Construction - Education - Primary">Construction - Education - Primary</option>
                                            <option value="Construction - Education - Secondary">Construction - Education - Secondary</option>
                                            <option value="Construction - Education - Tertiary">Construction - Education - Tertiary</option>
                                            <option value="Construction - Excavation & Site Preparation Works">Construction - Excavation &amp; Site Preparation Works</option>
                                            <option value="Construction - Fit out - Office & Shops">Construction - Fit out - Office &amp; Shops</option>
                                            <option value="Construction - Flooring & Tiling Services">Construction - Flooring &amp; Tiling Services</option>
                                            <option value="Construction - Heritage & Restoration Works">Construction - Heritage &amp; Restoration Works</option>
                                            <option value="Construction - Housing & Apartments">Construction - Housing &amp; Apartments</option>
                                            <option value="Construction - Interior Design">Construction - Interior Design</option>
                                            <option value="Construction - Joinery / Doors & Glass">Construction - Joinery / Doors &amp; Glass</option>
                                            <option value="Construction - Major Works - $1.0m +">Construction - Major Works - $1.0m +</option>
                                            <option value="Construction - Minor Maintenance Works (under $50k)">Construction - Minor Maintenance Works (under $50k)</option>
                                            <option value="Construction - Minor Works up to $1.0m">Construction - Minor Works up to $1.0m</option>
                                            <option value="Construction - Online/Distance Learning">Construction - Online/Distance Learning</option>
                                            <option value="Construction - Plumbing & Gasfitting">Construction - Plumbing &amp; Gasfitting</option>
                                            <option value="Construction - Project Management - Construction">Construction - Project Management - Construction</option>
                                            <option value="Construction - Quantity Surveying">Construction - Quantity Surveying</option>
                                            <option value="Construction - Research & Studies - Education">Construction - Research &amp; Studies - Education</option>
                                            <option value="Construction - Resource Management Consents">Construction - Resource Management Consents</option>
                                            <option value="Construction - Roofing Supply & Repairs">Construction - Roofing Supply &amp; Repairs</option>
                                            <option value="Construction - Skate Parks & Playgrounds">Construction - Skate Parks &amp; Playgrounds</option>
                                            <option value="Construction - Sports Facilities">Construction - Sports Facilities</option>
                                            <option value="Construction - Subcontract Works">Construction - Subcontract Works</option>
                                            <option value="Construction - Swimming & Aquatic Centres">Construction - Swimming &amp; Aquatic Centres</option>
                                            <option value="Construction - Transportable Buildings">Construction - Transportable Buildings</option>
                                            <option value="Construction - Wharves / Moorings / Jetties / Piers">Construction - Wharves / Moorings / Jetties / Piers</option>
                                            <option value="Electrical & Cabling">Electrical &amp; Cabling</option>
                                            <option value="Electrical & Cabling - Cable - Accessories">Electrical &amp; Cabling - Cable - Accessories</option>
                                            <option value="Electrical & Cabling - Cable - Supply">Electrical &amp; Cabling - Cable - Supply</option>
                                            <option value="Electrical & Cabling - Cabling & Data Communications Installation">Electrical &amp; Cabling - Cabling &amp; Data Communications Installation</option>
                                            <option value="Electrical & Cabling - Commercial Electrical Services">Electrical &amp; Cabling - Commercial Electrical Services</option>
                                            <option value="Electrical & Cabling - Domestic Electrical Services">Electrical &amp; Cabling - Domestic Electrical Services</option>
                                            <option value="Electrical & Cabling - Electrical Equipment - New">Electrical &amp; Cabling - Electrical Equipment - New</option>
                                            <option value="Electrical & Cabling - Electrical Products - New">Electrical &amp; Cabling - Electrical Products - New</option>
                                            <option value="Electrical & Cabling - Lighting">Electrical &amp; Cabling - Lighting</option>
                                            <option value="Electrical & Cabling - Switchgear">Electrical &amp; Cabling - Switchgear</option>
                                            <option value="Electrical & Cabling - Transformers / Substations">Electrical &amp; Cabling - Transformers / Substations</option>
                                            <option value="Engineering Services">Engineering Services</option>
                                            <option value="Engineering Services - Consulting & Design Services">Engineering Services - Consulting &amp; Design Services</option>
                                            <option value="Engineering Services - Electrical Engineering">Engineering Services - Electrical Engineering</option>
                                            <option value="Engineering Services - Engineering - Light">Engineering Services - Engineering - Light</option>
                                            <option value="Engineering Services - Engineering - Maintenance">Engineering Services - Engineering - Maintenance</option>
                                            <option value="Engineering Services - Mechanical Engineering">Engineering Services - Mechanical Engineering</option>
                                            <option value="Engineering Services - Project Management - Engineering">Engineering Services - Project Management - Engineering</option>
                                            <option value="Engineering Services - Structural Engineering">Engineering Services - Structural Engineering</option>
                                            <option value="Engineering Services - Supply of - Steel/Metals/Alloys/Mesh/Tube">Engineering Services - Supply of - Steel/Metals/Alloys/Mesh/Tube</option>
                                            <option value="Engineering Services - Tools & Supplies">Engineering Services - Tools &amp; Supplies</option>
                                            <option value="Engineering Services - Welding Services">Engineering Services - Welding Services</option>
                                            <option value="Entertainment - Casino">Entertainment - Casino</option>
                                            <option value="Entertainment - Gaming">Entertainment - Gaming</option>
                                            <option value="Environmental / Heritage / Conservation">Environmental / Heritage / Conservation</option>
                                            <option value="Environmental / Heritage / Conservation - Air Quality Monitoring">Environmental / Heritage / Conservation - Air Quality Monitoring</option>
                                            <option value="Environmental / Heritage / Conservation - Cultural Heritage / Arts / Interpretive Displays">Environmental / Heritage / Conservation - Cultural Heritage / Arts / Interpretive Displays</option>
                                            <option value="Environmental / Heritage / Conservation - Ecological Services">Environmental / Heritage / Conservation - Ecological Services</option>
                                            <option value="Environmental / Heritage / Conservation - Environmental - Consultancy">Environmental / Heritage / Conservation - Environmental - Consultancy</option>
                                            <option value="Environmental / Heritage / Conservation - Environmental - Research">Environmental / Heritage / Conservation - Environmental - Research</option>
                                            <option value="Environmental / Heritage / Conservation - Soil Testing">Environmental / Heritage / Conservation - Soil Testing</option>
                                            <option value="Environmental / Heritage / Conservation - Stormwater & Catchment Plans">Environmental / Heritage / Conservation - Stormwater &amp; Catchment Plans</option>
                                            <option value="Environmental / Heritage / Conservation - Water Monitoring & Testing Services">Environmental / Heritage / Conservation - Water Monitoring &amp; Testing Services</option>
                                            <option value="Environmental / Heritage / Conservation - Wetlands - Design & Construction">Environmental / Heritage / Conservation - Wetlands - Design &amp; Construction</option>
                                            <option value="Equipment Disposal">Equipment Disposal</option>
                                            <option value="Equipment Disposal - Auction Services - Asset Disposals">Equipment Disposal - Auction Services - Asset Disposals</option>
                                            <option value="Equipment Disposal - Equipment - Used">Equipment Disposal - Equipment - Used</option>
                                            <option value="Equipment Disposal - Heavy Machinery - Used">Equipment Disposal - Heavy Machinery - Used</option>
                                            <option value="Equipment Disposal - Plant - Used">Equipment Disposal - Plant - Used</option>
                                            <option value="Event Management">Event Management</option>
                                            <option value="Event Management - Accommodation Services">Event Management - Accommodation Services</option>
                                            <option value="Event Management - Conferences">Event Management - Conferences</option>
                                            <option value="Event Management - Equipment Hire">Event Management - Equipment Hire</option>
                                            <option value="Event Management - Expos & Exhibitions">Event Management - Expos &amp; Exhibitions</option>
                                            <option value="Event Management - Recreational Events">Event Management - Recreational Events</option>
                                            <option value="Facilities Management">Facilities Management</option>
                                            <option value="Facilities Management - Aged and Child Care Facilities">Facilities Management - Aged and Child Care Facilities</option>
                                            <option value="Facilities Management - Aquatic Centres">Facilities Management - Aquatic Centres</option>
                                            <option value="Facilities Management - Carparking & Toll Booths">Facilities Management - Carparking &amp; Toll Booths</option>
                                            <option value="Facilities Management - Community Facilities">Facilities Management - Community Facilities</option>
                                            <option value="Facilities Management - Correctional & Prison Facilities">Facilities Management - Correctional &amp; Prison Facilities</option>
                                            <option value="Facilities Management - Defence & Science Related Facilities">Facilities Management - Defence &amp; Science Related Facilities</option>
                                            <option value="Facilities Management - Educational Institutions">Facilities Management - Educational Institutions</option>
                                            <option value="Facilities Management - FM - Other">Facilities Management - FM - Other</option>
                                            <option value="Facilities Management - Food & Beverages Services">Facilities Management - Food &amp; Beverages Services</option>
                                            <option value="Facilities Management - Sport Centres">Facilities Management - Sport Centres</option>
                                            <option value="Facilities Management - Tourist Parks & Ventures">Facilities Management - Tourist Parks &amp; Ventures</option>
                                            <option value="Fencing">Fencing</option>
                                            <option value="Fencing - Fencing - Agricultural">Fencing - Fencing - Agricultural</option>
                                            <option value="Fencing - Fencing - Civil">Fencing - Fencing - Civil</option>
                                            <option value="Fencing - Fencing - Residential">Fencing - Fencing - Residential</option>
                                            <option value="Fencing - Fencing - Security">Fencing - Fencing - Security</option>
                                            <option value="Fencing - Fencing - Supplies">Fencing - Fencing - Supplies</option>
                                            <option value="Financial Services">Financial Services</option>
                                            <option value="Financial Services - Banking & Card Services">Financial Services - Banking &amp; Card Services</option>
                                            <option value="Financial Services - Debt Collection Services">Financial Services - Debt Collection Services</option>
                                            <option value="Financial Services - Equipment Leasing">Financial Services - Equipment Leasing</option>
                                            <option value="Financial Services - Financing - Loans & Debt">Financial Services - Financing - Loans &amp; Debt</option>
                                            <option value="Financial Services - Funding & Grants">Financial Services - Funding &amp; Grants</option>
                                            <option value="Financial Services - Insurance & Loss Assessors Services">Financial Services - Insurance &amp; Loss Assessors Services</option>
                                            <option value="Financial Services - Investment Management">Financial Services - Investment Management</option>
                                            <option value="Financial Services - Microfinance">Financial Services - Microfinance</option>
                                            <option value="Financial Services - Superannuation Management">Financial Services - Superannuation Management</option>
                                            <option value="Fisheries">Fisheries</option>
                                            <option value="Fisheries - Consultancy - Fishing Services">Fisheries - Consultancy - Fishing Services</option>
                                            <option value="Fisheries - Fishing Quotas">Fisheries - Fishing Quotas</option>
                                            <option value="Fisheries - Research & Surveys - Fisheries">Fisheries - Research &amp; Surveys - Fisheries</option>
                                            <option value="Forestry">Forestry</option>
                                            <option value="Forestry - Firewood - Supply">Forestry - Firewood - Supply</option>
                                            <option value="Forestry - Forestry Management">Forestry - Forestry Management</option>
                                            <option value="Forestry - Harvesting & Clearing">Forestry - Harvesting &amp; Clearing</option>
                                            <option value="Forestry - Log Haulage">Forestry - Log Haulage</option>
                                            <option value="Forestry - Planting">Forestry - Planting</option>
                                            <option value="Forestry - Pruning & Thinning">Forestry - Pruning &amp; Thinning</option>
                                            <option value="Forestry - Research & Surveys - Forestry">Forestry - Research &amp; Surveys - Forestry</option>
                                            <option value="Forestry - Sawmilling">Forestry - Sawmilling</option>
                                            <option value="Forestry - Stumpage">Forestry - Stumpage</option>
                                            <option value="Fuels & Oils">Fuels &amp; Oils</option>
                                            <option value="Fuels & Oils - Automotive Components">Fuels &amp; Oils - Automotive Components</option>
                                            <option value="Fuels & Oils - Biomass - Alternative Fuels">Fuels &amp; Oils - Biomass - Alternative Fuels</option>
                                            <option value="Fuels & Oils - Equipment - Supply">Fuels &amp; Oils - Equipment - Supply</option>
                                            <option value="Fuels & Oils - Equipment Maintenance">Fuels &amp; Oils - Equipment Maintenance</option>
                                            <option value="Fuels & Oils - Fuels">Fuels &amp; Oils - Fuels</option>
                                            <option value="Fuels & Oils - Gases">Fuels &amp; Oils - Gases</option>
                                            <option value="Fuels & Oils - Lubricants">Fuels &amp; Oils - Lubricants</option>
                                            <option value="Fuels & Oils - Oils">Fuels &amp; Oils - Oils</option>
                                            <option value="Fuels & Oils - Tanks - Manufacture & Supply">Fuels &amp; Oils - Tanks - Manufacture &amp; Supply</option>
                                            <option value="Government">Government</option>
                                            <option value="Grounds Maintenance">Grounds Maintenance</option>
                                            <option value="Grounds Maintenance - Bushland & Revegetation Works">Grounds Maintenance - Bushland &amp; Revegetation Works</option>
                                            <option value="Grounds Maintenance - Land Development">Grounds Maintenance - Land Development</option>
                                            <option value="Grounds Maintenance - Lawn Mowing & Gardening">Grounds Maintenance - Lawn Mowing &amp; Gardening</option>
                                            <option value="Grounds Maintenance - Parks & Reserves Maintenance">Grounds Maintenance - Parks &amp; Reserves Maintenance</option>
                                            <option value="Grounds Maintenance - Sportsfield Maintenance">Grounds Maintenance - Sportsfield Maintenance</option>
                                            <option value="Grounds Maintenance - Tree Pruning">Grounds Maintenance - Tree Pruning</option>
                                            <option value="Grounds Maintenance - Vegetation Control">Grounds Maintenance - Vegetation Control</option>
                                            <option value="Grounds Maintenance - Weed Control & Spraying">Grounds Maintenance - Weed Control &amp; Spraying</option>
                                            <option value="Health & Safety Management">Health &amp; Safety Management</option>
                                            <option value="Health & Safety Management - Audit & Inspection Services">Health &amp; Safety Management - Audit &amp; Inspection Services</option>
                                            <option value="Health & Safety Management - Consultancy - Health & Safety">Health &amp; Safety Management - Consultancy - Health &amp; Safety</option>
                                            <option value="Health & Safety Management - OH&S Equipment - Supply">Health &amp; Safety Management - OH&amp;S Equipment - Supply</option>
                                            <option value="Health & Safety Management - Training - Health & Safety">Health &amp; Safety Management - Training - Health &amp; Safety</option>
                                            <option value="Horticulture">Horticulture</option>
                                            <option value="Horticulture - Plants and Trees - Supply of">Horticulture - Plants and Trees - Supply of</option>
                                            <option value="Horticulture - Research & Surveys - Horticulture">Horticulture - Research &amp; Surveys - Horticulture</option>
                                            <option value="Hospitality & FMCG">Hospitality &amp; FMCG</option>
                                            <option value="Hospitality & FMCG - Beverages">Hospitality &amp; FMCG - Beverages</option>
                                            <option value="Hospitality & FMCG - Café">Hospitality &amp; FMCG - Café</option>
                                            <option value="Hospitality & FMCG - Cafe Leasing / Management">Hospitality &amp; FMCG - Cafe Leasing / Management</option>
                                            <option value="Hospitality & FMCG - Catering">Hospitality &amp; FMCG - Catering</option>
                                            <option value="Hospitality & FMCG - Dairy Products">Hospitality &amp; FMCG - Dairy Products</option>
                                            <option value="Hospitality & FMCG - Food Kiosks & Canteens">Hospitality &amp; FMCG - Food Kiosks &amp; Canteens</option>
                                            <option value="Hospitality & FMCG - Fruit & Vegetables">Hospitality &amp; FMCG - Fruit &amp; Vegetables</option>
                                            <option value="Hospitality & FMCG - Groceries & Confectionery">Hospitality &amp; FMCG - Groceries &amp; Confectionery</option>
                                            <option value="Hospitality & FMCG - Meat & Poultry & Fish">Hospitality &amp; FMCG - Meat &amp; Poultry &amp; Fish</option>
                                            <option value="Hospitality & FMCG - Resort">Hospitality &amp; FMCG - Resort</option>
                                            <option value="Hospitality & FMCG - Smallgoods">Hospitality &amp; FMCG - Smallgoods</option>
                                            <option value="Hospitality & FMCG - Supply of Equipment & Supplies">Hospitality &amp; FMCG - Supply of Equipment &amp; Supplies</option>
                                            <option value="Household Goods">Household Goods</option>
                                            <option value="Household Goods - Floor Coverings">Household Goods - Floor Coverings</option>
                                            <option value="Household Goods - Furnishings">Household Goods - Furnishings</option>
                                            <option value="Household Goods - Whiteware">Household Goods - Whiteware</option>
                                            <option value="Industrial Chemicals">Industrial Chemicals</option>
                                            <option value="Industrial Chemicals - Agricultural Chemicals">Industrial Chemicals - Agricultural Chemicals</option>
                                            <option value="Industrial Chemicals - Cleaning Chemicals">Industrial Chemicals - Cleaning Chemicals</option>
                                            <option value="Industrial Chemicals - Detergents">Industrial Chemicals - Detergents</option>
                                            <option value="Industrial Chemicals - Pool Chemicals">Industrial Chemicals - Pool Chemicals</option>
                                            <option value="Industrial Chemicals - Water Treatment Chemicals">Industrial Chemicals - Water Treatment Chemicals</option>
                                            <option value="Information Technology">Information Technology</option>
                                            <option value="Information Technology - Consultancy & Project Management">Information Technology - Consultancy &amp; Project Management</option>
                                            <option value="Information Technology - Database Management">Information Technology - Database Management</option>
                                            <option value="Information Technology - Document & Records Management">Information Technology - Document &amp; Records Management</option>
                                            <option value="Information Technology - Hardware">Information Technology - Hardware</option>
                                            <option value="Information Technology - Imaging and Scanning Services">Information Technology - Imaging and Scanning Services</option>
                                            <option value="Information Technology - Internet Consultancy">Information Technology - Internet Consultancy</option>
                                            <option value="Information Technology - Leasing & Finance">Information Technology - Leasing &amp; Finance</option>
                                            <option value="Information Technology - Maintenance & Support Services">Information Technology - Maintenance &amp; Support Services</option>
                                            <option value="Information Technology - Mapping/GIS/SIS/CAD Services">Information Technology - Mapping/GIS/SIS/CAD Services</option>
                                            <option value="Information Technology - Multi Media - Production">Information Technology - Multi Media - Production</option>
                                            <option value="Information Technology - Networking - LAN/WAN & Management">Information Technology - Networking - LAN/WAN &amp; Management</option>
                                            <option value="Information Technology - Peripherals">Information Technology - Peripherals</option>
                                            <option value="Information Technology - Security">Information Technology - Security</option>
                                            <option value="Information Technology - Smartcard Systems">Information Technology - Smartcard Systems</option>
                                            <option value="Information Technology - Software - Packaged & Licences">Information Technology - Software - Packaged &amp; Licences</option>
                                            <option value="Information Technology - Software & Applications Development">Information Technology - Software &amp; Applications Development</option>
                                            <option value="Information Technology - Training & Support Services">Information Technology - Training &amp; Support Services</option>
                                            <option value="Information Technology - Web Development">Information Technology - Web Development</option>
                                            <option value="Landscaping">Landscaping</option>
                                            <option value="Landscaping - Arboriculture">Landscaping - Arboriculture</option>
                                            <option value="Landscaping - Design Services - Landscaping">Landscaping - Design Services - Landscaping</option>
                                            <option value="Landscaping - Laying of Paving Stones">Landscaping - Laying of Paving Stones</option>
                                            <option value="Landscaping - Physical Works - Landscaping">Landscaping - Physical Works - Landscaping</option>
                                            <option value="Landscaping - Silviculture">Landscaping - Silviculture</option>
                                            <option value="Landscaping - Supply of Soils & Products">Landscaping - Supply of Soils &amp; Products</option>
                                            <option value="Machinery & Equipment">Machinery &amp; Equipment</option>
                                            <option value="Machinery & Equipment - Compressors/Generators & Motorised Equipment">Machinery &amp; Equipment - Compressors/Generators &amp; Motorised Equipment</option>
                                            <option value="Machinery & Equipment - Industrial Machinery & Equipment">Machinery &amp; Equipment - Industrial Machinery &amp; Equipment</option>
                                            <option value="Machinery & Equipment - Laundering Equipment">Machinery &amp; Equipment - Laundering Equipment</option>
                                            <option value="Machinery & Equipment - Woodworking Equipment">Machinery &amp; Equipment - Woodworking Equipment</option>
                                            <option value="Marketing Services">Marketing Services</option>
                                            <option value="Marketing Services - Brand & Identity Management">Marketing Services - Brand &amp; Identity Management</option>
                                            <option value="Marketing Services - Campaign Management">Marketing Services - Campaign Management</option>
                                            <option value="Marketing Services - Consultancy - Marketing Services">Marketing Services - Consultancy - Marketing Services</option>
                                            <option value="Marketing Services - Direct Marketing Services">Marketing Services - Direct Marketing Services</option>
                                            <option value="Marketing Services - Mailhouse Fulfilment">Marketing Services - Mailhouse Fulfilment</option>
                                            <option value="Marketing Services - Market Research & Surveys">Marketing Services - Market Research &amp; Surveys</option>
                                            <option value="Marketing Services - Public Relations">Marketing Services - Public Relations</option>
                                            <option value="Marketing Services - Sponsorship & Fundraising">Marketing Services - Sponsorship &amp; Fundraising</option>
                                            <option value="Marketing Services - Telemarketing Services">Marketing Services - Telemarketing Services</option>
                                            <option value="Marketing Services - Tourism">Marketing Services - Tourism</option>
                                            <option value="Materials Handling Equipment">Materials Handling Equipment</option>
                                            <option value="Materials Handling Equipment - Conveyor Systems">Materials Handling Equipment - Conveyor Systems</option>
                                            <option value="Materials Handling Equipment - Lifting Equipment">Materials Handling Equipment - Lifting Equipment</option>
                                            <option value="Mechanical Services & Equipment">Mechanical Services &amp; Equipment</option>
                                            <option value="Mechanical Services & Equipment - Air Conditioning & Cooling Systems">Mechanical Services &amp; Equipment - Air Conditioning &amp; Cooling Systems</option>
                                            <option value="Mechanical Services & Equipment - Building Management Systems">Mechanical Services &amp; Equipment - Building Management Systems</option>
                                            <option value="Mechanical Services & Equipment - Elevators & Lifts">Mechanical Services &amp; Equipment - Elevators &amp; Lifts</option>
                                            <option value="Mechanical Services & Equipment - Heating">Mechanical Services &amp; Equipment - Heating</option>
                                            <option value="Mechanical Services & Equipment - Hydraulic Services">Mechanical Services &amp; Equipment - Hydraulic Services</option>
                                            <option value="Mechanical Services & Equipment - Maintenance">Mechanical Services &amp; Equipment - Maintenance</option>
                                            <option value="Mechanical Services & Equipment - Refrigeration">Mechanical Services &amp; Equipment - Refrigeration</option>
                                            <option value="Mechanical Services & Equipment - Supply of Equipment">Mechanical Services &amp; Equipment - Supply of Equipment</option>
                                            <option value="Mechanical Services & Equipment - Ventilation">Mechanical Services &amp; Equipment - Ventilation</option>
                                            <option value="Medical & Healthcare">Medical &amp; Healthcare</option>
                                            <option value="Medical & Healthcare - Aged Care">Medical &amp; Healthcare - Aged Care</option>
                                            <option value="Medical & Healthcare - Counselling Services">Medical &amp; Healthcare - Counselling Services</option>
                                            <option value="Medical & Healthcare - Dental Services/Equipment/Supplies">Medical &amp; Healthcare - Dental Services/Equipment/Supplies</option>
                                            <option value="Medical & Healthcare - Health Consultancy Services">Medical &amp; Healthcare - Health Consultancy Services</option>
                                            <option value="Medical & Healthcare - Healthcare Providers">Medical &amp; Healthcare - Healthcare Providers</option>
                                            <option value="Medical & Healthcare - Medical - IT Systems">Medical &amp; Healthcare - Medical - IT Systems</option>
                                            <option value="Medical & Healthcare - Medical - Testing & Maintenance">Medical &amp; Healthcare - Medical - Testing &amp; Maintenance</option>
                                            <option value="Medical & Healthcare - Medical Equipment">Medical &amp; Healthcare - Medical Equipment</option>
                                            <option value="Medical & Healthcare - Medical Furniture">Medical &amp; Healthcare - Medical Furniture</option>
                                            <option value="Medical & Healthcare - Medical Supplies">Medical &amp; Healthcare - Medical Supplies</option>
                                            <option value="Medical & Healthcare - Medical Waste">Medical &amp; Healthcare - Medical Waste</option>
                                            <option value="Medical & Healthcare - Pharmaceuticals">Medical &amp; Healthcare - Pharmaceuticals</option>
                                            <option value="Medical & Healthcare - Research & Surveys - Health">Medical &amp; Healthcare - Research &amp; Surveys - Health</option>
                                            <option value="Miscellaneous Equipment">Miscellaneous Equipment</option>
                                            <option value="Miscellaneous Equipment - Firearms & Equipment Supply">Miscellaneous Equipment - Firearms &amp; Equipment Supply</option>
                                            <option value="Miscellaneous Equipment - Laboratory Equipment">Miscellaneous Equipment - Laboratory Equipment</option>
                                            <option value="Miscellaneous Equipment - Library Equipment & Supplies">Miscellaneous Equipment - Library Equipment &amp; Supplies</option>
                                            <option value="Miscellaneous Equipment - Navigation Equipment">Miscellaneous Equipment - Navigation Equipment</option>
                                            <option value="Miscellaneous Equipment - Printing Equipment">Miscellaneous Equipment - Printing Equipment</option>
                                            <option value="Miscellaneous Equipment - Seismological Equipment">Miscellaneous Equipment - Seismological Equipment</option>
                                            <option value="Miscellaneous Equipment - Simulation Equipment (All)">Miscellaneous Equipment - Simulation Equipment (All)</option>
                                            <option value="Miscellaneous Equipment - Speed Cameras and Detection Equipment">Miscellaneous Equipment - Speed Cameras and Detection Equipment</option>
                                            <option value="Miscellaneous Equipment - Sports & Gym Equipment">Miscellaneous Equipment - Sports &amp; Gym Equipment</option>
                                            <option value="Miscellaneous Equipment - Surveying Equipment">Miscellaneous Equipment - Surveying Equipment</option>
                                            <option value="Miscellaneous Equipment - Weighing & Scales">Miscellaneous Equipment - Weighing &amp; Scales</option>
                                            <option value="Office Supplies & Equipment">Office Supplies &amp; Equipment</option>
                                            <option value="Office Supplies & Equipment - Office Consumables">Office Supplies &amp; Equipment - Office Consumables</option>
                                            <option value="Office Supplies & Equipment - Office Equipment">Office Supplies &amp; Equipment - Office Equipment</option>
                                            <option value="Office Supplies & Equipment - Office Furniture">Office Supplies &amp; Equipment - Office Furniture</option>
                                            <option value="Office Supplies & Equipment - Seating (Indoor & Outdoor)">Office Supplies &amp; Equipment - Seating (Indoor &amp; Outdoor)</option>
                                            <option value="Office Supplies & Equipment - Shelving & Storage Systems">Office Supplies &amp; Equipment - Shelving &amp; Storage Systems</option>
                                            <option value="Office Supplies & Equipment - Stationery">Office Supplies &amp; Equipment - Stationery</option>
                                            <option value="Packaging & Paper Supplies">Packaging &amp; Paper Supplies</option>
                                            <option value="Packaging & Paper Supplies - Cardboard">Packaging &amp; Paper Supplies - Cardboard</option>
                                            <option value="Packaging & Paper Supplies - Newsprint">Packaging &amp; Paper Supplies - Newsprint</option>
                                            <option value="Packaging & Paper Supplies - Paper">Packaging &amp; Paper Supplies - Paper</option>
                                            <option value="Packaging & Paper Supplies - Paper Bags">Packaging &amp; Paper Supplies - Paper Bags</option>
                                            <option value="Packaging & Paper Supplies - Plastic">Packaging &amp; Paper Supplies - Plastic</option>
                                            <option value="Packaging & Paper Supplies - Refuse Bags">Packaging &amp; Paper Supplies - Refuse Bags</option>
                                            <option value="Painting & Corrosion">Painting &amp; Corrosion</option>
                                            <option value="Painting & Corrosion - Cathodic Protection Works">Painting &amp; Corrosion - Cathodic Protection Works</option>
                                            <option value="Painting & Corrosion - Commercial Painting">Painting &amp; Corrosion - Commercial Painting</option>
                                            <option value="Painting & Corrosion - Domestic Painting">Painting &amp; Corrosion - Domestic Painting</option>
                                            <option value="Painting & Corrosion - Paint Supplies">Painting &amp; Corrosion - Paint Supplies</option>
                                            <option value="Painting & Corrosion - Protective Coatings">Painting &amp; Corrosion - Protective Coatings</option>
                                            <option value="Painting & Corrosion - Sandblasting">Painting &amp; Corrosion - Sandblasting</option>
                                            <option value="Painting & Corrosion - Waterblasting">Painting &amp; Corrosion - Waterblasting</option>
                                            <option value="Painting & Corrosion - Waterproofing & Rendering">Painting &amp; Corrosion - Waterproofing &amp; Rendering</option>
                                            <option value="Pest Control">Pest Control</option>
                                            <option value="Pest Control - Animal Control / Pounds">Pest Control - Animal Control / Pounds</option>
                                            <option value="Pest Control - Fumigation Services">Pest Control - Fumigation Services</option>
                                            <option value="Pest Control - Research & Surveys">Pest Control - Research &amp; Surveys</option>
                                            <option value="Pest Control - Rodents & Other Pests">Pest Control - Rodents &amp; Other Pests</option>
                                            <option value="Pest Control - Vector Control">Pest Control - Vector Control</option>
                                            <option value="Pest Control - Vector Monitoring">Pest Control - Vector Monitoring</option>
                                            <option value="Photography">Photography</option>
                                            <option value="Photography - Photographic Equipment">Photography - Photographic Equipment</option>
                                            <option value="Photography - Photographic Supplies">Photography - Photographic Supplies</option>
                                            <option value="Photography - Photography Services">Photography - Photography Services</option>
                                            <option value="Pipe Supply">Pipe Supply</option>
                                            <option value="Pipe Supply - Concrete Pipes">Pipe Supply - Concrete Pipes</option>
                                            <option value="Pipe Supply - PE Pipes">Pipe Supply - PE Pipes</option>
                                            <option value="Pipe Supply - PVC Pipes">Pipe Supply - PVC Pipes</option>
                                            <option value="Pipe Supply - Steel Pipes">Pipe Supply - Steel Pipes</option>
                                            <option value="Pipe Supply - Traps / Grates / Covers">Pipe Supply - Traps / Grates / Covers</option>
                                            <option value="Pipe Supply - Valves & Fittings">Pipe Supply - Valves &amp; Fittings</option>
                                            <option value="Plant & Labour Hire">Plant &amp; Labour Hire</option>
                                            <option value="Plant & Labour Hire - Labour Hire">Plant &amp; Labour Hire - Labour Hire</option>
                                            <option value="Plant & Labour Hire - Plant Hire">Plant &amp; Labour Hire - Plant Hire</option>
                                            <option value="Printing">Printing</option>
                                            <option value="Printing - Book Binding & Repair Services">Printing - Book Binding &amp; Repair Services</option>
                                            <option value="Printing - Books">Printing - Books</option>
                                            <option value="Printing - Desktop Publishing">Printing - Desktop Publishing</option>
                                            <option value="Printing - Editorial & Writing Services">Printing - Editorial &amp; Writing Services</option>
                                            <option value="Printing - General Print">Printing - General Print</option>
                                            <option value="Printing - Graphic Design">Printing - Graphic Design</option>
                                            <option value="Printing - Labels & Tags">Printing - Labels &amp; Tags</option>
                                            <option value="Printing - Laser Printing (High Speed)">Printing - Laser Printing (High Speed)</option>
                                            <option value="Printing - Magazines">Printing - Magazines</option>
                                            <option value="Printing - Newspapers">Printing - Newspapers</option>
                                            <option value="Printing - Photocopying Services">Printing - Photocopying Services</option>
                                            <option value="Printing - Print Management">Printing - Print Management</option>
                                            <option value="Printing - Printing Inks & Supplies">Printing - Printing Inks &amp; Supplies</option>
                                            <option value="Printing - Security Printing">Printing - Security Printing</option>
                                            <option value="Property & Realty Services">Property &amp; Realty Services</option>
                                            <option value="Property & Realty Services - Auction & Realty Services">Property &amp; Realty Services - Auction &amp; Realty Services</option>
                                            <option value="Property & Realty Services - Property Audit & Inspection Services">Property &amp; Realty Services - Property Audit &amp; Inspection Services</option>
                                            <option value="Property & Realty Services - Property Developers / Investors">Property &amp; Realty Services - Property Developers / Investors</option>
                                            <option value="Property & Realty Services - Property Maintenance">Property &amp; Realty Services - Property Maintenance</option>
                                            <option value="Property & Realty Services - Property Management">Property &amp; Realty Services - Property Management</option>
                                            <option value="Public Private Partnerships (PPPs)">Public Private Partnerships (PPPs)</option>
                                            <option value="Public Private Partnerships (PPPs) - Build/Own/Operate/Transfer (BOOT)">Public Private Partnerships (PPPs) - Build/Own/Operate/Transfer (BOOT)</option>
                                            <option value="Public Private Partnerships (PPPs) - Building & Construction Works">Public Private Partnerships (PPPs) - Building &amp; Construction Works</option>
                                            <option value="Public Private Partnerships (PPPs) - Civil Infrastructure">Public Private Partnerships (PPPs) - Civil Infrastructure</option>
                                            <option value="Public Private Partnerships (PPPs) - Civil Roading">Public Private Partnerships (PPPs) - Civil Roading</option>
                                            <option value="Public Private Partnerships (PPPs) - Rail & Passenger Transport">Public Private Partnerships (PPPs) - Rail &amp; Passenger Transport</option>
                                            <option value="Quarrying / Oil / Mining">Quarrying / Oil / Mining</option>
                                            <option value="Quarrying / Oil / Mining - Coal & Mineral Resources">Quarrying / Oil / Mining - Coal &amp; Mineral Resources</option>
                                            <option value="Quarrying / Oil / Mining - Maintenance of Equipment & Plant">Quarrying / Oil / Mining - Maintenance of Equipment &amp; Plant</option>
                                            <option value="Quarrying / Oil / Mining - Metal and Rock - Supply">Quarrying / Oil / Mining - Metal and Rock - Supply</option>
                                            <option value="Quarrying / Oil / Mining - Mining">Quarrying / Oil / Mining - Mining</option>
                                            <option value="Quarrying / Oil / Mining - Oil Exploration">Quarrying / Oil / Mining - Oil Exploration</option>
                                            <option value="Quarrying / Oil / Mining - Quarrying">Quarrying / Oil / Mining - Quarrying</option>
                                            <option value="Quarrying / Oil / Mining - Quarrying & Mining Equipment">Quarrying / Oil / Mining - Quarrying &amp; Mining Equipment</option>
                                            <option value="Quarrying / Oil / Mining - Sand - Supply">Quarrying / Oil / Mining - Sand - Supply</option>
                                            <option value="Recruitment & HR Services">Recruitment &amp; HR Services</option>
                                            <option value="Recruitment & HR Services - Consultancy - Human Resources">Recruitment &amp; HR Services - Consultancy - Human Resources</option>
                                            <option value="Recruitment & HR Services - Employee Assistance Programmes">Recruitment &amp; HR Services - Employee Assistance Programmes</option>
                                            <option value="Recruitment & HR Services - Payroll Services">Recruitment &amp; HR Services - Payroll Services</option>
                                            <option value="Recruitment & HR Services - Recruitment Services">Recruitment &amp; HR Services - Recruitment Services</option>
                                            <option value="Recruitment & HR Services - Research & Studies - HR">Recruitment &amp; HR Services - Research &amp; Studies - HR</option>
                                            <option value="Recruitment & HR Services - Salary Packaging Services">Recruitment &amp; HR Services - Salary Packaging Services</option>
                                            <option value="Scientific & Research">Scientific &amp; Research</option>
                                            <option value="Scientific & Research - Equipment">Scientific &amp; Research - Equipment</option>
                                            <option value="Scientific & Research - Laboratory Chemicals & Solvents">Scientific &amp; Research - Laboratory Chemicals &amp; Solvents</option>
                                            <option value="Scientific & Research - Research">Scientific &amp; Research - Research</option>
                                            <option value="Security & Fire">Security &amp; Fire</option>
                                            <option value="Security & Fire - Access Control Systems">Security &amp; Fire - Access Control Systems</option>
                                            <option value="Security & Fire - Alarms & Sprinklers">Security &amp; Fire - Alarms &amp; Sprinklers</option>
                                            <option value="Security & Fire - Cash Transit Services">Security &amp; Fire - Cash Transit Services</option>
                                            <option value="Security & Fire - CCTV">Security &amp; Fire - CCTV</option>
                                            <option value="Security & Fire - Consultancy - Fire & Security">Security &amp; Fire - Consultancy - Fire &amp; Security</option>
                                            <option value="Security & Fire - Document Destruction">Security &amp; Fire - Document Destruction</option>
                                            <option value="Security & Fire - Fire Equipment">Security &amp; Fire - Fire Equipment</option>
                                            <option value="Security & Fire - Guards & Patrols">Security &amp; Fire - Guards &amp; Patrols</option>
                                            <option value="Security & Fire - Investigation & Surveillance Services">Security &amp; Fire - Investigation &amp; Surveillance Services</option>
                                            <option value="Security & Fire - Locksmith Services">Security &amp; Fire - Locksmith Services</option>
                                            <option value="Security & Fire - Maintenance Services">Security &amp; Fire - Maintenance Services</option>
                                            <option value="Security & Fire - Monitoring Services">Security &amp; Fire - Monitoring Services</option>
                                            <option value="Security & Fire - Noise Control Services">Security &amp; Fire - Noise Control Services</option>
                                            <option value="Security & Fire - Records Management Services">Security &amp; Fire - Records Management Services</option>
                                            <option value="Security & Fire - Security Screens & Gates">Security &amp; Fire - Security Screens &amp; Gates</option>
                                            <option value="Shipping">Shipping</option>
                                            <option value="Shipping - Container Services">Shipping - Container Services</option>
                                            <option value="Shipping - Harbour Dredging">Shipping - Harbour Dredging</option>
                                            <option value="Shipping - Harbour Management Services">Shipping - Harbour Management Services</option>
                                            <option value="Shipping - Sea Freight">Shipping - Sea Freight</option>
                                            <option value="Shipping - Ship Chandlers">Shipping - Ship Chandlers</option>
                                            <option value="Shipping - Ship Maintenance">Shipping - Ship Maintenance</option>
                                            <option value="Shipping - Vessel Hire">Shipping - Vessel Hire</option>
                                            <option value="Shipping - Vessel Manufacture / Supply">Shipping - Vessel Manufacture / Supply</option>
                                            <option value="Sign Manufacturing & Signwriting">Sign Manufacturing &amp; Signwriting</option>
                                            <option value="Sign Manufacturing & Signwriting - Artworks, Murals & Paintings">Sign Manufacturing &amp; Signwriting - Artworks, Murals &amp; Paintings</option>
                                            <option value="Sign Manufacturing & Signwriting - LED & Sign Indicators">Sign Manufacturing &amp; Signwriting - LED &amp; Sign Indicators</option>
                                            <option value="Sign Manufacturing & Signwriting - Road Signs">Sign Manufacturing &amp; Signwriting - Road Signs</option>
                                            <option value="Sign Manufacturing & Signwriting - Signage - Other">Sign Manufacturing &amp; Signwriting - Signage - Other</option>
                                            <option value="Sign Manufacturing & Signwriting - Signwriting">Sign Manufacturing &amp; Signwriting - Signwriting</option>
                                            <option value="Social Services">Social Services</option>
                                            <option value="Social Services - Accommodation & Services">Social Services - Accommodation &amp; Services</option>
                                            <option value="Social Services - Consultancy - Social Services">Social Services - Consultancy - Social Services</option>
                                            <option value="Social Services - Disability Support Services">Social Services - Disability Support Services</option>
                                            <option value="Social Services - Drug & Alcohol Services">Social Services - Drug &amp; Alcohol Services</option>
                                            <option value="Social Services - Policy Development">Social Services - Policy Development</option>
                                            <option value="Social Services - Rehabilitation Services">Social Services - Rehabilitation Services</option>
                                            <option value="Social Services - Research & Surveys - Social Services">Social Services - Research &amp; Surveys - Social Services</option>
                                            <option value="Social Services - Respite Programs / Homecare Assistance">Social Services - Respite Programs / Homecare Assistance</option>
                                            <option value="Social Services - Youth Support Services">Social Services - Youth Support Services</option>
                                            <option value="Telecommunications">Telecommunications</option>
                                            <option value="Telecommunications - Bill Management & Bureau Services">Telecommunications - Bill Management &amp; Bureau Services</option>
                                            <option value="Telecommunications - Broadcasting Equipment">Telecommunications - Broadcasting Equipment</option>
                                            <option value="Telecommunications - Call Centres">Telecommunications - Call Centres</option>
                                            <option value="Telecommunications - Communications Hardware">Telecommunications - Communications Hardware</option>
                                            <option value="Telecommunications - Consultancy - Telecommunications">Telecommunications - Consultancy - Telecommunications</option>
                                            <option value="Telecommunications - GPS and Tracking Devices">Telecommunications - GPS and Tracking Devices</option>
                                            <option value="Telecommunications - ISPs & Hosted Data Services">Telecommunications - ISPs &amp; Hosted Data Services</option>
                                            <option value="Telecommunications - Maintenance & Support">Telecommunications - Maintenance &amp; Support</option>
                                            <option value="Telecommunications - Mobile Services">Telecommunications - Mobile Services</option>
                                            <option value="Telecommunications - Phone/PABX/Paging Systems">Telecommunications - Phone/PABX/Paging Systems</option>
                                            <option value="Telecommunications - Radio - Telecommunications">Telecommunications - Radio - Telecommunications</option>
                                            <option value="Telecommunications - Satellite & Microwave">Telecommunications - Satellite &amp; Microwave</option>
                                            <option value="Telecommunications - Telephone Answering Services">Telecommunications - Telephone Answering Services</option>
                                            <option value="Telecommunications - Telephony Carriage & Services">Telecommunications - Telephony Carriage &amp; Services</option>
                                            <option value="Telecommunications - UHF & VHF Supply">Telecommunications - UHF &amp; VHF Supply</option>
                                            <option value="Telecommunications - Voice and Data Networks">Telecommunications - Voice and Data Networks</option>
                                            <option value="Training & Development">Training &amp; Development</option>
                                            <option value="Training & Development - Consultancy - Training">Training &amp; Development - Consultancy - Training</option>
                                            <option value="Training & Development - Personal Development">Training &amp; Development - Personal Development</option>
                                            <option value="Training & Development - Research & Studies - Training">Training &amp; Development - Research &amp; Studies - Training</option>
                                            <option value="Training & Development - Staff Development">Training &amp; Development - Staff Development</option>
                                            <option value="Training & Development - Training">Training &amp; Development - Training</option>
                                            <option value="Transportation & Logistics">Transportation &amp; Logistics</option>
                                            <option value="Transportation & Logistics - Business Relocation">Transportation &amp; Logistics - Business Relocation</option>
                                            <option value="Transportation & Logistics - Cartage - Chilled Goods">Transportation &amp; Logistics - Cartage - Chilled Goods</option>
                                            <option value="Transportation & Logistics - Cartage - Hazardous Goods">Transportation &amp; Logistics - Cartage - Hazardous Goods</option>
                                            <option value="Transportation & Logistics - Cartage - Livestock">Transportation &amp; Logistics - Cartage - Livestock</option>
                                            <option value="Transportation & Logistics - Consultancy - Transport">Transportation &amp; Logistics - Consultancy - Transport</option>
                                            <option value="Transportation & Logistics - Corporate Travel Services">Transportation &amp; Logistics - Corporate Travel Services</option>
                                            <option value="Transportation & Logistics - Courier Services">Transportation &amp; Logistics - Courier Services</option>
                                            <option value="Transportation & Logistics - Electricity - Supply of">Transportation &amp; Logistics - Electricity - Supply of</option>
                                            <option value="Transportation & Logistics - Energy - Alternative & Hybrid Power Systems">Transportation &amp; Logistics - Energy - Alternative &amp; Hybrid Power Systems</option>
                                            <option value="Transportation & Logistics - Energy - Construction Works">Transportation &amp; Logistics - Energy - Construction Works</option>
                                            <option value="Transportation & Logistics - Energy - Consultancy">Transportation &amp; Logistics - Energy - Consultancy</option>
                                            <option value="Transportation & Logistics - Energy - Design Services">Transportation &amp; Logistics - Energy - Design Services</option>
                                            <option value="Transportation & Logistics - Energy - Equipment supply">Transportation &amp; Logistics - Energy - Equipment supply</option>
                                            <option value="Transportation & Logistics - Energy - Maintenance & Repairs">Transportation &amp; Logistics - Energy - Maintenance &amp; Repairs</option>
                                            <option value="Transportation & Logistics - Energy - Management Services">Transportation &amp; Logistics - Energy - Management Services</option>
                                            <option value="Transportation & Logistics - Energy - Testing & Lab Services">Transportation &amp; Logistics - Energy - Testing &amp; Lab Services</option>
                                            <option value="Transportation & Logistics - Energy & Water">Transportation &amp; Logistics - Energy &amp; Water</option>
                                            <option value="Transportation & Logistics - Ferry Transportation">Transportation &amp; Logistics - Ferry Transportation</option>
                                            <option value="Transportation & Logistics - Freight - Air">Transportation &amp; Logistics - Freight - Air</option>
                                            <option value="Transportation & Logistics - Freight - Rail">Transportation &amp; Logistics - Freight - Rail</option>
                                            <option value="Transportation & Logistics - Gas - Supply of">Transportation &amp; Logistics - Gas - Supply of</option>
                                            <option value="Transportation & Logistics - Generators">Transportation &amp; Logistics - Generators</option>
                                            <option value="Transportation & Logistics - Heavy Haulage">Transportation &amp; Logistics - Heavy Haulage</option>
                                            <option value="Transportation & Logistics - Household Removal">Transportation &amp; Logistics - Household Removal</option>
                                            <option value="Transportation & Logistics - Logistics">Transportation &amp; Logistics - Logistics</option>
                                            <option value="Transportation & Logistics - Passenger - Air">Transportation &amp; Logistics - Passenger - Air</option>
                                            <option value="Transportation & Logistics - Passenger - Bus">Transportation &amp; Logistics - Passenger - Bus</option>
                                            <option value="Transportation & Logistics - Passenger - Rail">Transportation &amp; Logistics - Passenger - Rail</option>
                                            <option value="Transportation & Logistics - Passenger - Urban">Transportation &amp; Logistics - Passenger - Urban</option>
                                            <option value="Transportation & Logistics - Postal & Mailroom Delivery Services">Transportation &amp; Logistics - Postal &amp; Mailroom Delivery Services</option>
                                            <option value="Transportation & Logistics - Rail - Construction & Maintenance">Transportation &amp; Logistics - Rail - Construction &amp; Maintenance</option>
                                            <option value="Transportation & Logistics - Rail - Infrastructure Design">Transportation &amp; Logistics - Rail - Infrastructure Design</option>
                                            <option value="Transportation & Logistics - Research & Surveys - Transport">Transportation &amp; Logistics - Research &amp; Surveys - Transport</option>
                                            <option value="Transportation & Logistics - Traffic Flow Surveys">Transportation &amp; Logistics - Traffic Flow Surveys</option>
                                            <option value="Transportation & Logistics - Warehousing">Transportation &amp; Logistics - Warehousing</option>
                                            <option value="Transportation & Logistics - Water">Transportation &amp; Logistics - Water</option>
                                            <option value="Transportation & Logistics - Water & Energy Meter Reading">Transportation &amp; Logistics - Water &amp; Energy Meter Reading</option>
                                            <option value="Transportation & Logistics - Water & Energy Meters">Transportation &amp; Logistics - Water &amp; Energy Meters</option>
                                            <option value="Valuation Services">Valuation Services</option>
                                            <option value="Valuation Services - Assets & Other">Valuation Services - Assets &amp; Other</option>
                                            <option value="Valuation Services - Business Valuation Services">Valuation Services - Business Valuation Services</option>
                                            <option value="Valuation Services - Commercial Property">Valuation Services - Commercial Property</option>
                                            <option value="Valuation Services - Housing - Valuation Services">Valuation Services - Housing - Valuation Services</option>
                                            <option value="Valuation Services - Plant & Heavy Machinery Valuations">Valuation Services - Plant &amp; Heavy Machinery Valuations</option>
                                            <option value="Vehicles & Heavy Plant">Vehicles &amp; Heavy Plant</option>
                                            <option value="Vehicles & Heavy Plant - Automotive Parts & Equipment">Vehicles &amp; Heavy Plant - Automotive Parts &amp; Equipment</option>
                                            <option value="Vehicles & Heavy Plant - Batteries - Supply of">Vehicles &amp; Heavy Plant - Batteries - Supply of</option>
                                            <option value="Vehicles & Heavy Plant - Coachbuilding & Buses">Vehicles &amp; Heavy Plant - Coachbuilding &amp; Buses</option>
                                            <option value="Vehicles & Heavy Plant - Garbage & Compaction Units">Vehicles &amp; Heavy Plant - Garbage &amp; Compaction Units</option>
                                            <option value="Vehicles & Heavy Plant - Heavy Plant & Machinery - New">Vehicles &amp; Heavy Plant - Heavy Plant &amp; Machinery - New</option>
                                            <option value="Vehicles & Heavy Plant - Tractors & Mowers">Vehicles &amp; Heavy Plant - Tractors &amp; Mowers</option>
                                            <option value="Vehicles & Heavy Plant - Trailers - Supply">Vehicles &amp; Heavy Plant - Trailers - Supply</option>
                                            <option value="Vehicles & Heavy Plant - Transport & Towing Services">Vehicles &amp; Heavy Plant - Transport &amp; Towing Services</option>
                                            <option value="Vehicles & Heavy Plant - Trucks - New (heavy over 4.0T)">Vehicles &amp; Heavy Plant - Trucks - New (heavy over 4.0T)</option>
                                            <option value="Vehicles & Heavy Plant - Trucks - New (light up to 4.0T)">Vehicles &amp; Heavy Plant - Trucks - New (light up to 4.0T)</option>
                                            <option value="Vehicles & Heavy Plant - Trucks - Used">Vehicles &amp; Heavy Plant - Trucks - Used</option>
                                            <option value="Vehicles & Heavy Plant - Tyres - Supply of">Vehicles &amp; Heavy Plant - Tyres - Supply of</option>
                                            <option value="Vehicles & Heavy Plant - Vehicle Fleet Management">Vehicles &amp; Heavy Plant - Vehicle Fleet Management</option>
                                            <option value="Vehicles & Heavy Plant - Vehicle Leasing & Rental">Vehicles &amp; Heavy Plant - Vehicle Leasing &amp; Rental</option>
                                            <option value="Vehicles & Heavy Plant - Vehicle Maintenance & Cleaning">Vehicles &amp; Heavy Plant - Vehicle Maintenance &amp; Cleaning</option>
                                            <option value="Vehicles & Heavy Plant - Vehicles - New Cars">Vehicles &amp; Heavy Plant - Vehicles - New Cars</option>
                                            <option value="Vehicles & Heavy Plant - Vehicles - New Commercial">Vehicles &amp; Heavy Plant - Vehicles - New Commercial</option>
                                            <option value="Vehicles & Heavy Plant - Vehicles - Other Motorised">Vehicles &amp; Heavy Plant - Vehicles - Other Motorised</option>
                                            <option value="Waste Management & Landfill">Waste Management &amp; Landfill</option>
                                            <option value="Waste Management & Landfill - Consultancy - Waste">Waste Management &amp; Landfill - Consultancy - Waste</option>
                                            <option value="Waste Management & Landfill - Garbage Disposal Bins - Supply">Waste Management &amp; Landfill - Garbage Disposal Bins - Supply</option>
                                            <option value="Waste Management & Landfill - Green Waste & Mulching Services">Waste Management &amp; Landfill - Green Waste &amp; Mulching Services</option>
                                            <option value="Waste Management & Landfill - Landfill Management">Waste Management &amp; Landfill - Landfill Management</option>
                                            <option value="Waste Management & Landfill - Litter Collection">Waste Management &amp; Landfill - Litter Collection</option>
                                            <option value="Waste Management & Landfill - Recyclable Material Collection">Waste Management &amp; Landfill - Recyclable Material Collection</option>
                                            <option value="Waste Management & Landfill - Waste Collection - Effluent and Sludge">Waste Management &amp; Landfill - Waste Collection - Effluent and Sludge</option>
                                            <option value="Waste Management & Landfill - Waste Collection - Kerbside & Bins">Waste Management &amp; Landfill - Waste Collection - Kerbside &amp; Bins</option>
                                            <option value="Waste Management & Landfill - Waste Construction / Upgrade Works">Waste Management &amp; Landfill - Waste Construction / Upgrade Works</option>
                                            <option value="Water & Sewage">Water &amp; Sewage</option>
                                            <option value="Water & Sewage - Consultancy Services">Water &amp; Sewage - Consultancy Services</option>
                                            <option value="Water & Sewage - Facilities Management - Infrastructure">Water &amp; Sewage - Facilities Management - Infrastructure</option>
                                            <option value="Water & Sewage - Gross Pollutant Litter Traps">Water &amp; Sewage - Gross Pollutant Litter Traps</option>
                                            <option value="Water & Sewage - Mechanical & Electrical Works">Water &amp; Sewage - Mechanical &amp; Electrical Works</option>
                                            <option value="Water & Sewage - Pipelines - Construction">Water &amp; Sewage - Pipelines - Construction</option>
                                            <option value="Water & Sewage - Plant Construction & Upgrade Works">Water &amp; Sewage - Plant Construction &amp; Upgrade Works</option>
                                            <option value="Water & Sewage - Plant Design Works">Water &amp; Sewage - Plant Design Works</option>
                                            <option value="Water & Sewage - Plant Equipment - Supply">Water &amp; Sewage - Plant Equipment - Supply</option>
                                            <option value="Water & Sewage - Plant Maintenance Works">Water &amp; Sewage - Plant Maintenance Works</option>
                                            <option value="Water & Sewage - Pumping Stations">Water &amp; Sewage - Pumping Stations</option>
                                            <option value="Water & Sewage - Pumps - Supply of">Water &amp; Sewage - Pumps - Supply of</option>
                                            <option value="Water & Sewage - Sewerage">Water &amp; Sewage - Sewerage</option>
                                            <option value="Water & Sewage - Telemetry & SCADA & PLC Systems">Water &amp; Sewage - Telemetry &amp; SCADA &amp; PLC Systems</option>
                                            <option value="Water & Sewage - UV & Disinfection Systems">Water &amp; Sewage - UV &amp; Disinfection Systems</option>
                                            <option value="Water & Sewage - Wastewater">Water &amp; Sewage - Wastewater</option>
                                            <option value="Water & Sewage - Water Tanks - Liners">Water &amp; Sewage - Water Tanks - Liners</option>
                                            <option value="Water & Sewage - Water Tanks & Reservoirs">Water &amp; Sewage - Water Tanks &amp; Reservoirs</option>
                                            <option value="Water & Sewage - Water Treatment">Water &amp; Sewage - Water Treatment</option>
                                        </select>
                                        @error('industry-type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Address Line 1 <span>*</span></label>
                                        <input type="text" name="address-line-1" class="form-control" placeholder="House Number, Road Name"/>
                                        @error('address-line-1')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Address Line 2</label>
                                        <input type="text" name="address-line-2" class="form-control" placeholder="Block Numer or Area Name"/>
                                        @error('address-line-2')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Address Line 3</label>
                                        <input type="text" name="address-line-3" class="form-control" placeholder="District Name"/>
                                        @error('address-line-3')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Postal Code</label>
                                        <input type="text" name="postal-code" class="form-control"/>
                                        @error('postal-code')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">City</label>
                                        <input type="text" name="city" class="form-control" />
                                        @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Province/State</label>
                                        <input type="text" name="province" class="form-control" />
                                        @error('province')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Country <span>*</span></label>
                                        <select name="country" class="form-control">
                                            <option value="--">[--] </option>
                                            <option value="AF">[AF] Afghanistan</option>
                                            <option value="AL">[AL] Albania</option>
                                            <option value="DZ">[DZ] Algeria</option>
                                            <option value="AS">[AS] American Samoa</option>
                                            <option value="AD">[AD] Andorra</option>
                                            <option value="AO">[AO] Angola</option>
                                            <option value="AI">[AI] Anguilla</option>
                                            <option value="AQ">[AQ] Antarctica</option>
                                            <option value="AG">[AG] Antigua and Barbuda</option>
                                            <option value="AR">[AR] Argentina</option>
                                            <option value="AM">[AM] Armenia</option>
                                            <option value="AW">[AW] Aruba</option>
                                            <option value="AU">[AU] Australia</option>
                                            <option value="AT">[AT] Austria</option>
                                            <option value="AZ">[AZ] Azerbaijan</option>
                                            <option value="BS">[BS] Bahamas</option>
                                            <option value="BH">[BH] Bahrain</option>
                                            <option value="BD">[BD] Bangladesh</option>
                                            <option value="BB">[BB] Barbados</option>
                                            <option value="BY">[BY] Belarus</option>
                                            <option value="BE">[BE] Belgium</option>
                                            <option value="BZ">[BZ] Belize</option>
                                            <option value="BJ">[BJ] Benin</option>
                                            <option value="BM">[BM] Bermuda</option>
                                            <option value="BT">[BT] Bhutan</option>
                                            <option value="BO">[BO] Bolivia</option>
                                            <option value="BA">[BA] Bosnia and Herzegovina</option>
                                            <option value="BW">[BW] Botswana</option>
                                            <option value="BV">[BV] Bouvet Island</option>
                                            <option value="BR">[BR] Brazil</option>
                                            <option value="IO">[IO] British Indian Ocean Territory</option>
                                            <option value="BN">[BN] Brunei Darussalam</option>
                                            <option value="BG">[BG] Bulgaria</option>
                                            <option value="BF">[BF] Burkina Faso</option>
                                            <option value="BI">[BI] Burundi</option>
                                            <option selected="selected" value="KH">[KH] Cambodia</option>
                                            <option value="CM">[CM] Cameroon</option>
                                            <option value="CA">[CA] Canada</option>
                                            <option value="CV">[CV] Cape Verde</option>
                                            <option value="KY">[KY] Cayman Islands</option>
                                            <option value="CF">[CF] Central African Republic</option>
                                            <option value="TD">[TD] Chad</option>
                                            <option value="CL">[CL] Chile</option>
                                            <option value="CN">[CN] China</option>
                                            <option value="CX">[CX] Christmas Island</option>
                                            <option value="CC">[CC] Cocos (Keeling) Islands</option>
                                            <option value="CO">[CO] Colombia</option>
                                            <option value="KM">[KM] Comoros</option>
                                            <option value="CG">[CG] Congo</option>
                                            <option value="CD">[CD] Congo, the Democratic Republic of the</option>
                                            <option value="CK">[CK] Cook Islands</option>
                                            <option value="CR">[CR] Costa Rica</option>
                                            <option value="CI">[CI] Cote D'Ivoire</option>
                                            <option value="HR">[HR] Croatia</option>
                                            <option value="CU">[CU] Cuba</option>
                                            <option value="CY">[CY] Cyprus</option>
                                            <option value="CZ">[CZ] Czech Republic</option>
                                            <option value="DK">[DK] Denmark</option>
                                            <option value="DJ">[DJ] Djibouti</option>
                                            <option value="DM">[DM] Dominica</option>
                                            <option value="DO">[DO] Dominican Republic</option>
                                            <option value="EC">[EC] Ecuador</option>
                                            <option value="EG">[EG] Egypt</option>
                                            <option value="SV">[SV] El Salvador</option>
                                            <option value="GQ">[GQ] Equatorial Guinea</option>
                                            <option value="ER">[ER] Eritrea</option>
                                            <option value="EE">[EE] Estonia</option>
                                            <option value="ET">[ET] Ethiopia</option>
                                            <option value="FK">[FK] Falkland Islands (Malvinas)</option>
                                            <option value="FO">[FO] Faroe Islands</option>
                                            <option value="FJ">[FJ] Fiji</option>
                                            <option value="FI">[FI] Finland</option>
                                            <option value="FR">[FR] France</option>
                                            <option value="GF">[GF] French Guiana</option>
                                            <option value="PF">[PF] French Polynesia</option>
                                            <option value="TF">[TF] French Southern Territories</option>
                                            <option value="GA">[GA] Gabon</option>
                                            <option value="GM">[GM] Gambia</option>
                                            <option value="GE">[GE] Georgia</option>
                                            <option value="DE">[DE] Germany</option>
                                            <option value="GH">[GH] Ghana</option>
                                            <option value="GI">[GI] Gibraltar</option>
                                            <option value="GR">[GR] Greece</option>
                                            <option value="GL">[GL] Greenland</option>
                                            <option value="GD">[GD] Grenada</option>
                                            <option value="GP">[GP] Guadeloupe</option>
                                            <option value="GU">[GU] Guam</option>
                                            <option value="GT">[GT] Guatemala</option>
                                            <option value="GN">[GN] Guinea</option>
                                            <option value="GW">[GW] Guinea-Bissau</option>
                                            <option value="GY">[GY] Guyana</option>
                                            <option value="HT">[HT] Haiti</option>
                                            <option value="HM">[HM] Heard Island and Mcdonald Islands</option>
                                            <option value="VA">[VA] Holy See (Vatican City State)</option>
                                            <option value="HN">[HN] Honduras</option>
                                            <option value="HK">[HK] Hong Kong</option>
                                            <option value="HU">[HU] Hungary</option>
                                            <option value="IS">[IS] Iceland</option>
                                            <option value="IN">[IN] India</option>
                                            <option value="ID">[ID] Indonesia</option>
                                            <option value="IR">[IR] Iran, Islamic Republic of</option>
                                            <option value="IQ">[IQ] Iraq</option>
                                            <option value="IE">[IE] Ireland</option>
                                            <option value="IL">[IL] Israel</option>
                                            <option value="IT">[IT] Italy</option>
                                            <option value="JM">[JM] Jamaica</option>
                                            <option value="JP">[JP] Japan</option>
                                            <option value="JO">[JO] Jordan</option>
                                            <option value="KZ">[KZ] Kazakhstan</option>
                                            <option value="KE">[KE] Kenya</option>
                                            <option value="KI">[KI] Kiribati</option>
                                            <option value="KP">[KP] Korea, Democratic People's Republic of</option>
                                            <option value="KR">[KR] Korea, Republic of</option>
                                            <option value="KW">[KW] Kuwait</option>
                                            <option value="KG">[KG] Kyrgyzstan</option>
                                            <option value="LA">[LA] Lao People's Democratic Republic</option>
                                            <option value="LV">[LV] Latvia</option>
                                            <option value="LB">[LB] Lebanon</option>
                                            <option value="LS">[LS] Lesotho</option>
                                            <option value="LR">[LR] Liberia</option>
                                            <option value="LY">[LY] Libyan Arab Jamahiriya</option>
                                            <option value="LI">[LI] Liechtenstein</option>
                                            <option value="LT">[LT] Lithuania</option>
                                            <option value="LU">[LU] Luxembourg</option>
                                            <option value="MO">[MO] Macao</option>
                                            <option value="MK">[MK] Macedonia, the Former Yugoslav Republic of</option>
                                            <option value="MG">[MG] Madagascar</option>
                                            <option value="MW">[MW] Malawi</option>
                                            <option value="MY">[MY] Malaysia</option>
                                            <option value="MV">[MV] Maldives</option>
                                            <option value="ML">[ML] Mali</option>
                                            <option value="MT">[MT] Malta</option>
                                            <option value="MH">[MH] Marshall Islands</option>
                                            <option value="MQ">[MQ] Martinique</option>
                                            <option value="MR">[MR] Mauritania</option>
                                            <option value="MU">[MU] Mauritius</option>
                                            <option value="YT">[YT] Mayotte</option>
                                            <option value="MX">[MX] Mexico</option>
                                            <option value="FM">[FM] Micronesia, Federated States of</option>
                                            <option value="MD">[MD] Moldova, Republic of</option>
                                            <option value="MC">[MC] Monaco</option>
                                            <option value="MN">[MN] Mongolia</option>
                                            <option value="MS">[MS] Montserrat</option>
                                            <option value="MA">[MA] Morocco</option>
                                            <option value="MZ">[MZ] Mozambique</option>
                                            <option value="MM">[MM] Myanmar</option>
                                            <option value="NA">[NA] Namibia</option>
                                            <option value="NR">[NR] Nauru</option>
                                            <option value="NP">[NP] Nepal</option>
                                            <option value="NL">[NL] Netherlands</option>
                                            <option value="AN">[AN] Netherlands Antilles</option>
                                            <option value="NC">[NC] New Caledonia</option>
                                            <option value="NZ">[NZ] New Zealand</option>
                                            <option value="NI">[NI] Nicaragua</option>
                                            <option value="NE">[NE] Niger</option>
                                            <option value="NG">[NG] Nigeria</option>
                                            <option value="NU">[NU] Niue</option>
                                            <option value="NF">[NF] Norfolk Island</option>
                                            <option value="MP">[MP] Northern Mariana Islands</option>
                                            <option value="NO">[NO] Norway</option>
                                            <option value="OM">[OM] Oman</option>
                                            <option value="PK">[PK] Pakistan</option>
                                            <option value="PW">[PW] Palau</option>
                                            <option value="PS">[PS] Palestinian Territory, Occupied</option>
                                            <option value="PA">[PA] Panama</option>
                                            <option value="PG">[PG] Papua New Guinea</option>
                                            <option value="PY">[PY] Paraguay</option>
                                            <option value="PE">[PE] Peru</option>
                                            <option value="PH">[PH] Philippines</option>
                                            <option value="PN">[PN] Pitcairn</option>
                                            <option value="PL">[PL] Poland</option>
                                            <option value="PT">[PT] Portugal</option>
                                            <option value="PR">[PR] Puerto Rico</option>
                                            <option value="QA">[QA] Qatar</option>
                                            <option value="RE">[RE] Reunion</option>
                                            <option value="RO">[RO] Romania</option>
                                            <option value="RU">[RU] Russian Federation</option>
                                            <option value="RW">[RW] Rwanda</option>
                                            <option value="SH">[SH] Saint Helena</option>
                                            <option value="KN">[KN] Saint Kitts and Nevis</option>
                                            <option value="LC">[LC] Saint Lucia</option>
                                            <option value="PM">[PM] Saint Pierre and Miquelon</option>
                                            <option value="VC">[VC] Saint Vincent and the Grenadines</option>
                                            <option value="WS">[WS] Samoa</option>
                                            <option value="SM">[SM] San Marino</option>
                                            <option value="ST">[ST] Sao Tome and Principe</option>
                                            <option value="SA">[SA] Saudi Arabia</option>
                                            <option value="SN">[SN] Senegal</option>
                                            <option value="CS">[CS] Serbia and Montenegro</option>
                                            <option value="SC">[SC] Seychelles</option>
                                            <option value="SL">[SL] Sierra Leone</option>
                                            <option value="SG">[SG] Singapore</option>
                                            <option value="SK">[SK] Slovakia</option>
                                            <option value="SI">[SI] Slovenia</option>
                                            <option value="SB">[SB] Solomon Islands</option>
                                            <option value="SO">[SO] Somalia</option>
                                            <option value="ZA">[ZA] South Africa</option>
                                            <option value="GS">[GS] South Georgia and the South Sandwich Islands</option>
                                            <option value="ES">[ES] Spain</option>
                                            <option value="LK">[LK] Sri Lanka</option>
                                            <option value="SD">[SD] Sudan</option>
                                            <option value="SR">[SR] Suriname</option>
                                            <option value="SJ">[SJ] Svalbard and Jan Mayen</option>
                                            <option value="SZ">[SZ] Swaziland</option>
                                            <option value="SE">[SE] Sweden</option>
                                            <option value="CH">[CH] Switzerland</option>
                                            <option value="SY">[SY] Syrian Arab Republic</option>
                                            <option value="TW">[TW] Taiwan</option>
                                            <option value="TJ">[TJ] Tajikistan</option>
                                            <option value="TZ">[TZ] Tanzania, United Republic of</option>
                                            <option value="TH">[TH] Thailand</option>
                                            <option value="TL">[TL] Timor-Leste</option>
                                            <option value="TG">[TG] Togo</option>
                                            <option value="TK">[TK] Tokelau</option>
                                            <option value="TO">[TO] Tonga</option>
                                            <option value="TT">[TT] Trinidad and Tobago</option>
                                            <option value="TN">[TN] Tunisia</option>
                                            <option value="TR">[TR] Turkey</option>
                                            <option value="TM">[TM] Turkmenistan</option>
                                            <option value="TC">[TC] Turks and Caicos Islands</option>
                                            <option value="TV">[TV] Tuvalu</option>
                                            <option value="UG">[UG] Uganda</option>
                                            <option value="UA">[UA] Ukraine</option>
                                            <option value="AE">[AE] United Arab Emirates</option>
                                            <option value="GB">[GB] United Kingdom</option>
                                            <option value="US">[US] United States</option>
                                            <option value="UM">[UM] United States Minor Outlying Islands</option>
                                            <option value="UY">[UY] Uruguay</option>
                                            <option value="UZ">[UZ] Uzbekistan</option>
                                            <option value="VU">[VU] Vanuatu</option>
                                            <option value="VE">[VE] Venezuela</option>
                                            <option value="VN">[VN] Viet Nam</option>
                                            <option value="VG">[VG] Virgin Islands, British</option>
                                            <option value="VI">[VI] Virgin Islands, U.s.</option>
                                            <option value="WF">[WF] Wallis and Futuna</option>
                                            <option value="EH">[EH] Western Sahara</option>
                                            <option value="YE">[YE] Yemen</option>
                                            <option value="ZM">[ZM] Zambia</option>
                                            <option value="ZW">[ZW] Zimbabwe</option>
                                        </select>                                    
                                        @error('country')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Phone Number <span>*</span></label>
                                        <input type="text" name="phone-number" class="form-control" placeholder="Format: (+123) 123 123 123, 456 456 456 #1234"/>
                                        @error('phone-number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Fax Number</label>
                                        <input type="text" name="fax-number" class="form-control" placeholder="Format: (+123) 123 123 123, 456 456 456"/>
                                        @error('fax-number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">E-Mail Address <span>*</span></label>
                                        <input type="text" name="customer-email" id="customer-email" class="form-control" placeholder="Format: user1@domain.com"/>
                                        @error('customer-email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Agent <span>*</span></label>
                                        <select name="agent" id="agent" class="form-control">
                                            <option value="">Select Agent Type</option> <!-- Placeholder option -->
                                            <option value="regular">Firm</option>
                                            <option value="vip">Individual</option>
                                        </select>                                    
                                        @error('agent')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Currency <span>*</span></label>
                                        <select name="currency" id="currency" class="form-control">
                                            <option value="">Select Currency Type</option> <!-- Placeholder option -->
                                            <option value="KHR">[KHR] Khmer Riel</option>
                                            <option value="USD" selected>[USD] U.S Dollar</option>
                                        </select>       
                                        <span class="text-danger-blue">You cannot change this after signing up.</span>
                                        @error('currency')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Customer Profile <span>*</span></label>
                                        <select name="customer-profile" id="customer-profile" class="form-control">
                                            <option value="">Select Customer Profile Type</option> <!-- Placeholder option -->
                                            <option value="Firm Customers">Firm Customers</option>
                                            <option value="Firm Customers - 12 Days Advance Bill Run">Firm Customers - 12 Days Advance Bill Run</option>
                                            <option value="Individual Customers">Individual Customers</option>
                                        </select>                                    
                                        @error('customer-profile')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Invoice Template <span>*</span></label>
                                        <select name="invoice-template" id="invoice-template" class="form-control">
                                            <option value="">Select Invoice Template</option> <!-- Placeholder option -->
                                            <option value="Fast One Invoice (Firm with SA)">Fast One Invoice (Firm with SA)</option>
                                            <option value="Fast One Invoice (Firm)" selected>Fast One Invoice (Firm)</option>
                                            <option value="Fast One Invoice (Individual)">Fast One Invoice (Individual)</option>
                                        </select>                                    
                                        @error('invoice-template')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Payment Tamplate <span>*</span></label>
                                        <select name="payment-template" id="payment-template" class="form-control">
                                            <option value="Default">Default</option>
                                            <option value="FAST ONE Payment (Firm)" selected>FAST ONE Payment (Firm)</option>
                                            <option value="FAST ONE Payment (Individual)">FAST ONE Payment (Individual)</option>
                                        </select>                                      
                                        @error('payment-template')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Create Date</label>
                                        <input type="datetime-local" id="create-date" name="create-date" class="form-control"/>
                                        @error('create-date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alt. Customer Name</label>
                                        <input type="text" id="alt-customer-name" name="alt-customer-name" class="form-control" placeholder="[Customer Name] in local language"/>
                                        @error('alt-customer-name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Tax ID Number</label>
                                        <input type="text" name="tax-id-number" class="form-control" id="tax-id-number"/>
                                        @error('tax-id-number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alt. Organization</label>
                                        <input type="text" name="alt-organization" class="form-control" placeholder="[Organization] in local language"/>
                                        @error('alt-organization')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alt. Address Line 1</label>
                                        <input type="text" name="alt-address-line-1" class="form-control" placeholder="[House Numer, Road Name] in local language"/>
                                        @error('alt-address-line-1')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alt. Address Line 2</label>
                                        <input type="text" name="alt-address-line-2" class="form-control" placeholder="[Block Number or Area Name] in local language"/>
                                        @error('alt-address-line-2')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alt. Address Line 3</label>
                                        <input type="text" name="alt-address-line-3" class="form-control" placeholder="[District Name in local language]"/>
                                        @error('alt-address-line-3')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alt. City</label>
                                        <input type="text" name="alt-city" class="form-control" placeholder="[City] in local language"/>
                                        @error('alt-city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alt. Province/State</label>
                                        <input type="text" name="alt-province" class="form-control" placeholder="[Province] in local language"/>
                                        @error('alt-province')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Accept SMS? <span>*</span></label>
                                        <span class="yes-no-option">
                                            <span>
                                                <input type="radio" name="accept-sms" value="yes">
                                                Yes
                                            </span>
                                            <span>
                                                <input type="radio" name="accept-sms" value="no" checked>
                                                No
                                            </span>
                                        </span>                                 
                                        @error('accept-sms')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Accept E-Mail? <span>*</span></label>
                                        <span class="yes-no-option">
                                            <span>
                                                <input type="radio" name="accept-email" value="yes" checked>
                                                Yes
                                            </span>
                                            <span>
                                                <input type="radio" name="accept-email" value="no">
                                                No
                                            </span>
                                        </span>                                 
                                        @error('accept-email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3-btn">
                                    <button type="submit" class="btn btn-primary">Sign Up New Customer</button>
                                    <button type="clear-button" class="btn btn-danger">Clear Form</button>
                                </div>
                            </form>
                            <script>
                                // Function to format the current date and time in a format acceptable by datetime-local input
                                function setCurrentDateTime() {
                                    const now = new Date();
                                    const year = now.getFullYear();
                                    const month = String(now.getMonth() + 1).padStart(2, '0'); // Month is zero-based
                                    const day = String(now.getDate()).padStart(2, '0');
                                    const hours = String(now.getHours()).padStart(2, '0');
                                    const minutes = String(now.getMinutes()).padStart(2, '0');

                                    // Set the value of the datetime input in "YYYY-MM-DDTHH:MM" format
                                    const formattedDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;
                                    document.getElementById('create-date').value = formattedDateTime;
                                }

                                // Set current date and time on page load
                                window.onload = setCurrentDateTime;

                                const form = document.getElementById('add-cust-form');
                                const clearButton = document.getElementById('clear-button');

                                // Clear all form fields when "Clear" button is clicked
                                clearButton.addEventListener('click', function() {
                                    // Reset the form to its default state
                                    form.reset();
                                    setCurrentDateTime(); // Reset to current date and time
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </span>
    </div>

</x-testcomp>
