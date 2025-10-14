<style>
  /* Border for navbar */
  .navbar {
    border-bottom: 1px solid #ddd;
  }

  /* Offcanvas styling */
  .offcanvas {
    border-left: 1px solid #ccc;
  }

  /* Hover effect for links */
  .submenu-link {
    color: #333;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
  }

  .submenu-link:hover {
    padding-left: 5px;
    color: #007bff;
  }

  /* Submenu slide toggle animation (optional JS needed for toggling) */
  .submenu {
    transition: max-height 0.3s ease;
    overflow: hidden;
  }

  /* Button toggle indicator */
  .toggle-submenu i {
    transition: transform 0.3s ease;
  }

  /* Rotate icon when submenu is open */
  .toggle-submenu.open i {
    transform: rotate(180deg);
  }
</style>

