<?php

	function testingYield(){
		var_dump(1);
		yield "one";
		var_dump(2);

		var_dump(3);
		yield "two";
		var_dump(4);

		var_dump(5);
		yield "three";
		var_dump(6);
	}

	
	var_dump(testingYield()->current());
