<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

          <li class=" nav-item"><a href="{{url('/dashboard')}}"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a>
          </li>

         <!--   <li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Basic Forms</span></a>
          </li>
 -->

        

         <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Invoice</span></a>
            <ul class="menu-content">
              <li><a href="{{url('/invoice/add')}}" data-i18n="nav.page_layouts.1_column" class="menu-item">New Invoice</a>
              </li>

              <li><a href="{{url('/invoice/manage')}}" data-i18n="nav.page_layouts.2_columns" class="menu-item">Manage Invoice</a>
              </li>
            </ul>
          </li>



           <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Products</span></a>
            <ul class="menu-content">
              <li><a href="{{url('/product/add-product')}}" data-i18n="nav.page_layouts.1_column" class="menu-item">Add Product</a>
              </li>

              <li><a href="{{url('/product/manage')}}" data-i18n="nav.page_layouts.2_columns" class="menu-item">Manage Product</a>
              </li>
            </ul>
          </li>



          <li class=" nav-item"><a href="{{url('/brands')}}"><i class="icon-home3"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Brands</span></a>
        </li>


         <li class=" nav-item"><a href="{{url('/category')}}"><i class="icon-stack-2"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Categories</span></a>
        </li>



          <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Customer</span></a>
            <ul class="menu-content">
              <li><a href="{{url('/customers/add')}}" data-i18n="nav.page_layouts.1_column" class="menu-item">Add Customer</a>
              </li>

              <li><a href="{{url('/customers/manage')}}" data-i18n="nav.page_layouts.2_columns" class="menu-item">Manage Customer</a>
              </li>
            </ul>
          </li>



          <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Purchase</span></a>
            <ul class="menu-content">
              <li><a href="{{url('/purchase/add')}}" data-i18n="nav.page_layouts.1_column" class="menu-item">Add Purchase</a>
              </li>

              <li><a href="{{url('/purchase/manage')}}" data-i18n="nav.page_layouts.2_columns" class="menu-item">Manage Purchase</a>
              </li>
            </ul>
          </li>


            <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Stock</span></a>
            <ul class="menu-content">
              <li><a href="layout-1-column.html" data-i18n="nav.page_layouts.1_column" class="menu-item">Stock Report</a>
              </li>

              <li><a href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns" class="menu-item">Stock Report (Product Wise)</a>
              </li>
            </ul>
          </li>








        <li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Sales Reports</span></a>
        </li>


         <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Purchase Report</span></a>
            <ul class="menu-content">
              <li><a href="layout-1-column.html" data-i18n="nav.page_layouts.1_column" class="menu-item">Add Company</a>
              </li>

              <li><a href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns" class="menu-item">Manage Company</a>
              </li>
            </ul>
          </li>


            <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Bank</span></a>
            <ul class="menu-content">
              <li><a href="{{url('/bank/add')}}" data-i18n="nav.page_layouts.1_column" class="menu-item">Manage Bank</a>
              </li>

              <li><a href="{{url('/bank/transaction')}}" data-i18n="nav.page_layouts.2_columns" class="menu-item">Bank transaction</a>
              </li>
            </ul>
          </li>


           


            <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Software Settings</span></a>
            <ul class="menu-content">
              <li><a href="layout-1-column.html" data-i18n="nav.page_layouts.1_column" class="menu-item">Add user</a>
              </li>

              <li><a href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns" class="menu-item">Manage user</a>
              </li>

              <li><a href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns" class="menu-item">Settings</a>
              </li>

            </ul>
          </li>


        
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>