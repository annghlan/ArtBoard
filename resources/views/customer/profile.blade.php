<!doctype html>
<html>
   <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <title>Snippet - BBBootstrap</title>
      <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
      <link href='#' rel='stylesheet'>
      <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
      <style>::-webkit-scrollbar {
         width: 8px;
         }
         /* Track */
         ::-webkit-scrollbar-track {
         background: #f1f1f1; 
         }
         /* Handle */
         ::-webkit-scrollbar-thumb {
         background: #888; 
         }
         /* Handle on hover */
         ::-webkit-scrollbar-thumb:hover {
         background: #555; 
         } .profile-head {
         transform: translateY(5rem)
         }
         .cover {
         background-image: url(https://images.unsplash.com/photo-1530305408560-82d13781b33a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);
         background-size: cover;
         background-repeat: no-repeat
         }
         body {
         background: #654ea3;
         background: linear-gradient(to right, #e96443, #904e95);
         min-height: 100vh;
         overflow-x:hidden;
         }
      </style>
   </head>
   <body className='snippet-body'>
      <div class="row py-5 px-4">
         <div class="col-md-5 mx-auto">
            <!-- Profile widget --> 
            <div class="bg-white shadow rounded overflow-hidden">
               <div class="px-4 pt-0 pb-4 cover">
                  <div class="media align-items-end profile-head">
                     <div class="profile mr-3"><img src="https://avatars.dicebear.com/api/bottts/{{$user->name}}.svg" alt="..." width="130" class="rounded mb-2 img-thumbnail"></div>
                     <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">{{$user->name}}</h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>{{$user->location}}</p>
                     </div>
                  </div>
               </div>
               
               <div class="px-4 py-3 mt-5">
                  <h5 class="mb-0">User Info:</h5>
                  <div class="p-4 rounded shadow-sm bg-light">
                     <p class="font-italic mb-0">Email: {{$user->email}}</p>
                     <p class="font-italic mb-0">Contact: {{$user->contact_no}}</p>
                     <p class="font-italic mb-0">User Type: {{$user->type}}</p>
                  </div>
               </div>
               <div class="py-4 px-4">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                     <h5 class="mb-0">My custom Design</h5>
                     <a href="#" class="btn btn-link text-muted">Show all</a> 
                  </div>
                  <div class="row">
                    <?php foreach($customs as $custom){ ?>
                     <div class="col-lg-6 mb-2 pr-lg-1"><img src='/uploads/{{$custom->image_path}}' alt="" class="img-fluid rounded shadow-sm"></div>
                     <?php }?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
      <script type='text/javascript' src='#'></script>
      <script type='text/javascript' src='#'></script>
      <script type='text/javascript' src='#'></script>
      <script type='text/javascript'>#</script>
      <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
         myLink.addEventListener('click', function(e) {
           e.preventDefault();
         });
      </script>
   </body>
</html>