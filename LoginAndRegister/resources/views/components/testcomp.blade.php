<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Fast One - Billing System' }}</title>
    <link rel="stylesheet" href='/css/style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <nav>
            <span>
                <a href="/" class="sidebar-header">
                    <img src="/img/Fast_One_Logo_No_txt.png" alt="" class="logo">
                    Fast One
                </a>
                <span class="top-links">
                    <a href="/home" class="top-links-menu {{ Request::segment(1) == 'home' ? 'a-active' : '' }}">
                        Home
                    </a>
                    <div class="top-links-menu">
                        <a href="/customers/all-customers" class="{{ Request::segment(1) == 'customers' ? 'a-active' : '' }}">Customers</a>
                        <ul class="dropdown">
                            <div class="dd_items">
                              <li><a href="/customers/all-customers">All Customers</a></li>
                              <li><a href="/customers/add-customer">Sign Up New Customer</a></li>
                              <li><a href="/customers/add-customer-advance">Sign Up New Customer (Advance)</a></li>
                            </div>
                          </ul>
                    </div>

                    <div class="top-links-menu">
                        <a href="/reports/acc-report" class="{{ Request::segment(1) == 'reports' ? 'a-active' : '' }}">
                            Report
                        </a>
                        <ul class="dropdown">
                            <div class="dd_items">
                              <li><a href="/reports/acc-report">Account Report</a></li>
                              <li><a href="/reports/acc-status-his">Account Status History</a></li>
                              <li><a>Account Summary Report</a></li>
                              <li><a>Account Recievable Aging Report</a></li>
                              <li><a>Change Plan History</a></li>
                              <li><a>Customer Balance Report</a></li>
                              <li><a>Customer Report</a></li>
                              <li><a>Customer Summary Report</a></li>
                              <li><a>DMC - Customer Information</a></li>
                              <li><a>Invoice Report</a></li>
                              <li><a>MPTC - Revenue Share (Detailed)</a></li>
                              <li><a>MPTC - Revenue Share (Summary)</a></li>
                              <li><a>MPTC - USO and R&D Contribution (Detailed)</a></li>
                              <li><a>MPTC - USO and R&D Contribution (Summary)</a></li>
                              <li><a>Radius Current Online</a></li>
                              <li><a>Support Ticket Report</a></li>
                              <li><a>Support Ticket Summary Report</a></li>
                              <li><a>Transaction Log Report</a></li>
                            </div>
                          </ul>
                    </div>

                    @role('admin')
                    <div class="top-links-menu">
                        <a href="/administration/users"  class="{{ Request::segment(1) == 'administration' ? 'a-active' : '' }}">
                            Administration
                        </a>
                        <ul class="dropdown">
                            <div class="dd_items">
                              <li><a href="/administration/users">Users</a></li>
                              <li><a href="/administration/roles">Roles</a></li>
                              <li><a href="/administration/permissions">Permissions</a></li>
                              <li><a>Bill Run Operations</a></li>
                              <li><a>Build Instance Configuration</a></li>
                              <li><a>Manage Agents</a></li>
                              <li><a>Manage Bill Runs</a></li>
                              <li><a>Manage Customer Profiles</a></li>
                              <li><a>Manage Email Templates</a></li>
                              <li><a>Manage Invoice</a></li>
                              <li><a>Manage IP Networks</a></li>
                              <li><a>Manage Payments</a></li>
                              <li><a>Manage Print Tamplates</a></li>
                              <li><a>Manage Sale Teams</a></li>
                              <li><a>Manage Manage Tariffs</a></li>
                            </div>
                          </ul>
                    </div>
                    @endrole

                    <a href="" class="top-links-menu {{ Request::segment(1) == 'license' ? 'a-active' : '' }}" >
                        License
                    </a>

                    <div class="top-links-menu">
                        <a href="" class="{{ Request::segment(1) == 'support-tickets' ? 'a-active' : '' }}">
                            Support Tickets
                        </a>
                        <ul class="dropdown">
                            <div class="dd_items">
                              <li><a>Manage Complaints</a></li>
                              <li><a>Manage Root Causes</a></li>
                              <li><a>Manage Service Centers</a></li>
                              <li><a>Manage Service Team Members</a></li>
                              <li><a>Manage Solutions</a></li>
                              <li><a>Manage Ticket Types</a></li>
                              <li><a>Ticket Configuration</a></li>
                              <li><a>View Tickets</a></li>
                            </div>
                          </ul>
                    </div>

                    <a href="" class="top-links-menu {{ Request::segment(1) == 'compliance' ? 'a-active' : '' }}">
                        Compliance
                    </a>

                </span>
            </span>
            

        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <header class="main-head">
            <h1>{{ Request::segment(1) }}</h1>

            <span class="user">
                <span class="user-inf">
                    <div class="name"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ Auth::user()->name }}</div>
                    <form method="POST" action="{{ route('logout') }}" class="logout">
                        @csrf
                        <a href=""
                            :href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();"
                            class="log-out">

                            {{ __('Log Out') }}

                        </a>
                    </form>
                </span>
            </span>
        </header>

        <div class="main">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
