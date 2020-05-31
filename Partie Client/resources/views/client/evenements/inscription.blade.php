@extends('layouts.client')

@section('content')
<div style="background-color:powderblue;">
<h1 style="color:red;"> Deja inscrit pour cet Evenement !</h1>;
</div>

<div class="container">
	<div class="row">
    <div style="background-color:green;">
		<h2>Detail Inscription</h2>
        </div>
        <div class="col-md-4">
        <h2><?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT * FROM evenements where id ='$ide'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[1];
            }
?></h2>
          <div class="col-md-3 col-lg-3 " align="center"> 
        <img alt=""  class="img-circle img-responsive"> </div>
            
        </div>
        <div class="col-md-8">
        <h2><?php 
        $c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT * FROM inscrits WHERE id_client ='$idi' AND id_evenement ='$ide'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[3];
            }
?></h2>
                <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                        
                                           
                                            <tr>
                                                <td>Email</td>
                                                <td><?php 
        $c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT * FROM inscrits WHERE id_client ='$idi' AND id_evenement ='$ide'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[4];
            }
?></td>
                                            </tr>
                                            </tr>
                                            <td>Telephone</td>
                                            <td>
                                            <?php 
        $c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT * FROM inscrits WHERE id_client ='$idi' AND id_evenement ='$ide'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[5];
            }
?>
                                            </td>
                                            <tr>
                                                <td>Questions</td>
                                                <td><?php 
        $c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT * FROM inscrits WHERE id_client ='$idi' AND id_evenement ='$ide'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[6];
            }
?></td>
                                            </tr>
                                             </tr>

                                    </tbody>
                                </table>
        </div>
	</div>
</div>
@endsection
