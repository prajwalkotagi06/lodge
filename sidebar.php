
<?php
include 'link.php';
?>
  <div class="sidebar">
    <div class="logo-details">
      
        <div class="logo_name"></div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="home.php">
            <i class="fa-solid fa-house"></i>
          <span class="links_name">Home</span>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
       <a href="booking.php">
        <i class="fa-sharp fa-solid fa-clipboard"></i>
         <span class="links_name">Booking</span>
       </a>
       <span class="tooltip">Booking</span>
     </li>
     <li>
       <a href="checkout.php">
        <i class="fa-regular fa-circle-check"></i>
         <span class="links_name">checkout</span>
       </a>
       <span class="tooltip">Checkout</span>
     </li>
     <li>
       <a href="freshup.php">
        <i class="fa-sharp fa-solid fa-spray-can-sparkles"></i>
         <span class="links_name">freshup</span>
       </a>
       <span class="tooltip">freshup</span>
     </li>
     <li>
       <a href="avlroom.php">
        <i class="fa-sharp fa-solid fa-people-roof"></i>
         <span class="links_name">Available room</span>
       </a>
       <span class="tooltip">Available room</span>
     </li>
     <li>
       <a href="order.php">
        <i class="fa-sharp fa-solid fa-bowl-food"></i>
         <span class="links_name">Food Order</span>
       </a>
       <span class="tooltip">Food Order</span>
     </li>
     <li>
       <a href="report.php">
        <i class="fa-sharp fa-solid fa-note-sticky"></i>
         <span class="links_name">Report</span>
       </a>
       <span class="tooltip">Report</span>
     </li>
     <li>
       <a href="employee.php">
        <i class="fa-solid fa-users"></i>
         <span class="links_name">Employee</span>
       </a>
       <span class="tooltip">Employee</span>
     </li>
     <li>
        <a href="Exepenses.php">
        <i class="fa-solid fa-sack-dollar"></i>
          <span class="links_name">Expenses</span>
        </a>
        <span class="tooltip">Expenses</span>
      </li>
      <li>
        <a href="room.php">
        <i class="fa-brands fa-firefox-browser"></i>
          <span class="links_name">master</span>
        </a>
        <span class="tooltip">master</span>
      </li>
      <li>
        <a href="index.php">
          <i class="fa-solid fa-right-from-bracket"></i>
          <span class="links_name">Logout</span>
        </a>
        <span class="tooltip">Logout</span>
      </li>
    </ul>
  </div>
  
  <section class="nav">
  
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });



  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>

