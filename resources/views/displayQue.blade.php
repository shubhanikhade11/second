@include('header') 
 <h1 class="margin-bottom">Report</h1> <ol class="breadcrumb 2"> <li> <a href="main.html"><i class="fa-home"></i>Home</a> </li> 
  <li class="active"> <strong>Issues</strong> </li> </ol> <br>
<script type="text/javascript">
jQuery( window ).load( function() {
var $table2 = jQuery( "#table-2" );
// Initialize DataTable
$table2.DataTable( {
"sDom": "tip",
"bStateSave": false,
"iDisplayLength": 8,
"aoColumns": [
{ "bSortable": false },
null,
null,
null,
null
],
"bStateSave": true
});
// Highlighted rows
$table2.find( "tbody input[type=checkbox]" ).each(function(i, el) {
var $this = $(el),
$p = $this.closest('tr');
$( el ).on( 'change', function() {
var is_checked = $this.is(':checked');
$p[is_checked ? 'addClass' : 'removeClass']( 'highlight' );
} );
} );
// Replace Checboxes
$table2.find( ".pagination a" ).click( function( ev ) {
replaceCheckboxes();
} );
} );
// Sample Function to add new row
var giCount = 1;
function fnClickAddRow() {
jQuery('#table-2').dataTable().fnAddData (<div class="checkbox checkbox-replace"><input type="checkbox" /></script>


<table class="table table-bordered table-striped datatable" id="table-2" style=" width: 100%; display: table; table-layout: fixed;"> <thead> <tr>  
<th class="text-center">Layer</th><th class="text-center">Level</th><th class="text-center">LPA Section</th><th class="text-center">Questions</th>  <th class="text-center">Status   </th> <th class="text-center">Action</th> </tr> </thead>

  <tbody> <tr><td> </td><td> </td><td> </td>
  <td class="text-center"></td>
   <td>
   
   </td> 
     <td class="text-center" > <a href="#" class="btn btn-default btn-sm btn-icon icon-left"> <i class="entypo-pencil"></i>
Edit</a> 

 </td>
     
 </tr> 





 </tbody> </table> </form>
 
 








@include('footer')