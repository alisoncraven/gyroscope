<?php

$codegen_seeds=array(
	'listview'=>array('name'=>'Base Record','desc'=>'A base record can be directly created by the user','icon'=>'base'),
	'subrecord'=>array('name'=>'Sub Record','desc'=>'A sub record has a detail view and a side list that is subordinate to a base record;<br>it can only be created within the context of a base record','icon'=>'sub'),
	'directlist'=>array('name'=>'Direct List','desc'=>'A direct list allows 1-N editing within a master view<br>without opening another tab or bridging to another base- or sub-record','icon'=>'direct'),
	'bridgelist'=>array('name'=>'Record Bridge','desc'=>'A record bridge connects the side list in a base record to another base record.<br>Record Bridge is an advanced case of Direct List','icon'=>'bridge'),
	'lookup'=>array('name'=>'Lookup List','desc'=>'Any field in a record can be linked to another entity.<br>The Lookup List ensures the proper ID resolution.','icon'=>'lookup'),
	'uploader'=>array('name'=>'Uploader','desc'=>'','icon'=>''),
	'tinymce'=>array('name'=>'Rich Text Editor','desc'=>'','icon'=>'')
);