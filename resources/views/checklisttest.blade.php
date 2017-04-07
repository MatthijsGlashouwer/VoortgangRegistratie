@extends ('layouts.dashboard')
@section('page_heading','Checklist')

@section('section')
<div class="container">
    <div class="row">
        <div class="col-md-10">
        
            <div class="table-responsive">
            
                <table class="table table-sm table-hover">
                  <thead class="thead-default">
                  
                    <tr class="add-category-row">
                      <th style="width: 30px;">
                        <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                            <span class="glyphicon glyphicon-plus green" aria-hidden="true"></span>
                        </button> 
                      </th>
                      
                      
                      <th colspan="2">Add Checklist</th>
                      
                      <th style="width: 70px;"></th>
                    </tr>
                </thead>

                <tbody>

                  
                   <tr class="category-row">
                      <th style="width: 30px;">
                        <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                            <span class="glyphicon glyphicon-plus green" aria-hidden="true"></span>
                        </button> 
                      </th>
                      
                      <th style="width: 30px;">
                            <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </button> 
                        </th>
                      
                      <th style="text-align: center;">Checklist1: MAKE SURE EVERYONE IS CLEAR FROM MOVING PARTS AND PROCEED WITH THE FOLLOWING:</th>
                      
                      <th style="text-align: right;">
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button> 
                      </th>
                    </tr>
                  
                    <tr>
                        <td>
                            <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </button>    
                        </td>

                        <td colspan="2">Put all controls in neutral position.</td>
                        <td style="text-align: right;">
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                            </button> 
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>     
                        </td>
                    </tr>
                  
                    <tr>
                        <td>
                            <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </button>    
                        </td>

                        <td colspan="2">Start drill.</td>
                        
                        <td style="text-align: right;">
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                            </button> 
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>     
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </button>    
                        </td>

                        <td colspan="2">After warming up drill to a normal operating temperature proceed to check oil pressure and battery voltage.</td>
                        
                        <td style="text-align: right;">
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-list green-bg" aria-hidden="true"></span>
                            </button> 
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>     
                        </td>
                    </tr>
               
 
<!-- Questions Section -->

                    <tr class="success">
                        <td colspan="4">
                             <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Question
                            </button>     
                        </td>
                    </tr>

                    <tr class="warning">
                        <td colspan="3">
                            <div class="row q_row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-9">
                                    <span>Do you really need to do this?</span>
                                </div>
                               <!--  
                                <div class="col-lg-2">
                                    <div class="btn-group pull-right" role="group" aria-label="...">
                                      <button type="button" class="btn btn-danger btn-xs">Good</button>
                                      <button type="button" class="btn btn-default  btn-xs">UA</button>
                                    </div>
                                </div>
                                -->
                                
                            </div>
                        </td>
                        <td style="text-align: right;">
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>     
                        </td>
                    </tr>
                    <tr class="warning">
                        <td colspan="3">
                            <div class="row q_row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-9">
                                    <span>Do you really need to do this?</span>
                                </div>
                                <!--
                                <div class="col-lg-2">
                                    <div class="btn-group pull-right" role="group" aria-label="...">
                                      <button type="button" class="btn btn-default btn-xs">Good</button>
                                      <button type="button" class="btn btn-danger btn-xs">UA</button>
                                    </div>
                                </div>
                                -->
                            </div>
                        </td>
                        <td style="text-align: right;">
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>     
                        </td>
                    </tr>
                    
<!-- end question section -->
               
                    <tr>
                        <td>
                            <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </button>    
                        </td>

                        <td colspan="2">Visually inspect equipment for obvious oil leaks.</td>
                        
                        <td style="text-align: right;">
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                            </button> 
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>     
                        </td>
                    </tr>
                 
                   <tr class="category-row">
                      <th style="width: 30px;">
                        <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                            <span class="glyphicon glyphicon-plus green" aria-hidden="true"></span>
                        </button> 
                      </th>
                      
                      <th style="width: 30px;">
                            <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </button> 
                        </th>
                      
                      <th style="text-align: center;">Checklist 2: SHUTDOWN PROCEDURE (IN EVENT OF VISIBLE OIL LEAKS)</th>
                      
                      <th style="text-align: right;">
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button> 
                      </th>
                    </tr>
                  
                    <tr>
                        <td>
                            <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </button>    
                        </td>

                        <td colspan="2">Immediately turn off drill if a major leak is present and follow the Emergency

Spill Response Plan.</td>
                        
                        <td style="text-align: right;">
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                            </button> 
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>     
                        </td>
                    </tr> 

                    <tr>
                        <td>
                            <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </button>    
                        </td>

                        <td colspan="2">In the event of a small oil leak, allow motor to cool for 5 minutes before turning

off.</td>

                        <td style="text-align: right;">
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                            </button>  
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>     
                        </td>
                    </tr>                  
                  
                    <tr>
                        <td>
                            <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </button>    
                        </td>

                        <td colspan="2">De­energize drilling equipment prior to repairs.</td>

                        <td style="text-align: right;">
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                            </button> 
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>     
                        </td>
                    </tr>                  
                  
                    <tr>
                        <td>
                            <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </button>    
                        </td>

                        <td colspan="2">Follow proper lockout/tagout procedures to ensure equipment is safe for repair

(refer to WI­59 Safety – Lock Out, Tag Out; Surface).</td>
                        
                        <td style="text-align: right;">
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                            </button> 
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>     
                        </td>
                    </tr>                    
                  
                    <tr>
                        <td>
                            <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </button>    
                        </td>

                        <td colspan="2">Report any defects on the machine to your supervisor and include in this

report.</td>
                        
                        <td style="text-align: right;">
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                            </button> 
                            <button class="btn-view-fund btn btn-default btn-xs" type="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>     
                        </td>
                    </tr>                  
                  
                </tbody>
                </table>
    
            </div>
        </div>
    </div>    
        
    
</div>
@stop