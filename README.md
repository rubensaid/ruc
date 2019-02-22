# RUC
Package para consultar numero de RUC de Peru

### Metodo de Uso
```sh
<?php
	use rubensaid/RUC
	
	$company = RUC::find($ruc);
?>
```
### Error en busquedas / sin resultados
```sh
<?php
	if(!$company)
	{
		echo "No se encontraron datos";
	}
?>
```

### Datos que se obtienen
```sh
<?php
	...
	$company = RUC::find($ruc);
	
	$company->ruc;
	$company->razon_social;
	$company->ciiu;
	$company->fecha_actividad;
	$company->condicion;
	....
?>
```

### Instalacion mediante composer
```sh
	composer require "rubensaid/ruc"
```

```sh
<?php
    require ("./vendor/autoload.php");
    ...
?>
```

### Pre-requisitos
```sh
- PHP 5.2.0 o superior
```
