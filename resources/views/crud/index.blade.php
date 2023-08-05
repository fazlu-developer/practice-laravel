@include('include.header')


<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <form action="{{ 'insert' }}" method="post">
                @csrf
            <div class="row">
                <div class="col-6">                    
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="fname">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="lname">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">                    
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Email</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Phone</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="mobile_no">
                    </div>
                </div>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>

@include('include.footer')
