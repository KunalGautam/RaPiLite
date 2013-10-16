<?php
$head = "index";
include 'header.php';
?>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Status Report of Your System</h1>
        </div>
<table class="table">
        <thead>
          <tr>
            <th>Service/Item</th>
            <th>Status</th>
                     </tr>
        </thead>
        <tbody>
          <tr>
            <td>Hostname</td>
            <td><?php include 'modules/hostname.php'; ?></td>
           
          </tr>



<tr>
            <td>Network Details for eth0</td>
            <td><?php include 'modules/network.php'; ?></td>

          </tr>


<tr>
            <td>Nameserver Assigned</td>
            <td><?php include 'modules/nameserver.php'; ?></td>

          </tr>


<tr>
            <td>Uptime</td>
            <td><?php include 'modules/uptime.php'; ?></td>

          </tr>

<tr>
            <td>System Time</td>
            <td><?php include 'modules/time.php'; ?></td>

          </tr>

<tr>
            <td>System Temprature</td>
            <td><?php include 'modules/temprature.php'; ?>&deg;C</td>

          </tr>


<tr>
            <td>Internet Status</td>
            <td><?php include 'modules/internet.php'; ?></td>

          </tr>


<tr>
            <td>Disk Status</td>
            <td><?php include 'modules/diskspace.php'; ?></td>

          </tr>

<tr>
            <td>System Load</td>
            <td><?php include 'modules/load.php'; ?></td>

          </tr>

<tr>
            <td>Memory Status</td>
            <td><?php include 'modules/memory.php'; ?></td>

          </tr>


        </tbody>
      </table>
       	
      </div>
    </div>

   
<?php
include 'footer.php';
?>
