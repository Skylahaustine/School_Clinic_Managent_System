<?php 
include "includes/connection.php";
include "theme/header.php";
if(!$_SESSION["active"]){
 header("Location: login.php");
}
else if($_SESSION["status"]!=='ADMIN') {
header("Location: login.php");
}
else
{
?>
    <div id="wrapper">

       <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="patients.php">
            <i class="fas fa-fw fa-wheelchair"></i>
            <span>Patients</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="check_up.php">
            <i class="fas fa-fw fa-check"></i>
            <span>Completed Check-up</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ongoing.php">
            <i class="fas fa-fw fa-question"></i>
            <span>Ongoing Check-up</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="medicines.php">
            <i class="fas fa-fw fa-briefcase-medical"></i>
            <span>Medicines</span></a>
        </li>

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
       <li class="nav-item">
          <a class="nav-link" href="checkdetails.php">
            <i class="fas fa-fw fa-database"></i>
            <span>Check-up Details</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="equipments.php">
            <i class="fas fa-fw fa-toolbox"></i>
            <span>Equipments</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.php">
            <i class="fas fa-fw fa-users"></i>
            <span>List of Registered</span></a>
        </li>
        </ul>
      </ul>
       <?php
}
      ?>



            <div id="content-wrapper">

        <div class="container-fluid">
  <h2>List of Medicine(s)<a href="addmedicine.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a></h2>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Medicine Id</th>
                      <th>Medicine Name</th>
                      <th>Prescription</th>
                       <th>Expiry Date</th>
                      <th>Quantity</th>
                      <th>Available</th>
                    </tr>
                  </thead>
              <?php

$query = "SELECT `med_id`,`med_name`,`prescription`,expiry_date,COUNT(`quantity`) as 'qty', SUM(`onhand`) as 'ave.' FROM `medicines` GROUP BY `meduqid`";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                             echo '<td>'. $row['med_id'].'</td>';
                             echo '<td>'. $row['med_name'].'</td>';
                              echo '<td>'. $row['prescription'].'</td>';
                              echo '<td>'. $row['expiry_date'].'</td>';
                              echo '<td>'. $row['qty'].'</td>';
                               echo '<td>'. $row['ave.'].'</td>';
                           // echo '<td> <a  type="button" class="btn btn-xs btn-warning" href="editm.php?action=edit & id='.$row['med_id'] . '"> EDIT </a> ';
                            echo '</tr> ';
                }
            ?> 
                </table>
              </div>
            </div>
            <?php include 'theme/footer.php'; ?>
