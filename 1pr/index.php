<?php
	require_once('Student.php');
	$stud=new Student('Sky','21','M');
	$stud->setName('Lilea');
	$stud->setAge('15');
	$stud->setSex('F');
	echo "После изменения<br/>";
	echo "Student: ", $stud->name, "<br/>Age: ",$stud->getAge(), " <br/>Sex: ", $stud->getSex(),"<hr/>";
	unset($stud);
	// здесь сработает echo деструктора
?>