<!-- Header -->
<nav class="bg-primary-green navbar px-3 py-3">
  <div class="container-fluid d-flex align-items-center justify-content-between flex-nowrap">
    <!-- Logo -->
    <a href="{{route('index')}}" class="navbar-brand p-0 flex-shrink-0">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40" style="max-width: 150px; height: auto;" />
    </a>

    <!-- Search + Date/Time (Visible only on md and up) -->
    <div class="d-none d-md-flex align-items-center flex-grow-1 mx-3" style="max-width: 500px; min-width: 0;">
      
      <!-- Search -->
      <div class="flex-grow-1">
        <input type="text" class="form-control form-control-sm border-0 rounded-pill"
               placeholder="Search Events (At least 3 letters)...">
      </div>

      <!-- Date + Time -->
      <div class="ms-3 text-white text-nowrap">
        <small id="currentDate" style="font-size: 11px;"></small><br>
        <span id="clock" class="fw-bold" style="font-size: 13px;">--:--:--</span>
      </div>
    </div>

    <!-- Buttons (Always visible, aligned right) -->
    <div class="d-flex align-items-center gap-2 ms-auto flex-shrink-0">
      <a href="{{route('login')}}" class="btn btn-outline-light btn-sm rounded-pill px-2 px-sm-3 py-1 text-nowrap">Log In</a>
      <a href="{{route('signin')}}" class="btn btn-light btn-sm rounded-pill px-2 px-sm-3 py-1 text-nowrap">Sign Up</a>
    </div>

  </div>
</nav>

<!-- Clock Script -->
<script>
  function startClock() {
    setInterval(() => {
      let now = new Date();
      let ist = new Date(now.getTime() + 5.5 * 60 * 60 * 1000);

      const dateEl = document.getElementById("currentDate");
      const timeEl = document.getElementById("clock");

      if (dateEl && timeEl) {
        dateEl.textContent = ist.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' }) + " (GMT +5:30)";
        timeEl.textContent = ist.toLocaleTimeString('en-GB');
      }
    }, 1000);
  }

  startClock();
</script>
