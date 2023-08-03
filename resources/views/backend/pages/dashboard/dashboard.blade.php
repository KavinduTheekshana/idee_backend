<div class="page-wrapper">
    <div class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
           <div class="col">
             <div class="card radius-10 border-start border-0 border-4 border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Users</p>
                            <h4 class="my-1 text-info">{{$users}}</h4>
                            <p class="mb-0 font-13">Total Count of User Accounts</p>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto"><i class='bx bxs-user-account'></i>
                        </div>
                    </div>
                </div>
             </div>
           </div>
           <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-danger">
               <div class="card-body">
                   <div class="d-flex align-items-center">
                       <div>
                           <p class="mb-0 text-secondary">Total Categories</p>
                           <h4 class="my-1 text-danger">{{$categories}}</h4>
                           <p class="mb-0 font-13">Total Count of User Categories</p>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto"><i class='bx bx-category-alt' ></i>
                       </div>
                   </div>
               </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-success">
               <div class="card-body">
                   <div class="d-flex align-items-center">
                       <div>
                           <p class="mb-0 text-secondary">Total Projects</p>
                           <h4 class="my-1 text-success">{{$projects}}</h4>
                           <p class="mb-0 font-13">Total Count of Projects</p>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-bar-chart-alt-2' ></i>
                       </div>
                   </div>
               </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-warning">
               <div class="card-body">
                   <div class="d-flex align-items-center">
                       <div>
                           <p class="mb-0 text-secondary">Total Images</p>
                           <h4 class="my-1 text-warning">{{$galleries}}</h4>
                           <p class="mb-0 font-13">Total Count of Imagers in Gallery</p>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto"><i class='bx bxs-group'></i>
                       </div>
                   </div>
               </div>
            </div>
          </div> 
        </div><!--end row-->

    
      
        <img src="{{ asset('frontend/images/logo-dark.svg') }}" width="100%" style="padding: 100px" alt="logo icon">

    </div>
</div>