<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="/img/logo-1.png" width="130" height="120"> 
    <h5 style="margin-top:10px;">Hello, Admin</h5>
</div>

<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="dashboard" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="viewCustomers"  onclick="showCustomers()" ><i class="fa fa-users"></i> Customers</a>
    <a href="viewCategories"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Dokter</a>
    <a href="viewSizes"   onclick="showProductSizes()" ><i class="fa fa-th-list"></i> Diskon</a>    
    <a href="viewProductSizes"   onclick="showProductItems()" ><i class="fa fa-th"></i> Testimoni</a>
    <a href="viewEachOrder" onclick="showOrders()"><i class="fa fa-list"></i> Appointment</a>
    <a href="profil" onclick="showOrders()"><i class="fa fa-list"></i> Profile</a>
    <a href="<?= site_url('logout'); ?>" onclick="showOrders()"> Logout</a>
  
  <!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>


