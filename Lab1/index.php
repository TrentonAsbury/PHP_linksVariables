<?php
include 'includes/header.php';
?>

<body>

<section id="wrapper">
<header><h1>Welcome to CIS 2250</h1></header>
<h1 class="date">Current Date: &nbsp;<?php $date = date('F - d - Y');
	echo $date;?></h1>

<section id="main">
	<article id="left">
		<ul>
			<li><a href="#">Link 1</a></li>
			<li><a href="#">Link 2</a></li>
			<li><a href="#">Link 3</a></li>
			<li><a href="#">Link 4</a></li>
			<li><a href="#">Link 5</a></li>
			<li><a href="#">Link 6</a></li>
		</ul>
		
		
	</article>
	<article id="right">
		<?php
		$nam1 = 10;
		$name = "Hello my Friend";
		$month = "December";
		$interest = 7.5;
		print_r($nam1);
		echo"<br />";
		echo $interest;
		echo"<br />";
		echo("$name");
		echo"<br />";
		print("This is the month of $month");
		echo"<br />";
		
		$list = array(25, 16, 300, 550);
		$list[0] = 250;
		
		echo"<pre>";
		print_r ($list);
		echo"</pre>";
		
		echo"<br />";
		
		for($index = 0; $index < 4; $index++)
		{
			echo $list[$index] . "<br /";
		}
		
		?>
		
	</article>
	
	
	
</section>

<?php
include 'includes/footer.php';
?>