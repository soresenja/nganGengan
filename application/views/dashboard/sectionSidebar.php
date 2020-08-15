<nav id="sidebar">
    <div class="sidebar-header text-center">
        <h3>nganGengan</h3>
    </div>
    <ul class="list-unstyled components">
        <li>
            <a href="<?=base_url();?>DashboardController"><i class="fa fa-dashboard mx-2"></i>Dashboard</a>
        </li>
        <li>
            <a href="<?=base_url();?>ProductController"><i class="fa fa-dropbox mx-2"></i>Product</a>
        </li>
        <li>
            <a href="#transaction" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-shopping-cart mx-2"></i>Transaction</a>
            <ul class="collapse list-unstyled" id="transaction">
                <li>
                    <a href="<?=base_url();?>TransactionController"><i class="fa fa-tasks mx-2"></i>Transaction</a>
                </li>
                <li>
                    <a href="<?=base_url();?>TransactionController/Detail"><i class="fa fa-sticky-note mx-2"></i>Detail Transaction</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?=base_url();?>UnitController"><i class="fa fa-filter mx-2"></i>Unit</a>
        </li>
        <li>
            <a href="<?=base_url();?>FaqController"><i class="fa fa-question mx-2"></i>Faq</a>
        </li>
        <div class="container"><hr></div>
        <li>
            <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users mx-2"></i>User</a>
            <ul class="collapse list-unstyled" id="user">
                <li>
                    <a href="<?=base_url();?>UserController"><i class="fa fa-user mx-2"></i>Account</a>
                </li>
                <li>
                    <a href="<?=base_url();?>UserController/role"><i class="fa fa-cog mx-2"></i>Role</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>