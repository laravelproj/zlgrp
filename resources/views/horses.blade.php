

@extends('hLayout')
@section('content')

  
  <br>
  <br>
  <html><table  bgcolor="#EEEEEE"  align="center" border="3" cellpadding="10">
  
  @foreach ($table as $table)
 
 <tr><td style=" width: 150px;  " align="center"> <?php echo $table['coat_color'] ?> </td>	<td><img src="<?php echo $table['picture'] ?>"style="width: 420px; height: 320px;"></td> 
  @endforeach
    
</tr>
</table></html>
    
@stop
