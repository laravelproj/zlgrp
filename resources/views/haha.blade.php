

@extends('layout')
@section('content')
<br><br>
  <center>  <img src="http://i1.kwejk.pl/k/obrazki/2011/08/298ec8d2ebf54186d25f298c988ddd23.gif" alt="troll" /></center>
  
  
  
  <br>
  <br>
     <html><table border="3" cellpadding="10">
             
             <caption>SESSIONS</caption>
             
             
	<tr align="center" valign="middle"><th> ID  </th>	<th>LAST ACTIVITY </th></tr>
       
  
  @foreach ($sessions as $session)
 
<tr><td> <?php echo $session['id'] ?> </td>	<td><?php echo $session['last_activity'] ?></td> 
  @endforeach
    
  </tr>
</table></html>
    
@stop
