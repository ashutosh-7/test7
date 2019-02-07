@include('layouts.link')
<body >

  @include('layouts.navbar')

 <header>
      <img src="assests/images/1a.jpg" alt="picture" class="img-fluid" height="auto" width="auto">
  </header>

  <div class="container">

  <form class="well form-horizontal" action=" {{URL::to('/store')}}" method="POST"  id="contact_form">

    {{csrf_field ()}}
    
<fieldset>

<!-- Form Name -->


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Student No</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="stdno" placeholder="Student No" class="form-control"  type="text" required>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="name" placeholder="Name" class="form-control"  type="text" required>
    </div>
  </div>
</div>


<div class="form-group"> 
  <label class="col-md-4 control-label">Course</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="course" class="form-control selectpicker" required>
      <option value=" " >Course</option>
      <option>B.Tech</option>
      <option>M.C.A</option>
      <option >M.B.A</option>
      
      

    </select>
  </div>
</div>
</div>







<div class="form-group"> 
  <label class="col-md-4 control-label">Branch</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="branch" class="form-control selectpicker" required >
      <option value=" " >Branch</option>
      <option>CSE</option>
      <option>ME</option>
      <option>IT</option>
      <option>MCA</option>
      <option >CE</option>
      <option>EC</option>
      <option>EI</option>
      <option >EN</option>
      
      

    </select>
  </div>
</div>
</div>





<div class="form-group"> 
  <label class="col-md-4 control-label">Year</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="year" class="form-control selectpicker" required >
      <option value=" " >Year</option>
      <option>1</option>
      <option>2</option>
      <option >3</option>
      <option >4</option>
      
      

    </select>
  </div>
</div>
</div>




<div class="form-group"> 
  <label class="col-md-4 control-label">Blood Group</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="blood" class="form-control selectpicker" required>
      <option value=" " >Blood Group</option>
   
      <option>A+</option>
      <option >A-</option>
      <option >B+</option>
      <option>B-</option>
      <option>AB+</option>
      <option >AB-</option>
      <option >O+</option>
      <option>O-</option>
      
      

    </select>
  </div>
</div>
</div>














<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" required>
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(+91)" class="form-control" type="text" required>
    </div>
  </div>
</div>

<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label"> </label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="host" value="hosteller" required/> Hosteller
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="host" value="dayscholar" required /> Dayscholar
                                </label>
                            </div>
                        </div>
                    </div>

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Permanent Address</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <textarea class="form-control" name="address" placeholder="Permanent Address" required></textarea>
  </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Submit <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
  

  

    <script  src="js/index.js"></script>


</body>
</html>