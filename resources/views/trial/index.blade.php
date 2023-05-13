


<div class = "py-5">
      <div class = "container">  
               <div class = "row justify-content-center">
                    <div class = "col-md-10">
                         <h4> User Profile </h4>
                         <div class = "underline mb-4"> </div>
                         <div>
                    <div class = "col-md-10">

                    <div class = "card shadow">
                    <div class = "card-header bg-primary">
                         <h4 class = "mb-0 text-white" > User Details  </h4>
</div>
                        

                    <div class "card-body">
                        <form  action="{{ url ('profile') }}" method="POST">
                       @csrf
                        <div class = "row">
                            <div class = "col-md-6">
                            <div class = "mb-3">
                                <label>Username</label>
                                <input type = "text" name = "name" value = "" class "form-control" />
</div>
</div>
                            <div class = "col-md-6">
                            <div class = "mb-3">
                                <label>Email Address </label>
                                <input type = "text" name = "name" value = "" class "form-control" />
</div>
</div>



                            <div class = "col-md-6">
                            <div class = "mb-3">
                                <label>Phone Number</label>
                                <input type = "text" name = "name" value = "" class "form-control" />
</div>
</div>                    
                                

                            <div class = "col-md-6">
                            <div class = "mb-3">
                                <label>Zip/Pin Code</label>
                                <input type = "text" name = "name" value = "" class "form-control" />
</div>
</div>


                            <div class = "col-md-12">
                            <div class = "mb-3">
                                <label>Address</label>
                                <textarea  name = "name" value = "" class "form-control" /></textarea>
</div>
</div>


                            <div class = "col-md-12">
                                <button type "submit" class = "btn btn-primary"> Save Data </button>


                                </div>
</div>
        
                            
                    </form>
                </div>
            </div>
        </div>
</div>
</div>
</div>
