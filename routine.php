<?php
$one=1;
$two=2;
$three=3;
$four=4;
$five=5;
$six=6;
$seven=7;
$eight=8;
$a=array(
		$mon=array($one,$two,$three,$four,$five,$six,$seven,$eight),                //idk why.... not req maybe
		$tue=array($one,$two,$three,$four,$five,$six,$seven,$eight),
		$wed=array($one,$two,$three,$four,$five,$six,$seven,$eight),
		$thu=array($one,$two,$three,$four,$five,$six,$seven,$eight),
		$fri=array($one,$two,$three,$four,$five,$six,$seven,$eight),
		$sat=array($one,$two,$three,$four,$five,$six,$seven,$eight)
					
					
);
$flag=false;
$days=array('MON','TUE','WED','THU','FRI','SAT');
$sub=array('break','data structures','c++','mefa','dld','mfcs','ethics','lab1','lab2','lab3');
$jx=array(0,1,5);
function init($a)
{
for($i=0;$i<6;$i++)   //add random variable
{
	for($j=0;$j<8;$j++)
	{																															//this works
		if($j==4)
		{
			$a[$i][$j]=0;
		}
		else
		$a[$i][$j]=-1;
		
	}
}
return $a;
}


function add_lab($x,$a,$jx)
{
	
	
		$i=mt_rand(0,5);
		$j=$jx[array_rand($jx,1)];
		$count=0;
		while($count<1)
		{
			if($a[$i][$j]==-1 AND $a[$i][$j+1]==-1 AND $a[$i][$j+2]==-1 )
			{
				$a[$i][$j]=$x;
				$a[$i][$j+1]=$x;
				$a[$i][$j+2]=$x;
				$count=1;
			
			}
		}	
		
	
		return $a;
}

function add_sub($x,$a)
{

	$count=0;
	while($count<5)
	{
		$i=mt_rand(0,5);
		$j=mt_rand(0,7);
		if($a[$i][$j]==-1)
		{
			$a[$i][$j]=$x;
			$count++;
		}
		
	}
	return $a;
}






$a=init($a);
if ($flag==false)
{
	$a=add_lab(7,$a,$jx);
	$a=add_lab(8,$a,$jx);
	$a=add_lab(9,$a,$jx);
	$flag=true;
}
if($flag==true)
{
	$a=add_sub(1,$a);
	$a=add_sub(2,$a);
	$a=add_sub(3,$a);
	$a=add_sub(4,$a);
	$a=add_sub(5,$a);
	$a=add_sub(6,$a);
}
echo "Time table<br><table border=1><tr><th></th><th>I</th><th>II</th><th>III</th><th>IV</th><th>BREAK</th><th>V</th><th>VI</th><th>VI</th></tr>";

for($i=0;$i<6;$i++)   //add random variable
{
	echo "<tr><td>$days[$i]</td>";
	for($j=0;$j<8;$j++)
	{
		if ($a[$i][$j]==-1)
			echo "<td>not assigned</td>";
		else
			echo "<td>".$sub[$a[$i][$j]]."</td>";
	
	}
	echo "</tr>";
}
echo "</table>";            //editing array worked



?>