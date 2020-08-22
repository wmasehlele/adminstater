<style>
.navbar-brand {    
    margin-right: 35px;
}
.nav-drawer {
    margin-left: 35px;
    cursor: pointer;
    padding: 5px;  
    border-radius: 50%;
    color: {{ $company_setups->font_color }};
    background-color: {{ $company_setups->background_color}};
}
.nav-drawer:hover {
    opacity: 1;
    border: 2px solid {{ $company_setups->font_color }} !important;
}
.choose-branch {
    margin-left: 15px;
    width: 200px;
    background-color: #cccccc;
    padding-right: 5px;
}
.form-control, .form-control:focus, .form-control:hover {
    box-shadow: unset;
    border: none;
    background-color: #cccccc;
    cursor: pointer;
}
.container-fluid {
    margin: 0;
    padding: 0;
    //margin: 5px;
}
.content-wrapper{
    height: 100%;
}
.menu-icons {
    width: 22px;
    height: 22px;
}
.sidenav .menu-title , 
.sidenav .menu-icons {
  color: {{ $company_setups->font_color }};
}
.logged-user {
  background-color: {{ $company_setups->background_color}};
}
.logged-user a {
  color: {{ $company_setups->font_color }};
}
.logged-user a:hover,
.logged-user a:active {
  color: {{ $company_setups->font_color }};
  background-color: {{ $company_setups->accent_color }};
}
.logged-user .dropdown-divider {
  border-color: {{ $company_setups->font_color }};
}
.module-header{
  color: {{ $company_setups->font_color }};
  background-color: {{ $company_setups->background_color }};
}



/* The side navigation menu */
.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 57px; /* Stay at the top */
    left: 0;
    background-color: {{ $company_setups->background_color}}; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
  }
  
  /* The navigation menu links */
  .sidenav a {
    padding: 8px 8px 8px 25px;
    margin: 10px ;
    text-decoration: none;
    font-size: 16px;
    display: block;
    transition: 0.3s;
    border-radius: 0.25rem
  }
  
  .active-menu-item {
    color: {{ $company_setups->font_color }};
    background-color: {{ $company_setups->accent_color }};
  }

  /* When you mouse over the navigation links, change their color */
  .sidenav a:hover,  .sidenav a:active {
    color: {{ $company_setups->font_color }};
    background-color: {{ $company_setups->accent_color }};
  }
  
  /* Position and style the close button (top right corner) */
  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }
  
  /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
  #app {
    transition: margin-left .5s;
    padding: 20px;
  }
  
  /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
</style>