<?php

namespace App\Models;

use CodeIgniter\Model;

class Products extends Model
{
	protected $table='Products';
	protected $primaryKey='id';

	protected $allowedFields=[
		'name',
		'description',
		'price',
		'img'
	];
}


?>