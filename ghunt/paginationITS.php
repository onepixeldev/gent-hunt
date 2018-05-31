<?php
	require("config.php");
 
    $search = null; 
	
	
	if(isset($_POST["search"]))
	{
		$search = $_POST["search"];
	}
	if(isset($_GET["search"]))
	{
		$search = $_GET["search"];
	}
	
	$query=mysqli_query($link,"SELECT count(id) FROM li_lm_list WHERE name LIKE '%$search%' OR negeri LIKE '%$search%' OR alamat LIKE '%$search%' OR poskod LIKE '%$search%' OR category LIKE '%$search%'");
	
	$row = mysqli_fetch_row($query);
 
	$rows = $row[0];
 
	$page_rows = 10;
 
	$last = ceil($rows/$page_rows);
 
	if($last < 1){
		$last = 1;
	}
 
	$pagenum = 1;
 
	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}
 
	if ($pagenum < 1) { 
		$pagenum = 1; 
	} 
	else if ($pagenum > $last) { 
		$pagenum = $last; 
	}
 
	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
 
	
	$nquery=mysqli_query($link,"SELECT * FROM li_lm_list WHERE name LIKE '%$search%' OR negeri LIKE '%$search%' OR alamat LIKE '%$search%' OR poskod LIKE '%$search%' OR category LIKE '%$search%' $limit");
	
	$paginationCtrls = '';
 
	if($last != 1){
 
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'&search='.$search.'" class="btn btn-default">Previous</a> &nbsp; &nbsp; ';
 
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'&search='.$search.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
			}
	    }
    }
 
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
 
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'&search='.$search.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}
 
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'&search='.$search.'" class="btn btn-default">Next</a> ';
    }
	}
 
?>