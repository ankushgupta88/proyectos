<!-- sidebar nav -->
    <!-- <nav id="sidebar-nav" class="box">
        <ul class="nav nav-pills nav-stacked" style="display:block;">
            <li><a href="">Dashboard 1</a></li>
            <li><a href="#">Dashboard 2</a></li>
            <li><a href="#">Dashboard 3</a></li>
        </ul>
    </nav> -->
  <!--   <nav id="sidebar-nav" class="box">
    <div id="mySidenav" class="sidenav" style="width: 250px;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <ul class="nav nav-pills nav-stacked" style="display:block;">
            <li><a href="">Dashboard 1</a></li>
            <li><a href="#">Dashboard 2</a></li>
            <li><a href="#">Dashboard 3</a></li>
        </ul>
</div>
</nav> -->
 
   <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
         <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
            <li class="active">
               <a href="<?php $role= Session::get('userrole'); if($role=="2"){ echo url('dashboard'); } else { echo url('tutordashboard'); } ?>"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Dashboard</a>
              
            </li>

          <!--    <li class="active">
               <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Shortcut</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                  <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                  <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>
               </ul>
            </li> -->
           
            
         </ul>
       
          <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
            


            
          <!--    <li class="active">
               <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Shortcut</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                  <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                  <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>
               </ul>
            </li> -->
           
            
         </ul>
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      
      <!-- /#page-content-wrapper -->
   </div>
