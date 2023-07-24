<div id="kt_header" class="header align-items-stretch">
  <!--begin::Container-->
  <div class="container-fluid d-flex align-items-stretch justify-content-between">
    <!--begin::Aside mobile toggle-->
    <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
      <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
        <span class="svg-icon svg-icon-2x mt-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
              fill="black" />
            <path opacity="0.3"
              d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
              fill="black" />
          </svg>
        </span>
        <!--end::Svg Icon-->
      </div>
    </div>
    <!--end::Aside mobile toggle-->
    <!--begin::Mobile logo-->
    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
      <a href="./" class="d-lg-none">
        <img alt="Logo" src="./views/assets/media/logos/logo-medic.png" class="h-30px" />
      </a>
    </div>
    <!--end::Mobile logo-->
    <!--begin::Wrapper-->
    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
      <!--begin::Navbar-->
      <div class="d-flex align-items-stretch" id="kt_header_nav">
        <!--begin::Menu wrapper-->
        <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
          data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
          data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end"
          data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend"
          data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
          <!--begin::Menu-->
          <div
            class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
            id="#kt_header_menu" data-kt-menu="true">
            <div class="menu-item me-lg-1">
              <a class="menu-link active py-3" href="../../demo1/dist/index.html">
                <span class="menu-title">Dashboard</span>
              </a>
            </div>
            
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
              class="menu-item menu-lg-down-accordion me-lg-1">
              <span class="menu-link py-3">
                <span class="menu-title">Apps</span>
                <span class="menu-arrow d-lg-none"></span>
              </span>
              <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                  class="menu-item menu-lg-down-accordion">
                  <span class="menu-link py-3">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path opacity="0.3"
                            d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                            fill="black" />
                          <path
                            d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                            fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">User Management</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div
                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                      class="menu-item menu-lg-down-accordion">
                      <span class="menu-link py-3">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Users</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                        <div class="menu-item">
                          <a class="menu-link py-3" href="../../demo1/dist/apps/user-management/users/list.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Users List</span>
                          </a>
                        </div>
                        <div class="menu-item">
                          <a class="menu-link py-3" href="../../demo1/dist/apps/user-management/users/view.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">View User</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                      class="menu-item menu-lg-down-accordion">
                      <span class="menu-link py-3">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Roles</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                        <div class="menu-item">
                          <a class="menu-link py-3" href="../../demo1/dist/apps/user-management/roles/list.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Roles List</span>
                          </a>
                        </div>
                        <div class="menu-item">
                          <a class="menu-link py-3" href="../../demo1/dist/apps/user-management/roles/view.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">View Roles</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/user-management/permissions.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Permissions</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                  class="menu-item menu-lg-down-accordion">
                  <span class="menu-link py-3">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M22 7H2V11H22V7Z" fill="black" />
                          <path opacity="0.3"
                            d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                            fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Invoice Management</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div
                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                      class="menu-item menu-lg-down-accordion">
                      <span class="menu-link py-3">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Profile</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                        <div class="menu-item">
                          <a class="menu-link py-3" href="../../demo1/dist/apps/invoices/view/invoice-1.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Invoice 1</span>
                          </a>
                        </div>
                        <div class="menu-item">
                          <a class="menu-link py-3" href="../../demo1/dist/apps/invoices/view/invoice-2.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Invoice 2</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/invoices/create.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Create Invoice</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                  class="menu-item menu-lg-down-accordion">
                  <span class="menu-link py-3">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path
                            d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z"
                            fill="black" />
                          <path opacity="0.3"
                            d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z"
                            fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Support Center</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div
                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/support-center/overview.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Overview</span>
                      </a>
                    </div>
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                      class="menu-item menu-lg-down-accordion">
                      <span class="menu-link py-3">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Tickets</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                        <div class="menu-item">
                          <a class="menu-link py-3" href="../../demo1/dist/apps/support-center/tickets/list.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Ticket List</span>
                          </a>
                        </div>
                        <div class="menu-item">
                          <a class="menu-link py-3" href="../../demo1/dist/apps/support-center/tickets/view.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Ticket View</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                      class="menu-item menu-lg-down-accordion">
                      <span class="menu-link py-3">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Tutorials</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                        <div class="menu-item">
                          <a class="menu-link py-3" href="../../demo1/dist/apps/support-center/tutorials/list.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Tutorials List</span>
                          </a>
                        </div>
                        <div class="menu-item">
                          <a class="menu-link py-3" href="../../demo1/dist/apps/support-center/tutorials/post.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Tutorials Post</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/support-center/faq.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">FAQ</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/support-center/licenses.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Licenses</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/support-center/contact.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Contact Us</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                  class="menu-item menu-lg-down-accordion">
                  <span class="menu-link py-3">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path opacity="0.3"
                            d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                            fill="black" />
                          <path
                            d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                            fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Customers</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div
                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/customers/getting-started.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Getting Started</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/customers/list.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Customer Listing</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/customers/view.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Customer Details</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                  class="menu-item menu-lg-down-accordion">
                  <span class="menu-link py-3">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path
                            d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                            fill="black" />
                          <path opacity="0.3"
                            d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                            fill="black" />
                          <path opacity="0.3"
                            d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                            fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Subscriptions</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div
                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/subscriptions/getting-started.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Getting Started</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/subscriptions/list.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Subscription List</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/subscriptions/add.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Add Subscription</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/subscriptions/view.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">View Subscription</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                  class="menu-item menu-lg-down-accordion">
                  <span class="menu-link py-3">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path opacity="0.3"
                            d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                            fill="black" />
                          <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                          <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Chat</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div
                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/chat/private.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Private Chat</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/chat/group.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Group Chat</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link py-3" href="../../demo1/dist/apps/chat/drawer.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Drawer Chat</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            

          </div>
          <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
      </div>
      <!--end::Navbar-->
      <!--begin::Topbar-->
      <div class="d-flex align-items-stretch flex-shrink-0">
        <!--begin::Toolbar wrapper-->
        <div class="d-flex align-items-stretch flex-shrink-0">

          <!--begin::Quick links-->
          <div class="d-flex align-items-center ms-1 ms-lg-3">
            <!--begin::Menu wrapper-->
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
              data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
              <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
              <span class="svg-icon svg-icon-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                  <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                  <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                  <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
              <!--begin::Heading-->
              <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
                style="background-image:url('assets/media/misc/pattern-1.jpg')">
                <!--begin::Title-->
                <h3 class="text-white fw-bold mb-3">Quick Links</h3>
                <!--end::Title-->
                <!--begin::Status-->
                <span class="badge bg-primary py-2 px-3">25 pending tasks</span>
                <!--end::Status-->
              </div>
              <!--end::Heading-->
              <!--begin:Nav-->
              <div class="row g-0">
                <!--begin:Item-->
                <div class="col-6">
                  <a href="../../demo1/dist/pages/projects/budget.html"
                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                    <!--begin::Svg Icon | path: icons/duotune/finance/fin009.svg-->
                    <span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3"
                          d="M15.8 11.4H6C5.4 11.4 5 11 5 10.4C5 9.80002 5.4 9.40002 6 9.40002H15.8C16.4 9.40002 16.8 9.80002 16.8 10.4C16.8 11 16.3 11.4 15.8 11.4ZM15.7 13.7999C15.7 13.1999 15.3 12.7999 14.7 12.7999H6C5.4 12.7999 5 13.1999 5 13.7999C5 14.3999 5.4 14.7999 6 14.7999H14.8C15.3 14.7999 15.7 14.2999 15.7 13.7999Z"
                          fill="black" />
                        <path
                          d="M18.8 15.5C18.9 15.7 19 15.9 19.1 16.1C19.2 16.7 18.7 17.2 18.4 17.6C17.9 18.1 17.3 18.4999 16.6 18.7999C15.9 19.0999 15 19.2999 14.1 19.2999C13.4 19.2999 12.7 19.2 12.1 19.1C11.5 19 11 18.7 10.5 18.5C10 18.2 9.60001 17.7999 9.20001 17.2999C8.80001 16.8999 8.49999 16.3999 8.29999 15.7999C8.09999 15.1999 7.80001 14.7 7.70001 14.1C7.60001 13.5 7.5 12.8 7.5 12.2C7.5 11.1 7.7 10.1 8 9.19995C8.3 8.29995 8.79999 7.60002 9.39999 6.90002C9.99999 6.30002 10.7 5.8 11.5 5.5C12.3 5.2 13.2 5 14.1 5C15.2 5 16.2 5.19995 17.1 5.69995C17.8 6.09995 18.7 6.6 18.8 7.5C18.8 7.9 18.6 8.29998 18.3 8.59998C18.2 8.69998 18.1 8.69993 18 8.79993C17.7 8.89993 17.4 8.79995 17.2 8.69995C16.7 8.49995 16.5 7.99995 16 7.69995C15.5 7.39995 14.9 7.19995 14.2 7.19995C13.1 7.19995 12.1 7.6 11.5 8.5C10.9 9.4 10.5 10.6 10.5 12.2C10.5 13.3 10.7 14.2 11 14.9C11.3 15.6 11.7 16.1 12.3 16.5C12.9 16.9 13.5 17 14.2 17C15 17 15.7 16.8 16.2 16.4C16.8 16 17.2 15.2 17.9 15.1C18 15 18.5 15.2 18.8 15.5Z"
                          fill="black" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <span class="fs-5 fw-bold text-gray-800 mb-0">Accounting</span>
                    <span class="fs-7 text-gray-400">eCommerce</span>
                  </a>
                </div>
                <!--end:Item-->
                <!--begin:Item-->
                <div class="col-6">
                  <a href="../../demo1/dist/pages/projects/settings.html"
                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                    <span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                          d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                          fill="black" />
                        <path opacity="0.3"
                          d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                          fill="black" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <span class="fs-5 fw-bold text-gray-800 mb-0">Administration</span>
                    <span class="fs-7 text-gray-400">Console</span>
                  </a>
                </div>
                <!--end:Item-->
                <!--begin:Item-->
                <div class="col-6">
                  <a href="../../demo1/dist/pages/projects/list.html"
                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                    <span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                          d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                          fill="black" />
                        <path opacity="0.3"
                          d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                          fill="black" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <span class="fs-5 fw-bold text-gray-800 mb-0">Projects</span>
                    <span class="fs-7 text-gray-400">Pending Tasks</span>
                  </a>
                </div>
                <!--end:Item-->
                <!--begin:Item-->
                <div class="col-6">
                  <a href="../../demo1/dist/pages/projects/users.html"
                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                    <span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3"
                          d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                          fill="black" />
                        <path
                          d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                          fill="black" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <span class="fs-5 fw-bold text-gray-800 mb-0">Customers</span>
                    <span class="fs-7 text-gray-400">Latest cases</span>
                  </a>
                </div>
                <!--end:Item-->
              </div>
              <!--end:Nav-->
              <!--begin::View more-->
              <div class="py-2 text-center border-top">
                <a href="../../demo1/dist/pages/profile/activity.html"
                  class="btn btn-color-gray-600 btn-active-color-primary">View All
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                  <span class="svg-icon svg-icon-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)"
                        fill="black" />
                      <path
                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                        fill="black" />
                    </svg>
                  </span>
                  <!--end::Svg Icon--></a>
              </div>
              <!--end::View more-->
            </div>
            <!--end::Menu-->
            <!--end::Menu wrapper-->
          </div>
          <!--end::Quick links-->
          <!--begin::User-->
          <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
            <!--begin::Menu wrapper-->
            <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
              data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
              <img src="./views/assets/media/avatars/150-26.jpg" alt="user" />
            </div>
            <!--begin::Menu-->
            <div
              class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
              data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-50px me-5">
                    <img alt="Logo" src="./views/assets/media/avatars/150-26.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Username-->
                  <div class="d-flex flex-column">
                    <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                      <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                    </div>
                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                  </div>
                  <!--end::Username-->
                </div>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu separator-->
              <div class="separator my-2"></div>
              <!--end::Menu separator-->
              <!--begin::Menu item-->
              <div class="menu-item px-5">
                <a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My Profile</a>
              </div>
              <!--end::Menu item-->
              
              <!--begin::Menu item-->
              <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                <a href="#" class="menu-link px-5">
                  <span class="menu-title">My Subscription</span>
                  <span class="menu-arrow"></span>
                </a>
                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="../../demo1/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="../../demo1/dist/account/billing.html" class="menu-link px-5">Billing</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="../../demo1/dist/account/statements.html" class="menu-link px-5">Payments</a>
                  </div>
                  <!--end::Menu item-->
                  
                  <!--begin::Menu separator-->
                  <div class="separator my-2"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <div class="menu-content px-3">
                      <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked"
                          name="notifications" />
                        <span class="form-check-label text-muted fs-7">Notifications</span>
                      </label>
                    </div>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu sub-->
              </div>
              <!--end::Menu item-->

              <!--begin::Menu separator-->
              <div class="separator my-2"></div>
              <!--end::Menu separator-->

              <!--begin::Menu item-->
              <div class="menu-item px-5">
                <a href="../../demo1/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign
                  Out</a>
              </div>
              <!--end::Menu item-->
              
           
            </div>
            <!--end::Menu-->
            <!--end::Menu wrapper-->
          </div>
          <!--end::User -->
          <!--begin::Heaeder menu toggle-->
          <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
              id="kt_header_menu_mobile_toggle">
              <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
              <span class="svg-icon svg-icon-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path
                    d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                    fill="black" />
                  <path opacity="0.3"
                    d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                    fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
          </div>
          <!--end::Heaeder menu toggle-->
        </div>
        <!--end::Toolbar wrapper-->
      </div>
      <!--end::Topbar-->
    </div>
    <!--end::Wrapper-->
  </div>
  <!--end::Container-->
</div>