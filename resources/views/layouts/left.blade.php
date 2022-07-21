  <!------------------------LEFT ----------------- ---------------->
  <div class="left"> 
    <!------------------------for keeping profile and remove button for sidenav----------------- ---------------->
    <div class="image-removebox">
                          
      <a href="mypage.php" class="profile">
           <div class="profile-photo">                               
              <img src="" alt=""  class="profile-photo">   
           </div>
           <div class="handle">
              <h4> {{ auth::user()->name }}</h4>
              <h6> {{ auth()->user()->email }}</h6>
           </div>                         
       </a>

       <a href="Javascript:void(0)"  onclick="closenv()" class="remove-bar"> <i class="fa fa-remove remove"></i> </a>
</div>


<!---------------------end for keeping profile and remove button for sidenav----------------- ---------------->     
    
    
    <!------------------------SIDEBAR-------------------active--------------->
     <div class="sidebar">
                        

        <a href="{{ route('products') }}" class="menu-item active"> 
            <h3>All products</h3>
        </a>

        <a href="{{ route('create')}}" onclick="myFunction()" class="menu-item"> 
            <h3>Create Products </h3>
        </a>
    
        <!--
        <div id="myDropdown" class="dropdown-content">
           <a href="chapters.php" class="menu-item"> <h3>Add Chapter's </h3> </a>
           <a href="chapters_details.php" class="menu-item"> <h3>Chapter's details </h3> </a>
           <a href="chapters_all.php" class="menu-item"> <h3>Chapter's list </h3> </a>
         </div>

        -->


         <a href="{{ route("categories") }}" onclick="campreg()" class="menu-item">
            <h3>Categories</h3>
        </a>
            <!--
        <div id="campreg" class="dropdown-campreg">
           <a href="camp_reg.php" class="menu-item"> <h3>Boys Registration</h3> </a>
           <a href="chapters_details.php" class="menu-item"> <h3>Registered lists </h3> </a>
           <a href="chapters_all.php" class="menu-item"> <h3>Registered users details</h3> </a>
         </div>
        -->
        
        <a href="{{ route("edit")}}" class="menu-item" id="message-notifications"> 
            <h3>Edit Products</h3>
        </a>
     

        <a href=" {{ route('delete')}} " class="menu-item"> 
            <h3>Delete Products</h3>
        </a>

        <a href=" {{route("customers")}} " onclick="attend()" class="menu-item">                     
            <h3>Customers</h3>
        </a>

           <!--
        <div id="attendance"  class="dropdown-attendance">
           <a href="attendance_add.php" class="menu-item"> <h3>Add attendance</h3> </a>
           <a href="attendance_history.php" class="menu-item"> <h3>Attendance history</h3> </a>
         </div>
        -->
         <a href=" {{route('customers_details')}} " onclick="members()" class="menu-item">   
            <h3>Customers details</h3>
        </a>

       <!--
        <div id="members"  class="dropdown-members">
           <a href="members_add.php" class="menu-item"> <h3>Add members</h3> </a>
           <a href="members_history.php" class="menu-item"> <h3>Members list</h3> </a>
         </div>
           -->   
         <a href="javascript:void(0)" onclick="exams()" class="menu-item">  
            <h3>Contact Customers</h3>
        </a>

        <div id="exams" class="dropdown-exams">
           <a href="exam_add.php" class="menu-item"> <h3>Add Exam</h3> </a>
           <a href="exam_record.php" class="menu-item"> <h3>Exam Record</h3> </a>
           <a href="exams.php" class="menu-item"> <h3>Exam Details</h3> </a>
         </div>


        <a href="feedback.php" class="menu-item"> 
         <!--      <span><i class="fa fa-trash"></i></span> -->
            <h3>Send Email</h3>
        </a>
       
        <a href="events.php" onclick="darkmode()" class="menu-item"> 
       <!--    <span><i class="material-icons">color_lens</i></span> -->
            <h3>Reports & Complaints</h3>
        </a>

        <a href="edit.php" class="menu-item"> 
       <!--    <span><i class="material-icons">settings</i></span> -->
            <h3>Edit Admin Account</h3>
        </a>
       
        <a href="home.php?logout=true" class="menu-item"> 
         <!--      <span><i class="fa fa-power-off"></i></span>  -->
            <h3>Log out</h3>
        </a>
                              
       
    </div>
  </div>

    <script>

       
        

    </script>