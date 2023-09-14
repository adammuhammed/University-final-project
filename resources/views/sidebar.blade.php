<aside class="sidebar">
  <div class="sidebar-inner">
    <header class="sidebar-header">
      <button type="button" class="sidebar-burger " onclick="toggleSidebar()">
        <label for="tab-5" class="material-symbols-outlined"> menu </label></button>
    </header>
    <nav class="sidebar-nav">
      <a href="{{ route('home') }}"><button type="button"><label for="tab-6" class="material-symbols-outlined"> group </label>
        <span>User Interface</span>
      </button></a>
      <a href="{{ route('certificates_interface') }}"><button type="button"><label for="tab-7" class="material-symbols-outlined"> grading</label>
        <span style="animation-delay: 0.1s">Certificates Interface</span>
      </button></a>
      @if(Auth::user()->isAdmin)
      <a href="{{ route('accounts') }}"><button type="button"><label for="tab-11" class="material-symbols-outlined">  account_circle </label>
        <span style="animation-delay: 0.3s">Accounts</span>
      </button></a>
      @endif
    </nav>
    <footer class="sidebar-footer">
      <a href="{{ route('logout') }}"><button type="button">
        <label for="tab-12" class="material-symbols-outlined"> Logout </label>
        <a href="{{ route('logout') }}" style="color:white">Logout</a>
      </button></a>
    </footer>
  </div>
</aside>