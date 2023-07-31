<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Clock (Jam) -->
      <li class="nav-item">
        <span class="nav-link" id="clock"> <!-- Clock will be displayed here -->
        </span>
      </li>
       <!-- Logout -->
       <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    </li>
    </li>
    </ul>
  </nav>

  <!-- JavaScript code for updating the clock -->
  <script>
    // Function to update the clock in real-time
    function updateClock() {
      const clockElement = document.getElementById('clock');
      const currentTime = new Date();
      const hours = currentTime.getHours().toString().padStart(2, '0');
      const minutes = currentTime.getMinutes().toString().padStart(2, '0');
      const seconds = currentTime.getSeconds().toString().padStart(2, '0');
      const timeString = hours + ':' + minutes + ':' + seconds;
      clockElement.textContent = timeString; // Use textContent to set plain text
    }

    // Update the clock every second
    setInterval(updateClock, 1000);

    // Call the function immediately to display the clock when the page loads
    updateClock();
  </script>
<?php /**PATH D:\UdaCoding\Codingan\Task 5\perpustakaan\resources\views/component/navbar.blade.php ENDPATH**/ ?>