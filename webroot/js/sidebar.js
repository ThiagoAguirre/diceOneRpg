// Sidebar toggle behavior
(function(){
  const SIDEBAR_KEY = 'diceone_sidebar_open';
  function $(s){ return document.querySelector(s); }

  function setOpen(open){
    const sidebar = $('.app-sidebar');
    if(!sidebar) return;
    if(open){
      sidebar.classList.add('open');
      document.body.classList.add('sidebar-open');
    } else {
      sidebar.classList.remove('open');
      document.body.classList.remove('sidebar-open');
    }
    try{ localStorage.setItem(SIDEBAR_KEY, open ? '1' : '0'); }catch(e){}
  }

  function toggle(){
    const sidebar = $('.app-sidebar');
    if(!sidebar) return;
    setOpen(sidebar.classList.contains('open') ? false : true);
  }

  // Initialize on DOM ready
  document.addEventListener('DOMContentLoaded', function(){
    const sidebar = $('.app-sidebar');
    if(!sidebar) return;

    // restore state
    try{
      const val = localStorage.getItem(SIDEBAR_KEY);
      if(val === '1'){
        setOpen(true);
      }
    }catch(e){}

    // inject a small toggle button (if not present)
    if(!sidebar.querySelector('.sidebar-toggle-btn')){
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'sidebar-toggle-btn';
      btn.title = 'Alternar menu';
      btn.innerHTML = '&#9776;';
      btn.addEventListener('click', function(e){ e.stopPropagation(); toggle(); });
      sidebar.appendChild(btn);
    }

    // allow clicking the injected toggle or pressing Escape to close on mobile
    document.addEventListener('keydown', function(e){
      if(e.key === 'Escape') setOpen(false);
    });

    // Also wire any .menu-toggle button (existing navbar burger) to toggle sidebar
    const menuToggle = document.getElementById('menu-toggle');
    if(menuToggle){
      menuToggle.addEventListener('click', function(e){ e.preventDefault(); toggle(); });
    }

    // close the sidebar when clicking outside on small screens
    document.addEventListener('click', function(e){
      const sidebarOpen = sidebar.classList.contains('open');
      if(window.innerWidth <= 900 && sidebarOpen){
        if(!sidebar.contains(e.target) && !e.target.matches('#menu-toggle')){
          setOpen(false);
        }
      }
    }, true);
  });
})();