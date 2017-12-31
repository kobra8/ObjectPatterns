<?php

interface Department 
{
	public function accept(SalesReport $salesReport);
}

class FoodDepartment implements Department
{
	public function accept(SalesReport $salesReport)
	{
		$salesReport->visitFoodDep($this);
	}
}

class FurnitureDepartment implements Department
{
	public function accept(SalesReport $salesReport)
	{
		$salesReport->visitFurnitureDep($this);
	}
}

/**
* Odwiedzajacy
*/
interface SalesReport
{
	public function visitFoodDep(FoodDepartment $foodDepartment);
	public function visitFurnitureDep(FurnitureDepartment $furnitureDepartment);
}

class SalesReportForDepartment implements SalesReport
{
	public function visitFoodDep(FoodDepartment $foodDepartment)
	{
		echo 'Raport sprzedazy dla ';
		print_r($foodDepartment);
	}
	public function visitFurnitureDep(FurnitureDepartment $furnitureDepartment)
	{
		echo 'Raport sprzedazy dla ';
		print_r($furnitureDepartment);
	}
}

class CompactSalesReportForDepartment implements SalesReport
{
	public function visitFoodDep(FoodDepartment $foodDepartment)
	{
		echo 'Kompaktowy raport sprzedazy dla ';
		print_r($foodDepartment);
	}
	public function visitFurnitureDep(FurnitureDepartment $furnitureDepartment)
	{
		echo 'Kompaktowy raport sprzedazy dla ';
		print_r($furnitureDepartment);
	}
}

/**
* Klient
*/
$foodDep = new FoodDepartment();
$furnitureDep = new FurnitureDepartment();

$salesReport = new CompactSalesReportForDepartment();
$foodDep->accept($salesReport);
echo '<br>';
$furnitureDep->accept($salesReport);

?>