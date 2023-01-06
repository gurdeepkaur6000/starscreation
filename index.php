*<br />
**<br />
***<br />
****<br />
*****<br />
using code : <br />
<?php 
for($i=1; $i<=5; $i++)
{
	for($j=1; $j<=$i; $j++)
	{
		echo "*";
	}
	echo "<br />";
}
?>

=============================================================================================<br />


*****<br />
****<br />
***<br />
**<br />
*<br />

using code : <br />
<?php 
for($i=1; $i<=5; $i++)
{
	for($j=5; $j>=$i; $j--)
	{
		echo "*";
	}
	echo "<br />";
}
?>

=============================================================================================<br />


*****<br />
*****<br />
*****<br />
*****<br />
*****<br />

using code : <br />

<?php 
for($i=1; $i<=5; $i++)
{
	for($j=1; $j<=5; $j++)
	{
		echo "*";
	}
	echo "<br />";
}
?>

=============================================================================================<br />


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**<br />
&nbsp;&nbsp;&nbsp;&nbsp;***<br />
&nbsp;&nbsp;****<br />
*****<br />

using code : <br />

<?php 
for($i=1; $i<=5; $i++)
{
	for($j=5; $j>=$i; $j--)
	{
		echo "&nbsp;&nbsp;";
	}
	for($k=1; $k<=$i; $k++)
	{
		echo "*";
	}
	echo "<br />";
}
?>

=============================================================================================<br />

*****<br />
&nbsp;&nbsp;****<br />
&nbsp;&nbsp;&nbsp;&nbsp;***<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />

using code : <br />

<?php 
for($i=1; $i<=5; $i++)
{
	for($j=1; $j<=$i; $j++)
	{
		echo "&nbsp;&nbsp;";
	}
	for($k=5; $k>=$i; $k--)
	{
		echo "*";
	}
	echo "<br />";
}
?>