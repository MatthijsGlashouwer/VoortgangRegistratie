@extends('layouts.dashboard')
@section('page_heading','Contact')
@section('section')

<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                
       <!--     @section ('pane2_panel_title', 'Contact')
                @section ('pane2_panel_body') -->
                    
                    <!-- /.panel -->

<div class="container">
	<div class="row">
        
        
       <div class="col-md-7 ">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                     
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00000;">Erwin Lanting </h4></span>
              <span><p>Student</p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >Voornaam:</div><div class="col-sm-7 col-xs-6 ">Erwin</div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Achternaam:</div><div class="col-sm-7"> Lanting</div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Cursistenjaar:</div><div class="col-sm-7">2014</div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Geboortedatum:</div><div class="col-sm-7">8 Dec 1993</div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Geboorteplaats:</div><div class="col-sm-7">Tzum</div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Nationaliteit:</div><div class="col-sm-7">Nederlander</div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Religie:</div><div class="col-sm-7">Christelijk</div>

<div class="col-sm-5 col-xs-6 tital " >Telefoonnummer:</div><div class="col-sm-7 col-xs-6 ">06.....</div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Emailadres:</div><div class="col-sm-7 col-xs-6 ">209259@fcroc.nl</div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Portfolio:</div><div class="col-sm-7 col-xs-6 ">Voorbeeld.nl</div>
     <div class="clearfix"></div>
<div class="bot-border"></div>


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
       
       
       
                  
   </div>
</div>

 @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'pane2'))
                


                <!-- /.col-lg-8 -->
                
@stop
