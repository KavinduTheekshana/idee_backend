	<!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('frontend/images/logo-dark.svg') }}" width="100" alt="logo icon">
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
            </div>
         </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">

            <li class="menu-label">Menu</li>

            <li class="{{ request()->is('home') ? 'mm-active' : '' }}">
                <a href="{{ route('home') }}">
                    <div class="parent-icon"><i class='bx bx-home-alt'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            <li class="{{ request()->is('categories') ? 'mm-active' : '' }}">
                <a href="{{ route('categories') }}">
                    <div class="parent-icon"><i class='bx bx-category-alt'></i>
                    </div>
                    <div class="menu-title">Categories</div>
                </a>
            </li>

            <li class="{{ request()->is('projects.add') ? 'mm-active' : '' }}">
                <a href="{{ route('projects.add') }}">
                    <div class="parent-icon"><i class='bx bx-add-to-queue' ></i>
                    </div>
                    <div class="menu-title">Add Project</div>
                </a>
            </li>
   
            {{-- <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-map-pin'></i>
                    </div>
                    <div class="menu-title">Destinations</div>
                </a>
                <ul>
                    <li> <a href="{{ route('destinations.list') }}"><i class='bx bx-radio-circle'></i>Destinations List</a>
                    </li>
                    <li> <a href="{{ route('destinations.add') }}"><i class='bx bx-radio-circle'></i>Add Destinations</a>
                    </li>
                
                </ul>
            </li> --}}

            {{-- <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-package'></i>
                    </div>
                    <div class="menu-title">Packages</div>
                </a>
                <ul>
                    <li> <a href="{{ route('package.list') }}"><i class='bx bx-radio-circle'></i>Packages List</a>
                    </li>
                    <li> <a href="{{ route('package.add') }}"><i class='bx bx-radio-circle'></i>Add Packages</a>
                    </li>
                
                </ul>
            </li> --}}

            {{-- <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-images'></i>
                    </div>
                    <div class="menu-title">Gallery</div>
                </a>
                <ul>
                    <li> <a href="{{ route('image.list') }}"><i class='bx bx-radio-circle'></i>Image List</a>
                    </li>
                    <li> <a href="{{ route('image.add') }}"><i class='bx bx-radio-circle'></i>Add Image</a>
                    </li>
                
                </ul>
            </li> --}}

            {{-- <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-message-dots'></i>
                    </div>
                    <div class="menu-title">Testionials</div>
                </a>
                <ul>
                    <li> <a href="{{ route('testimonial.list') }}"><i class='bx bx-radio-circle'></i>Testionial List</a>
                    </li>
                    <li> <a href="{{ route('testimonial.add') }}"><i class='bx bx-radio-circle'></i>Add Testionial</a>
                    </li>
                
                </ul>
            </li> --}}


            {{-- <li class="menu-label">Notifications</li> --}}


            {{-- <li>
                <a href="{{ route('bookings.list') }}">
                    <div class="parent-icon"><i class='bx bx-bookmark-alt'></i>
                    </div>
                    <div class="menu-title">Bookings</div>
                </a>
            </li> --}}

            {{-- <li>
                <a href="{{ route('contact.list') }}">
                    <div class="parent-icon"><i class='bx bxs-contact' ></i>
                    </div>
                    <div class="menu-title">Contact Form</div>
                </a>
            </li> --}}

            {{-- <li>
                <a href="{{ route('plan.list') }}">
                    <div class="parent-icon"><i class='bx bx-paper-plane' ></i>
                    </div>
                    <div class="menu-title">Tour Plans</div>
                </a>
            </li> --}}


          
            
       
        
       
        
           
        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->


    