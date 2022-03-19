<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>


  <div class="sidebar">
  <div class ="ms-5 mt-3"> 
  <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/80/000000/external-bank-account-online-money-service-flaticons-lineal-color-flat-icons.png"/>
  </div>
  <div class="logo-details" style="margin-bottom: 48px;">
      <h1 style = ""> Hazel Mae Muñez </h1>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Transaction</span>
          </a>
        </li>
        <li>
          
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>


  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        
        <div class="box">
        <div class ="me-5"> 
      <img src="https://img.icons8.com/color/75/000000/wallet--v1.png" />
      </div>
          <div class="right-side">
            <div class="box-topic">Available Balance</div>
            <div class="number">PHP 3,000</div>
            <div class="indicator">
            </div>
          </div>
         
        </div>
        <div class="box">
        <div class ="me-5"> 
        <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-deposit-banking-flaticons-lineal-color-flat-icons.png"/>
        </div>
        <div class="right-side">
            <div class="box-topic">Total Deposit</div>
            <div class="number">PHP 165,000</div>
            <div class="indicator">
            </div>
          </div>
          
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Transaction History</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              
              <li><a href="#">02 January 2022</a></li>
              <li><a href="#">21 January 2022</a></li>
              <li><a href="#">18 February 2022</a></li>
              <li><a href="#">28 February 2022</a></li>
              <li><a href="#">1 March 2022</a></li>
              <li><a href="#">8 March 2022</a></li>
              <li><a href="#">16 March 2022</a></li>
              <li><a href="#">18 April 2022</a></li>
              <li><a href="#">19 September 2022</a></li>

            </ul>
              <ul class="details">
              <li class="topic">Time</li>
              
              <li><a href="#">3:30:2.2 pm</a></li>
              <li><a href="#">10:30:28.12 am</a></li>
              <li><a href="#">5:16:59.3 pm</a></li>
              <li><a href="#">11:45:36.5 am</a></li>
              <li><a href="#">2:35:12.8 pm</a></li>
              <li><a href="#">8:25:48.9 pm</a></li>
              <li><a href="#">1:58:20.5 pm</a></li>
              <li><a href="#">9:16:25.7 am</a></li>
              <li><a href="#">7:26:15.5 pm</a></li>

            </ul>
            <ul class="details">
            <li class="topic">Transaction</li>
           
             <li><a href="#">Withdraw</a></li>
             <li><a href="#">Withdraw</a></li>
             <li><a href="#">Deposit</a></li>
             <li><a href="#">Withdraw</a></li>
             <li><a href="#">Balance Inquire</a></li>
             <li><a href="#">Deposit</a></li>
             <li><a href="#">Balance Inquire</a></li>
             <li><a href="#">Deposit</a></li>
             <li><a href="#">Withdraw</a></li>
          </ul>
          <ul class="details">
            
          <li class="topic">Total</li>
             <li><a href="#">PHP 8000</a></li>
             <li><a href="#">PHP 6500</a></li>
             <li><a href="#">PHP 76,000</a></li>
             <li><a href="#">PHP 2300</a></li>
             <li><a href="#">PHP 73,000</a></li>
             <li><a href="#">PHP 85,000</a></li>
             <li><a href="#">PHP 158,000</a></li>
             <li><a href="#">PHP 7,086</a></li>
             <li><a href="#">PHP 162,000</a></li>
          </ul>
          </div>
          
          <section class="transaction"> 
              <div class = "location">

              </div>




      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

