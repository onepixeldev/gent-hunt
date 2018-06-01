<?php
	require("config.php");
 
    $location = null; 
	$catf = null;
	
	if(isset($_POST["locf"]))
	{
		$location = $_POST["locf"];
	}
	if(isset($_GET["locf"]))
	{
		$location = $_GET["locf"];
	}
	
	if(isset($_POST["catf"]))
	{
		$catf = $_POST["catf"];
	}
	if(isset($_GET["catf"]))
	{
		$catf = $_GET["catf"];
	}
	//$query=mysqli_query($link,"SELECT count(id) FROM li_lm_list WHERE name LIKE '%$search%' OR negeri LIKE '%$search%' OR alamat LIKE '%$search%' OR poskod LIKE '%$search%' OR category LIKE '%$search%' ORDER BY id ASC");
	
	if (!empty($catf) && empty($location)) {
		$query = mysqli_query($link,"SELECT count(id) FROM li_lm_list WHERE category LIKE '%$catf%' ORDER BY name ASC");
	}
	if (empty($catf) && !empty($location)) {
		$query = mysqli_query($link,"SELECT count(id) FROM li_lm_list WHERE poskod LIKE '%$location%' OR alamat LIKE '%$location%' OR negeri LIKE '%$location%' ORDER BY name ASC");
	}
	if (!empty($catf) && !empty($location)) {
		$query = mysqli_query($link,"SELECT count(id) FROM li_lm_list WHERE category LIKE '%$catf%' AND (poskod LIKE '%$location%' OR alamat LIKE '%$location%' OR negeri LIKE '%$location%') ORDER BY name ASC");
	}
	
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
 
	
	//$nquery=mysqli_query($link,"SELECT * FROM li_lm_list WHERE name LIKE '%$search%' OR negeri LIKE '%$search%' OR alamat LIKE '%$search%' OR poskod LIKE '%$search%' OR category LIKE '%$search%' $limit");
	
	if (!empty($catf) && empty($location)) {
		$nquery = mysqli_query($link,"SELECT * FROM li_lm_list WHERE category LIKE '%$catf%' ORDER BY name ASC $limit");
	}
	if (empty($catf) && !empty($location)) {
		$nquery = mysqli_query($link,"SELECT * FROM li_lm_list WHERE poskod LIKE '%$location%' OR alamat LIKE '%$location%' OR negeri LIKE '%$location%' ORDER BY name ASC $limit");
	}
	if (!empty($catf) && !empty($location)) {
		$nquery = mysqli_query($link,"SELECT * FROM li_lm_list WHERE category LIKE '%$catf%' AND (poskod LIKE '%$location%' OR alamat LIKE '%$location%' OR negeri LIKE '%$location%') ORDER BY name ASC $limit");
	}
	
	$paginationCtrls = '';
 
	if($last != 1){
 
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'&locf='.$location.'&catf='.$catf.'" class="btn btn-default">Previous</a> &nbsp; &nbsp; ';
 
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'&locf='.$location.'&catf='.$catf.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
			}
	    }
    }
 
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
 
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'&locf='.$location.'&catf='.$catf.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}
 
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'&locf='.$location.'&catf='.$catf.'" class="btn btn-default">Next</a> ';
    }
	}
 
?>