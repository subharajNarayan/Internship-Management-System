<?php
function categories(){
	return \DB::table('categories')->select('id', 'category')->distinct()->get();
}

function companies(){
	return \DB::table('companies')->select('id', 'name')->distinct()->get();
}